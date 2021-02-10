<?php require_once('admin/config.php'); ?>

<?php 


$response_page = $client->request('GET', 'items/pagina_blog', [
	'query' => [
	    'fields' => '*.*.*',
	    'single' => true
	]
]);

$page = json_decode($response_page->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP




$response_categorias = $client->request('GET', 'items/categoria', [
	'query' => [
	    'fields' => '*.*.*',
	   
	]
]);

$categorias = json_decode($response_categorias->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP

$response_editorial_destacado = $client->request('GET', 'items/blog', [
	'query' => [
	    'fields' => '*.*.*',
	    'filter[categoria.nombre_de_categoria][=]' => "editorial",
	    'filter[categoria.nombre_de_categoria][logical]' => "and",
	    'filter[destacado][logical]' => "and",
	    'filter[destacado][=]' => true,
	  	'limit' => "1",
	  	'single' => true
	   
	]
]);

$editorial_destacado = json_decode($response_editorial_destacado->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP

$response_videoBlog_destacado = $client->request('GET', 'items/blog', [
	'query' => [
	    'fields' => '*.*.*',
	    'filter[categoria.nombre_de_categoria][=]' => "Video blog",
	    'filter[categoria.nombre_de_categoria][logical]' => "and",
	    'filter[destacado][logical]' => "and",
	    'filter[destacado][=]' => true,
	  	'limit' => "1",
	  	'single' => true
	   
	]
]);

$videoBlog_destacado = json_decode($response_videoBlog_destacado->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP

















$max_posts = 3;
$offset = 0;

$response_editorial_count = $client->request('GET', 'items/blog', [
	'query' => [
	    'fields' => '*.*.*',
	    'filter[categoria.nombre_de_categoria][=]' => "editorial",
	    'filter[categoria.nombre_de_categoria][logical]' => "and",
	    'filter[id][logical]' => "and",
	    'filter[id][!=]' => $editorial_destacado['id'],
	    'status' => "published",
	    'meta' => 'result_count'
	]
]);

$editorial_count = json_decode($response_editorial_count->getBody(), true)['meta']['result_count']; //Convertir a un arreglo, para uso en PHP

$paginacion_editorial = ceil($editorial_count/$max_posts);

$response_editorial = $client->request('GET', 'items/blog', [
	'query' => [
	    'fields' => '*.*.*',
	    'filter[categoria.nombre_de_categoria][=]' => "editorial",
	    'filter[categoria.nombre_de_categoria][logical]' => "and",
	    'filter[id][logical]' => "and",
	    'filter[id][!=]' => $editorial_destacado['id'],
	    'status' => "published",
	    'limit' => $max_posts,	    
	]
]);

$editorial = json_decode($response_editorial->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP







$response_video_count = $client->request('GET', 'items/blog', [
	'query' => [
	    'fields' => '*.*.*',
	    'filter[categoria.nombre_de_categoria][=]' => "Video Blog",
	    'filter[categoria.nombre_de_categoria][logical]' => "and",
	    'filter[id][logical]' => "and",
	    'filter[id][!=]' => $videoBlog_destacado['id'],
	    'status' => "published",
	    'meta' => 'result_count'
	]
]);

$video_count = json_decode($response_video_count->getBody(), true)['meta']['result_count']; //Convertir a un arreglo, para uso en PHP

$paginacion_video = ceil($video_count/$max_posts);

$response_video = $client->request('GET', 'items/blog', [
	'query' => [
	    'fields' => '*.*.*',
	    'filter[categoria.nombre_de_categoria][=]' => "Video Blog",
	    'filter[categoria.nombre_de_categoria][logical]' => "and",
	    'filter[id][logical]' => "and",
	    'filter[id][!=]' => $videoBlog_destacado['id'],
	    'status' => "published",
	    'limit' => $max_posts,	    
	]
]);

$video = json_decode($response_video->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP














require('helpers/GlobalQuerys.php');
if(0){
	header('Content-type: application/json');
	echo json_encode($paginacion_editorial, true);  //Los objetos de paypal ya vienen en formato json asi que se debe evitar el json_encode.
	die();
}




?>
<?php require("views/blog.view.php"); ?>


