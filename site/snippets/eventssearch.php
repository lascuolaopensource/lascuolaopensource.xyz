<script>
fbq('track', 'Search');
</script>

<div id="search" class="titolosezione">
<h2 id="search" class="didattica b">↓ <?php echo l::get('cosacerchi') ?></h2>
<h2 id="search" class="didattica d"><a href="/eventi">&#9998; <?php echo l::get('tornaeventi') ?></a></h2>
</div>

<form class="search">
  <input class="campo" type="search" name="q" value="<?php echo esc($query) ?>">
  <input class="bottone"  type="submit" value="Search">
</form>

<div class="nota">
<p>↳ <?php echo l::get('nota') ?></p>
</div>

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