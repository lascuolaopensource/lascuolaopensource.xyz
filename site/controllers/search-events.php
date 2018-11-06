<?php

return function($site, $pages, $page) {

  $query   = get('q');
  $results = page('eventi')->index()->visible()->search($query, 'title|level|category|tags|deadline|description|audience|svolgimento|durata|lunghezza|nextdate|docenti|programma|output|output2');
  $results = $results->paginate(20);

  return array(
    'query'      => $query,
    'results'    => $results,
    'pagination' => $results->pagination()
  );

};