<?php snippet('header') ?>

<?php
$projects = $page->children()->listed()->sortBy('date', 'desc');
?>

<main class="mx-auto max-w-6xl px-6 py-16">

    <header class="mb-14">
        <h1 class="text-4xl font-bold mb-3"><?= $page->title()->html() ?></h1>
        <?php if ($page->text()->isNotEmpty()): ?>
            <div class="text-lg text-gray-600 max-w-3xl">
                <?= $page->text()->kirbytext() ?>
            </div>
        <?php endif; ?>
    </header>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

        <?php foreach ($projects as $project): ?>

            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition duration-300">

                <?php if ($image = $project->heroImage()->toFile()): ?>
                    <a href="<?= $project->url() ?>" class="block overflow-hidden">
                        <img
                            src="<?= $image->resize(900, 600)->url() ?>"
                            alt="<?= $project->title()->html() ?>"
                            class="w-full h-56 object-cover transition-transform duration-500 hover:scale-105">
                    </a>
                <?php endif; ?>

                <div class="p-6">

                    <?php if ($project->date()->isNotEmpty()): ?>
                        <time class="block text-sm text-gray-500 mb-2" datetime="<?= $project->date()->toDate('c') ?>">
                            <?= $project->date()->toDate('d.m.Y') ?>
                        </time>
                    <?php endif; ?>

                    <h2 class="text-xl font-semibold mb-3">
                        <a href="<?= $project->url() ?>" class="hover:underline">
                            <?= $project->title()->html() ?>
                        </a>
                    </h2>

                    <div class="text-gray-600 mb-4 line-clamp-3">
                        <?= $project->text()->excerpt(140)->html() ?>
                    </div>

                    <a href="<?= $project->url() ?>" class="inline-flex items-center text-blue-600 font-medium hover:underline">
                        View project →
                    </a>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

    <?php if ($projects->isEmpty()): ?>
        <p class="mt-10 text-gray-600">No projects yet.</p>
    <?php endif; ?>

</main>

<?php snippet('footer') ?>