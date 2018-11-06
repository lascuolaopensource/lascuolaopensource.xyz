<div class="titolosezione iniziale">
<h2  class="didattica">↓ Piani di membership</h2>
</div>
<div class="membership">
	<div class="flexbox boh">
	<?php foreach(page('membership')->memberships()->toStructure() as $item): ?>
	<div class="profile">
		<h2 class="nome"><span class="c"><?= $item->nome()->text() ?></span></h2>
		<p class="descrizione"><?= $item->descrizione()->markdown() ?></p>
		<p class="costo"><?= $item->costo()->text() ?></p>
		<h3 class="approfondimento"><a title="open doc" href="<?= $item->paypal()->text() ?>" target="_blank">JOIN US!</a></h3>
	</div>	
	<?php endforeach; ?>
	</div>
</div>



