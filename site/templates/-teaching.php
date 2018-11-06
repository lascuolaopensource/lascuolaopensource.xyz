        <?php snippet('head') ?>

<script>
fbq('track', 'ViewContent');
</script>

<body>
        <?php snippet('logo') ?>     
        <?php snippet('menu') ?>
        <?php snippet('lang') ?>

        <div class="scheda">
        <div class="testata">

        <h1 class="corso"><?php echo $page->title()->html() ?></h1>
        </div>

	    <!--<?php $image = $page->image($page->cover()); ?>
	    <img src="<?php echo thumb($image, array('width' => 1600, 'height' => 900, 'crop' => true))->url(); ?>">
		-->
                <?php snippet('gallery') ?>  

        <div class="contenitore">
        <div class="unmezzo"><h2><?php echo l::get('tipologiattivita') ?><strong><?php echo $page->category()->html() ?></strong></h2></div>
        <div class="unmezzo"><h2><?php echo l::get('livellodifficolta') ?><strong><?php echo $page->level()->html() ?></strong></h2></div>

        <div class="details">

        <?php
                     $nextdate    = strtotime($page->nextdate());
                     $today       = (date("d-m-Y"));
                     $datediff    = $nextdate - $today;
                     $difference  = floor($datediff/(7*60*60*24*10)-245); 
        ?>  

        <?php if($difference == 0): ?>
        <?php else: ?>

        <?php if (!$page->deadline()->isEmpty()): ?>

        <div class="filetto"></div>

        <h3><?php echo l::get('deadline') ?></h3>

        <?php $deadline_php = strtotime($page->deadline()); ?>
        

<?php $remaining = $deadline_php - time(); 
      $day = floor($remaining / 86400);
      $hr  = floor(($remaining % 86400) / 3600);
      $min = floor(($remaining % 3600) / 60);
      $sec = ($remaining % 60); ?>


         <div id="clockdiv">
           <div class="modulo">
             <span class="days"></span>
             <div class="giorni">Giorni: <span><?php echo $day; ?></span></div>
           </div>
           <div class="modulo">
             <span class="hours"></span>
             <div class="ore">Ore: <span><?php echo $hr; ?></span></div>
         </div>
           <div class="modulo">
             <span class="minutes"></span>
             <div class="minuti">Minuti: <span><?php echo $min; ?></span></div>
         </div>
           <div class="modulo">
             <span class="seconds"></span>
             <div class="secondi">Secondi: <span><?php echo $sec; ?></span></div>
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
                            echo date('d-m-Y', $nextdate);?></strong></h3>-->

        <?php if (!$page->appuntamenti()->isEmpty()): ?>

        <h3 class="stacca"><?php echo l::get('iniziocorso') ?></h3>

          <?php $dates = $page->appuntamenti()->yaml();

          foreach($dates as $date): ?>

            <div class="linea"><h3><strong><?php echo date('d-m-Y', strtotime($date['appuntamento'])) ?></strong><span class="orario"><?php echo $date["inizio"] ?> / <?php echo $date["fine"] ?></span></h3></div>

          <?php endforeach ?> 

        <?php endif ?>
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
        <div class="filetto"></div>
        <h3>Output: <strong><?php echo $page->output()->KirbyText() ?></strong></h3>
        <div class="filetto"></div>
        <h3><?php echo l::get('consigliataper') ?><br> <strong><?php echo $page->audience()->html() ?></strong></h3>
        <div class="filetto"></div>
        <h3><?php echo l::get('numerominimo') ?><strong><?php echo $page->num_min()->html() ?></strong></h3>
        <h3><?php echo l::get('numeromassimo') ?><strong><?php echo $page->num_max()->html() ?></strong></h3>

        <?php if (!$page->excel()->isEmpty()): ?>

        <div class="filetto"></div>

        <h3><?php echo l::get('avanzamentoiscrizioni') ?><br><span class="lilla"><?php echo l::get('lilla') ?></span><br><span class="verde"><?php echo l::get('verde') ?></span></h3>
    
<script type="text/javascript">

      window.onload = function() { init() };

      //Il campo key va valorizzato con la public key del documento che si intende leggere
      function init() {
        Tabletop.init( { key: '<?php echo $page->excel()->html(); ?>',
                         callback: showInfo,
                         simpleSheet: true } );
      }

      function showInfo(data) {
      //leggo le entry in tabella e valorizzo la variabile. La progressBar avrà come variabile "iscritti" non più quella settata in precedenza ma questa (counterRows)
      var counterRows = data.length;
      var minimo = '<?php echo $page->num_min()->html(); ?>';
      var goal = '<?php echo $page->num_max()->html(); ?>';
      var iscritti = counterRows;
      
      if(iscritti < minimo){
        $(document).ready(function(){
            $('#goal').goalProgress({
                goalAmount: goal,
                currentAmount: iscritti,
                textBefore: '',
                textAfter: ' / <?php echo $page->num_max()->html(); ?>'
            });
        });
        } 
       else {
          var sheet = document.createElement('style')
          //Override stile barra
          //Modifica qui sotto il colore della barra al raggiungimento del numero minimo di iscritti 
          sheet.innerHTML = "div.progressBar {background-color: rgba(107,247,82,1); color: rgba(107,247,82,1); height: 1.5em;}";
          document.body.appendChild(sheet);
          $(document).ready(function(){
            $('#goal').goalProgress({
                goalAmount: goal,
                currentAmount: iscritti,
                textBefore: '',
                textAfter: ' / <?php echo $page->num_max()->html(); ?>'
            });
        });
           }
        }
        </script>
    <!-- elemento in cui viene inserita la progressBar -->
        <div class="container"><div id="goal"></div></div>
        <?php endif ?>        



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

        <a href="<?php echo $page->formid()->html() ?>" target="_blank">
        <img src="<?php echo l::get('iscriviti') ?>" border="0" name="submit" alt="Iscriviti" />
        </a>
        </div>

        <?php endif ?>
        <?php endif ?>


        <div id="corso" class="more">

                    <?php if (!$page->docenti()->isEmpty()): ?>
                    <div class="docenti">
                    <h3 class="meta"><?php echo l::get('docentecorso') ?></h3>
                    <ul>
                        <?php foreach (yaml($page->docenti()) as $docente): ?>
                        <li>
                            <p class="nome"><strong><?php echo $docente["nome"] ?></strong></p>
                            <p class="professione"><?php echo $docente["professione"] ?> / <?php echo $docente["organizzazione"] ?></p>
                            <p class="bio"><?php echo $docente["bio"] ?></p>
                        </li>
                        <?php endforeach ?>
                    </ul>
                    </div>
                    <?php endif ?>

                    <div class="colonna">
                    <h1><?php echo l::get('cosacorso') ?></h1>
                    <br>
                    <?php echo $page->bisogni()->kt() ?>
                    <br>
                    <h1><?php echo l::get('outputcorso') ?></h1>
                    <br>
                    <?php echo $page->output2()->kt() ?>
                    </div>

                    <div class="colonna">
                    <h1><?php echo l::get('comecorso') ?></h1>
                    <br>
                    <?php echo $page->programma()->kt() ?>
                    <br>
                    <br>
                    <h3 class="approfondimento"><a href="<?php echo l::get('opendoc') ?>" target="_blank"><?php echo l::get('opendocdida') ?></a></h3>
                    </div>


         </div>

        </div>
        </div>
        <?php snippet('teachings') ?>  

        <?php snippet('footer2') ?>



