<!DOCTYPE html>
<html lang="fr" class="scroll-smooth dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonhouo Gaus | Analyste Programmeur</title>
    <!-- intégration de l'icone de la page -->
    <link rel="icon" href="{{ $infos['logo'] }}">

    @vite(['resources/css/home.css'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body class="font-sans bg-light-bg text-zinc-900 dark:bg-dark-bg dark:text-zinc-50 antialiased selection:bg-zinc-300 dark:selection:bg-zinc-700 selection:text-black dark:selection:text-white">

    @include('layout.nav')
    @include('sections.hero')
    @include('sections.vision')
    @include('sections.projets')
    @include('sections.about')
    @include('sections.philo')
    @include('sections.contact')
    @include('layout.footer')
    @include('components.toast_ok')
    @include('components.toast_error')

    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>