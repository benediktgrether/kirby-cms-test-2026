<?php snippet('header') ?>

<main>
    <?php foreach ($page->pageBuilder()->toBlocks() as $block): ?>
        <section class="block block-<?= $block->type() ?>">
            <?= $block ?>
        </section>
    <?php endforeach ?>
</main>

<?php snippet('footer') ?>