<!-- ═══════════ FOOTER ═══════════ -->
<footer class="border-t border-light-border dark:border-dark-border bg-light-bg dark:bg-dark-bg py-10 px-6">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-sm text-zinc-500 dark:text-zinc-500">
            {{ __('portfolio.footer.rights') }}
        </p>
        <div class="flex items-center gap-6 text-sm text-zinc-500 dark:text-zinc-500">
            <a href="{{ $infos['adr_git'] }}" target="_blank" rel="noopener"
                class="hover:text-zinc-900 dark:hover:text-zinc-50 transition-colors">{{ __('portfolio.footer.github') }}</a>
            <a href="{{ $infos['adr_linkedin'] }}" target="_blank" rel="noopener"
                class="hover:text-zinc-900 dark:hover:text-zinc-50 transition-colors">{{ __('portfolio.footer.linkedin') }}</a>
            <a href="mailto:{{ $infos['email'] }}"
                class="hover:text-zinc-900 dark:hover:text-zinc-50 transition-colors">{{ __('portfolio.footer.email') }}</a>
        </div>
    </div>
</footer>