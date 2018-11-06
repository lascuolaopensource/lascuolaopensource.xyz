        <div id="corso" class="more">

                    <?php if (!$page->soci()->isEmpty()): ?>

                    <div class="docenti" id="soci">
                    <h3 class="meta"><?php echo l::get('soci') ?>:</h3>
                    <ul>
                        <?php foreach (yaml($page->soci()) as $socio): ?>
                        <li>
                            <p class="nome"><strong><?php echo $socio["nome"] ?></strong><?php echo $socio["ruolo"] ?></p>
                            <p class="bio"><?php echo $socio["bio"] ?><br><br><a href="mailto:<?php echo $socio["email"] ?>">☛ <?php echo $socio["email"] ?></a></p>
                        </li>
                        <?php endforeach ?>
                    </ul>
                    </div>
                    <?php endif ?>   
                    
                    <?php if (!$page->soci()->isEmpty()): ?>
                    <div class="docenti" id="collaboratori">
                    <h3 class="meta"><?php echo l::get('collaboratori') ?>:</h3>
                    <ul>
                        <?php foreach (yaml($page->collaboratori()) as $collaboratore): ?>
                        <li>
                            <p class="nome"><strong><?php echo $collaboratore["nome"] ?></strong></p>
                            <p class="professione"><?php echo $collaboratore["professione"] ?></p>
                        </li>
                        <?php endforeach ?>
                    </ul>
                    </div>
                    <?php endif ?>   
                    

</div>