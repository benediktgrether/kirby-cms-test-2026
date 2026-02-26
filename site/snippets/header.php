<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $site->description() ?>">
  <?= css('assets/css/styles.css') ?>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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