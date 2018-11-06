<?php $i = 0; ?>
<div id="claim" class="blackkk bomba">
<h2 class="title amano"><span class="c">Join us!</span></h2>
</div>

<div class="membership">

<div class="acaso">

	<div class="text">
	<?php echo $page->testo()->markdown() ?>
	</div>

	<div class="flexbox">
	<?php foreach($page->memberships()->toStructure() as $item): ?>

	<div class="profile">
		<p class="dida">Tipologia membership:</p>
		<h2 class="nome"><span class="c"><?= $item->nome()->text() ?></span></h2>
		<p class="descrizione" id="numero<?php echo $i ?>"></p>
		<p class="descrizione"><?= $item->descrizione()->markdown() ?></p>
		<p class="costo"><?= $item->costo()->text() ?></p>
		<h3 class="approfondimento"><a title="open doc" href="<?= $item->paypal()->text() ?>" target="_blank">JOIN US!</a></h3>


	  <script type="text/javascript">
	      init();
	      //Il campo key va valorizzato con la public key del documento che si intende leggere
	      function init() {
	        Tabletop.init( { key: '<?= $item->excel_key(); ?>',
	                         callback: showInfo,
	                         simpleSheet: true } );
	      }
	     
	      function showInfo(data) {
	      var counterRows = data.length;
	      var iscritti = counterRows;
	      var i= '<?php echo $i ?>';
	      //Container è il div radice in cui inserire dinamicamente i div in cui vengono visualizzati i dati
	      //Puoi personalizzare la classe dei div generati automaticamente
	      $('#numero'+i).append("Al momento sono attive <strong>" + counterRows + "</strong> di queste membership.");
	      }
	  </script>
	  <?php $i++; ?>

	</div>	
	<?php endforeach; ?>
	</div>
</div>

</div>



 