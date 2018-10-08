<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">

      <?php $projects = $page->children()->visible(); ?>
      
      <?php foreach ($projects as $project): ?>
      
        <?php snippet('project', ['page' => $project]); ?>
  
       
        
      <?php endforeach; ?>

      <hr />
    </header>

  </main>

<?php snippet('footer') ?>