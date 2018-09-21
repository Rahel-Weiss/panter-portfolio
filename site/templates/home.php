
<?php snippet('header') ?>

<?php snippet('intro') ?>
<?php snippet('nav') ?>

<div id="main-content" class="main-content" data-drawer="closed">

  <?php $images = $page->images()->filterBy('visible', true); ?>
  <?php if ($images->count() > 0): ?>


  <div class="drawer ">
    <div class="drawer-content">
      <section class="drawer-header">
      <h5 class="drawer-title">Brief</h5>
      <button onclick="$bus.trigger('drawer:close')"><img class="drawer-close-icon" src="/portfolio/assets/images/cross.svg"></button>
      </section>
      <section class="drawer-text">
      <ul>
        <?php foreach($images->filterBy('visible', true) as $image): ?>
          <li><?= $image->caption()->html(); ?></li>
        <?php endforeach; ?>
      </ul>
    </section>
</div>
  </div>
    
  <section class="gallery-wrapper">
    <div class="gallery">
    
      <ul>
      <?php foreach($images->filterBy('visible', true) as $image): ?>
        <li><?= $image->html(); ?></li>
      <?php endforeach; ?>
      </ul>
    </div>
    <div class="gallery-footer"><a class="drawer-close-icon drawer-close-icon__text js-read_the_brief">Read the brief</a></div>
  </section>
    <?php endif; ?>


  

  <section class="thumbnails">
    <?php snippet('thumbnails') ?>
  </section>
  <div class="footer-wrapper" ">
    <?php snippet('page-footer') ?>
  </div>
  
</div>

<?php snippet('footer') ?>