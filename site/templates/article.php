<?php snippet('header') ?>

<main class="mx-auto max-w-3xl px-6 py-16">

    <article class="blog-post">

        <?php if ($image = $page->heroImage()->toFile()): ?>
            <figure class="mb-10 overflow-hidden rounded-2xl">
                <img
                    src="<?= $image->resize(1600)->url() ?>"
                    alt="<?= $page->title()->html() ?>"
                    class="w-full h-96 object-cover">
            </figure>
        <?php endif; ?>

        <header class="mb-10">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight mb-4">
                <?= $page->title()->html() ?>
            </h1>

            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-gray-600">
                <?php if ($page->date()->isNotEmpty()): ?>
                    <time datetime="<?= $page->date()->toDate('c') ?>">
                        <?= $page->date()->toDate('d.m.Y · H:i') ?>
                    </time>
                <?php endif; ?>

                <?php if ($page->author()->isNotEmpty() && ($author = $page->author()->toUser())): ?>
                    <span class="text-gray-400">•</span>
                    <span><?= $author->name()->or($author->email())->html() ?></span>
                <?php endif; ?>

                <?php if ($page->tags()->isNotEmpty()): ?>
                    <span class="text-gray-400">•</span>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($page->tags()->split(',') as $tag): ?>
                            <a
                                href="<?= url('blog', ['params' => ['tag' => $tag]]) ?>"
                                class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700 hover:bg-gray-200">
                                #<?= esc($tag) ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </header>

        <div class="prose prose-lg max-w-none">
            <?= $page->text()->kirbytext() ?>
        </div>

        <footer class="mt-14 pt-10 border-t">
            <a
                href="<?= url('blog') ?>"
                class="inline-flex items-center gap-2 text-blue-600 font-medium hover:underline">
                ← Back to blog
            </a>
        </footer>

    </article>

</main>

<?php snippet('footer') ?>