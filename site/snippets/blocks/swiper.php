<?php
$slides = $block->slides()->toStructure();
$autoplay = $block->autoplay()->toBool();
?>

<?php if ($slides->count()): ?>
    <div
        class="swiper relative w-full"
        data-autoplay="<?= $autoplay ? 'true' : 'false' ?>">
        <div class="swiper-wrapper">

            <?php foreach ($slides as $slide): ?>
                <?php if ($image = $slide->image()->toFile()): ?>

                    <?php
                    // Responsive Sizes
                    $small  = $image->resize(480);
                    $medium = $image->resize(768);
                    $large  = $image->resize(1280);
                    $xlarge = $image->resize(1920);

                    $alt = $slide->headline()->or($image->alt())->or($image->filename())->esc();
                    ?>

                    <div class="swiper-slide relative">

                        <!-- Image -->
                        <img
                            src="<?= $medium->url() ?>"
                            srcset="
                            <?= $small->url() ?> 480w,
                            <?= $medium->url() ?> 768w,
                            <?= $large->url() ?> 1280w,
                            <?= $xlarge->url() ?> 1920w
                        "
                            sizes="(max-width: 768px) 100vw, 100vw"
                            alt="<?= $alt ?>"
                            class="w-full h-100 md:h-125 xl:h-150 object-cover"
                            loading="lazy">

                        <!-- Overlay -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/20 to-transparent">

                                <?php if ($slide->headline()->isNotEmpty()): ?>
                                    <h2 class="text-white text-2xl md:text-4xl font-bold mb-4">
                                        <?= $slide->headline() ?>
                                    </h2>
                                <?php endif; ?>

                                <?php if ($slide->text()->isNotEmpty()): ?>
                                    <p class="text-white text-sm md:text-lg">
                                        <?= $slide->text() ?>
                                    </p>
                                <?php endif; ?>

                            </div>
                        </div>

                    </div>

                <?php endif; ?>
            <?php endforeach ?>

        </div>

        <!-- Navigation -->
        <div class="swiper-button-prev text-white!"></div>
        <div class="swiper-button-next text-white!"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

    </div>
<?php endif; ?>