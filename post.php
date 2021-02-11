<?php require_once('admin/config.php'); ?>

<?php 


	$id = $_GET['id']; 



$response_page = $client->request('GET', 'items/blog/'.$id, [
	'query' => [
	    'fields' => '*.*.*',
	    'single' => true
	]
]);

$page = json_decode($response_page->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP


require('helpers/GlobalQuerys.php');





$response_count_posts = $client->request('GET', 'items/blog', [
	'query' =>[
		'fields' => '*',
		'status' => 'published',
		'filter[id][!=]' => $id,
		'meta' => 'result_count'

	]
]);

$count_post = json_decode($response_count_posts->getBody(), true)['meta']['result_count']; //Convertir a un arreglo, para uso en PHP


$offset = 0;
if ($count_post > 2) {
	$offset = rand(0, $count_post - 3);
}

$response_randompost = $client->request('GET', 'items/blog', [
	'query' => [
		'fields' => '*.*.*',
		'status' => 'published',
		'filter[id][!=]' => $id,
		'offset' => $offset,
		'limit' => '4'
	]
]);

$random_posts = json_decode($response_randompost->getBody(), true)['data'];



$sort = 'sort';
$adjacents = $page['sort'] - 2;
$is_first_post = false;
if( $adjacents < 0 ){
	$is_first_post = true;
	$adjacents = 0;
} 


if( is_null($page['sort']) ){
	$adjacents = $page['id'] - 2;
	if( $adjacents < 1 ) $adjacents = 1;
	$sort = 'id';
}

$response_adjacents = $client->request('GET', 'items/blog', [
	'query' => [
	    'fields' => '*.*.*',
	    'limit' => 3,
	    'offset' => $adjacents,
	    'sort' => $sort,
	    'meta' => 'result_count',
	    'status' => 'published'
	]
]);
$adjacents = json_decode($response_adjacents->getBody(), true); //Convertir a un arreglo, para uso en PHP






if(0){
	header('Content-type: application/json');
	echo json_encode($adjacents, true);  //Los objetos de paypal ya vienen en formato json asi que se debe evitar el json_encode.
	die();
}


?>
<?php require("views/post.view.php"); ?>