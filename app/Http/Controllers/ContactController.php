<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();

        // 1. Filtre par recherche (nom, email ou sujet)
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        // 2. Filtre par statut (lu / non lu)
        if ($request->filled('status')) {
            $status = $request->input('status');
            if ($status === 'read') $query->where('is_read', true);
            if ($status === 'unread') $query->where('is_read', false);
        }

        // 3. Pagination (par exemple 10 par page) + conservation des paramètres d'URL
        $contacts = $query->latest()->paginate(10)->withQueryString();

        return Inertia::render('contacts/index', [
            'contacts' => $contacts,
            // On renvoie les filtres actuels pour garder l'état dans l'interface React
            'filters' => $request->only(['search', 'status']) 
        ]);
    }

    // Marquer comme lu
    public function markAsRead(Contact $contact)
    {
        $contact->update(['is_read' => true]);
        // Avec Inertia, on fait un simple retour en arrière, le frontend se mettra à jour tout seul
        return back(); 
    }

    // Supprimer
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back();
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        // Envoi du mail mis en file d'attente
        Mail::to('moafogaus@gmail.com')->send(new ContactNotification($contact));

        return response()->json([
            'success' => true, 
            'message' => 'Message envoyé avec succès !'
        ]);
    }
}