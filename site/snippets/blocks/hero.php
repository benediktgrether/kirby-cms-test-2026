<?php
$bg = $block->background()->toFile();
$variant = $block->variant()->or('primary');
?>

<section class="relative isolate overflow-hidden">
    
    <?php if ($bg): ?>
        <img 
            src="<?= $bg->url() ?>" 
            alt="<?= esc($bg->alt()->or('')) ?>"
            class="absolute inset-0 -z-10 h-full w-full object-cover"
        >
        <div class="absolute inset-0 -z-10 bg-black/50"></div>
    <?php endif ?>

    <div class="mx-auto max-w-7xl px-6 py-24 lg:py-32 text-center text-white">
        
        <h1 class="text-4xl md:text-6xl font-bold tracking-tight">
            <?= esc($block->headline()) ?>
        </h1>

        <?php if ($block->subheadline()->isNotEmpty()): ?>
            <p class="mt-6 text-lg md:text-xl text-gray-200 max-w-2xl mx-auto">
                <?= esc($block->subheadline()) ?>
            </p>
        <?php endif ?>

    </div>
</section>