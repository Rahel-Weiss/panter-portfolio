<?php

var_dump($page->gallery());

?>

<?php snippet('header') ?>

  <main class="main" role="main">
    
    <?php snippet('subnav', ['items' => page('projects')->children()]) ?>

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->year() ?>
      </div>
      <hr />
    </header>
    
    <div class="text wrap">
      
      <?= $page->text()->kirbytext() ?>

      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->gallery()->yaml() as $image): ?>
        <?php if($img = $page->image($image)): ?>
        <figure>
          <img src="<?= $img->url() ?>" alt="<?= $page->title()->html() ?>" />
        </figure>
        <? endif; ?>
      <?php endforeach ?>
      
    </div>
    
    <?php snippet('prevnext') ?>

  </main>

<?php snippet('footer') ?>