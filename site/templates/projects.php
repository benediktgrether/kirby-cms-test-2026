<?php snippet('header') ?>

<main>

    <article class="mx-auto max-w-5xl px-6 py-16">

        <h1 class="text-4xl font-bold mb-6">
            <?= $page->headline() ?>
        </h1>

        <?php if ($page->cover()->toFile()): ?>
            <img
                src="<?= $page->cover()->toFile()->url() ?>"
                class="mb-10 rounded-xl">
        <?php endif ?>

        <?= $page->intro()->kt() ?>

        <?php snippet('layouts', ['field' => $page->layout()])  ?>

    </article>

</main>

<?php snippet('footer') ?>