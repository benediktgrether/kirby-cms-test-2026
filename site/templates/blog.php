<?php snippet('header') ?>

<?php
// Read tag from URL: /blog/tag:design
$tag = param('tag');

// Base collection
$articles = $page->children()->listed()->sortBy('date', 'desc');

// Filter if tag is present
if ($tag) {
    $articles = $articles->filterBy('tags', $tag, ',');
}
?>

<main class="blog" role="main">

    <section class="container mx-auto max-w-6xl px-6 mt-24">

        <header class="mb-12">

            <h1 class="text-4xl font-bold mb-2">
                <?= $page->title()->html() ?>
            </h1>

            <?php if ($tag): ?>
                <p class="text-gray-600 mb-4">
                    Showing posts tagged
                    <span class="font-semibold">#<?= esc($tag) ?></span>

                    <a href="<?= $page->url() ?>"
                        class="ml-3 text-blue-600 hover:underline">
                        Reset filter
                    </a>
                </p>
            <?php endif ?>

        </header>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

            <?php foreach ($articles as $article): ?>

                <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition">

                    <?php if ($image = $article->heroImage()->toFile()): ?>

                        <a href="<?= $article->url() ?>">
                            <img
                                src="<?= $image->resize(800, 500)->url() ?>"
                                alt="<?= $article->title()->html() ?>"
                                class="w-full h-56 object-cover" />
                        </a>

                    <?php endif ?>

                    <div class="p-6">

                        <h2 class="text-xl font-semibold mb-3">
                            <a href="<?= $article->url() ?>" class="hover:underline">
                                <?= $article->title()->html() ?>
                            </a>
                        </h2>

                        <div class="text-gray-600 mb-4">
                            <?= $article->intro()->kirbytext() ?>
                        </div>

                        <a
                            href="<?= $article->url() ?>"
                            class="text-blue-600 font-medium hover:underline">
                            Read more →
                        </a>

                    </div>

                </article>

            <?php endforeach ?>

        </div>

        <?php if ($articles->isEmpty()): ?>
            <p class="mt-12 text-gray-600">
                No articles found for this tag.
            </p>
        <?php endif ?>

    </section>

</main>

<?php snippet('footer') ?>