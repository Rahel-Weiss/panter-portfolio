<div class="page-wrapper">
  <?php snippet('header') ?>

<?php $images = $page->images()->filterBy('visible', true); ?>
<?php if ($images->count() > 0): ?>


    <div class="drawer">
      <div class="drawer-content">
        <img src="/assets/images/cross.svg" class="drawer-close-icon">
        <h5 class="drawer-title">Brief</h5> 
        <ul>
          <?php foreach($images->filterBy('visible', true) as $image): ?>
            <li><?= $image->caption()->html(); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    
    <section class="gallery-wrapper">
      <ul>
      <?php foreach($images->filterBy('visible', true) as $image): ?>
        <li><?= $image->html(); ?></li>
      <?php endforeach; ?>
      </ul>
    </section>
    <?php endif; ?>


  <div class="footer-wrapper" ">
    <?php snippet('footer') ?>
  </div>
</div>

<section class="thumbnails">
  <?php snippet('thumbnails') ?>
</section>



</body>
</html>
