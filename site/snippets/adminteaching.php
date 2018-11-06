


<?php

$totale_docenti_xyz = 14;
$totale_docenti = 0 + $totale_docenti_xyz*3;
$totale_docenti_x = 0 + $totale_docenti_xyz;
$totale_docenti_y = 0 + $totale_docenti_xyz;
$totale_docenti_z = 0 + $totale_docenti_xyz;

$totale_xyz = 3;
$totale_corsi_proposti = 0 + $totale_xyz;
$totale_corsi_attivati = 0 + $totale_xyz;
$totale_corsi_gratuiti = 0 + $totale_xyz;

$totale_ore_xyz = 232;
$totale_ore_corsi_attivati = 0 + $totale_ore_xyz;
$totale_ore_corsi_proposti = 0 + $totale_ore_xyz;

$totale_eventi = 0;

$totale_partecipanti_xyz = 198;
$totale_iscritti = 0 + $totale_partecipanti_xyz;
$totale_iscritti_pugliesi = 0 + ($totale_partecipanti_xyz*1)/3;
$totale_iscritti_non_pugliesi = 0+ ($totale_partecipanti_xyz*2)/3;

$totale_corsi_x = 0;
$totale_corsi_y = 0;
$totale_corsi_z = 0;

$totale_corsi_x_attivati = 0;
$totale_corsi_y_attivati = 0;
$totale_corsi_z_attivati = 0;

$totale_partecipanti_x = 66;
$totale_partecipanti_y = 66;
$totale_partecipanti_z = 66;
 
$totale_spesa = 0;
$totale_ricavi = 0;
$totale_utile = 0;

$totale_spesa_x = 0;
$totale_ricavi_x = 0;
$totale_utile_x = 0;

$totale_spesa_y = 0;
$totale_ricavi_y = 0;
$totale_utile_y = 0;

$totale_spesa_z = 0;
$totale_ricavi_z = 0;
$totale_utile_z = 0;
?>

<?php foreach (page('didattica')->children() as $teaching): ?>
  <?php $totale_corsi_proposti++;
        $totale_ore_corsi_proposti = $totale_ore_corsi_proposti + $teaching->lunghezza()->value(); ?>

  <?php if($teaching->xyz() == "x"): 
          $totale_corsi_x++;
        elseif($teaching->xyz() == "y"):
          $totale_corsi_y++;
        elseif($teaching->xyz() == "z"):
          $totale_corsi_z++;
        endif;
  ?>
<?php endforeach; ?>


