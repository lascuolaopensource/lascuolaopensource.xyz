

<div class="laptop"><?php 

echo '<div class="fotorama" data-autoplay="true" data-width="100%"  data-allowfullscreen="false" >'
      ?>

<!--  <?php foreach($page->gallery1()->yaml() as $image): ?>
  <?php if($img = $page->image($image)): ?>
      <img src="<?= $img->url() ?>" alt="<?= $page->title()->html() ?>" />
  <?php endif ?>
  <?php endforeach ?> -->


<a href="https://www.youtube.com/watch?v=ioyRfHwcaZA" class="video">
  <img src="/assets/images/jolly.jpg" alt="XYZ2018">
</a>

<!-- <div class="testata cover event xyz">
        <a href="http://www.lascuolaopensource.xyz/XYZ2018/" title="XYZ2018">
          <p class="docente a"><span>START ☛ <strong>23 July 2018</strong></span> <span class="deadline">DEADLINE ☛ <strong>23 June 2018</strong></span></p><br>


        <h2 class="corso"><span class="<?php $set = array("a", "b", "e", "f", "g", "h"); $random = array_rand($set); $valore = $set[$random]; echo "$valore"; ?>">XYZ 2018</span></h2>

                        <p class="docente b">
                          6 docenti + 3 tutor + 3 coordinatori + 60 partecipanti + i soggetti residenti
                        </p>
        </a>
</div>-->


<?php       if(page('eventi')->hasVisibleChildren() > 0): ?>
            <?php foreach(page('eventi')->children()->visible()->flip() as $event): ?>
               <?php $deadline_event = strtotime($event->nextdate()); ?>        
              <?php $remaining_event = $deadline_event - time(); 
              $day_event = floor($remaining_event / 86400); ?>
                <?php if($day_event >= -1): ?>

<div class="testata cover event">
        <a href="<?php echo $event->url() ?>" title="upcomingevent">
          <p class="docente a"><?php echo l::get('prossimieventi') ?><span class="deadline">  ☛ <strong>

            <?php $nextdate = strtotime($event->nextdate()); echo date('d F Y', $nextdate);?>
              
            </strong></span></p><br>

        <h2 class="corso"><span class="<?php $set = array("a", "b", "e", "f", "g", "h"); $random = array_rand($set); $valore = $set[$random]; echo "$valore"; ?>"><?php echo $event->title()->html()->excerpt(3,'words') ?></span></h2>


                        <?php $numerodocenti = 0;?>
                        <?php if($event->docenti()): ?>
                        <p class="docente b">
                          <?php foreach (yaml($event->docenti()) as $docente): ?>

                            <?php if(!$numerodocenti == 0): ?>
                                    <?php echo ' / '; ?>
                            <?php endif ?>

                                    <strong><?php echo $docente["nome"] ?></strong>

                            <?php $numerodocenti = $numerodocenti +1;?>
                          
                          <?php endforeach ?>
                        </p>
                        <?php endif ?>


      </a>
        </div>
                <?php endif ?> 
          
          <?php endforeach ?>

          <?php endif ?>

<?php       if(page('didattica')->hasVisibleChildren() > 0): ?>
            <?php foreach(page('didattica')->children()->visible()->sortBy('deadline') as $corso): ?>
               <?php $deadline_corso = strtotime($corso->nextdate()); ?>        
              <?php $remaining_corso = $deadline_corso - time(); 
              $day_corso = floor($remaining_corso / 86400); ?>
                <?php if($day_corso >= -1): ?>

<div class="testata cover corso <?php echo $corso->xyz()->html() ?>">
        <a href="<?php echo $corso->url() ?>" title="upcomingevent">
                                    <p class="docente a"><?php echo l::get('prossimicorsi') ?> ☛ <strong>   <?php $nextdate = strtotime($corso->nextdate());
                                                    echo date('d F Y', $nextdate);?></strong> <span class="deadline">Deadline ☛ <strong><?php $deadline = strtotime($corso->deadline());
                                                                echo date('d F Y', $deadline);?></strong></span></p><br>

        <h2 class="corso"><span class="<?php $set = array("a", "b", "e", "f", "g", "h"); $random = array_rand($set); $valore = $set[$random]; echo "$valore"; ?>"><?php echo $corso->title()->html()->excerpt(3,'words') ?></span></h2>
                        
                        <?php $numerodocenti = 0;?>
                        <?php if($corso->docenti()): ?>
                        <p class="docente b">
                          <?php foreach (yaml($corso->docenti()) as $docente): ?>

                            <?php if(!$numerodocenti == 0): ?>
                                    <?php echo ' / '; ?>
                            <?php endif ?>

                                    <strong><?php echo $docente["nome"] ?></strong>

                            <?php $numerodocenti = $numerodocenti +1;?>
                          
                          <?php endforeach ?>
                        </p>
                        <?php endif ?>

      </a>
        </div>
                <?php endif ?> 
          
          <?php endforeach ?>

          <?php endif ?>



<?php 

