<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $page['titulo'] ?> </title>

		<meta property="og:url"                content="<?php echo $URL; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="<?php echo $page['titulo'] ?> " />
		<meta property="og:description"        content="<?php echo $page['cuerpo_preview'] ?> " />
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

		<section class="post-section bellow-nav">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-xl-5 col-md-6 text-center">
						<h1 class="title wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.0s">
							<?php echo $page['titulo'] ?>
						</h1>
					</div>
					<div class="col-md-8 px-0 px-md-4 text-center">
						<figure>
							<img src="<?php echo $page['imagen_principal']['data']['full_url'] ?>" class="img-fluid" alt="">
						</figure>
					</div>
					<div class="w-100"></div>

					<div class="col-md-6">
						<div class="paragraph montserrat-medium lh-40 wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.3s">
							<?php echo $page['cuerpo_art'] ?>
						</div>

						<div class="share">
							<a target="_blank" class="pop" href="http://www.facebook.com/sharer.php?u=<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] ?>  " class="mr-4"> <img src="<?=RUTA?>sprites/share-facebook.svg" class="img-fluid" alt=""> </a>


							<a target="_blank" class="pop" href="https://twitter.com/intent/tweet?url=<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] ?> "> <img src="<?=RUTA?>sprites/share-twitter.svg" class="img-fluid" alt=""> </a>
						</div>


						<div class="navigation-post d-flex justify-content-md-center justify-content-between wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.0s" >
						


							<?php if( $adjacents['meta']['result_count'] > 1 ): ?>
								<div class="col-md-12 text-right d-flex justify-content-center">

								<?php if($is_first_post): ?>

										<div class="next">
											<a href="<?=RUTA?>articulo/<?php echo $adjacents['data'][1]['id'] ?>/<?php echo $adjacents['data'][1]['slug'] ?>/" class="anchor">									
												Artículo siguiente
												<img src="<?=RUTA?>sprites/arrow-right.svg" alt="">
											</a>
										</div>

								<?php else: ?>
										<div class="previous">
											<a href="<?=RUTA?>articulo/<?php echo $adjacents['data'][0]['id'] ?>/<?php echo $adjacents['data'][0]['slug'] ?>/" class="anchor">
												<img src="<?=RUTA?>sprites/arrow-left.svg" alt="">
												Artículo anterior
											</a>
										</div>

										
										<?php if (isset( $adjacents['data'][2] )): ?>
											<div class="next">
												<a href="<?=RUTA?>articulo/<?php echo $adjacents['data'][2]['id'] ?>/<?php echo $adjacents['data'][2]['slug'] ?>/" class="anchor">									
													Artículo siguiente
													<img src="<?=RUTA?>sprites/arrow-right.svg" alt="">
												</a>
											</div>
										<?php endif ?>

										

								<?php endif; ?>

								</div>
							<?php endif ?>
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
							<?php foreach ($random_posts as $key => $post): ?>
								<div class="col-md-3 post wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.0s">
									<a href="<?=RUTA?>articulo/<?php echo $post['id'] ?>/<?php echo $post['slug'] ?>/">
										<div>
											<img src=" <?php echo $post['imagen_preview']['data']['full_url'] ?> " class="img-fluid mw" alt="">
											<div class="content">
												<h1 class="subtitle v2 gris">
													<?php echo $post['titulo_preview']?> 
												</h1>
												<div class="paragraph">
													<?php echo $post['cuerpo_preview']?> 
												</div>
												<span class="anchor"> Leer más</span>
											</div>
										</div>
									</a>		
								</div>
							<?php endforeach ?>

						
							
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