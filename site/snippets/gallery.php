<div><?php 

echo '<div class="fotorama" data-autoplay="true" data-width="100%" data-allowfullscreen="true" >'
      ?>
  <?php foreach($page->gallery()->yaml() as $image): ?>
  <?php if($img = $page->image($image)): ?>
      <img src="<?= $img->url() ?>" alt="<?= $page->title()->html() ?>" />
  <?php endif ?>
  <?php endforeach ?>

<?php 

echo '</div>'
      ?>

</div>

    