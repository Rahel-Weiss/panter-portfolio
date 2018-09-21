<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div>

      <?php snippet('subnav', ['items' => $page->children()]) ?>
      <hr />
    </header>

  </main>

<?php snippet('footer') ?>