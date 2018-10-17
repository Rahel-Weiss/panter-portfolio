<?php
  foreach($page->files()->sortBy('sort', 'asc') as $file): ?>
    <?php if($file->type() == 'image'): ?>
    <div data-project-index="<?= $index ?>" class="carousel-cell">
        <div class="carousel-slide"><img class="gallery-image" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" /></div>
    </div>
    <?php endif ?>
    <?php if($file->type() == 'video'): ?>
        <div data-project-index="<?= $index ?>" class="carousel-cell cell-video">
            <video autoplay="true" loop muted="" preload="auto" src="<?= $file->url() ?>" alt="<?= $page->title()->html() ?>" />
        </div>
   <?php endif ?>
  <?php endforeach ?>








