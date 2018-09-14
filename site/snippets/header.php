<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title> <?= $site->title()->html() ?> | <?= $page->title()->html() ?> </title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/build/index.css') ?>

</head>
<body>

  <header class="header-wrapper" >
    <div class="drawer-header">
  
      <h5 class="drawer-title">Brief</h5>
      
      


    </div>  
    <div class="site-header"
    
      <a class="site-title" href="<?= url() ?>" rel="home"><h5><?= $site->title()->html() ?></h5></a>
    </div>
  </header>
