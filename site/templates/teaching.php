<?php snippet('head2') ?>
<script>
fbq('track', 'ViewContent');
</script>
<body>
  <?php snippet('logodue') ?>
  <?php snippet('menu2') ?>
  <?php snippet('lang') ?>
  <div class="scheda">
    <div class="testata <?php echo $page->xyz()->html() ?>">
      <p class="docente a"><?php echo l::get('didattica') ?> / <?php echo $page->xyz()->html() ?> — <strong><?php echo $page->category()->html() ?></strong> @ <strong><?php echo $page->luogo()->text() ?><strong></p>
      <h2 class="corso"><span class="<?php     $set = array("a", "b", "c", "d", "e", "f", "g", "h"); $random = array_rand($set); $valore = $set[$random]; echo "$valore"; ?>"><?php echo $page->title()->html() ?></span></h2>
      <?php foreach (yaml($page->docenti()) as $docente): ?>
      <p class="docente b"><strong><?php echo $docente["nome"] ?></strong> — <?php echo $docente["professione"] ?> <?php echo $docente["organizzazione"] ?></p>
      <?php endforeach ?>
      <?php         $nextdate_php = strtotime($page->nextdate());
      $deadline_php = strtotime($page->deadline());
      $today        = strtotime(date("d/m/Y"));
      $difference   = $nextdate_php - time();
      $remaining    = $deadline_php - time();
      $day          = floor($remaining / 86400);
      $hr           = floor(($remaining % 86400) / 3600);
      $min          = floor(($remaining % 3600) / 60);
      $sec          = ($remaining % 60);
      ?>
      <?php if (!$page->formid()->isEmpty()): ?>
      <?php if (!$page->excel()->isEmpty()): ?>
      <?php if($day >= 0): ?>
      <div id="paypal">
        <h2 class="apply">
        <a title="iscriviti" href="<?php echo $page->formid()->html() ?>" target="_blank">
          <?php echo l::get('submit') ?>
        </a>
        </h2>
      </div>
      <?php   $id = str_replace('didattica/', '', $page->id()); ?>
      <a class="stampa" title="PRINT A4" href="/a4-teaching/tag:<?= $id ?>" target="_blank">
        <?php echo l::get('stampa') ?>
      </a>
      <?php endif ?>
      <?php endif ?>
      <?php endif ?>
    </div>
    <!--<?php $image = $page->image($page->cover()); ?>
    <img src="<?php echo thumb($image, array('width' => 1600, 'height' => 900, 'crop' => true))->url(); ?>">
    -->
    <?php snippet('gallery') ?>
    <div class="contenitore">
      <div class="unmezzo"><h2><?php echo l::get('tipologiattivita') ?><strong><?php echo $page->category()->html() ?></strong></h2></div>
      <div class="unmezzo"><h2><?php echo l::get('livellodifficolta') ?><strong><?php echo $page->level()->html() ?></strong></h2></div>
      <div class="details">
        <?php if($difference <= 0): ?>
        <?php else: ?>
        <?php if($day >= 0): ?>
        <div class="filetto"></div>
        <h3><?php echo l::get('deadline') ?></h3>
        <div id="clockdiv">
          <div class="modulo">
            <span class="days"></span>
            <div class="giorni"><?php echo l::get('giorni') ?><span><?php echo $day; ?></span></div>
          </div>
          <div class="modulo">
            <span class="hours"></span>
            <div class="ore"><?php echo l::get('ore') ?><span><?php echo $hr; ?></span></div>
          </div>
          <div class="modulo">
            <span class="minutes"></span>
            <div class="minuti"><?php echo l::get('minuti') ?><span><?php echo $min; ?></span></div>
          </div>
          <div class="modulo">
            <span class="seconds"></span>
            <div class="secondi"><?php echo l::get('secondi') ?><span><?php echo $sec; ?></span></div>
          </div>
        </div>
        
        <?php endif ?>
        <?php endif ?>
        <div class="filetto"></div>
        <h3><?php echo l::get('ambititematici') ?></h3><br>
        <?php $tags = $page->tags()->split(); ?>
        <ul>
          <?php foreach($tags as $tag): ?>
          <li><?php echo $tag ?></li>
          <?php endforeach ?>
        </ul>
        <div class="filetto"></div>
        <h3><?php echo l::get('modalita') ?><strong><?php echo $page->svolgimento()->html() ?></strong></h3>
        <!--        <strong><?php $nextdate = strtotime($page->nextdate());
        echo date('d/m/Y', $nextdate);?></strong></h3>-->
        <?php if (!$page->appuntamenti()->isEmpty()): ?>
        <h3 class="stacca"><?php echo l::get('iniziocorso') ?></h3>
        <?php $dates = $page->appuntamenti()->yaml();
        foreach($dates as $date): ?>
        <div class="linea"><h3><strong><?php echo date('d/m/Y', strtotime($date['appuntamento'])) ?></strong><span class="orario"><?php echo $date["inizio"] ?> / <?php echo $date["fine"] ?></span></h3></div>
        <?php endforeach ?>
        <?php endif ?>
        <div class="filetto"></div>
        <h3 class="luogo"><?php echo l::get('luogo') ?> <strong><?php echo $page->luogo()->text() ?></strong></h3>
      </div>
      <div class="details">
        <div class="filetto"></div>
        <h3><?php echo l::get('durataincontri') ?><strong><?php echo $page->durata()->html() ?> <?php echo l::get('hours') ?></strong> <br><?php echo l::get('peruntotaledi') ?><strong><?php echo $page->lunghezza()->html() ?> <?php echo l::get('hours') ?></strong></h3>
        <div class="filetto"></div>
        <?php if ($page->prezzo()->isEmpty()): ?>
        <h3><?php echo l::get('attivitagratuita') ?></h3>
        <?php else: ?>
        <h3><?php echo l::get('costoattivita') ?><strong><?php echo $page->prezzo()->html() ?> €</strong></h3>
        <?php endif ?>
        <?php if ($page->ragione()->isEmpty()): ?>
        <?php else: ?>
        <h3><strong><?php echo $page->ragione()->html() ?></strong></h3>
        <?php endif ?>
        <div class="filetto"></div>
        <h3>Output: <strong><?php echo $page->output()->KirbyText() ?></strong></h3>
        <div class="filetto"></div>
        <h3><?php echo l::get('consigliataper') ?><br> <strong><?php echo $page->audience()->html() ?></strong></h3>
        <div class="filetto"></div>
        <h3><?php echo l::get('numerominimo') ?><strong><?php echo $page->num_min()->html() ?></strong></h3>
        <h3><?php echo l::get('numeromassimo') ?><strong><?php echo $page->num_max()->html() ?></strong></h3>
        <div class="filetto"></div>
        <h3 id="iscritti"><?php echo l::get('iscritti') ?> <strong></h3>
        <?php $i = 0; ?>
        <div id="container" class="elemento">
          <svg id="svg_<?php echo $i ?>" width="<?php echo $page->num_min()->html() ?>" height="10"
            xmlns="http://www.w3.org/2000/svg">
            <g id="bar">
              <rect id="minimo"
              class="grigio"
              fill="gray"
              
              x="0"
              y="0"
              height="10"
              width="0"
              />
              <rect id="viz"
              class="<?php echo $page->xyz() ?>"
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
        Tabletop.init( { key: '<?php echo $page->excel()->html(); ?>',
        callback: showInfo,
        simpleSheet: true } );
        }
        
        function showInfo(data) {
        var counterRows = data.length;
        var minimo = '<?php echo $page->num_min()->html() ?>';
        var goal = '<?php echo $page->num_max()->html(); ?>';
        var iscritti = counterRows;
        var i= '<?php echo $i ?>';
        //Container è il div radice in cui inserire dinamicamente i div in cui vengono visualizzati i dati
        //Puoi personalizzare la classe dei div generati automaticamente
        $('#iscritti').append(counterRows + ' / ' + '<?php echo $page->num_min()->html() ?>');
        $('#viz').attr("width", counterRows);
        $('#minimo').attr("width", '<?php echo $page->num_min()->html() ?>');
        }
        </script>
      </div>
      <div id="corso" class="more">
        <?php if (!$page->docenti()->isEmpty()): ?>
        <div class="docenti">
          <h3 class="meta"><?php echo l::get('docentecorso') ?></h3>
          <ul>
            <?php $numerodocenti = 0 ?>
            <?php foreach (yaml($page->docenti()) as $docente): ?>
            <?php $numerodocenti = $numerodocenti + 1 ?>
            <?php endforeach ?>
            <?php foreach (yaml($page->docenti()) as $docente): ?>
            <?php if($numerodocenti == 1): ?>
            <li class="unico">
              <?php else: ?>
              <li>
                <?php endif ?>
                <p class="nome"><strong><?php echo $docente["nome"] ?></strong></p>
                <p class="professione"><?php echo $docente["professione"] ?> / <?php echo $docente["organizzazione"] ?></p>
                <p class="bio"><?php echo $docente["bio"] ?></p>
              </li>
              <?php endforeach ?>
            </ul>
          </div>
          <?php endif ?>
          <div class="colonna">
            <h2><?php echo l::get('cosacorso') ?></h2>
            <br>
            <?php echo $page->bisogni()->kt() ?>
            <br>
            <h2><?php echo l::get('outputcorso') ?></h2>
            <br>
            <?php echo $page->output2()->kt() ?>
          </div>
          <div class="colonna">
            <h2><?php echo l::get('comecorso') ?></h2>
            <br>
            <?php echo $page->programma()->kt() ?>
            <br>
            <br>
            <h3 class="approfondimento"><a title="opendoc" href="<?php echo l::get('opendoc') ?>" target="_blank"><?php echo l::get('opendocdida') ?></a></h3>
          </div>
        </div>
        <!--    Bottone paypal per pagamento diretto
        <div id="paypal">
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="<?php echo $page->paypal()->html() ?>">
            <input type="image" src="<?php echo l::get('iscriviti') ?>" border="0" name="submit" alt="Iscriviti">
            <img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
          </form>
        </div>
        -->
        <?php if (!$page->formid()->isEmpty()): ?>
        <?php if (!$page->excel()->isEmpty()): ?>
        <?php if($day >= 0): ?>

        <?php if (!$page->prezzo()->isEmpty()): ?>  
        <div id="evento" class="nota">
          <p>↳ <?php echo l::get('testo1') ?></p>
          <p><br><?php echo l::get('testo2') ?></p>
          <div id="evento" class="colonna">
            <p id="si"><?php echo l::get('opzione1dettaglio') ?></p>
          </div>
          <div id="evento" class="colonna">
            <p id="no"><?php echo l::get('opzione2dettaglio') ?></p>
          </div>
          <p><?php echo l::get('chiusa') ?></p>
        </div>
        <div id="paypal">
          <h2 class="apply">
          <a title="iscriviti" href="<?php echo $page->formid()->html() ?>" target="_blank">
            <?php echo l::get('submit') ?>
          </a>
          </h2>
        </div>
        <?php else: ?>
                <div id="evento" class="nota">
          <p>↳ <?php echo l::get('testo1') ?></p>
          <p><br><?php echo l::get('testo2') ?></p>
          <div id="evento" class="colonna">
            <p id="si"><?php echo l::get('opzione1dettagliogratis') ?></p>
          </div>
          <div id="evento" class="colonna">
            <p id="no"><?php echo l::get('opzione2dettaglio') ?></p>
          </div>
          <p><?php echo l::get('chiusa') ?></p>
        </div>
        <div id="paypal">
          <h2 class="apply">
          <a title="iscriviti" href="<?php echo $page->formid()->html() ?>" target="_blank">
            <?php echo l::get('submit') ?>
          </a>
          </h2>
        </div>


        <?php endif; ?>
        <?php endif; ?>
        <?php endif; ?>
        <?php endif; ?>
      </div>
      
      <div class="socialshare">
        <h3 class="social">Condividi su:</h3>
        <a class="social"href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @your_account')?>" target="blank" title="Tweet this">
          <img src="/assets/images/twitter.svg">
        </a>
        <a class="social" href="https://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook">
          <img src="/assets/images/facebook.svg">
        </a>
        <a class="social" href="https://plusone.google.com/_/+1/confirm?hl=de&url=<?php echo rawurlencode ($page->url()); ?>&title=<?php echo rawurlencode($page->title()); ?>" target="blank" title="Share on Google+">
          <img src="/assets/images/google.svg">
        </a>
      </div>
    </div>
        <?php snippet('home_membership') ?>  
    <?php snippet('teachings') ?>
    <?php snippet('newslettersnipp') ?>
    <?php snippet('footer2') ?>