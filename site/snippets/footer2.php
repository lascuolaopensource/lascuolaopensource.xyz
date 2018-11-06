</body>
<footer id="primo">
<div class="blocco">
<h2 class="didattica">↓ Partners <a title="" href="https://docs.google.com/forms/d/e/1FAIpQLSejxmvQ_QIlXfG2Uo2MZbvGtgRFxHhyfLzSnzgENxBkzlUgHw/viewform" target="_blank">&#9998; <?php echo l::get('diventapartner') ?></a></h2>
<ul>
<?php foreach($site->partners()->toStructure() as $partner): ?>
<li><h5><a title="partners" href="<?= $partner->url(); ?>" target="_blank"><?= $partner->name(); ?></a></h5></li>	
<?php endforeach; ?>
</ul>
</div>
<div class="blocco">
<h2 class="didattica">↓ Links</h2>
<div class="colonna">
<h5 class="crediti"><span class="ico">i</span> <strong><a title="canale youtube sos" href="https://www.youtube.com/c/lascuolaopensource" target="_blank"><?php echo l::get('linkvideo') ?></a></strong></h5>
<h5 class="crediti"><span class="ico">i</span> <strong><a title="canale slideshare sos" href="http://www.slideshare.net/lascuolaopensource" target="_blank"><?php echo l::get('linkslide') ?></a></strong></h5>
<h5 class="crediti"><span class="ico">i</span> <strong><a title="xyz 2016 report" href="<?php echo l::get('XYZREPORT') ?>" target="_blank">XYZ2016 Report</a></strong></h5>
<h5 class="crediti"><span class="ico">i</span> <strong><a title="xyz 2017 report" href="<?php echo l::get('XYZREPORT2017') ?>" target="_blank">XYZ2017 Report</a></strong></h5>
</div>
<div class="colonna">
<h5 class="crediti"><span class="ico">i</span> <strong><a title="github sos" href="https://github.com/lascuolaopensource/" target="_blank">Github</a></strong></h5>
<h5 class="crediti"><span class="ico">i</span> <strong><a title="facebook sos" href="https://www.facebook.com/scuolaopensource/" target="_blank">Facebook</a></strong></h5>
<h5 class="crediti"><span class="ico">i</span> <strong><a title="twitter sos" href="https://www.twitter.com/lascuolaOS/" target="_blank">Twitter</a></strong></h5>
<h5 class="crediti"><span class="ico">i</span> <strong><a title="community sos" href="https://www.facebook.com/groups/559013517570769/?ref=bookmarks" target="_blank"><?php echo l::get('linkcommunity') ?></a></strong></h5>
</div>
<div class="colonna">
<h5 class="crediti"><span class="ico">i</span> <strong><a title="abstract sos" href="https://docs.google.com/document/d/1dVsnl9T1Hovypc02utFwnW9k0omhVDn9OZKscW-ln-A/edit?usp=sharing" target="_blank">Abstract</a></strong></h5>
<h5 class="crediti"><span class="ico">i</span> <strong><a title="statuto sos" href="https://docs.google.com/document/d/1E__2Z4UZ_-3S97V5elico1N4hiAcNAFvCzEkgySxrTc/edit?usp=sharing" target="_blank"><?php echo l::get('linkstatuto') ?></a></strong></h5>
<h5 class="crediti"><span class="ico">i</span> <strong><a title="business model sos" href="http://www.slideshare.net/LaScuolaOpenSource/sos-bp-draft" target="_blank">Business Plan</a></strong></h5>
</div>
</div>

</footer>
<?php snippet('mappa') ?>
<footer id="secondo">
<div id="contatti" class="blocco">
<h2 id="faq" class="didattica">↓ <?php echo l::get('contatti') ?></h2>
<h2 id="faq" class="didattica"><a title="faq" href="<?php echo l::get('lingua') ?>faq">⚑ FAQ</a></h2>
<h2 id="faq" class="didattica"><a title="<?php echo l::get('codiceconsumo') ?>" href="<?php echo l::get('codiceconsumourl') ?>">⚑ <?php echo l::get('codiceconsumo') ?></a></h2>
</div>
<div id="contatti" class="blocco">
<h5 class="blabla">
<span class="parola">
<span class="<?php echo diciottesima(); ?>">S</span>
<span class="<?php echo prima(); ?>">O</span>
<span class="<?php echo ottava(); ?>">S</span>
</span></h5>
<p class="blabla"><?php echo l::get('claimpiano') ?><br><br>
<strong><?php echo l::get('sedelegale') ?></strong><br><?php echo l::get('indirizzo') ?><br><br><strong><?php echo l::get('sedeoperativa') ?></strong><br><?php echo l::get('indirizzo2') ?><br><br><strong>☎</strong> <?php echo $site->tel(); ?><br><br><strong><?php echo l::get('iva') ?></strong> <?php echo $site->iva(); ?><br><a title="privacy policy" href="<?php echo l::get('lingua') ?>privacy">Privacy policy</a></p>
</div>
</footer>



