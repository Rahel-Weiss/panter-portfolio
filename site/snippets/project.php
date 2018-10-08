<?php

var_dump($page->gallery());

?>
    
    <div class="text wrap">
    <p><?= $page->title()->html() ?></p>
    <p><?= $page->brief()->html() ?></p>
    <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </figure>
        
      <?php endforeach ?>
      
    </div>