    <div class="titolosezione">
        <h2 class="didattica">✭ <?php echo l::get('docenticorsi') ?></h2>
    </div>

    <div id="tuttidocenti">
          <?php foreach(page('didattica')->children()->visible()->flip() as $teaching): ?>

                    <div id="docenti">
                          <?php if (!$teaching->docenti()->isEmpty()): ?>

                          <a href="<?php echo $teaching->url() ?>">

                                <h2 id="docenti" class="titolo"><?php echo $teaching->title()->excerpt(50) ?></h2>

                          </a>


                                <?php foreach (yaml($teaching->docenti()) as $docente): ?>


<button id="docente" class="accordion">

                                <h2 id="docenti" class="docente">
                                <strong><?php echo $docente["nome"] ?></strong>
                                </h2>
                                <h3 id="docenti">
                                <?php echo $docente["organizzazione"] ?>
                                </h3>

    </button>
        <div class="panel">
            <div id="filters" class="button-group">

            <p class="bio"><?php echo $docente["bio"] ?></p>

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

                                <?php endforeach ?>
                                <?php endif ?>

                    </div>

          <?php endforeach ?>
</div> 




    
