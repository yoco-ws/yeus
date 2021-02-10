<?php 


require('../vendor/autoload.php');

$client = new GuzzleHttp\Client(['base_uri' => 'https://directus.cliqued.it/yeus/']);


$offset = $_POST['offset'];
$destacado = $_POST['destacado'];
$max_post = $_POST['max_post']; 
$url = $_POST['url'];

$response_editorial = $client->request('GET', 'items/blog', [
	'query' => [
	    'fields' => '*.*.*',
	    'filter[categoria.nombre_de_categoria][=]' => "Video Blog",
	    'filter[categoria.nombre_de_categoria][logical]' => "and",
	    'filter[id][logical]' => "and",
	    'filter[id][!=]' => $destacado,
	    'status' => "published",
	    'limit' => $max_post,	
	    'offset' => $offset,  
	]
]);

$editorial =  json_decode($response_editorial->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP


$response = "";
foreach ($editorial as $key => $post){
	$response .= '<div class="col-md-3 post wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
		<a href="'.$url.'articulo/'.$post["id"].'/'.$post["slug"].'">
			<div>
				<img src="'.$post["imagen_preview"]["data"]["full_url"].'" class="img-fluid mw" alt="">
				<div class="content">
					<h1 class="subtitle v2 gris ">
						'.$post["titulo_preview"].'
					</h1>
					<div class="paragraph ">
						'.$post["cuerpo_preview"].'
					</div>
					<p class="anchor "> Leer más</p>
				</div>
			</div>
		</a>		
	</div>'	;
}





echo json_encode($response);
die();


 ?>
