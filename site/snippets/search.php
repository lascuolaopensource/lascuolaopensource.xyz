<div id="search" class="titolosezione">
<h1 id="search" class="didattica">↓ Cosa cerchi?</h1>
<!-- <h1 id="search" class="didattica"><a href="/blog">&#9998; Torna al blog</a></h1>-->
</div>

<form class="search">
  <input class="campo" type="search" name="q" value="<?php echo esc($query) ?>">
  <input class="bottone"  type="submit" value="Search">
</form>

<ul class="searchresults">
  <?php foreach($results as $result): ?>
  <li class="results">
    <a href="<?php echo $result->url() ?>">
    <h1 class="result"><?php echo $result->title()->html() ?></h1>
    <h2 class="source"><?php echo $result->url() ?></h2>
    </a>
  </li>
  <?php endforeach ?>
</ul>