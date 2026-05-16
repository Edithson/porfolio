<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
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