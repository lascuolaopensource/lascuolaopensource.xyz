<?php $counter = 0; ?>
<?php $i = 0; ?>
<?php $flag = 1; ?>

<div class="titolosezione iniziale">
<h2  class="didattica">↓ <?php echo l::get('tutticorsi') ?></h2>
<h2  class="didattica"><a title="cerca" href="<?php echo l::get('lingua') ?><?php echo l::get('lista') ?>">☞ <?php echo l::get('Lista') ?></a></h2>
<h2  class="didattica"><a title="cerca" href="<?php echo l::get('lingua') ?><?php echo l::get('didattica') ?>/search">&#9998; <?php echo l::get('cercacontenuto') ?></a></h2>
</div>


          <?php foreach(page('didattica')->children()->visible() as $teaching): ?>
                                       <!-- Calcola eventi futuri ed eventi passati -->
               <?php $deadline_php = strtotime($teaching->nextdate()); ?>        

              <?php $remaining = $deadline_php - time(); 
              $day = floor($remaining / 86400);
              $hr  = floor(($remaining % 86400) / 3600);
              $min = floor(($remaining % 3600) / 60);
              $sec = ($remaining % 60); ?>

                <?php if($day >= -1): ?>
                    <?php $counter = $counter +1; ?>
                <?php endif ?> 
          <?php endforeach ?>

    <div class="grid">
          <div class="grid-sizer"></div>
          <?php foreach(page('didattica')->children()->visible()->sortBy('nextdate') as $teaching): ?>
                                       <!-- Calcola eventi futuri ed eventi passati -->
               <?php $deadline_php = strtotime($teaching->nextdate()); ?>        

              <?php $remaining = $deadline_php - time(); 
              $day = floor($remaining / 86400);
              $hr  = floor(($remaining % 86400) / 3600);
              $min = floor(($remaining % 3600) / 60);
              $sec = ($remaining % 60); ?>

                <?php if($day >= -1): ?>
                  
                    <?php $flag = 0; ?>

                <?php if($counter == 3): ?>
                    <div class="grid-item project ho tris" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php elseif($counter == 6): ?>
                    <div class="grid-item project ho tre" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php elseif($counter == 2): ?>
                    <div class="grid-item project ho due" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php elseif($counter == 4): ?>
                    <div class="grid-item project ho tre" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php elseif($counter == 1): ?>
                    <div class="grid-item project ho uno" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php else: ?>
                    <div class="grid-item project ho tre" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php endif ?>
                     
                          <a title="<?php echo $teaching->title() ?>" href="<?php echo $teaching->url() ?>">



                                <h2 class="titolo"><span class="

                                <?php     $set = array("a", "b", "c", "d", "e", "f", "g", "h");
                                          $random = array_rand($set);
                                          $valore = $set[$random];

                                          echo "$valore";
                                ?>">
                                          <?php echo $teaching->title()->excerpt(36) ?></span>
                                </h2>
                        <h2 class="luogo">
                          @ <?php echo $teaching->luogo()->text() ?>
                        </h2>
                        <?php $numerodocenti = 0;?>
                        <?php if($teaching->docenti()): ?>
                        <h2 class="docente"><?php echo l::get('docentecorso') ?><?php echo ' ' ?>
                          <?php foreach (yaml($teaching->docenti()) as $docente): ?>

                            <?php if(!$numerodocenti == 0): ?>
                                    <?php echo ' / '; ?>
                            <?php endif ?>

                                    <strong><?php echo $docente["nome"] ?></strong>

                            <?php $numerodocenti = $numerodocenti +1;?>
                          
                          <?php endforeach ?>
                        </h2>
                        <?php endif ?> 
 
                                <h3 class="category"><strong><?php echo $teaching->category() ?></strong> <?php echo l::get('dilivello') ?> <strong><?php echo $teaching->level() ?></strong></h3>
                                <?php $tags = $teaching->tags()->split(); ?>
                                <div class="tags">
                                    <?php foreach($tags as $tag): ?>
                                    <h3 class="tags"><?php echo $tag ?></h3>
                                    <?php endforeach ?>
                                </div>
                                <div class="date">

                                    <h5 class="deadline"><strong><?php echo l::get('deadline') ?></strong> 
                                    <?php $deadline_raffinata = strtotime($teaching->deadline());
                                        $quantomanca = $deadline_raffinata - time(); 
                                        $giornata = floor($quantomanca / 86400); ?>

                                        <?php if ($giornata > -1): ?>
                                    <?php $deadline = strtotime($teaching->deadline());
                                                                echo date('d F Y', $deadline);?>
                                        <?php else: ?>
                                        <?php echo l::get('deadlinechiusa') ?>
                                      <?php endif ?>
                                        </h5><br>

                                    <h5 class="deadline"><strong><?php echo l::get('inizio') ?></strong> 
                                    <?php $nextdate = strtotime($teaching->nextdate());
                                                                echo date('d F Y', $nextdate);?>
                                    </h5>   


<div class="tooltip">

<div class="elemento preview">
<svg id="svg_<?php echo $i ?>" width="<?php echo $teaching->num_min()->html() ?>" height="10"
    xmlns="http://www.w3.org/2000/svg">

<g        transform="scale(20)" >

  <rect id="minimo_<?php echo $i ?>"
        class="grigio"
        fill="gray"
        
        x="0" 
        y="0" 

        height="10" 
        width="0"
  />

  <rect id="viz_<?php echo $i ?>"
        class="<?php echo $teaching->xyz() ?>"

        x="0" 
        y="0" 

        height="10" 
        width="0"
  />



</g>
</svg>
</div>

  <div class="tooltiptext normal">
<div class="<?php echo $teaching->xyz() ?> container" id="container<?php echo $i ?>"></div>
  </div>
</div>

 

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
      var goal = '<?php echo $page->num_max()->html(); ?>';
      var iscritti = counterRows;
      var i= '<?php echo $i ?>';
      //Container è il div radice in cui inserire dinamicamente i div in cui vengono visualizzati i dati
      //Puoi personalizzare la classe dei div generati automaticamente
      $('#container'+i).append('<span id="black" class="black"><?php echo l::get('iscritti') ?></span> ' + counterRows + ' <span id="minimo" class="grigio">MIN: ' + '<?php echo $teaching->num_min()->html() ?>' + '</span><span class="nerovero"> MAX: ' + '<?php echo $teaching->num_max()->html() ?></span>');
      $('#viz_'+i).attr("width", counterRows);
      $('#minimo_'+i).attr("width", '<?php echo $teaching->num_min()->html() ?>');
      }
  </script>
    <?php $i++; ?>

                                </div>          

                          </a>
                    </div>

                <?php endif ?>

          <?php endforeach ?>
    </div>
          <?php if($flag > 0): ?>


              <div id="alert" class="titolosezione">
                  <h1 class="didattica"><?php echo l::get('nocorsi') ?></h1>
              </div>
          <?php endif ?> 


<div id="veditutti" class="titolosezione">
<h2 class="didattica b"><a title="esplora" href="<?php echo l::get('lingua') ?><?php echo l::get('didattica') ?>">&#9713; <?php echo l::get('esplora') ?></a></h2>
        <h2 id="search"  class="didattica b d">
            <a title="proponi" href=<?php echo l::get('linkform') ?> target="_blank">
            ↯ <?php echo l::get('proponicorso') ?></a>
        </h2>

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



  