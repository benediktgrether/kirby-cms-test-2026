<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $site->description() ?>">
  <?= css('assets/css/styles.css') ?>
  <script type="module" src="/assets/js/alpine.js"></script>
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