<div id="ricerca" class="intro">
<?php echo $page->intro()->markdown() ?>
</div>

<div id="sos" class="titolosezione">
<h2 class="didattica b">↓ <?php echo l::get('rapporti') ?></h2>
<h2 id="search" class="didattica b d"><a title="collabora" href="<?php echo $page->link()->html() ?>" target="_blank" >&#9998; <?php echo l::get('collaboraconnoi') ?></a></h2>
</div>

                    <?php if (!$page->rapporti()->isEmpty()): ?>
						<div class="about">
                        <?php foreach (yaml($page->rapporti()) as $rapporto): ?>
						<div id="valori" class="colonna">
                            <p class="nome"><strong><?php echo $rapporto["titolo"] ?></strong></p>
                            <p class="professione"><?php echo $rapporto["testo"] ?></p>
                        </div>
                        <?php endforeach ?>
	                    </div>
                    <?php endif ?>

