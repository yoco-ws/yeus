<?php

$response_global_data = $client->request('GET', 'items/contacto', [
	'query' => [
	    'fields' => '*.*',
	    'single' => true,
	]
]);

$contacto = json_decode($response_global_data->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP



$response_blog = $client->request('GET', 'items/blog', [
	'query' => [
	    'fields' => 'id,titulo_preview,slug',
	    'limit' => 3,
	    'status' => 'published',

	]
]);

$footer_blog = json_decode($response_blog->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP

?>