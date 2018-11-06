<?php

return function($site, $pages, $page) {

  $query   = get('q');
  $results = page('blog')->index()->visible()->search($query, 'title|text|tags|author|collaborators|date');
  $results = $results->paginate(20);

  return array(
    'query'      => $query,
    'results'    => $results,
    'pagination' => $results->pagination()
  );

};