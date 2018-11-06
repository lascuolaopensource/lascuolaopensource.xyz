<div class="intro">
<?php echo $page->intro()->kt() ?>
</div>

<div id="sos" class="titolosezione">
<h2 class="didattica">↓ <?php echo l::get('valori') ?></h2>
</div>

                    <?php if (!$page->valori()->isEmpty()): ?>
						<div class="about">
                        <?php foreach (yaml($page->valori()) as $valore): ?>
						<div id="valori" class="colonna">
                            <p class="nome"><strong><?php echo $valore["titolo"] ?></strong></p>
                            <p class="professione"><?php echo $valore["testo"] ?></p>
                        </div>
                        <?php endforeach ?>
	                    </div>
                    <?php endif ?>


<div id="sos" class="titolosezione">
<h2 class="didattica">↓ <?php echo l::get('mission') ?></h2>
</div>

                    <?php if (!$page->mission()->isEmpty()): ?>
						<div class="about">
                        <?php foreach (yaml($page->mission()) as $missione): ?>
						<div id="mission" class="colonna">
                            <p class="nome"><strong><?php echo $missione["titolo"] ?></strong></p>
                            <p class="professione"><?php echo $missione["testo"] ?></p>
                        </div>
                        <?php endforeach ?>
	                    </div>
                    <?php endif ?>





