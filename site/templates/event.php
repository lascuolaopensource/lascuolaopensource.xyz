        <?php snippet('head2') ?>
<body>
        <?php snippet('logodue') ?>     
        <?php snippet('menu2') ?>
        <?php snippet('lang') ?>        

        <div class="scheda">
        <div class="testata">

      <?php   $id = str_replace('eventi/', '', $page->id()); ?>
      <a class="stampa" title="PRINT A4" href="/a4-event/tag:<?= $id ?>" target="_blank">
        <?php echo l::get('stampa') ?>
      </a>

<p class="docente a"><?php echo l::get('eventi') ?> <span class="deadline">☛ <strong><?php $nextdate = strtotime($page->nextdate()); echo date('d/m/Y', $nextdate);?></strong></span> @ <strong><?php echo $page->luogo()->text() ?><strong></p>

        <h2 class="corso"><span class="<?php     $set = array("a", "b", "c", "d", "e", "f", "g", "h"); $random = array_rand($set); $valore = $set[$random]; echo "$valore"; ?>"><?php echo $page->title()->html() ?></span></h2>

                        <?php foreach ($page->docenti()->toStructure() as $docente): ?>
                                    <p class="docente b"><strong><?php echo $docente->nome()->html() ?></strong> — <?php echo $docente->professione()->html() ?> @ <?php echo $docente->organizzazione()->html() ?></p>
                        <?php endforeach ?>


        </div>

	    <!--<?php $image = $page->image($page->cover()); ?>
	    <img src="<?php echo thumb($image, array('width' => 1600, 'height' => 900, 'crop' => true))->url(); ?>">
		-->
                <?php snippet('gallery') ?>  

        <div class="contenitore">
        <div class="unmezzo"><h2><?php echo l::get('tipologiattivita') ?><strong><?php echo $page->category()->html() ?></strong></h2></div>
        <div class="unmezzo"><h2><?php echo l::get('livellodifficolta') ?><strong><?php echo $page->level()->html() ?></strong></h2></div>

        <div class="details">
        <div class="filetto"></div>
        <h3><?php echo l::get('ambititematici') ?></h3><br>
	      <?php $tags = $page->tags()->split(); ?>
	    <ul>  
	      <?php foreach($tags as $tag): ?>
	      <li><?php echo $tag ?></li>
	      <?php endforeach ?>
	    </ul>
        <div class="filetto"></div>
        <h3>Output: <strong><?php echo $page->output()->KirbyText() ?></strong></h3>
        <div class="filetto"></div>
        <h3 class="luogo"><?php echo l::get('luogo') ?> <strong><?php echo $page->luogo()->KirbyText() ?></strong></h3>
		</div>

        <div class="details">
        <div class="filetto"></div>
        <?php if ($page->prezzo()->isEmpty()): ?>
        <h3><?php echo l::get('attivitagratuita') ?></h3>
        <?php else: ?>
        <h3><?php echo l::get('costoattivita') ?><strong><?php echo $page->prezzo()->html() ?> €</strong></h3>
        <?php endif ?>

        <div class="filetto"></div>
        <h3><?php echo l::get('inizioattivita') ?><strong><?php

$nextdate = strtotime($page->nextdate());

echo date('d/m/Y', $nextdate);

?></strong></h3>
        <div class="filetto"></div>
        <h3><?php echo l::get('consigliataper') ?><br> <strong><?php echo $page->audience()->html() ?></strong></h3>
        <div class="filetto"></div>
        <h3><?php echo l::get('durataevento') ?><strong><?php echo $page->durata()->html() ?> <?php echo l::get('hours') ?></strong></h3>
        <div class="filetto"></div>
        <h3><?php echo l::get('numerominimo') ?><strong><?php echo $page->num_min()->html() ?></strong></h3>
        <h3><?php echo l::get('numeromassimo') ?><strong><?php echo $page->num_max()->html() ?></strong></h3>
        <br>
        <?php if (!$page->iscritti()->isEmpty()): ?>
        <h3><?php echo l::get('counter') ?><strong><?php echo $page->iscritti()->html() ?></strong></h3>        
        <?php endif ?>
	      </div>

	     </div>
        <div class="more">
        <h3><?php echo $page->description()->kt() ?></h3>


                    <?php if (!$page->docenti()->isEmpty()): ?>
                    <div class="docenti">
                    <h3 class="meta"><?php echo l::get('ospitecorso') ?></h3>
                    <ul>
                        <?php $numerodocenti = 0 ?>
                        <?php foreach ($page->docenti()->toStructure() as $docente): ?>
                        <?php $numerodocenti = $numerodocenti + 1 ?>
                        <?php endforeach ?>

                        <?php foreach ($page->docenti()->toStructure() as $docente): ?>
                        <?php if($numerodocenti == 1): ?>
                        <li class="unico">
                        <?php else: ?>
                        <li>
                        <?php endif ?>
                            <p class="nome"><strong><?php echo $docente->nome()->html() ?></strong></p>
                            <p class="professione"><?php echo $docente->professione()->html() ?></p>
                            <p class="organizzazione"> / <?php echo $docente->organizzazione()->html() ?></p>
                            <p class="bio"><?php echo $docente->bio()->kirbytext() ?></p>
                        </li>
                        <?php endforeach ?>
                    </ul>
                    </div>
                    <?php endif ?>


    <?php if($page->link()->isNotEmpty()): ?>


        <div id="evento" class="nota">
        <p>↳ <?php echo l::get('notaeventi') ?></p>
        </div>

        <div id="paypal">

        <a title="iscriviti" href="<?php echo $page->link()->html() ?>" target="_blank">
        <img src="<?php echo l::get('iscriviti') ?>" border="0" name="submit" alt="Iscriviti" />
        </a>
        </div>

         </div>

    <?php endif ?>

        </div>

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


        </div>
        <?php snippet('home_membership') ?>  
        <?php snippet('newslettersnipp') ?>
        <?php snippet('footer2') ?>



