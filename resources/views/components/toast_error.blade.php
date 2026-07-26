<!-- ═══════════ TOAST ═══════════ -->
<div id="toast-error"
    class="bg-zinc-900 dark:bg-zinc-50 text-white dark:text-zinc-900 rounded-xl px-6 py-4 flex items-center gap-3 shadow-2xl">
    <svg class="w-5 h-5 text-red-400 dark:text-red-600 flex-shrink-0" fill="none" stroke="currentColor"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
    </svg>
    <div>
        <p class="font-semibold text-sm">{{ __('portfolio.toasts.error_title') }}</p>
        <p class="text-xs opacity-70">{{ __('portfolio.toasts.error_desc') }}</p>
    </div>
</div>