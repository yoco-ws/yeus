<?php 

	require('vendor/autoload.php');
	//define('RUTA','https://drayeusviflores.com/');

	//define('RUTA','https://yoco.ws/yeus/');
	define('RUTA','http://localhost/yeus/');


	$client = new GuzzleHttp\Client(['base_uri' => 'https://directus.cliqued.it/yeus/']);



	$favicon = "<link rel='icon' type='image/png' href='img/favicon.png' />";

	#CSS

	$normalize_css = '<link rel="stylesheet" href="'.RUTA.'css/normalize.min.css">';

	$boostrap_v4_css = '<link rel="stylesheet" href="'.RUTA.'css/bootstrap.min.css">';

	$font_awesome_css = '<link rel="stylesheet" href="'.RUTA.'css/all.css">';


	#JS
	
	$jquery_js = '<script src="'.RUTA.'js/jquery-3.2.1.min.js"></script>';

	$tether_js = '<script src="'.RUTA.'js/tether.min.js"></script>';

	$bootstrap_v4_js = '<script src="'.RUTA.'js/bootstrap.min.js"></script>';

	$font_awesome_js = '<script src="'.RUTA.'js/all.js"></script>';

	$animations = '
		<link rel="stylesheet" href="'.RUTA.'css/animate.css">
		<script src="'.RUTA.'js/wow.js"></script>
      	<script>
      		new WOW().init();
      	</script>';
	#Own 
	#	js
		$own_file_js = '<script src="'.RUTA.'js/yeus.js"></script>';
	#	css
		$own_file_css = '<link rel="stylesheet" href="'.RUTA.'css/yeus.min.css">';
	

	#Extra
	#
	$google_analitycs = "
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src='https://www.googletagmanager.com/gtag/js?id=G-YH40L22HQ5'></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-YH40L22HQ5');
		</script>
					";

	$google_recaptcha = "";


?>