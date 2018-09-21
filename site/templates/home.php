
<?php snippet('header') ?>

<?php snippet('intro') ?>
<?php snippet('nav') ?>

<div id="main-content" class="main-content closed-drawer">

  <?php $images = $page->images()->filterBy('visible', true); ?>
  <?php if ($images->count() > 0): ?>


  <div class="drawer ">
    <div class="drawer-content">
      <section class="drawer-header">
        <h5 class="drawer-title">Brief</h5>
        <img class="drawer-close-icon"src="/portfolio/assets/images/cross.svg"  >
      </section>
      <section class="drawer-text">
        <ul>
          <?php foreach($images->filterBy('visible', true) as $image): ?>
            <li><?= $image->caption()->html(); ?></li>
          <?php endforeach; ?>
        </ul>
        <p>Where does it come from?
      Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

      The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

      Where can I get some?
      There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
      </sectio>    
    </div>
  </div>
    
 
     
 
  
   

 <section class="gallery-wrapper">
    <div class="gallery">
    
      <!-- Slider main container -->
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php foreach($images->filterBy('visible', true) as $image): ?>
            <div class="swiper-slide"><?= $image->html(); ?></div>
          <?php endforeach; ?>
        </div>
          ...
      </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
  <?php endif; ?>
  <div class="gallery-footer"><p class="drawer-close-icon drawer-close-icon__text">Read the brief</p></div>
</section>

  <section class="thumbnails">
    <?php snippet('thumbnails') ?>
  </section>
  <div class="footer-wrapper" ">
    <?php snippet('footer') ?>
</div>
  
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="node_modules/swiper/dist/js/swiper.min.js"></script>
<script type="text/javascript" src="assets/build/script.min.js"></script>


</body>
</html>
