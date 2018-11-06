<?php echo js('assets/javascript/script2.js') ?>
<?php echo js('assets/javascript/update_tags.js') ?>

<?php $counter = 0; ?>
<?php $flag = 1; ?>

<?php if($page->hasVisibleChildren() > 0): ?>

    <button class="accordion"><?php echo l::get('filtrapertematica') ?></button>
      <div class="panel">
        <div id="filters" class="button-group left">
        <h5 id="thirdpage" ><?php echo l::get('tematichevere') ?></h5>
          <button id="topic" class="button is-checked" data-filter="*"><?php echo l::get('tutte') ?></button>
            <?php // fetch all tags
              $tags = page('eventi')->children()->visible()->pluck('tags', ',', true);
            ?>
          <?php foreach($tags as $tag): ?>
            <button id="topic" class="button" data-filter="<?php echo str_replace(" ", "_", $tag) ?>"><?php echo $tag ?></button>
          <?php endforeach ?>
        </div>
      </div>

    <script>/* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }</script>

  <?php else: ?>

<?php endif ?> 




<?php if($page->hasVisibleChildren() > 0): ?>

  <div class="titolosezione">
    <h2 class="didattica b">↓ <?php echo l::get('tuttieventi') ?></h2>
    <h2 id="search"  class="didattica b d"><a href="<?php echo l::get('lingua') ?><?php echo l::get('eventi') ?>/search">&#9998; <?php echo l::get('cercaevento') ?></a></h2>
  </div>


            <?php foreach(page('eventi')->children()->visible() as $event): ?>
                                       <!-- Calcola eventi futuri ed eventi passati -->
               <?php $deadline_php = strtotime($event->nextdate()); ?>        

              <?php $remaining = $deadline_php - time(); 
              $day = floor($remaining / 86400);
              $hr  = floor(($remaining % 86400) / 3600);
              $min = floor(($remaining % 3600) / 60);
              $sec = ($remaining % 60); ?>

                <?php if($day >= -1): ?>
                    <?php $counter = $counter +1; ?>
                <?php endif ?> 
          <?php endforeach ?>


  <div id="events" class="grid">
    <div class="grid-sizer"></div>

      <?php foreach(page('eventi')->children()->visible() as $event): ?>

              <!-- Calcola eventi futuri ed eventi passati -->

<?php $deadline_php = strtotime($event->nextdate()); ?>        

<?php $remaining = $deadline_php - time(); 
      $day = floor($remaining / 86400);
      $hr  = floor(($remaining % 86400) / 3600);
      $min = floor(($remaining % 3600) / 60);
      $sec = ($remaining % 60); ?>

        <?php if($day >= -1): ?>
              
              <?php $flag = 0; ?>
                
                <?php if($counter == 3): ?>
                    <div class="grid-item project tre" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $event->tags())) ?>">
                <?php elseif($counter == 6): ?>
                    <div class="grid-item project tre" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $event->tags())) ?>">
                <?php elseif($counter == 2): ?>
                    <div class="grid-item project due" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $event->tags())) ?>">
                <?php elseif($counter == 4): ?>
                    <div class="grid-item project tre" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $event->tags())) ?>">
                <?php elseif($counter == 1): ?>
                    <div class="grid-item project uno" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $event->tags())) ?>">
                <?php else: ?>
                    <div class="grid-item project tre" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $event->tags())) ?>">
                <?php endif ?>
                
       <a href="<?php echo $event->url() ?>">

                                <h2 id="evento" class="titolo"><span class="

                                <?php     $set = array("a", "b", "c", "d", "e", "f", "g", "h");
                                          $random = array_rand($set);
                                          $valore = $set[$random];

                                          echo "$valore";
                                ?>">
                                          <?php echo $event->title()->excerpt(36) ?></span>
                                </h2>  
                       
                        <h2 class="luogo">
                          @ <?php echo $event->luogo()->text() ?>
                        </h2>

          <h3 class="deadline"><strong>☛ </strong>

          <?php $nextdate = strtotime($event->nextdate());
                            echo date('d F Y', $nextdate);  ?>
          </h3>

          <?php $tags = $event->tags()->split(); ?>
          
          <div class="tags">
            <?php foreach($tags as $tag): ?>
            <h3 class="tags"><?php echo $tag ?></h3>
            <?php endforeach ?>
          </div>

          <h2 class="description"><strong>
          <?php echo excerpt($event->description(), 140) ?></strong></h2>



        </a>
                </div>
              
          <?php endif ?> 
      <?php endforeach ?>

  </div>
          <?php if ($flag > 0): ?>

              <div id="alert" class="titolosezione">
                  <h2 class="didattica"><?php echo l::get('noeventi') ?></h2>
              </div>
              </div>

          </div>
          <?php endif ?> 
<div class="titolosezione">
<h2 class="didattica">↓ <?php echo l::get('eventipassati') ?></h2>
</div>

<div class="grid">
  <div class="grid-sizer"></div>

  <?php foreach(page('eventi')->children()->visible() as $event): ?>

        <!-- Calcola eventi futuri ed eventi passati -->
        
<?php $deadline_php = strtotime($event->nextdate()); ?>        

<?php $remaining = $deadline_php - time(); 
      $day = floor($remaining / 86400);
      $hr  = floor(($remaining % 86400) / 3600);
      $min = floor(($remaining % 3600) / 60);
      $sec = ($remaining % 60); ?>

        <?php if($day < -1): ?>

      <?php $flag = 0; ?>
      <div class="grid-item project tre" data-category="<?php echo str_replace(",", " ", str_replace(" ", "_", $event->tags())) ?>">
        
       <a href="<?php echo $event->url() ?>">

                                <h2 id="evento" class="titolo"><span class="

                                <?php     $set = array("a", "b", "c", "d", "e", "f", "g", "h");
                                          $random = array_rand($set);
                                          $valore = $set[$random];

                                          echo "$valore";
                                ?>">
                                          <?php echo $event->title()->excerpt(22) ?></span>
                                </h2> 
                        <h2 class="luogo">
                          @ <?php echo $event->luogo()->text() ?>
                        </h2>
          <h3 class="deadline"><strong>☛ </strong>

          <?php $nextdate = strtotime($event->nextdate());
                            echo date('d F Y', $nextdate);  ?>
          </h3>

          <?php $tags = $event->tags()->split(); ?>
          
          <div class="tags">
            <?php foreach($tags as $tag): ?>
            <h3 class="tags"><?php echo $tag ?></h3>
            <?php endforeach ?>
          </div>

          <h2 class="description"><strong>
          <?php echo excerpt($event->description(), 140) ?></strong></h2>



        </a>


      </div>
    <?php endif ?>
  <?php endforeach ?>
</div>



<div id="proponi" class="titolosezione">
<h2 id="search"  class="didattica a">
<a href=<?php echo l::get('linkform') ?> target="_blank">
↯ <?php echo l::get('proponievento') ?>
</a>
</h2>
</div>

<?php else: ?>
                <div id="alert" class="titolosezione">
                  <h2 class="didattica"><?php echo l::get('noeventi') ?></h2>
              </div>
<?php endif ?> 


 
