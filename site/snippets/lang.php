<div id="lang">
<nav class="languages" role="navigation">
  <ul>
    <?php foreach($site->languages() as $language): ?>
    <li<?php e($site->language() == $language, ' class="active"') ?>>
      <a title="lang" href="<?php echo $page->url($language->code()) ?>">
        <?php echo html($language->name()) ?>
      </a>
    </li>
    <?php endforeach ?>
<!--    <li ><a class="login" href="" target="_blank">LOGIN</a></li>-->
  </ul>
</nav>
</div>
</header>
<div id="clear" class="spessore"></div>
