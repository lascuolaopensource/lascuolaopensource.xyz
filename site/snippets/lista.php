<?php $counter = 0; ?>
<?php $i = 0; ?>

<!--<div id="lista" class="grid projects">
  <div class="grid-sizer"></div>
  <?php foreach(page('didattica')->children()->visible() as $teaching): ?>
  <div class="grid-item project" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
      <h1 class="titolo"><?php echo $teaching->title()->excerpt(50) ?></h1>
        <?php if (!$teaching->iscritti()->isEmpty()): ?>
        <h3 class="counter"><?php echo l::get('counter') ?><strong><?php echo $teaching->iscritti()->html() ?> / <?php echo $teaching->num_min()->html() ?> min.</strong></h3>        
        <?php else: ?>
        <h3 class="counter">&#9998; <?php echo l::get('zeroiscritti') ?></h3>        
        <?php endif ?>
  </div>
  <?php endforeach ?>
</div>-->

<div id="claim">
<h2 class="title"><?php echo l::get('listatestouno') ?></h2>


</div>


          <?php foreach(page('didattica')->children()->visible() as $teaching): ?>
                                       <!-- Calcola eventi futuri ed eventi passati -->
               <?php $deadline_php = strtotime($teaching->nextdate()); ?>        

              <?php $remaining = $deadline_php - time(); 
              $day = floor($remaining / 86400);
              $hr  = floor(($remaining % 86400) / 3600);
              $min = floor(($remaining % 3600) / 60);
              $sec = ($remaining % 60); ?>

                <?php if($day > -1): ?>
                    <?php $counter = $counter +1; ?>
                <?php endif ?> 
          <?php endforeach ?>

<div id="lista" class="grid projects">
  <div class="grid-sizer"></div>

                      <div class="elemento legenda">
                                <h2 class="titolo"><span class="

                                <?php     $set = array("a", "b", "c", "d", "e", "f", "g", "h");
                                          $random = array_rand($set);
                                          $valore = $set[$random];

                                          echo "$valore";
                                ?>">
                                          <?php echo l::get('titolo') ?></span>
                                          <span class="data">Deadline
                                          </span>
                                </h2> 

                      </div>  

  <?php foreach(page('didattica')->children()->visible()->sortBy('deadline') as $teaching): ?>

                    <!-- Calcola eventi futuri ed eventi passati -->
<?php         $nextdate_php = strtotime($teaching->nextdate());
              $deadline_php = strtotime($teaching->deadline()); 
              $today        = strtotime(date("d-m-Y"));
              $difference   = $nextdate_php - time(); 
              $remaining    = $deadline_php - time(); 
              $day          = floor($difference / 86400);
              $hr           = floor(($difference % 86400) / 3600);
              $min          = floor(($difference % 3600) / 60);
              $sec          = ($remaining % 60);
?>
       <?php if($day >= 0): ?>

                    <div class="elemento">

                                <div class="<?php echo $teaching->xyz() ?> container" id="container<?php echo $i ?>"></div>

                                <a href="<?php echo $teaching->url() ?>" title="<?php echo $teaching->title() ?>">

                                <h2 class="titolo <?php echo $teaching->xyz() ?>"><span class="

                                <?php     $set = array("a", "b", "c", "d", "e", "f", "g", "h");
                                          $random = array_rand($set);
                                          $valore = $set[$random];

                                          echo "$valore";
                                ?>">
                                          <?php echo $teaching->title()->excerpt(50) ?></span>
                                          <span class="data <?php echo $teaching->xyz() ?>">
                                                                              <?php $deadline = strtotime($teaching->deadline());
                                                                echo date('d / m / Y', $deadline);?>
                                          </span>
                                </h2>   
                        <h2 class="luogo">
                          @ <?php echo $teaching->luogo()->text() ?>
                        </h2>
                                                      </a>   


<svg id="svg_<?php echo $i ?>" width="<?php echo $teaching->num_min()->html() ?>" height="10"
    xmlns="http://www.w3.org/2000/svg">

<g id="bar">

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
      $('#container'+i).append(counterRows + ' / ' + '<?php echo $teaching->num_min()->html() ?>');
      $('#viz_'+i).attr("width", counterRows);
      $('#minimo_'+i).attr("width", '<?php echo $teaching->num_min()->html() ?>');
      }
  </script>
    <?php $i++; ?>

       <?php endif; ?>

  <?php endforeach; ?>


</div>

<div id="claim">
<h2 class="title"><?php echo l::get('listatestodue') ?></h2>

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
