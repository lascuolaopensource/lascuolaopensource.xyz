<?php

return function($site, $pages, $page) {

  $query   = get('q');
  $results = page('projects')->index()->visible()->search($query, 'title|text|tags|audience|storia|bisogni|descrizione|team');
  $results = $results->paginate(20);

  return array(
    'query'      => $query,
    'results'    => $results,
    'pagination' => $results->pagination()
  );

};