    <div class="titolosezione">
        <h1 class="didattica">✭ <?php echo l::get('ospitieventi') ?></h1>
    </div>

<div id="tuttidocenti">
          <?php foreach(page('eventi')->children()->visible()->flip() as $event): ?>

                    <div id="docenti">
                                <?php if (!$event->docenti()->isEmpty()): ?>
                          <a href="<?php echo $event->url() ?>">

                                <h1 id="docenti" class="titolo"><?php echo $event->title()->excerpt(50) ?></h1>
                          </a>

                                <?php foreach (yaml($event->docenti()) as $docente): ?>


<button id="docente" class="accordion">

                                <h1 id="docenti" class="docente">
                                <strong><?php echo $docente["nome"] ?></strong>
                                </h1>
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

