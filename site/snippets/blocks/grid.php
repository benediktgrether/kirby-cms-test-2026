<?php foreach ($block->modules()->toLayouts() as $layout): ?>
    <div class="container mx-auto flex mt-4 gap-4" id="<?= $layout->id() ?>">
        <?php foreach ($layout->columns() as $column): ?>
            <?php
            switch ($column->span()) {
                case '1':
                    $columnClass = 'w-full';
                    break;
                case '3':
                    $columnClass = 'w-full md:w-3/12';
                    break;
                case '4':
                    $columnClass = 'w-full md:w-4/12';
                    break;
                case '6':
                    $columnClass = 'w-full md:w-6/12';
                    break;
                default:
                    $columnClass = 'w-full';
                    break;
            }
            ?>
            <div class="<?= $columnClass ?>">
                <div class="blocks">
                    <?= $column->blocks() ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
<?php endforeach ?>