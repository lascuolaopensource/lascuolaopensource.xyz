        <div class="btn-responsive-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        
    
    <div id="mainmenu" class="due">
                <ul>
                <li class="related<?php if (page('home')->isOpen()) { echo ' button_active'; } ?>"><a title="home" href="<?php echo l::get('lingua') ?>">Home</a></li>

                <li class="related<?php if (page('manifesto')->isOpen()) { echo ' button_active'; } ?>"><a title="manifesto" href="<?php echo l::get('lingua') ?>manifesto">Manifesto</a></li>

                <li class="related<?php if (page('didattica')->isOpen()) { echo ' button_active'; } ?>"><a title="didattica" href="<?php echo l::get('lingua') ?><?php echo l::get('didattica') ?>"><?php echo l::get('didattica') ?></a></li>
                
                <li class="related<?php if (page('eventi')->isOpen()) { echo ' button_active'; } ?>"><a title="eventi" href="<?php echo l::get('lingua') ?><?php echo l::get('eventi') ?>"><?php echo l::get('eventi') ?></a></li>
                
                <li class="related<?php if (page('ricerca')->isOpen()) { echo ' button_active'; } ?>"><a title="ricerca" href="<?php echo l::get('lingua') ?><?php echo l::get('ricerca') ?>"><?php echo l::get('ricerca') ?></a></li>
                
                <li class="related<?php if (page('hackerspace')->isOpen()) { echo ' button_active'; } ?>"><a title="borse" href="<?php echo l::get('lingua') ?>hackerspace">Hackerspace</a></li>

                <li class="related<?php if (page('membership')->isOpen()) { echo ' button_active'; } ?>"><a title="borse" href="<?php echo l::get('lingua') ?>membership">Membership</a></li>

                <li class="related<?php if (page('blog')->isOpen()) { echo ' button_active'; } ?>"><a title="blog" href="<?php echo l::get('lingua') ?>blog">Blog</a></li>
                
                <li class="related<?php if (page('contattaci')->isOpen()) { echo ' button_active'; } ?>"><a title="contattaci" href='#contatti'><?php echo l::get('contattaci') ?></a></li>
                
                <li class="related<?php if (page('openbalance')->isOpen()) { echo ' button_active'; } ?>"><a title="borse" href="<?php echo l::get('lingua') ?>openbalance">Bilancio</a></li>

                </ul> 
    </div> <!-- #mainmenu -->

