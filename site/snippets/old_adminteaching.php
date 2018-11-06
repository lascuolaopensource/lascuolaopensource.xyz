<div class="sfondonero">
<script type="text/javascript" src="assets/javascript/chartwell1.1.js"></script>



<div id="claim" class="blackkk">
<h2 class="title">OPEN BALANCE</h2>
<p class="legenda">
→ I colori indicano la tipologia di attività:
<span class="x">X</span> / <span class="y">Y</span> / <span class="z">Z</span><br><br>
Ogni corso ha due barre:<br>
→ <strong>la prima (colorata) indica l'utile</strong> (ovvero la differenza tra spesa e ricavi), <br>→ <strong>la seconda (grigia) indica la spesa</strong>.
</p>
</div>

  <?php $counter = 1; ?>

<div class="utile">

  <?php foreach(page('didattica')->children()->visible()->sortBy('deadline')->flip() as $teaching): ?>

  <?php   $x = 0;
          $y = 0;
          $nuovay = $y*$counter;
          $w = ($teaching->utile()->html())/3;
          $ww = ($teaching->spesacons()->html())/3;
  ?>
<?php if($teaching->utile()->isNotEmpty()): ?>

<div class="pezzo tooltip">

<div class="label <?php echo $teaching->xyz() ?>">
<?php echo $teaching->title()->html(); ?>
</div>

<svg width="$w" height="10"
    xmlns="http://www.w3.org/2000/svg">

  <rect id="viz" class="<?php echo $teaching->xyz() ?>" 
        
        x="0" 
        y="<?php echo $nuovay ?>" 

        width="<?php echo $teaching->utile()->html() ?>" 
        height="10"

  />

</svg>

<svg width="$ww" height="10"
    xmlns="http://www.w3.org/2000/svg">

  <rect id="viz" class="partecipanti" 
        
        x="0" 
        y="<?php echo $nuovay ?>" 

        width="<?php echo $teaching->spesacons()->html() ?>" 
        height="10"

  />

</svg>

  <div class="tooltiptext">
    <div class="colonna">
    <strong>Utile:</strong> <?php echo $teaching->utile()->html() ?> € 
    <br>
    <strong>Spesa:</strong> <?php echo $teaching->spesacons()->html() ?> € 
    </div>
    <div class="colonna">
    <strong>Partecipanti:</strong> <?php echo $teaching->paganti()->html() ?> 
    <br>
    <strong>Ore:</strong> <?php echo $teaching->lunghezza()->html() ?>
    </div>  
  </div>

</div>
  <?php $counter = $counter + 1; ?>
<?php endif ?>

  <?php endforeach ?>
</div>

<div id="claim" class="blackkk">
<h2 class="title">DETAILS</h2>
<p class="legenda">
Di seguito il dettaglio di tutti i corsi svolti a SOS.</p>
<div class="colonna">
<p class="legenda">
→ Data di inizio<br>
→ Monte ore<br>
→ Numero di minimo partecipanti<br>
↳ Provenienti dalla Puglia<br>
↳ Provenienti da territorio extra-regionale<br>
→ Numero di pre-iscritti<br>
</p>
</div>
<div class="colonna">
<p class="legenda">
→ Numero di paganti<br>
→ Numero di borse di studio erogate<br>
→ Spese preventivate e spese sostenute<br>
→ Ricavi preventivati e ricavi ottenuti<br>
→ Utile<br>
</p>
</div>
</div>

<div class="grid">
<div class="grid-sizer"></div>
          
<?php foreach(page('didattica')->children()->visible()->sortBy('deadline')->flip() as $teaching): ?>

<?php if($teaching->utile()->isNotEmpty()): ?>


  <div class="grid-item admin" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->xyz())) ?>">  

  <h2 class="tit">
    <?php echo $teaching->title()->html(); ?><br><span class="durata"><?php echo $teaching->lunghezza()->html() ?> H</span>
  </h2>                            
  <h3 class="dat">
                                    <?php $nextdate = strtotime($teaching->nextdate());
                                                                echo date('d F Y', $nextdate);?>

  </h3>

  <div class="provenienza">
  <p class="tit">PROVENIENZA PARTECIPANTI<br>
  <span class="pugliesi">Pugliesi: <span class="destra"><?php echo $teaching->pugliesi()->html() ?></span>
  </span><br><br>
  <span class="nonpugliesi">Non-pugliesi: <span class="destra"><?php echo $teaching->nonpugliesi()->html() ?></span>
  </span></p>

  </div>
  <div class="budget">

    <div class="quartino a">
    <p class="tit">SPESA</p>
    <p class="cons"><?php echo $teaching->spesacons()->html() ?> €</p>
    <p class="prev"><?php echo $teaching->spesaprev()->html() ?> €</p>
    </div>

    <div class="quartino c">
    <p class="tit">RICAVI</p>
    <p class="cons"><?php echo $teaching->consuntivoricavi()->html() ?> €</p>
    <p class="prev"><?php echo $teaching->preventivoricavi()->html() ?> €</p>
    </div>

    <div class="quartino b">
    <p class="tit">UTILE</p>
    <p class="cons"><?php echo $teaching->utile()->html() ?> €</p>
    </div>

    <!-- <div class="quartino d">
    <p class="tit special">♥</p>
    <p class="cons special"><?php echo $teaching->score()->html() ?></p>
    </div>-->

  </div>

  <div class="container" id="container<?php echo $i ?>"></div>


  <script type="text/javascript">
      init();
      //Il campo key va valorizzato con la public key del documento che si intende leggere
      function init() {
        Tabletop.init( { key: '<?php echo $teaching->excel()->html(); ?>',
                         callback: showInfo,
                         simpleSheet: true } );
      }
     
      function showInfo(data) {
      var counterRows = data.length;
      var minimo = '<?php echo $teaching->num_min()->html() ?>';
      var goal = '<?php echo $teaching->num_max()->html(); ?>';
      var iscritti = counterRows;
      var i= '<?php echo $i ?>';
      //Container è il div radice in cui inserire dinamicamente i div in cui vengono visualizzati i dati
      //Puoi personalizzare la classe dei div generati automaticamente
      $('#container'+i).append('<div class="chartwell-bars"><span class="paganti"><?php echo $teaching->paganti()->html() ?></span>'  + '<span class="preiscritti">' + counterRows + '</span>' + '<span class="massimo"><?php echo $teaching->num_min()->html() ?></span></div>' + '<div class="informations"><span class="massimo">Numero min. <?php echo $teaching->num_min()->html() ?></span><br>' + '<span class="preiscritti">Pre-iscritti: ' + counterRows + '</span><br> <span class="paganti">Paganti: <?php echo $teaching->paganti()->html() ?></span><br> <span class="borse">Borse: <?php echo $teaching->borse()->html() ?></span></div>');
      }
  </script>
  </div>

    <?php $i++; ?>
<?php endif ?>
<?php endforeach ?>
</div>

</div>