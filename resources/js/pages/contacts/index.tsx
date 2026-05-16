import { Head, router, Link } from '@inertiajs/react';
import { useState, useEffect } from 'react';
import { Check, Trash2, Search, Filter } from 'lucide-react'; // Icônes

// Mise à jour de l'interface pour inclure la pagination Laravel
interface Contact {
    id: number;
    name: string;
    email: string;
    subject: string | null;
    message: string;
    is_read: boolean;
    created_at: string;
}

interface PaginationLink {
    url: string | null;
    label: string;
    active: boolean;
}

interface ContactsData {
    data: Contact[];
    links: PaginationLink[];
    current_page: number;
    last_page: number;
    total: number;
}

export default function ContactsIndex({ contacts, filters }: { contacts: ContactsData, filters: any }) {
    // États pour les filtres
    const [search, setSearch] = useState(filters.search || '');
    const [status, setStatus] = useState(filters.status || 'all');

    // Déclencheur pour appliquer les filtres (avec un petit délai pour ne pas spammer le serveur si tu tapes vite)
    useEffect(() => {
        const delayDebounceFn = setTimeout(() => {
            router.get('/contacts', { search, status: status === 'all' ? null : status }, {
                preserveState: true,
                preserveScroll: true,
                replace: true, // Évite de polluer l'historique de navigation
            });
        }, 300);

        return () => clearTimeout(delayDebounceFn);
    }, [search, status]);

    // Actions
    const handleMarkAsRead = (id: number) => {
        router.patch(`/contacts/${id}/read`, {}, { preserveScroll: true });
    };

    const handleDelete = (id: number) => {
        if (confirm('Es-tu sûr de vouloir supprimer ce message ?')) {
            router.delete(`/contacts/${id}`, { preserveScroll: true });
        }
    };

    return (
        <>
            <Head title="Demandes de contact" />

            <div className="flex h-full flex-1 flex-col gap-6 rounded-xl p-4 md:p-6">

                {/* En-tête et Filtres */}
                <div className="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <h1 className="text-2xl font-bold tracking-tight">
                        Demandes de contact <span className="text-sm font-normal text-muted-foreground ml-2">({contacts.total})</span>
                    </h1>

                    <div className="flex items-center gap-3">
                        <div className="relative">
                            <Search className="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground" />
                            <input
                                type="text"
                                placeholder="Rechercher..."
                                value={search}
                                onChange={(e) => setSearch(e.target.value)}
                                className="h-9 rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring pl-9 w-[200px]"
                            />
                        </div>
                        <div className="relative">
                            <Filter className="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground pointer-events-none" />
                            <select
                                value={status}
                                onChange={(e) => setStatus(e.target.value)}
                                className="h-9 rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring pl-9 appearance-none pr-8 cursor-pointer"
                            >
                                <option value="all">Tous</option>
                                <option value="unread">Non lus</option>
                                <option value="read">Lus</option>
                            </select>
                        </div>
                    </div>
                </div>

                {/* Liste des contacts */}
                <div className="grid gap-4">
                    {contacts.data.map((contact) => (
                        <div
                            key={contact.id}
                            className={`rounded-xl border shadow-sm p-6 flex flex-col gap-4 transition-colors ${contact.is_read ? 'bg-card/50 opacity-80' : 'bg-card border-l-4 border-l-blue-500'}`}
                        >
                            <div className="flex justify-between items-start border-b border-border pb-4">
                                <div>
                                    <h3 className="font-semibold text-lg flex items-center gap-2">
                                        {contact.name}
                                        {!contact.is_read && (
                                            <span className="px-2 py-0.5 rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200 text-xs font-medium">Nouveau</span>
                                        )}
                                    </h3>
                                    <a href={`mailto:${contact.email}`} className="text-sm text-muted-foreground hover:underline">
                                        {contact.email}
                                    </a>
                                </div>

                                {/* Boutons d'action */}
                                <div className="flex items-center gap-2">
                                    {!contact.is_read && (
                                        <button
                                            onClick={() => handleMarkAsRead(contact.id)}
                                            className="p-2 rounded-md hover:bg-muted text-muted-foreground hover:text-foreground transition-colors"
                                            title="Marquer comme lu"
                                        >
                                            <Check className="h-4 w-4" />
                                        </button>
                                    )}
                                    <button
                                        onClick={() => handleDelete(contact.id)}
                                        className="p-2 rounded-md hover:bg-destructive/10 text-muted-foreground hover:text-destructive transition-colors"
                                        title="Supprimer"
                                    >
                                        <Trash2 className="h-4 w-4" />
                                    </button>
                                </div>
                            </div>

                            <div>
                                <p className="text-sm font-medium mb-1">
                                    Sujet : <span className="font-normal text-muted-foreground">{contact.subject || 'Non spécifié'}</span>
                                </p>
                                <p className="text-sm leading-relaxed whitespace-pre-wrap bg-muted/30 p-4 rounded-lg mt-2 text-foreground">
                                    {contact.message}
                                </p>
                                <p className="text-xs text-muted-foreground mt-4 text-right">
                                    Reçu le {new Date(contact.created_at).toLocaleDateString('fr-FR', { hour: '2-digit', minute: '2-digit' })}
                                </p>
                            </div>
                        </div>
                    ))}

                    {contacts.data.length === 0 && (
                        <div className="text-center p-12 border rounded-xl border-dashed">
                            <p className="text-muted-foreground text-sm">Aucun message trouvé.</p>
                        </div>
                    )}
                </div>

                {/* Pagination Laravel générée avec Inertia */}
                {contacts.last_page > 1 && (
                    <div className="flex items-center justify-center gap-1 mt-4">
                        {contacts.links.map((link, index) => (
                            link.url ? (
                                <Link
                                    key={index}
                                    href={link.url}
                                    preserveScroll
                                    dangerouslySetInnerHTML={{ __html: link.label }}
                                    className={`px-4 py-2 text-sm border rounded-md transition-colors ${link.active
                                            ? 'bg-primary text-primary-foreground border-primary'
                                            : 'bg-card hover:bg-muted text-muted-foreground'
                                        }`}
                                />
                            ) : (
                                <span
                                    key={index}
                                    dangerouslySetInnerHTML={{ __html: link.label }}
                                    className="px-4 py-2 text-sm border rounded-md bg-muted/50 text-muted-foreground/50 cursor-not-allowed"
                                />
                            )
                        ))}
                    </div>
                )}

            </div>
        </>
    );
}