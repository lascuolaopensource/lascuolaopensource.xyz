<?php

return function($site, $pages, $page) {

  $query   = get('q');
  $results = page('didattica')->index()->visible()->search($query, 'title|text|tags|audience|docenti|bisogni|programma|output|output2|category');
  $results = $results->paginate(20);

  return array(
    'query'      => $query,
    'results'    => $results,
    'pagination' => $results->pagination()
  );

};