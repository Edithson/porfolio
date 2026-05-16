<!-- ═══════════ NAV ═══════════ -->
<nav
    class="fixed w-full top-0 z-50 bg-light-bg/80 dark:bg-dark-bg/80 backdrop-blur-md border-b border-light-border dark:border-dark-border transition-colors duration-300">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="#" class="text-xl font-bold tracking-tight">G. Fonhouo</a>

        <div class="flex items-center space-x-4">
            <!-- Desktop nav -->
            <div class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="#vision"
                    class="text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-50 transition-colors">La
                    Vision</a>
                <a href="#projets"
                    class="text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-50 transition-colors">Réalisations</a>
                <a href="#about"
                    class="text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-50 transition-colors">À
                    propos</a>
                <a href="#contact"
                    class="text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-50 transition-colors">Contact</a>
            </div>

            <!-- Theme toggle -->
            <button id="theme-toggle"
                class="p-2 rounded-lg bg-light-surface dark:bg-dark-surface border border-light-border dark:border-dark-border hover:bg-zinc-200 dark:hover:bg-zinc-800 transition-colors focus:outline-none"
                aria-label="Changer le thème">
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 text-zinc-300" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd" />
                </svg>
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 text-zinc-700" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                </svg>
            </button>

            <!-- Mobile hamburger -->
            <button id="mobile-menu-btn"
                class="md:hidden p-2 rounded-lg bg-light-surface dark:bg-dark-surface border border-light-border dark:border-dark-border transition-colors focus:outline-none"
                aria-label="Menu">
                <svg id="hamburger-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="close-icon" class="hidden w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu dropdown -->
    <div id="mobile-menu"
        class="md:hidden bg-light-bg dark:bg-dark-bg border-b border-light-border dark:border-dark-border">
        <div class="max-w-6xl mx-auto px-6 py-4 flex flex-col space-y-4 text-sm font-medium">
            <a href="#vision"
                class="text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-50 transition-colors py-1"
                onclick="closeMobileMenu()">La Vision</a>
            <a href="#projets"
                class="text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-50 transition-colors py-1"
                onclick="closeMobileMenu()">Réalisations</a>
            <a href="#about"
                class="text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-50 transition-colors py-1"
                onclick="closeMobileMenu()">À propos</a>
            <a href="#contact"
                class="text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-50 transition-colors py-1"
                onclick="closeMobileMenu()">Contact</a>
        </div>
    </div>
</nav>