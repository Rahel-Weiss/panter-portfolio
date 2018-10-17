<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title> <?= $site->title()->html() ?> | <?= $page->title()->html() ?> </title>
  <?php if($favicon = $site->favicon()->toFile()): ?>
    <link rel="icon" href="<?= $favicon->url() ?>" type="image/png">
  <?php endif ?>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <?= css('assets/build/index.css') ?>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>
<body>

  