<?php foreach (page('didattica')->children()->visible() as $teaching): ?>
  <?php   $totale_corsi_attivati++;
          $totale_ore_corsi_attivati = $totale_ore_corsi_attivati + $teaching->lunghezza()->value();

          $totale_iscritti = $totale_iscritti + $teaching->nonpugliesi()->value() + $teaching->pugliesi()->value();

          $totale_iscritti_pugliesi = $totale_iscritti_pugliesi + $teaching->pugliesi()->value();

          $totale_iscritti_non_pugliesi = $totale_iscritti_non_pugliesi + $teaching->nonpugliesi()->value();

          $totale_spesa = $totale_spesa + $teaching->spesacons()->value(); 

          $totale_ricavi = $totale_ricavi + $teaching->consuntivoricavi()->value(); 

          $totale_utile = $totale_utile + $teaching->utile()->value(); 

  ?>
  
  <?php if($teaching->xyz() == "x"): 
          $totale_corsi_x_attivati++;
          $totale_partecipanti_x = $totale_partecipanti_x + $teaching->pugliesi()->value() + $teaching->nonpugliesi()->value();
          $totale_spesa_x = $totale_spesa_x + $teaching->spesacons()->value();
          $totale_ricavi_x = $totale_ricavi_x + $teaching->consuntivoricavi()->value();
          $totale_utile_x = $totale_utile_x + $teaching->utile()->value();
        elseif($teaching->xyz() == "y"):
          $totale_corsi_y_attivati++;
          $totale_partecipanti_y = $totale_partecipanti_y + $teaching->pugliesi()->value() + $teaching->nonpugliesi()->value();
          $totale_spesa_y = $totale_spesa_y + $teaching->spesacons()->value();
          $totale_ricavi_y = $totale_ricavi_y + $teaching->consuntivoricavi()->value();
          $totale_utile_y = $totale_utile_y + $teaching->utile()->value();
        elseif($teaching->xyz() == "z"):
          $totale_corsi_z_attivati++;
          $totale_partecipanti_z = $totale_partecipanti_z + $teaching->pugliesi()->value() + $teaching->nonpugliesi()->value();
          $totale_spesa_z = $totale_spesa_z + $teaching->spesacons()->value();
          $totale_ricavi_z = $totale_ricavi_z + $teaching->consuntivoricavi()->value();
          $totale_utile_z = $totale_utile_z + $teaching->utile()->value();
        endif;
  ?>
  <?php if($teaching->prezzo()->isEmpty()): 
      $totale_corsi_gratuiti++ ;
  endif; ?>

  <?php foreach($teaching->docenti()->toStructure() as $docente): ?>
    <?php $totale_docenti++; ?>

      <?php if($teaching->xyz() == "x"): 
          $totale_docenti_x++;
        elseif($teaching->xyz() == "y"):
          $totale_docenti_y++;
        elseif($teaching->xyz() == "z"):
          $totale_docenti_z++;
        endif;
  ?>
  <?php endforeach; ?>

<?php endforeach; ?>

<?php foreach (page('eventi')->children()->visible() as $event): ?>

<?php 
$totale_eventi++;
endforeach; ?>

<?php $fattore = round((($totale_corsi_attivati/$totale_corsi_proposti)*100),2); ?>

<div class="sfondonero">

<!-- introduzione -->

<div id="claim" class="blackkk balance">
<h2 class="title">OPEN BALANCE</h2>
<div class="stocazzo">  
  <p><?php echo l::get('ob_testo_1') ?></p>
  <p><br><?php echo l::get('ob_testo_2') ?>
  <br><span class="x"><strong>X</strong> ⟶ <?php echo l::get('ob_x_keywords') ?></span>
  <br><span class="y"><strong>Y</strong> ⟶ Making / Hacking / Coding</span>
  <br><span class="z"><strong>Z</strong> ⟶ <?php echo l::get('ob_z_keywords') ?></span>
  </p>
</div>

<h3 class="extra">⟶ <?php echo l::get('ob_panoramica_1') ?></h3>

<p class="legenda">
  <?php echo l::get('ob_abbiamopropostocomplessivamente') ?> <strong><?= $totale_corsi_proposti ?> <?php echo l::get('ob_corsi_workshop') ?>,</strong><br><?php echo l::get('per') ?> <strong><?= $totale_ore_corsi_proposti ?> <?php echo l::get('ob_ore') ?></strong> <?php echo l::get('ob_diattivita') ?></p>


<p class="legenda rientro">
↳ <strong><?= $totale_corsi_x ?></strong> <?php echo l::get('ob_inambito') ?> <strong>X</strong>,<br> 
↳ <strong><?= $totale_corsi_y ?></strong> <?php echo l::get('ob_inambito') ?> <strong>Y</strong>,<br> 
↳ <strong><?= $totale_corsi_z ?></strong> <?php echo l::get('ob_inambito') ?> <strong>Z</strong>.
</p>

