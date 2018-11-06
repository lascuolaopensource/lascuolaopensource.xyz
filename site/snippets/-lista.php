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
  <?php $i = 0; ?>
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

         <?php if($counter == 3): ?>
                    <div class="grid-item project tre" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php elseif($counter == 6): ?>
                    <div class="grid-item project tre" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php elseif($counter == 2): ?>
                    <div class="grid-item project due" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php elseif($counter == 4): ?>
                    <div class="grid-item project due" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php elseif($counter == 1): ?>
                    <div class="grid-item project uno" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php else: ?>
                    <div class="grid-item project" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $teaching->tags())) ?>">
                <?php endif ?>

                                <h2 class="titolo"><span class="

                                <?php     $set = array("a", "b", "c", "d", "e", "f", "g", "h");
                                          $random = array_rand($set);
                                          $valore = $set[$random];

                                          echo "$valore";
                                ?>">
                                          <?php echo $teaching->title()->excerpt(50) ?></span>
                                </h2>      <!-- <p><?php echo $teaching->prezzo() ?></p>     <p><?php echo $teaching->excel()->html(); ?></p>-->

        <div class="container" id="container<?php echo $i ?>"></div>
       
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
      $('#container'+i).append('<div id="result" class="counter">' + '<span class="iscritti">' + '<?php echo l::get('counter') ?>: ' + '<strong>' + counterRows + '</strong>' + ' / ' + '<?php echo $teaching->num_min()->html() ?>' + ' min.' + '</span>' + '<br>' + 'max. ' + '<?php echo $teaching->num_max()->html() ?>' + '</strong></div>');
      }
  </script>
    <?php $i++; ?>

                <?php endif ?> 

  <?php endforeach ?>


</div>
