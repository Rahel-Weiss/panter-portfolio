
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
              <div class="swiper-slide" data-project-title="<?= $project->title() ?>">
                <h1><?= $project->title()->html() ?></h1>
                <p><?= $project->brief()->html() ?></p> 
                <div class="tags-container">   
                  <?php $tags = $project->tags()->pluck('tags', ',', true)?> 
                    <?php foreach ($tags as $tag): ?>
                      <div class="tag-box"><p><?= html($tag) ?></p></div>
                    <?php endforeach; ?>  
                </div>
              </div>
            <?php endforeach; ?>  
            
          </div>
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
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z"></svg>
      </div>
      <div class="swiper-button-next">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z"></svg>
      </div>
  <?php endif; ?>
    </div>
    <div class="gallery-footer"><a class="drawer-close-icon drawer-close-icon__text js-read_the_brief"><h5>Read the brief</h5></a></div>
  </section>


</main>
<?php snippet('footer')?>