<p class="legenda attivati">
<?php echo l::get('ob_abbiamosvoltocomplessivamente') ?> 
<strong><?= $totale_corsi_attivati ?> 
<?php echo l::get('ob_corsi_workshop') ?></strong> <br>
(<?php echo l::get('ob_dicui') ?> <strong><?= $totale_corsi_gratuiti ?> <?php echo l::get('ob_corsi_workshop') ?></strong> <?php echo l::get('ob_gratuiti') ?>), <?php echo l::get('ob_per') ?> <strong><?= $totale_ore_corsi_attivati ?> <?php echo l::get('ob_ore') ?></strong> <?php echo l::get('ob_diattivita') ?>. 
</p>
<p class="legenda rientro">
↳ <strong><?= $totale_corsi_x_attivati ?></strong> <?php echo l::get('ob_inambito') ?> <strong>X</strong>,<br> 
↳ <strong><?= $totale_corsi_y_attivati ?></strong> <?php echo l::get('ob_inambito') ?> <strong>Y</strong>,<br>
↳ <strong><?= $totale_corsi_z_attivati ?></strong> <?php echo l::get('ob_inambito') ?> <strong>Z</strong>.
</p>

<p class="legenda fattore">
<?php echo l::get('ob_fattore') ?> <strong><?= $fattore ?>%</strong>
</p>

<p class="legenda gratuiti">
<?php echo l::get('ob_aqueste') ?><br>
→ <strong><?= $totale_eventi ?> <?php echo l::get('ob_eventigratuiti') ?></strong>,<br>
→ <?php echo l::get('ob_xyztesto') ?></p>
<p class="legenda rientro">
↳ <strong><?= $totale_partecipanti_xyz ?></strong> <?php echo l::get('ob_partecipanti') ?><br>
↳ <strong><?= $totale_ore_xyz ?> <?php echo l::get('ob_ore') ?></strong><br>
↳ in <strong><?= $totale_xyz ?> <?php echo l::get('ob_edizioni') ?> (2016, 2017 e 2018)</strong>.
</p>

<?php $i = 0; ?>

<p class="legenda">
<?php echo l::get('ob_riepilogomembership') ?>:
</p>
  <?php foreach(page('membership')->memberships()->toStructure() as $item): ?>
      <h2 class="legenda rientro" id="numero<?php echo $i ?>">↳ <strong><span class="c"><?= $item->nome()->text() ?></span>:</strong> </h2>      
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
        $('#numero'+i).append("<strong>" + counterRows + "</strong> richieste di membership.");
        }
    </script>
    <?php $i++; ?>
  <?php endforeach; ?>
</p>

<h3 class="extra">⟶ <?php echo l::get('ob_panoramicadocenti') ?></h3>

<p class="legenda">
  <?php echo l::get('ob_abbiamoattivatocomplessivamente') ?> <strong><?= $totale_docenti ?>  <?php echo l::get('ob_docenze') ?>.</strong> 
</p>

<p class="legenda rientro">
↳ <strong><?= $totale_docenti_x ?></strong> <?php echo l::get('ob_docenze') ?> x<br> 
↳ <strong><?= $totale_docenti_y ?></strong> <?php echo l::get('ob_docenze') ?> y<br> 
↳ <strong><?= $totale_docenti_z ?></strong> <?php echo l::get('ob_docenze') ?> z<br> 
</p>






<h3 class="extra">⟶ <?php echo l::get('ob_panoramicapartecipanti') ?></h3>

<p class="legenda">
  <?php echo l::get('ob_abbiamocoinvoltocomplessivamente') ?> <strong><?= $totale_iscritti ?>  <?php echo l::get('ob_partecipanti') ?>.</strong> 
</p>

<p class="legenda rientro">
↳ <strong><?= $totale_iscritti_pugliesi ?></strong> <?php echo l::get('ob_pugliesi') ?>,<br> 
↳ <strong><?= $totale_iscritti_non_pugliesi ?></strong> <?php echo l::get('ob_nonpugliesi') ?>;<br><br>
↳ <strong><?= $totale_partecipanti_x ?></strong> <?php echo l::get('ob_partecipanti') ?> x,<br> 
↳ <strong><?= $totale_partecipanti_y ?></strong> <?php echo l::get('ob_partecipanti') ?> y,<br> 
↳ <strong><?= $totale_partecipanti_z ?></strong> <?php echo l::get('ob_partecipanti') ?> z,<br> 
</p>




