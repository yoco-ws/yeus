<?php
/*Recibe un request post con los datos del usuario e intenta enviar un correo*/

require 'Courier.php';
require 'Responses.php';
require 'Forms.helper.php';
require('../vendor/autoload.php');



$client = new GuzzleHttp\Client(['base_uri' => 'https://directus.cliqued.it/yeus/']);

require 'GlobalQuerys.php';


try{

	if( validateContact( $_POST['data'] ) && verifyCaptcha() ){
		//Enviar el correo de confirmación

		if( sendContactMail( $_POST['data'], $contacto['correo_electronico'] ) ){

			response('success', 'Gracias, nos pondremos en contacto pronto.' );

		}else{
		
			throw new Exception( 'No se pudo enviar el mensaje.' );
		
		}

	}

	
}catch(Exception $e){
	
	response( 'error', $e->getMessage() );

}


?>