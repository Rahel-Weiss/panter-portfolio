
<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
    <div data-project-name="<?= $page->title()->html() ?>" class="swiper-slide"><img class="gallery-image" src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" /></div>
<?php endforeach ?>
