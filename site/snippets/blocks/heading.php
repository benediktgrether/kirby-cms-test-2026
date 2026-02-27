<?php
$level = trim((string) $block->level()->or('h2'));

// nur erlaubte Tags zulassen
$allowed = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];
if (!in_array($level, $allowed, true)) {
    $level = 'h2';
}

$sizeClasses = [
    'h1' => 'text-4xl md:text-6xl font-bold',
    'h2' => 'text-3xl md:text-5xl font-bold',
    'h3' => 'text-2xl md:text-4xl font-semibold',
    'h4' => 'text-xl md:text-3xl font-semibold',
    'h5' => 'text-lg md:text-2xl font-medium',
    'h6' => 'text-base md:text-xl font-medium',
];

$title = $block->text();
?>

<?php if ($title->isNotEmpty()): ?>
    <div class="container mx-auto text-center">
        <<?= $level ?>
            class="max-w-6xl mx-auto px-4 mb-6 <?= $sizeClasses[$level] ?? $sizeClasses['h2'] ?>">
            <?= esc($title) ?>
        </<?= $level ?>>
    </div>
<?php endif; ?>