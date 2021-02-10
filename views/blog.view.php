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

		<section class="blog section-gradient bellow-nav">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-11 offset-md-1 px-md-0">
						<h2 class="subtitle rosa wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
							 <?php echo $categorias[0]['nombre_de_categoria'] ?>
						</h2>
						<h1 class="title underline-custom left small gris wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0s">
							<?php echo $categorias[0]['titulo_de_categoria']  ?>
						</h1>
					</div>

					<div class="col-md-12 posts-principal mt-5">
						<div class="row align-items-center">
							<div class="col-md-4 px-md-0 d-none  d-md-block order-2 order-md-1">
								<figure class="marco">
									<img src="<?php echo $page['imagen_principal']['data']['full_url'] ?>" alt="" class="img-fluid">

									<div class="forma limon verde forma-1" style="width: 87px; height: 85px;"></div>
								</figure>
							</div>
							<div class="col-md-7 cuerpo order-1 order-md-2">
								<h1 class="subtitle wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.0s">
									<?php echo $page['titulo_principal'] ?>
								</h1>
								<div class="paragraph wow fadeIn" data-wow-duration="0" data-wow-offset="0" data-wow-delay="0.3s">
									<?php echo $page['cuerpo_principal'] ?>
								</div>
							</div>
						</div>			
					</div>
				</div>
			</div>			
		</section>

		<section class="noticias">
			<div class="container-fluid">
				<div class="row px-4 px-md-0">
					

					<div class="col-md-10 px-0 offset-md-1 posts-principal">
						<div class="row ">
							<div class="col-md-7 col-xl-5">
								<img src="<?php echo $editorial_destacado['imagen_preview']['data']['full_url'] ?> " alt="" class="img-fluid">
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
						<div class="row row-editorial">
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
							<div class="paginacion d-flex editorial">
								<?php if ( $paginacion_editorial >= 2 ): ?>
									<span class="previous">  < </span>
									<ul>
										
										<?php for ($i=0; $i < $paginacion_editorial  ; $i++) {  ?>
											<li>
												<span class="page" offset="<?php echo $i * $max_posts ?>" destacado="<?php echo $editorial_destacado['id'] ?>" max_posts="<?php echo $max_posts ?>"> <?php echo $i + 1 ?> </span>
											</li>				
										<?php }  ?>
										
									</ul>
									<span class="next">  > </span>
								<?php endif ?>
								
							</div>					

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
								<img src="<?php echo $videoBlog_destacado['imagen_preview']['data']['full_url'] ?> " alt="" class="img-fluid">
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
						<div class="row row-video">
							<?php foreach ($video as $key => $post): ?>
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
							<div class="paginacion video">
								<?php if ($paginacion_video >= 2): ?>
									<ul>
										<
										<?php for ($i=0; $i < $paginacion_video  ; $i++) {  ?>
											<li>
												<span class="page" offset="<?php echo $i * $max_posts ?>" destacado="<?php echo $videoBlog_destacado['id'] ?>" max_posts="<?php echo $max_posts ?>"> <?php echo $i + 1 ?> </span>
											</li>				
										<?php }  ?>
										>
									</ul>
								<?php endif ?>
								
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