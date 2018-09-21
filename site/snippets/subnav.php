<nav class="subnav">
  <ul>
    <?php foreach($items as $item) : ?>
    <li><?= $item->title() ?></li>
    <?php endforeach; ?>
  </ul>
</nav>
