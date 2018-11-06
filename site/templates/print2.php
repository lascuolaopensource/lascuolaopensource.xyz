<html moznomarginboxes mozdisallowselectionprint>
<?php snippet('headprint2') ?>



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



<body class="event">
<?php // fetch the basic set of articles

if($tag = param('tag')) {
  $contenuto = page('eventi/'.$tag);
}

?>


<?php foreach(page('eventi')->children() as $teaching): ?>

<?php if($teaching->id() == $contenuto): ?>



        <!-- titolo -->

        <p class="xyz"><?php echo $teaching->category()->html() ?> @ <?php echo $teaching->luogo()->html() ?></p>

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



        <h3 class="stacca">DATA:</h3>

            <div class="linea">
              <h3>
                <strong><?php $nextdate = strtotime($teaching->nextdate()); echo date('d/m/Y', $nextdate);?></strong>
              </h3>
            </div>



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
                    <h2 class="titolino">ABSTRACT:</h2>
                    <p class="testo"> <?= excerpt($teaching->description()->kirbytext(), 600) ?> → Continua la lettura su: <strong><?= $teaching->url() ?></strong></p>
                    </div>
                </div>





                <div class="meta">

        <!-- level  -->

        <h2>Questo evento è <strong>gratuito</strong> e <strong>aperto a tutti</strong>.</h2>

    </div>


<?php else: ?>

<?php endif ?>

<?php endforeach; ?>

<?php snippet('footerprint') ?>