<h3 class="extra">⟶ <?php echo l::get('ob_datifinanziari') ?></h3>
<p class="legenda gratuiti">
<?php echo l::get('ob_nellasoladidattica') ?> <strong><?= $totale_spesa ?></strong> €,<br>
<?php echo l::get('ob_ricavandoentrateper') ?> <strong><?= $totale_ricavi ?></strong> €,<br>
<?php echo l::get('ob_generandounutiledi') ?><strong><?= $totale_utile ?></strong> €.
</p>





<h3 class="extra x">⟶ <?php echo l::get('ob_riepilogo') ?> X</h3>
<p class="legenda x">
  <?php echo l::get('ob_abbiamopropostocomplessivamente') ?> <strong><?= $totale_corsi_x ?> <?php echo l::get('ob_corsi_workshop') ?>,</strong><br> <?php echo l::get('ob_diquesti') ?> <?php echo l::get('ob_abbiamosvoltocomplessivamente') ?> <strong><?= $totale_corsi_x_attivati ?> <?php echo l::get('ob_corsi_workshop') ?>,</strong></p>
<p class="legenda rientro x">
  ↳ <?php echo l::get('ob_fattorediconversione') ?>: <strong><?= round((($totale_corsi_x_attivati/$totale_corsi_x)*100),2); ?>%</strong><br>
  ↳ <?php echo l::get('ob_docenze') ?>: <strong><?= $totale_docenti_x ?></strong>,<br>
  ↳ <?php echo l::get('ob_partecipanti') ?>: <strong><?= $totale_partecipanti_x ?></strong>,<br>
  ↳ <?php echo l::get('ob_utile') ?>: <strong><?= $totale_utile_x ?></strong> €<br> 
</p>

<h3 class="extra y">⟶ Riepilogo Y</h3>
<p class="legenda y">
  <?php echo l::get('ob_abbiamopropostocomplessivamente') ?> <strong><?= $totale_corsi_y ?> <?php echo l::get('ob_corsi_workshop') ?>,</strong><br> <?php echo l::get('ob_diquesti') ?> <?php echo l::get('ob_abbiamosvoltocomplessivamente') ?> <strong><?= $totale_corsi_y_attivati ?> <?php echo l::get('ob_corsi_workshop') ?>,</strong></p>
<p class="legenda rientro y">
  ↳ <?php echo l::get('ob_fattorediconversione') ?>: <strong><?= round((($totale_corsi_y_attivati/$totale_corsi_y)*100),2); ?>%</strong><br>
  ↳ <?php echo l::get('ob_docenze') ?>: <strong><?= $totale_docenti_y ?></strong>,<br>
  ↳ <?php echo l::get('ob_partecipanti') ?>: <strong><?= $totale_partecipanti_y ?></strong>,<br>
  ↳ <?php echo l::get('ob_utile') ?>: <strong><?= $totale_utile_y ?></strong> €<br> 
</p>

<h3 class="extra z">⟶ Riepilogo Z</h3>
<p class="legenda z">
  <?php echo l::get('ob_abbiamopropostocomplessivamente') ?> <strong><?= $totale_corsi_z ?> <?php echo l::get('ob_corsi_workshop') ?>,</strong><br>
  <?php echo l::get('ob_diquesti') ?> <?php echo l::get('ob_abbiamosvoltocomplessivamente') ?> <strong><?= $totale_corsi_z_attivati ?> <?php echo l::get('ob_corsi_workshop') ?>,</strong></p>
<p class="legenda rientro z">
  ↳ <?php echo l::get('ob_fattorediconversione') ?>: <strong><?= round((($totale_corsi_z_attivati/$totale_corsi_z)*100),2); ?>%</strong><br>
  ↳ <?php echo l::get('ob_docenze') ?>: <strong><?= $totale_docenti_z ?></strong>,<br>
  ↳ <?php echo l::get('ob_partecipanti') ?>: <strong><?= $totale_partecipanti_z ?></strong>,<br>
  ↳ <?php echo l::get('ob_utile') ?>: <strong><?= $totale_utile_z ?></strong> €<br> 
