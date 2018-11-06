<?php

if ( ! isset($_GET['field']) ) {
	return die();
}

$authorized = ['didattica', 'eventi'];
$el = $_GET['field'];

if ( ! in_array($el, $authorized) ) {
	return die();
}

$data = $pages->find( $el )->children()->visible();
$json = array();

foreach($data as $article) {

  $json[] = array(
    'url'   	   => (string)$article->url(),
    'date' 		   => (string)$article->nextdate(),
    'title'        => (string)$article->title(),
    'appointments' => yaml($article->appuntamenti()),
    'docenti' 	   => yaml($article->docenti()),
    'output' 	   => (string)$article->output(),
    'level' 	   => (string)$article->level(),
    'category' 	   => (string)$article->category(),
    'price' 	   => intval((string)$article->prezzo()),
    'audience' 	   => (string)$article->audience(),
  );

}

echo json_encode($json);

?>