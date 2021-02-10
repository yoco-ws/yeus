<?php

$response_global_data = $client->request('GET', 'items/contacto', [
	'query' => [
	    'fields' => '*.*',
	    'single' => true,
	]
]);

$contacto = json_decode($response_global_data->getBody(), true)['data']; //Convertir a un arreglo, para uso en PHP

?>