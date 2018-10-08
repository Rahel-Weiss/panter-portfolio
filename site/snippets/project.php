
<?php
        foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
     
          
          <div class="swiper-slide"><img class="gallery-image" src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" /></div>
        <?php endforeach ?>
