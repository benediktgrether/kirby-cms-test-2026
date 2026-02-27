<?php
$bg = $block->background()->toFile();

?>

<section class="container mx-auto mt-32">
    <?php if ($bg): ?>
        <img
            src="<?= $bg->url() ?>"
            alt="<?= esc($bg->alt()->or('')) ?>"
            class="h-full w-full object-cover">
    <?php endif ?>

    <div class="">
        <h2 class="">
            <?= esc($block->headline()) ?>
        </h2>

        <?php if ($block->subheadline()->isNotEmtpy()): ?>
            <p>
                <?= esc($block->subheadline()) ?>
            </p>
        <?php endif ?>
        <div>
            <?= esc($block->paragraph()->kirbytext()) ?>
        </div>
    </div>
</section>