</p>

<h3 class="extra">⟶ <?php echo l::get('ob_dettagliocorsi_workshop') ?></h3>

  <div class="flexbox">
  <?php foreach (page('didattica')->children()->visible()->sortBy("nextdate")->flip() as $teaching): ?>
    <?php if($teaching->pugliesi()->isNotEmpty() > 0 OR $teaching->nonpugliesi()->isNotEmpty()): ?>
    <div class="item <?= $teaching->xyz() ?>">
    <a href="<?= $teaching->url() ?>" title="<?= $teaching->title() ?>"><strong><?= $teaching->title(); ?></strong></a>
    <p class="title"><?php $nextdate = strtotime($teaching->nextdate()); ?></p>
    <p class="luogo">@ <strong><?= $teaching->luogo(); ?></strong></p><br>
    <p class="scostati">↳ <?= date('d/m/Y', $nextdate) ?></p>
    <?php $partecipanti = $teaching->pugliesi()->value() + $teaching->nonpugliesi()->value(); ?>
    <p class="scostati">↳ <?php echo l::get('ob_ore') ?>: <strong><?= $teaching->lunghezza(); ?></strong></p>
    <?php $numerodocenti = 0; ?>
    <?php foreach($teaching->docenti()->toStructure() as $docente): ?>
      <?php $numerodocenti++; ?>
    <?php endforeach; ?>
    <p class="scostati">↳ <?php echo l::get('ob_docenti') ?>: <strong><?= $numerodocenti; ?></strong></p>
    <p class="scostati">↳ <?php echo l::get('ob_partecipanti') ?>: <strong><?= $partecipanti; ?></strong></p>
    <?php if($teaching->utile()->isEmpty()): ?>
    <p class="scostati">↳ <?php echo l::get('ob_utile') ?>: <strong>0 €</strong></p>
    <?php else: ?>
    <p class="scostati">↳ <?php echo l::get('ob_utile') ?>: <strong><?= $teaching->utile() ?> €</strong></p>
    <?php endif; ?>
    </div>
    <?php endif; ?>
  <?php endforeach;?>
  </div>


<h3 class="extra">⟶ <?php echo l::get('ob_dettaglioeventi_gratuiti') ?></h3>

  <div class="flexbox">
  <?php foreach (page('eventi')->children()->visible()->sortBy("nextdate")->flip() as $teaching): ?>
    <div class="item evento">
    <a href="<?= $teaching->url() ?>" title="<?= $teaching->title() ?>"><strong><?= $teaching->title(); ?></strong></a><br>
    <p class="title"><?php $nextdate = strtotime($teaching->nextdate()); ?></p>
    <p class="scostati">↳ <?= date('d/m/Y', $nextdate) ?></p>
    <p class="scostati">↳ <?php echo l::get('ob_ore') ?>: <strong><?= $teaching->lunghezza(); ?></strong></p>
    <?php $numerodocenti = 0; ?>
    <?php foreach($teaching->docenti()->toStructure() as $docente): ?>
      <?php $numerodocenti++; ?>
    <?php endforeach; ?>
    <p class="scostati">↳ <?php echo l::get('ob_ospiti') ?>: <strong><?= $numerodocenti; ?></strong></p>
    </div>
  <?php endforeach;?>
  </div>


</div>


</div>
<div id="claim">

<div class="titolosezione">
<h2 class="didattica">↓ <?php echo l::get('keywords') ?></h2>
</div>


 <?php $tags = page('didattica')->children()->visible()->pluck('tags', ',', true);?>
          <div class="tags">
            <?php foreach($tags as $tag): ?>
<h3 class="tags cloud"><span class="

                                <?php     $set = array("a", "b", "c", "d", "e", "f", "g", "h");
                                          $random = array_rand($set);
                                          $valore = $set[$random];

                                          echo "$valore";
                                ?>"><?php echo $tag ?> </span></h3>
            <?php endforeach ?>
          </div>

</div>



  





