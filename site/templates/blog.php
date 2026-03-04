<?php snippet('header') ?>

<main class="blog" role="main">

    <section class="container mx-auto max-w-6xl px-6 mt-24">

        <header class="mb-16 text-center">
            <h1 class="text-4xl font-bold mb-4">
                <?= $page->title()->html() ?>
            </h1>
            <div class="text-lg text-gray-600">
                <?= $page->text()->kirbytext() ?>
            </div>
        </header>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

            <?php foreach ($page->children()->listed()->flip() as $article): ?>

                <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition duration-300">

                    <?php if ($image = $article->heroImage()->toFile()): ?>
                        <a href="<?= $article->url() ?>">
                            <img
                                src="<?= $image->resize(800, 500)->url() ?>"
                                alt="<?= $article->title()->html() ?>"
                                class="w-full h-56 object-cover">
                        </a>
                    <?php endif ?>

                    <div class="p-6">

                        <h2 class="text-xl font-semibold mb-3">
                            <a href="<?= $article->url() ?>" class="hover:underline">
                                <?= $article->title()->html() ?>
                            </a>
                        </h2>

                        <div class="text-gray-600 mb-4 line-clamp-3">
                            <?= $article->intro()->kirbytext() ?>
                        </div>

                        <a
                            href="<?= $article->url() ?>"
                            class="inline-flex items-center text-blue-600 font-medium hover:underline">
                            Read more →
                        </a>

                    </div>

                </article>

            <?php endforeach ?>

        </div>

    </section>

</main>

<?php snippet('footer') ?>