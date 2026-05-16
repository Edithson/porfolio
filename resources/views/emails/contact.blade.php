<x-mail::message>
# Nouveau message depuis le Portfolio

**Nom :** {{ $contact->name }}
**Email :** {{ $contact->email }}
**Sujet :** {{ $contact->subject ?? 'Non spécifié' }}

**Message :**
{{ $contact->message }}

<x-mail::button :url="'mailto:'.$contact->email">
Répondre
</x-mail::button>

Merci,<br>
Ton Portfolio
</x-mail::message>