
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

        <div class="text-carousel carousel carousel--full-width js-flickity" data-flickity-options='{ "asNavFor": ".main-carousel" }'>
          <?php foreach ($projects as $project): ?>
            <div data-project-name="<?= $project->title()->html() ?>" class="carousel-cell">
              <div class="carousel-slide">
                <h1><?= $project->title()->html() ?></h1>
                <p><?= $project->brief()->html() ?></p> 
              
                  <?php $tags = $project->tags()->pluck('tags', ',', true)?> 
                    <?php foreach ($tags as $tag): ?>
                      <div class="tag-box"><p><?= html($tag) ?></p></div>
                    <?php endforeach; ?>  
              
              </div>
          
            </div>  
          <?php endforeach; ?>  
        </div>

      </section>
    </div>
  </div>
    
  <section class="gallery-wrapper">   
    <div class="main-carousel carousel carousel--full-width js-flickity" >
    <?php foreach ($projects as $project): ?>
      <?php snippet('project', ['page' => $project]); ?>
      <?php endforeach; ?>
    </div> 
  <?php endif; ?> 
    <div class="gallery-footer"><a class="drawer-close-icon drawer-close-icon__text js-read_the_brief"><h5>Read the brief</h5></a></div>
  </section>


</main>
<?php snippet('footer')?>