echo '</div>'
      ?>

</div>

    



<div class="mobile"><?php 

echo '<div class="fotorama" data-autoplay="true" data-ratio="5/4" data-width="100%" data-allowfullscreen="false" >'
      ?>

<!--  <?php foreach($page->gallery2()->yaml() as $image): ?>
  <?php if($img = $page->image($image)): ?>
      <img src="<?= $img->url() ?>" alt="<?= $page->title()->html() ?>" />
  <?php endif ?>
  <?php endforeach ?>

<div class="testata cover event xyz">
        <a href="http://www.lascuolaopensource.xyz/XYZ2018/" title="XYZ2018">
          <p class="docente a"><span>START ☛ <strong>23 July 2018</strong></span> <span class="deadline">DEADLINE ☛ <strong>23 June 2018</strong></span></p><br>


        <h2 class="corso"><span class="<?php $set = array("a", "b", "e", "f", "g", "h"); $random = array_rand($set); $valore = $set[$random]; echo "$valore"; ?>">XYZ 2018</span></h2>

                        <p class="docente b">
                          6 docenti + 3 tutor + 3 coordinatori + 60 partecipanti + i soggetti residenti
                        </p>
      </a>
        </div>-->

<a href="https://www.youtube.com/watch?v=ioyRfHwcaZA" class="video">
  <img src="/assets/images/jollymobile.jpg" alt="XYZ2018">
</a>

<?php       if(page('eventi')->hasVisibleChildren() > 0): ?>
            <?php foreach(page('eventi')->children()->visible()->flip() as $event): ?>
               <?php $deadline_event = strtotime($event->nextdate()); ?>        
              <?php $remaining_event = $deadline_event - time(); 
              $day_event = floor($remaining_event / 86400); ?>
                <?php if($day_event >= -1): ?>

<div class="testata cover event">
        <a href="<?php echo $event->url() ?>" title="upcomingevent">
          <p class="docente a"><?php echo l::get('prossimieventi') ?><span class="deadline">  ☛ <strong><?php $nextdate = strtotime($event->nextdate()); echo date('d F Y', $nextdate);?></strong></span></p><br>

        <h2 class="corso"><span class="<?php $set = array("a", "b", "e", "f", "g", "h"); $random = array_rand($set); $valore = $set[$random]; echo "$valore"; ?>"><?php echo $event->title()->html()->excerpt(3,'words') ?></span></h2>


                        <?php $numerodocenti = 0;?>
                        <?php if($event->docenti()): ?>
                        <p class="docente b">
                          <?php foreach (yaml($event->docenti()) as $docente): ?>

                            <?php if(!$numerodocenti == 0): ?>
                                    <?php echo ' / '; ?>
                            <?php endif ?>

                                    <strong><?php echo $docente["nome"] ?></strong>

                            <?php $numerodocenti = $numerodocenti +1;?>
                          
                          <?php endforeach ?>
                        </p>
                        <?php endif ?>


      </a>
        </div>
                <?php endif ?> 
          
          <?php endforeach ?>

          <?php endif ?>

<?php       if(page('didattica')->hasVisibleChildren() > 0): ?>
            <?php foreach(page('didattica')->children()->visible()->sortBy('deadline') as $corso): ?>
               <?php $deadline_corso = strtotime($corso->nextdate()); ?>        
              <?php $remaining_corso = $deadline_corso - time(); 
              $day_corso = floor($remaining_corso / 86400); ?>
                <?php if($day_corso >= -1): ?>

<div class="testata cover corso <?php echo $corso->xyz()->html() ?>">
        <a href="<?php echo $corso->url() ?>" title="upcomingevent">
                                    <p class="docente a"><?php echo l::get('prossimicorsi') ?> ☛ <strong>                                    <?php $nextdate = strtotime($corso->nextdate());
                                                                echo date('d F Y', $nextdate);?></strong> <span class="deadline">Deadline ☛ <strong><?php $deadline = strtotime($corso->deadline());
                                                                echo date('d F Y', $deadline);?></strong></span></p><br>

        <h2 class="corso"><span class="<?php $set = array("a", "b", "e", "f", "g", "h"); $random = array_rand($set); $valore = $set[$random]; echo "$valore"; ?>"><?php echo $corso->title()->html()->excerpt(3,'words') ?></span></h2>
                        
                        <?php $numerodocenti = 0;?>
                        <?php if($corso->docenti()): ?>
                        <p class="docente b">
                          <?php foreach (yaml($corso->docenti()) as $docente): ?>

                            <?php if(!$numerodocenti == 0): ?>
                                    <?php echo ' / '; ?>
                            <?php endif ?>

                                    <strong><?php echo $docente["nome"] ?></strong>

                            <?php $numerodocenti = $numerodocenti +1;?>
                          
                          <?php endforeach ?>
                        </p>
                        <?php endif ?>

      </a>
        </div>
                <?php endif ?> 
          
          <?php endforeach ?>

          <?php endif ?>





<?php 

echo '</div>'
      ?>

</div>
