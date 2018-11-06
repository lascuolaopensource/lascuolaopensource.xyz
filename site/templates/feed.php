<?php

echo page('blog')->children()->visible()->feed(array(
  'title'       => $page->title(),
  'description' => $page->text(),
  'link'        => 'blog',
));

?>
