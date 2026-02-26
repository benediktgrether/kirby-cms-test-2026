<nav class="mx-auto max-w-7xl px-4 py-3">
    <div class="flex items-center justify-between gap-4">
        <!-- Logo / Brand -->
        <a href="<?= $site->url() ?>" class="font-semibold text-gray-900">
            <?= $site->title()->html() ?>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-2">
            <?php foreach ($site->children()->listed() as $item): ?>
                <a
                    href="<?= $item->url() ?>"
                    <?= $item->isOpen() ? 'aria-current="page"' : '' ?>
                    class="px-3 py-2 rounded-lg text-sm font-medium transition
                   text-gray-700 hover:text-gray-900 hover:bg-gray-100
                   focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-gray-900
                   <?= $item->isOpen() ? 'bg-gray-900 text-white hover:bg-gray-900 hover:text-white' : '' ?>">
                    <?= $item->title()->html() ?>
                </a>
            <?php endforeach ?>
        </div>

        <!-- Burger Button -->
        <button
            type="button"
            class="md:hidden inline-flex items-center justify-center rounded-lg p-2
               text-gray-700 hover:bg-gray-100 focus:outline-none
               focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-gray-900"
            @click="open = !open"
            :aria-expanded="open.toString()"
            aria-controls="mobile-menu"
            aria-label="Menü öffnen">
            <!-- Icon -->
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 w-6" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 w-6" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</nav>

<!-- Overlay -->
<div
    x-show="open"
    x-cloak
    x-transition.opacity
    class="md:hidden fixed inset-0 z-40 bg-black/40"
    @click="open = false"
    aria-hidden="true"></div>

<!-- Mobile Panel -->
<div
    id="mobile-menu"
    x-show="open"
    x-cloak
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 -translate-y-2"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-2"
    class="md:hidden relative z-50 border-t border-gray-200 bg-white"
    @click.outside="open = false">
    <div class="mx-auto max-w-7xl px-4 py-3">
        <div class="flex flex-col gap-1">
            <?php foreach ($site->children()->listed() as $item): ?>
                <a
                    href="<?= $item->url() ?>"
                    <?= $item->isOpen() ? 'aria-current="page"' : '' ?>
                    class="px-3 py-3 rounded-lg text-base font-medium transition
                   text-gray-700 hover:text-gray-900 hover:bg-gray-100
                   <?= $item->isOpen() ? 'bg-gray-900 text-white hover:bg-gray-900 hover:text-white' : '' ?>"
                    @click="open = false">
                    <?= $item->title()->html() ?>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</div>