<?php foreach ($field->toLayouts() as $layout): ?>
    <section
        id="<?= esc($layout->id(), 'attr') ?>"
        class="mx-auto max-w-7xl px-6 py-10 lg:py-16">
        <div class="grid grid-cols-12 gap-6 lg:gap-8">
            <?php foreach ($layout->columns() as $column): ?>
                <div
                    class="col-span-12"
                    style="grid-column: span <?= (int)$column->span() ?> / span <?= (int)$column->span() ?>;">
                    <div class="prose prose-lg max-w-none">
                        <?= $column->blocks() ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
<?php endforeach ?>