<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $page['titulo'] ?> </title>

		<meta property="og:url"                content="<?php echo $URL; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="<?php echo $page['titulo'] ?> " />
		<meta property="og:description"        content="<?php echo $page['cuerpo'] ?> " />
		<meta property="og:image"              content="<?php echo $page['imagen']['data']['full_url'] ?>" />
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

		<section class="filing section-gradient bellow-nav">



			<div class="forma petal-3 rosa1 rect-1" style="width: 76px; height: 76px;"></div>
			<div class="container-fluid">
				<div class="row align-items-end">
					<div class="col-md-5 offset-md-1">
						<img src="<?=RUTA?>sprites/corazon-azul.svg"  class="img-fluid d-block" alt="Dra. Yeus">
						<img src="<?=RUTA?>sprites/nombre.svg"  class="img-fluid wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s" alt="Dra. Yeus">

						<div class="paragraph wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.3s">
							<?php echo $page['cuerpo_presentacion'] ?>
						</div>

						<div class="wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.4s">
							<a href="" class="anchor large d-inline-flex"> <img src="<?=RUTA?>sprites/whats-rosado.svg" alt="" class="mr-4"> <?php echo $page['call_to_action'] ?> </a>
						</div>
					</div>

					<div class="col-md-4 col-11  px-md-0 offset-md-1 imagen-principal">
						<figure>
							<img src="<?php echo $page['imagen_presentacion']['data']['full_url'] ?>" alt="" class="img-fluid">
							<img src="<?=RUTA?>sprites/marco-imagen.svg"  class="marco forma img-fluid">
							
							<div class="forma petal-2 rosa1 forma-1" style="width: 41px; height: 41px;"></div>

							<div class="forma circle rosa2 forma-2" style="width: 47px; height: 47px;"></div>

							<div class="forma limon verde forma-3" style="width: 87px; height: 85px;"></div>
						
						</figure>
					</div>
				</div>
			</div>
		</section>


		<section class="services" id="servicios">
			<img src="<?=RUTA?>sprites/estetocopio.svg"  class="forma rect-1">
			<div class="forma forma-1 petal-4 rosa1" style="width: 76px; height: 76px;"></div>

			<div class="forma forma-2 petal-2 rosa2" style="width: 76px; height: 76px;"></div>
			<div class="forma forma-3  rosa3" style="width: 76px; height: 76px;"></div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 offset-custom ">
						<h1 class="title text-center text-md-left wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
							Servicios
						</h1>

						<div class="paragraph blue wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.3s">
							 <?php echo $page['cuerpo_servicios'] ?> 
						</div>
					</div>

					<div class="col-md-7">
						<div class="row">
							<div class="col-md-12 text-md-right text-center d-none d-md-block">
								<a href="" class="button"> Agenda tu cita </a>
							</div>
							<div class="col-md-12 mt-md-4 citas">
								<div class="row align-items-center">
									<div class="col-md-4 text-center">
										<img src="<?=RUTA?>sprites/cita-linea.svg" alt="">
										<h1 class="subtitle v2 mt-4 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
											Cita en línea 
										</h1>
									</div>

									<div class="col-md-12 text-md-right text-center d-block d-md-none button-float">
										<a href="" class="button"> Agenda tu cita </a>
									</div>


									<div class="col-md-4 text-center">
										<img src="<?=RUTA?>sprites/cita-presencial.svg" alt="">
										<h1 class="subtitle v2 mt-4 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
											Cita presencial
										</h1>
									</div>
									
								</div>
							</div>
							<div class="col-md-12 col-10 mx-auto protocolos">
								<div class="row">

									<div class="col-md-7 offset-md-4 d-inline-flex align-items-center">
										<div class="row">
											<div class="col-2 d-flex flex-wrap justify-content-center">
												<img src="<?=RUTA?>sprites/cubreboca.svg" alt=""> 
												<img src="<?=RUTA?>sprites/termometro.svg" alt="" class="mt-4"> 
											</div>

											<div class=" col-10 d-flex flex-column justify-content-between">
												<span class="paragraph blue  mt-4 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.3s">  <?php echo $page['medida_preventiva_1'] ?>  </span>
												<span class="paragraph blue  mb-4 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.3s">  <?php echo $page['medida_preventiva_2'] ?> </span> 
											</div>
										</div>
										
										
									</div>

									
								</div>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</section>

		<section class="experiencia" id="experiencia">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 offset-custom-1">
						<h2 class="subtitle wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
							Experiencia
						</h2>
						<h1 class="title blue wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
							<?php echo $page['titulo_experiencia'] ?>
						</h1>
					</div>

					<div class="col-md-5 offset-md-1">
						<div class="paragraph wow fadeIn2" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.3s">
							<?php echo $page['cuerpo_experiencia'] ?>

							<img src="<?=RUTA?>img/experiencia-logos.png" alt="" class="img-fluid mt-4" >
						</div>
					</div>

					<div class="col-md-5 col-10  offset-custom-1 img-experiencia">
						<figure>
							<img src="<?php echo $page['imagen_experiencia']['data']['full_url'] ?>" alt="" class="img-fluid">

							<img src="<?=RUTA?>sprites/experiencia-bg.svg" class="forma bg-imagen img-fluid" alt="">
							<img src="<?=RUTA?>sprites/exp-bg.svg" class="forma gb-forma img-fluid" alt="">


							<div class="forma forma-1 petal-3 rosa1" style="width: 67px; height: 67px;"></div>
							<div class="forma forma-2 petal-4 verde" style="width: 30px; height: 30px;"></div>
						</figure>
					</div>
				</div>
			</div>
		</section>


		<section class="conoceme">
			<div class="container-fluid">
				<div class="row row-conoceme">
					<div class="col-md-custom-4 conoce-img1 col-5 order-2 order-md-1">
						<figure>
							<img src="<?php echo $page['imagen1_conoceme']['data']['full_url'] ?>" class="img-fluid mw" alt="">

							<div class="forma forma-1 circle rosa1" style="width: 85px; height: 85px;"></div>
							<div class="forma forma-2 double-petal-vertical rosa1" style="width: 94px; height: 225px;"></div>
							<div class="forma forma-3 petal-4 verde" style="width: 155px; height: 155px;"></div>
							<div class="forma forma-4 circle rosa1" style="width: 67px; height: 67px;"></div>
						</figure>
					</div>
					<div class="col-md-3 col-4 conoce-img2 order-3 order-md-2 px-0 px-md-4">
						<img src="<?php echo $page['imagen2_conoceme']['data']['full_url'] ?>" class="img-fluid mw" alt="">
					</div>		
					<div class="col-md-6 forma rectangulo order-4 order-md-3">
						<img src="<?=RUTA?>sprites/rect-16.svg" class=" img-fluid mw"  alt="">
					</div>
					
					

					<div class="col-md-5 ml-md-5 d-flex flex-wrap order-1 order-md-2">
						<a href="" class="anchor small no-underline ml-auto underline-custom mb-5 mb-md-0"> Conóceme </a>
						<div class="paragraph wow fadeIn2" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.2s">
							<?php echo $page['cuerpo_conoceme'] ?>
						</div>
					</div>				
				</div>
			</div>
		</section>

		<section class="noticias" id="blog">
			<div class="container-fluid">
				<div class="row px-4 px-md-0">
					<div class="col-md-11 offset-md-1 px-0">
						<h2 class="subtitle rosa wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
							 <?php echo $categorias[0]['nombre_de_categoria'] ?>
						</h2>
						<h1 class="title underline-custom left small gris wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
							<?php echo $categorias[0]['titulo_de_categoria']  ?>
						</h1>
					</div>

					<div class="col-md-10 px-0 offset-md-1 posts-principal">
						<div class="row ">
							<div class="col-md-7 col-xl-5">
								<img src=" <?php echo $editorial_destacado['imagen_preview']['data']['full_url'] ?> " alt="" class="img-fluid">
							</div>
							<div class="col-md-5 col-xl-7 col-11 mx-auto mx-md-0">
								<div class="row">
									<div class="col-md-11 d-flex flex-wrap">
										<h2 class="subtitle gris v2 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
											<?php echo $editorial_destacado['titulo_preview'] ?>
										</h2>
										<div class="paragraph montserrat-medium w-100 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.3s">
											<?php echo $editorial_destacado['cuerpo_preview'] ?>
										</div>

										<a href="<?=RUTA?>articulo/<?php echo $editorial_destacado['id'] ?>/<?php echo $editorial_destacado['slug'] ?>/" class="anchor wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.4s"> Leer más </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 offset-md-1 px-0 row-posts row-preview ">
						<div class="row">
							<?php foreach ($editorial as $key => $post): ?>
								<div class="col-md-3 post wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
									<a href="<?=RUTA?>articulo/<?php echo $post['id'] ?>/<?php echo $post['slug'] ?>/ ">
										<div>
											<img src="<?php echo $post['imagen_preview']['data']['full_url'] ?>" class="img-fluid mw" alt="">
											<div class="content">
												<h1 class="subtitle v2 gris ">
													<?php echo $post['titulo_preview'] ?>
												</h1>
												<div class="paragraph ">
													<?php echo $post['cuerpo_preview'] ?>
												</div>
												<p class="anchor "> Leer más</p>
											</div>
										</div>
									</a>		
								</div>	
							<?php endforeach ?>
							
							
						</div>
						<div class="row justify-content-center more">
							<a href="<?=RUTA?>blog/" class="anchor wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s"> Ver todos </a>

							<div class="forma forma-1 gout verde" style="width: 67px; height: 67px;"></div>
						</div>
					</div>	
				</div>
				

				<div class="row px-4 px-md-0">
					<div class="col-md-11 offset-md-1 px-0">
						<h2 class="subtitle rosa wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
							 <?php echo $categorias[1]['nombre_de_categoria'] ?>
						</h2>
						<h1 class="title underline-custom left small gris wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
							<?php echo $categorias[1]['titulo_de_categoria']  ?>
						</h1>
					</div>

					<div class="col-md-10 px-0 offset-md-1 posts-principal">
						<div class="row ">
							<div class="col-md-7 col-xl-5">
								<img src=" <?php echo $videoBlog_destacado['imagen_preview']['data']['full_url'] ?> " alt="" class="img-fluid">
							</div>
							<div class="col-md-5 col-xl-7 col-11 mx-auto mx-md-0">
								<div class="row">
									<div class="col-md-11 d-flex flex-wrap">
										<h2 class="subtitle gris v2 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
											<?php echo $videoBlog_destacado['titulo_preview'] ?>
										</h2>
										<div class="paragraph montserrat-medium w-100 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.3s">
											<?php echo $videoBlog_destacado['cuerpo_preview'] ?>
										</div>

										<a href="<?=RUTA?>articulo/<?php echo $videoBlog_destacado['id'] ?>/<?php echo $videoBlog_destacado['slug'] ?>/" class="anchor wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.4s"> Leer más </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 offset-md-1 px-0 row-posts row-preview">
						<div class="row">
							<?php foreach ($videoBlog as $key => $post): ?>
								<div class="col-md-3 post wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
									<a href="<?=RUTA?>articulo/<?php echo $post['id'] ?>/<?php echo $post['slug'] ?>/ ">
										<div>
											<img src="<?php echo $post['imagen_preview']['data']['full_url'] ?>" class="img-fluid mw" alt="">
											<div class="content">
												<h1 class="subtitle v2 gris ">
													<?php echo $post['titulo_preview'] ?>
												</h1>
												<div class="paragraph ">
													<?php echo $post['cuerpo_preview'] ?>
												</div>
												<p class="anchor "> Leer más</p>
											</div>
										</div>
									</a>		
								</div>	
							<?php endforeach ?>
						</div>
						<div class="row justify-content-center more">
							<a href="<?=RUTA?>blog/" class="anchor wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s"> Ver todos </a>
						</div>
					</div>	
				</div>
			</div>
		</section>


		<section class="contacto" id="contactame">
			<img src="<?=RUTA?>sprites/linea-rosa.svg" class="forma linea" alt="">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-11 offset-md-1">
						<img src="<?=RUTA?>img/contact.png" alt="" class="d-block-img-fluid">
						<h1 class="title v3 rosa montserrat-extrabold mt-4 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
							Contáctame
						</h1>
					</div>
					<div class="col-md-5 offset-md-1 mt-4">
						<form action="<?=RUTA?>" >
							<div class="hide-on-submit">
								<div class="form-group">
									<input type="text" name="name" placeholder="Nombre">
								</div>
								<div class="form-group">
									<input type="phone" name="cellphone" placeholder="Teléfono">
								</div>
								<div class="form-group">
									<input type="email" name="email" placeholder="email">
								</div>
								<div class="form-group">
									<textarea name="message" id="message" cols="30" rows="7" placeholder="Mensaje"></textarea>
								</div>
								<div class="button-container d-md-flex justify-content-center  justify-content-between">
									<div class="g-recaptcha" data-sitekey="6Le99U8aAAAAAAdgfdyVhA7QaHMSowD8DDwLNnDZ" style="transform:scale(0.8);-webkit-transform:scale(0.8); margin-left:-6%;"></div>
									<div class="d-flex align-items-center">
										<input type="submit" class="button oval" value="Enviar">
									</div>
								</div>
							</div>
						</form>	
					</div>
					<div class="col-md-4 mapa mt-md-4 offset-md-1">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3132.507866452601!2d-89.61613821790415!3d20.984592816108442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56715ab30e33f1%3A0x26348d2f86f3700a!2sDra.%20Yeusvi%20Maley%20Flores%20Cazola!5e0!3m2!1ses-419!2smx!4v1612803507461!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

						<div class="row justify-content-end text-md-right text-center">
							<div class="col-md-7">
								<h1 class="subtitle blue wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">Contacto</h1>
								<div class="paragraph blue wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
									<?php echo $contacto['direccion'] ?>
									<?php if ( !is_null($contacto['numero1']) && $contacto['numero1'] != "" ) : ?>
										<br>
										<?php echo $contacto['numero1'] ?>
									<?php endif ?>
									<?php if ( !is_null($contacto['numero2']) && $contacto['numero2'] != "" ): ?>
										<br>
										<?php echo $contacto['numero2'] ?>
									<?php endif ?>
								</div>

								<div class="d-flex justify-content-md-end justify-content-center mt-4 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
									<?php if ( !is_null($contacto['facebook']) && $contacto['facebook'] != "" ): ?>
										<a href=" <?php echo $contacto['facebook'] ?> " class="pop"><img src="<?=RUTA?>sprites/facebook-rosa.svg" alt=""></a>
									<?php endif ?>
									<?php if ( !is_null($contacto['instagram']) && $contacto['instagram'] != "" ): ?>
										<a href="<?php echo $contacto['instagram'] ?>" class="pop"><img src="<?=RUTA?>sprites/instagram-rosa.svg" alt=""></a>
									<?php endif ?>
									<?php if ( !is_null($contacto['twitter']) && $contacto['twitter'] != "" ): ?>
										<a href="<?php echo $contacto['twitter'] ?>" class="pop"><img src="<?=RUTA?>sprites/twitter-rosa.svg" alt=""></a>
									<?php endif ?>
									<?php if ( !is_null($contacto['youtube']) && $contacto['youtube'] != "" ): ?>
										<a href="<?php echo $contacto['youtube'] ?>" class="pop"><img src="<?=RUTA?>sprites/youtube-rosa.svg" alt=""></a>
									<?php endif ?>

								</div>
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

		<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
		
	</body>
</html>