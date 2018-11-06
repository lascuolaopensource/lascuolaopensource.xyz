<section class="content article">

<div  class="titolosezione">
<h2   class="didattica"><a href="<?php echo l::get('lingua') ?>blog">↓ SOS Blog</a></h2>
<h2   class="didattica"><a href="<?php echo l::get('lingua') ?>blog/search">&#9998; <?php echo l::get('cercacontenuto') ?></a></h2>
</div>

<div id="search" class="titolosezione">
      <h2 id="article"  class="didattica">
        <span class="<?php echo tredicesima(); ?>"><?php echo $page->title()->html() ?></span>
      </h2>
      <p class="meta"><?php echo l::get('publishedby') ?><strong><?php echo $page->author()->html() ?></strong>
    – <?php echo strftime('%d/%m/%Y', $page->date()) ?></p>

    </div>

  <article>

<?php if (!$page->gallery()->isEmpty()): ?>
<div><?php 

echo '<div class="fotorama post" dara-ratio="16/9" data-autoplay="true" data-width="100%" data-allowfullscreen="true" >'
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
<?php else: ?>

    <?php $image = $page->image($page->cover()); ?>
    <img class="cover" src="<?php echo thumb($image, array('width' => 1600, 'height' => 900, 'crop' => true))->url(); ?>">

<?php endif ?>

    <?php echo $page->text()->kirbytext() ?>

  </article>

<div class="socialshare">
<h3 class="social">Condividi su:</h3>

<a class="social"href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @your_account')?>" target="blank" title="Tweet this">
<img src="/assets/images/twitter.svg">
</a>

<a class="social" href="https://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook">
<img src="/assets/images/facebook.svg">
</a>

<a class="social" href="https://plusone.google.com/_/+1/confirm?hl=de&url=<?php echo rawurlencode ($page->url()); ?>&title=<?php echo rawurlencode($page->title()); ?>" target="blank" title="Share on Google+">
<img src="/assets/images/google.svg">
</a>
</div>



<div id="blog" class="navbar">

  <?php if($page->hasPrevVisible()): ?>
  <a class="prev" href="<?php echo $page->prevVisible()->url() ?>">← <?php echo l::get('postprecedente') ?></a>
    <?php endif ?>
  | <a href="<?php echo l::get('lingua') ?>blog">SOS Blog</a> |

  <?php if($page->hasNextVisible()): ?>
  <a class="next" href="<?php echo $page->nextVisible()->url() ?>"><?php echo l::get('postsuccessivo') ?> →</a>
    <?php endif ?>


</div>


</section>

</div>
<div class="filetto"></div>