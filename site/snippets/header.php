<?php

/**
 * @var \Kirby\Cms\Page $page
 * @var \Kirby\Cms\Site $site
 * @var \Kirby\Cms\App $kirby
 */
?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $site->description() ?>">
  <?php if (file_exists(kirby()->root('index') . '/public/assets/css/app.css')): ?>
    <?= css('/public/assets/css/app.css') ?>
  <?php else: ?>
    <?= css('/assets/css/app.css') ?>
  <?php endif ?>
  <title>
    <?= $page->title() ?> | <?= $site->title() ?>
  </title>
</head>

<body>

  <header
    x-data="{ open: false }"
    @keydown.escape.window="open = false"
    class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-gray-200">
    <?php snippet('menu') ?>
  </header>