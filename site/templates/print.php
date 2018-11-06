<html moznomarginboxes mozdisallowselectionprint>
<?php snippet('headprint') ?>



  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<script type="text/javascript">
 $(window).load(function(){        
   $('#myModal').modal('show');
    }); 
</script>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h3><?php echo l::get('printme') ?></h3>
      </div>
      <div class="modal-body">
    <p><?php echo l::get('indicazioni') ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
      </div>
    </div>

  </div>
</div>



<body>
<?php // fetch the basic set of articles

if($tag = param('tag')) {
  $contenuto = page('didattica/'.$tag);
}

?>


<?php foreach(page('didattica')->children() as $teaching): ?>

<?php if($teaching->id() == $contenuto): ?>



        <!-- titolo -->

        <p class="xyz"><?php echo l::get('didattica') ?> / <?php echo $teaching->xyz()->html() ?> — <strong><?php echo $teaching->category()->html() ?></strong></p>

        <div class="testata <?php echo $page->xyz()->html() ?>">

                <h2 class="corso">

                        <span class="<?php     $set = array("a", "b", "c", "d", "e", "f", "g", "h"); $random = array_rand($set); $valore = $set[$random]; echo "$valore"; ?>">
                        <?php echo $teaching->title()->excerpt(42) ?>
                        </span>

                </h2>

        </div>







        <!-- docenti -->

                        <?php foreach (yaml($teaching->docenti()) as $docente): ?>
                                    <p class="docente b"><strong><?php echo $docente["nome"] ?></strong> — <?php echo $docente["organizzazione"] ?></p>
                        <?php endforeach ?>



        <div class="colonna">

        <!-- date e orari del corso -->


        <?php if (!$teaching->appuntamenti()->isEmpty()): ?>

        <h3 class="stacca"><?php echo l::get('iniziocorso') ?></h3>

        <?php $dates = $teaching->appuntamenti()->yaml();

          foreach($dates as $date): ?>

            <div class="linea"><h3><strong><?php echo date('d/m/Y', strtotime($date['appuntamento'])) ?></strong><span class="orario"><?php echo $date["inizio"] ?> / <?php echo $date["fine"] ?></span></h3></div>

        <?php endforeach ?>

        <h3 class="stacca"><?php echo l::get('deadline') ?></h3>

        <!-- deadline -->
      <strong><?php $deadline = strtotime($teaching->deadline());
                            echo date('d/m/Y', $deadline);?></strong></h3>


    </div>

    <div class="colonna">

        <!-- tags -->

        <h3 class="stacca"><?php echo l::get('ambititematici') ?></h3><br>
              <?php $tags = $teaching->tags()->split(); ?>
              <?php foreach($tags as $tag): ?>
            <h5 class="tag">  
              <?php echo $tag ?>
            </h5>
              <?php endforeach ?>

        </div>



        <!-- testi  -->

                <div class="testo">
                    <div class="colonna uno">
                    <h2 class="titolino"><?php echo l::get('cosacorso') ?></h2>
                    <p class="testo"> <?= excerpt($teaching->bisogni()->kirbytext(), 900) ?></p>
                    </div>
                    <div class="colonna uno">
                    <h2 class="titolino"><?php echo l::get('outputcorso') ?></h2>
                    <p class="testo"> <?= excerpt($teaching->output2()->kirbytext(), 300) ?></p>
                    </div>

                    <div class="colonna uno">
                    <h2 class="titolino"><?php echo l::get('comecorso') ?></h2>
                    <p class="testo">
                        <?= excerpt($teaching->programma()->kirbytext(), 300) ?><hr>
                       <strong>MORE:</strong> lascuolaopensource.xyz/<strong><?= $teaching->id() ?></strong></p>
                    </div>
                </div>





                <div class="meta">

        <!-- level  -->

        <h2><?php echo l::get('livellodifficolta') ?><strong><?php echo $teaching->level()->html() ?></strong></h2>

        <h2><?php echo l::get('costoattivita') ?><strong><?php echo $teaching->prezzo()->html() ?> €</strong></h2>

    </div>
        <?php endif; ?>



<?php else: ?>

<?php endif ?>

<?php endforeach; ?>

<?php snippet('footerprint') ?>
