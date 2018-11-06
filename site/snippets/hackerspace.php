
<?php snippet('gallery') ?>
<div id="claim" class="blackkk bomba">
<h2 class="title amano"><?= $page->title()->text() ?></h2>
</div>
<div class="membership">

<div class="about hack">

	<div class="colonna hack">
	<?php echo $page->testo()->kirbytext() ?>
	</div>

	<div class="colonna hack viola">
	<?php echo $page->servizi()->kirbytext() ?>
	</div>
</div>
<div class="titolosezione iniziale">
<h2  class="didattica">↓ Strumenti condivisi</h2>
<h2  class="didattica"><a title="cerca" href="<?= $page->prenota_macchinario()->text() ?>
">&#9998; Prenota uno strumento</a></h2>
</div>

	<div class="flexbox hack">
	<?php foreach($page->strumenti()->toStructure() as $item): ?>
	<div class="profile">
		<h2 class="nome"><strong><?= $item->nome()->text() ?></strong></h2>
		<p class="descrizione"><?= $item->descrizione()->markdown() ?></p>
		<p class="descrizione"><?= $item->dettagli()->markdown() ?></p>
	</div>	
	<?php endforeach; ?>
	</div>
		<h3 class="approfondimento"><a title="open doc" href="<?= $page->prenota_macchinario()->text() ?>" target="_blank">PRENOTA UNO STRUMENTO</a></h3>

</div>



