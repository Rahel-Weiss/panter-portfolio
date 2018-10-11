
<?php snippet('header') ?>
<?php snippet('intro') ?>

<main id="main-content" class="main-content" data-drawer="closed">
  <?php $projects = $page->children()->visible(); ?> 
  <?php if ($projects->count() > 0): ?>

  <div class="drawer">
    <div class="drawer-content">
      <section class="drawer-header">
        <h5 class="drawer-title">Brief</h5>
        <button onclick="$bus.trigger('drawer:close')"><img class="drawer-close-icon" src="/portfolio/assets/images/cross.svg"></button>
      </section>
      <section class="drawer-text">
        <!-- Slider main container -->
        <div class="swiper-container text-swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ($projects as $project): ?>
              <div class="swiper-slide" data-caption-project-title="<?= $project->title() ?>">
                <h5><?= $project->title()->html() ?></h5>
                <p><?= $project->brief()->html() ?></p>
              </div>
              <?php endforeach; ?>  
            
          </div>
         <!-- If we need navigation buttons -->
          <!-- <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div> -->
        </div>
      </section>
    </div>
  </div>
    
  <section class="gallery-wrapper">   
    <!-- Slider main container -->
    <div class="swiper-container image-swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach ($projects as $project): ?>
        <?php snippet('project', ['page' => $project]); ?>

      <?php endforeach; ?>
      </div>
       <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <?php endif; ?>
   
    <div class="gallery-footer"><a class="drawer-close-icon drawer-close-icon__text js-read_the_brief"><h5>Read the brief</h5></a></div>
  </section>


</main>
<?php snippet('footer')?>

