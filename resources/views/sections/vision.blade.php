<!-- ═══════════ VISION ═══════════ -->
<section id="vision"
    class="py-24 px-6 bg-light-surface dark:bg-dark-surface border-y border-light-border dark:border-dark-border transition-colors duration-300">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-start">
        <div class="fade-in">
            <h2 class="text-3xl font-bold mb-6">{{ __('portfolio.vision.title') }}</h2>
            <div class="text-lg text-zinc-600 dark:text-zinc-300 space-y-6 leading-relaxed">
                <p>
                    {{ __('portfolio.vision.p1') }}
                </p>
                <p>
                    {{ __('portfolio.vision.p2') }}
                </p>
                <p>
                    {{ __('portfolio.vision.p3_prefix') }}<span class="font-medium text-zinc-900 dark:text-zinc-100">{{ __('portfolio.vision.p3_highlight') }}</span>{{ __('portfolio.vision.p3_suffix') }}
                </p>
            </div>
        </div>

        <div
            class="fade-in bg-white dark:bg-dark-bg p-8 rounded-2xl border border-light-border dark:border-dark-border shadow-sm">
            <h3 class="text-lg font-bold mb-6 border-b border-light-border dark:border-dark-border pb-4">
                {{ __('portfolio.vision.tech_env') }}</h3>
            <div class="grid grid-cols-2 gap-y-6 text-zinc-700 dark:text-zinc-300">
                <div>
                    <p class="font-semibold text-zinc-900 dark:text-white mb-3">{{ __('portfolio.vision.backend') }}</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2"><span
                                class="w-1 h-1 rounded-full bg-zinc-400"></span>Laravel (PHP)</li>
                        <li class="flex items-center gap-2"><span
                                class="w-1 h-1 rounded-full bg-zinc-400"></span>PostgreSQL / MySQL</li>
                        <li class="flex items-center gap-2"><span
                                class="w-1 h-1 rounded-full bg-zinc-400"></span>Python</li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-zinc-900 dark:text-white mb-3">{{ __('portfolio.vision.frontend') }}</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2"><span
                                class="w-1 h-1 rounded-full bg-zinc-400"></span>ReactJS</li>
                        <li class="flex items-center gap-2"><span
                                class="w-1 h-1 rounded-full bg-zinc-400"></span>TailwindCSS</li>
                        <li class="flex items-center gap-2"><span
                                class="w-1 h-1 rounded-full bg-zinc-400"></span>JavaScript</li>
                    </ul>
                </div>
                <div class="col-span-2 pt-2 border-t border-light-border dark:border-dark-border">
                    <p class="font-semibold text-zinc-900 dark:text-white mb-3">{{ __('portfolio.vision.infrastructure') }}</p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2"><span
                                class="w-1 h-1 rounded-full bg-zinc-400"></span>{{ __('portfolio.vision.vps_dns') }}</li>
                        <li class="flex items-center gap-2"><span
                                class="w-1 h-1 rounded-full bg-zinc-400"></span>{{ __('portfolio.vision.linux_deploy') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>