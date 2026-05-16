<!-- ═══════════ CONTACT ═══════════ -->
<section id="contact"
    class="py-32 px-6 bg-light-surface dark:bg-dark-surface border-t border-light-border dark:border-dark-border transition-colors duration-300">
    <div class="max-w-6xl mx-auto">

        <!-- Header -->
        <div class="max-w-2xl mb-20 fade-in">
            <p class="text-xs font-semibold tracking-[0.25em] uppercase text-zinc-400 dark:text-zinc-500 mb-6">
                Ecclesiaste 11:4</p>
            <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-8 text-zinc-900 dark:text-zinc-50">
                Celui qui observe le vent<br>
                <span class="text-zinc-400 dark:text-zinc-500">ne sèmera point.</span>
            </h2>
            <p class="ecclesiaste-quote text-lg text-zinc-500 dark:text-zinc-400 pl-6">
                Et celui qui regarde les nuages ne moissonnera point.
            </p>
            <p class="mt-6 text-lg text-zinc-600 dark:text-zinc-300 leading-relaxed">
                Les conditions parfaites n'arrivent jamais. Chaque projet qui a changé quelque chose a commencé
                par une décision simple : <strong class="text-zinc-900 dark:text-zinc-100">envoyer ce premier
                    message</strong>.
                Parlons de ce que vous voulez construire.
            </p>
        </div>

        <!-- Grid form + info -->
        <div class="grid md:grid-cols-5 gap-12 md:gap-16 items-start">

            <!-- Form — 3 cols -->
            <div class="md:col-span-3 fade-in">
                <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="space-y-5" novalidate>
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div class="form-group">
                            <label
                                class="block text-xs font-semibold tracking-widest uppercase text-zinc-500 dark:text-zinc-400 mb-2"
                                for="name">Nom complet *</label>
                            <input id="name" name="name" type="text" placeholder="FONHOUO GAUS" class="form-input"
                                required>
                        </div>
                        <div class="form-group">
                            <label
                                class="block text-xs font-semibold tracking-widest uppercase text-zinc-500 dark:text-zinc-400 mb-2"
                                for="email">Adresse e-mail *</label>
                            <input id="email" name="email" type="email" placeholder="votre@email.com"
                                class="form-input" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label
                            class="block text-xs font-semibold tracking-widest uppercase text-zinc-500 dark:text-zinc-400 mb-2"
                            for="sujet">Sujet</label>
                        <input id="sujet" name="sujet" type="text"
                            placeholder="Développement d'une application web, collaboration, …" class="form-input">
                    </div>
                    <div class="form-group">
                        <label
                            class="block text-xs font-semibold tracking-widest uppercase text-zinc-500 dark:text-zinc-400 mb-2"
                            for="message">Message *</label>
                        <textarea id="message" name="message" rows="6"
                            placeholder="Décrivez votre projet, vos contraintes, vos ambitions…"
                            class="form-input resize-none" required></textarea>
                    </div>
                    <button type="submit" id="submit-btn"
                        class="w-full py-4 rounded-xl bg-zinc-900 dark:bg-zinc-50 text-white dark:text-zinc-900 font-semibold text-sm tracking-wide hover:bg-zinc-700 dark:hover:bg-zinc-200 transition-colors flex items-center justify-center gap-2">
                        <span id="btn-text">Envoyer le message</span>
                        <svg id="btn-arrow" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        <svg id="btn-spinner" class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4" />
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z" />
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Info — 2 cols -->
            <div class="md:col-span-2 space-y-10 fade-in">
                <div>
                    <p
                        class="text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500 mb-3">
                        E-mail direct</p>
                    <a href="mailto:moafogaus@gmail.com"
                        class="text-lg font-medium border-b border-zinc-900 dark:border-zinc-50 pb-1 hover:text-zinc-600 dark:hover:text-zinc-300 transition-colors break-all">
                        moafogaus@gmail.com
                    </a>
                </div>
                <div>
                    <p
                        class="text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500 mb-3">
                        Localisation</p>
                    <p class="text-zinc-700 dark:text-zinc-300">Yaoundé, Cameroun</p>
                    <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Disponible à distance — monde entier
                    </p>
                </div>
                <div>
                    <p
                        class="text-xs font-semibold tracking-widest uppercase text-zinc-400 dark:text-zinc-500 mb-4">
                        Réseaux</p>
                    <div class="flex flex-col gap-3">
                        <a href="{{ $infos['adr_linkedin'] }}" target="_blank" rel="noopener"
                            class="flex items-center gap-3 text-sm font-medium text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-50 transition-colors group">
                            <div
                                class="w-9 h-9 rounded-lg bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border flex items-center justify-center group-hover:border-zinc-400 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </div>
                            LinkedIn
                        </a>
                        <a href="{{ $infos['adr_git'] }}" target="_blank" rel="noopener"
                            class="flex items-center gap-3 text-sm font-medium text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-50 transition-colors group">
                            <div
                                class="w-9 h-9 rounded-lg bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border flex items-center justify-center group-hover:border-zinc-400 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z" />
                                </svg>
                            </div>
                            GitHub
                        </a>
                        <a href="{{ $infos['adr_youtube'] }}" target="_blank" rel="noopener"
                            class="flex items-center gap-3 text-sm font-medium text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-50 transition-colors group">
                            <div
                                class="w-9 h-9 rounded-lg bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border flex items-center justify-center group-hover:border-zinc-400 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </div>
                            YouTube
                        </a>
                        <a href="{{ $infos['adr_whatsapp'] }}" target="_blank" rel="noopener"
                            class="flex items-center gap-3 text-sm font-medium text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-50 transition-colors group">
                            <div
                                class="w-9 h-9 rounded-lg bg-white dark:bg-dark-bg border border-light-border dark:border-dark-border flex items-center justify-center group-hover:border-zinc-400 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                </svg>
                            </div>
                            WhatsApp
                        </a>
                    </div>
                </div>
                <div
                    class="p-5 rounded-xl bg-zinc-50 dark:bg-dark-bg border border-light-border dark:border-dark-border">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span
                            class="text-xs font-semibold tracking-widest uppercase text-emerald-600 dark:text-emerald-400">Disponible</span>
                    </div>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400">
                        Ouvert aux nouvelles missions freelance et aux opportunités en développement logiciel.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>