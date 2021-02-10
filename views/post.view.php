<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Title site</title>

		<meta property="og:url"                content="<?php echo $URL; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="Title site" />
		<meta property="og:description"        content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. " />
		<meta property="og:image"              content="<?php echo $URL; ?>/img/sharing/example.png" />
		<meta name="root-url" content="<?php echo RUTA ?>" />
		<?php echo $favicon; ?>
		<?php echo $normalize_css; ?>
		<?php echo $boostrap_v4_css ?>

		<!-- Font awesome -->
		<?php echo $font_awesome_css; ?>
		<!-- CSS own files -->
		<?php echo $own_file_css; ?>
		
		<?php echo $google_analitycs; ?>

		<?php echo $animations; ?>
	</head>
	<body>

		<?php require("views/navbar.view.php"); ?>

		<section class="post-section bellow-nav">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-xl-5 col-md-6 text-center">
						<h1 class="title wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.0s">
							Estadísticas Reales en México Covid-19
						</h1>
					</div>
					<div class="col-md-8 px-0 px-md-4 text-center">
						<figure>
							<img src="https://placehold.it/874x490/" class="img-fluid" alt="">
						</figure>
					</div>
					<div class="w-100"></div>

					<div class="col-md-6">
						<div class="paragraph montserrat-medium lh-40 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.3s">
							<p>Muy contenta de haber sido elegida para dar la primicia, les comparto la página web diseñada por el Matemático y doctor en estadística. Dr. Cristian Oliva Avilés. A través de este video navegaremos por la página con la finalidad de que ustedes puedan aprender a utilizarla y que puedan obtener la información más actualizada y fidedigna.</p>
						</div>

						<div class="share">
							<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] ?>  " class="mr-4"> <img src="<?=RUTA?>sprites/share-facebook.svg" class="img-fluid" alt=""> </a>


							<a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] ?> "> <img src="<?=RUTA?>sprites/share-twitter.svg" class="img-fluid" alt=""> </a>
						</div>


						<div class="navigation-post d-flex justify-content-md-center justify-content-between wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.0s" >
							<div class="previous">
								<a href="" class="anchor">
									<img src="<?=RUTA?>sprites/arrow-left.svg" alt="">
									Artículo anterior
								</a>
							</div>

							<div class="next">
								<a href="" class="anchor">									
									Artículo siguiente
									<img src="<?=RUTA?>sprites/arrow-right.svg" alt="">
								</a>
							</div>
						</div>
					</div>


				</div>
			</div>			
		</section>

		<section class="recomendados">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="row row-posts">
							<div class="col-md-12">
								<h1 class="title montserrat-bold">
									También te puede interesar
								</h1>
							</div>
							<div class="col-md-3 post wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.0s">
								<a href="">
									<div>
										<img src="https://placehold.it/269x150/" class="img-fluid mw" alt="">
										<div class="content">
											<h1 class="subtitle v2 gris">
												Vacunarse contra el Covid-19
											</h1>
											<div class="paragraph">
												Históricamente el desarrollo de las vacunas es un proceso largo y complejo, cuyo objetivo... 
											</div>
											<span class="anchor"> Leer más</span>
										</div>
									</div>
								</a>		
							</div>

							<div class="col-md-3 post wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.2s">
								<a href="">
									<div>
										<img src="https://placehold.it/269x150/" class="img-fluid mw" alt="">
										<div class="content">
											<h1 class="subtitle v2 gris">
												Vacunarse contra el Covid-19
											</h1>
											<div class="paragraph">
												Históricamente el desarrollo de las vacunas es un proceso largo y complejo, cuyo objetivo... 
											</div>
											<span class="anchor"> Leer más</span>
										</div>
									</div>
								</a>		
							</div>

							<div class="col-md-3 post wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.4s">
								<a href="">
									<div>
										<img src="https://placehold.it/269x150/" class="img-fluid mw" alt="">
										<div class="content">
											<h1 class="subtitle v2 gris">
												Vacunarse contra el Covid-19
											</h1>
											<div class="paragraph">
												Históricamente el desarrollo de las vacunas es un proceso largo y complejo, cuyo objetivo... 
											</div>
											<span class="anchor"> Leer más</span>
										</div>
									</div>
								</a>		
							</div>

							<div class="col-md-3 post wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.6s">
								<a href="">
									<div>
										<img src="https://placehold.it/269x150/" class="img-fluid mw" alt="">
										<div class="content">
											<h1 class="subtitle v2 gris">
												Vacunarse contra el Covid-19
											</h1>
											<div class="paragraph">
												Históricamente el desarrollo de las vacunas es un proceso largo y complejo, cuyo objetivo... 
											</div>
											<span class="anchor"> Leer más</span>
										</div>
									</div>
								</a>		
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>			


			
		<?php require("views/footer.view.php"); ?>	
		
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<?php echo $jquery_js; ?>
		<?php echo $tether_js; ?>


		<!-- Javascripts own files  -->		
		<?php echo $own_file_js; ?>


		<?php echo $bootstrap_v4_js; ?>

		<?php echo $font_awesome_js; ?>
		
	</body>
</html>