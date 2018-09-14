<?php snippet('header') ?>

<div id="main-content" class="main-content">
  

<?php $images = $page->images()->filterBy('visible', true); ?>
<?php if ($images->count() > 0): ?>


    <div class="drawer">
      <div class="drawer-content">
        <ul>
          <?php foreach($images->filterBy('visible', true) as $image): ?>
            <li><?= $image->caption()->html(); ?></li>
          <?php endforeach; ?>
        </ul>
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
    </section>
    <?php endif; ?>


  <div class="footer-wrapper" ">
    <?php snippet('footer') ?>
  </div>
</div>

<section class="thumbnails">
  <?php snippet('thumbnails') ?>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="build/script.min.js"></script>

</body>
</html>
