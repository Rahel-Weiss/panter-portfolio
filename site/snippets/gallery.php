<ul>
<?php foreach($page->pictures()->yaml() as $image): ?>
   <?php if($img = $page->image($image)): ?>
      <li>
	 <figure>
	    <img src="<?= $img->url() ?>" alt="<?= $page->title()->html() ?>" />
	 </figure>
      </li>
   <?php endif ?>
<?php endforeach ?>
</ul>
 