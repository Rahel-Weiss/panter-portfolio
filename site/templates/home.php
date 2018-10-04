
<?php snippet('header') ?>
<?php snippet('intro') ?>
<?php snippet('nav') ?>

<div id="main-content" class="main-content" data-drawer="closed">

  <?php $images = $page->images()->filterBy('visible', true); ?>
  <?php if ($images->count() > 0): ?>


  <div class="drawer">
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
      
    <!-- Slider main container -->
    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach($images->filterBy('visible', true) as $image): ?>
          <div class="swiper-slide"><img class="gallery-image" src="<?= $image->url() ?>" alt="rahel weiss ux portfolio image"></div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <?php endif; ?>
    <div class="gallery-footer"><a class="drawer-close-icon drawer-close-icon__text js-read_the_brief">Read the brief</a></div>
  </section>


  


 
  
</div>


<?php snippet('footer') ?>