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

		<?php echo $favicon; ?>
		<?php echo $normalize_css; ?>
		<?php echo $boostrap_v4_css ?>

		<!-- Font awesome -->
		<?php echo $font_awesome_css; ?>
		<!-- CSS own files -->
		<?php echo $own_file_css; ?>
		
		<?php echo $google_analitycs; ?>
	</head>
	<body>

		<?php require("views/navbar.view.php"); ?>

		<section class="filing bellow-nav">
			<img src="<?=RUTA?>sprites/rect-25.svg"  class="forma rect-1">
			<div class="container-fluid">
				<div class="row align-items-end">
					<div class="col-md-5 offset-md-1">
						<img src="<?=RUTA?>sprites/corazon-azul.svg"  class="img-fluid" alt="Dra. Yeus">
						<img src="<?=RUTA?>sprites/nombre.svg"  class="img-fluid" alt="Dra. Yeus">

						<div class="paragraph">
							<p>Bienvenido a mi sitio, aquí encontrarás información médica actualizada y de importancia; es un espacio creado especialmente para ti y el cuidado de tu salud y el de toda tu familia.</p>
							<p>Te invito a visitar mi blog, ver mis videos y a mantener una conversación directa a través de mis redes sociales.</p>

							<p>No esperes más y comienza a cuidar de tu salud con un estilo de vida saludable; en mi consultorio encontrarás a tu médico de cabecera que te ayudará a lograrlo.</p>
						</div>

						<div class="">
							<a href="" class="anchor large"> Agenta tu cita por Whatsapp </a>
						</div>
					</div>

					<div class="col-md-4 px-0 offset-md-1 imagen-principal">
						<figure>
							<img src="<?=RUTA?>img/doc.png" alt="" class="img-fluid">

							<img src="<?=RUTA?>sprites/marco-imagen.svg"  class="marco forma img-fluid">

							<img src="<?=RUTA?>sprites/bg-image-1.svg"  class="forma-1 forma">
							<img src="<?=RUTA?>sprites/bg-image-2.svg"  class="forma-2 forma">
							<img src="<?=RUTA?>sprites/limon.svg"  class="forma-3 forma">
						</figure>
					</div>
				</div>
			</div>
		</section>


		<section class="services">
			<img src="<?=RUTA?>sprites/estetocopio.svg"  class="forma rect-1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 offset-custom">
						<h1 class="title">
							Servicios
						</h1>

						<div class="paragraph blue">
							<ul>
								<li>Detección oportuna de factores de riesgo para enfermedades cronicodegenerativas</li>
								<li>Diabetes</li>
								<li>Hipertensión</li>
								<li>Enfermedades reumáticas</li>
								<li>Certificados médicos</li>
								<li>Interpretación de análisis clínicos</li>
								<li>Atención Prenatal</li>
								<li>Atención de niños</li>
								<li>Atención del adulto mayor</li>
								<li>Consejo anticonceptivo</li>
								<li>Curaciones</li>
							</ul>
						</div>
					</div>

					<div class="col-md-7">
						<div class="row">
							<div class="col-md-12 text-right">
								<a href="" class="button"> Agenda tu cita </a>
							</div>
							<div class="col-md-12 mt-4">
								<div class="row align-items-center">
									<div class="col-md-4 text-center">
										<img src="<?=RUTA?>sprites/cita-linea.svg" alt="">
										<h1 class="subtitle v2 mt-4">
											Cita en línea 
										</h1>
									</div>

									<div class="col-md-4 text-center">
										<img src="<?=RUTA?>sprites/cita-presencial.svg" alt="">
										<h1 class="subtitle v2 mt-4">
											Cita presencial
										</h1>
									</div>
									
								</div>
							</div>
							<div class="col-md-12 protocolos">
								<div class="row">

									<div class="col-md-7 offset-md-4 d-inline-flex align-items-center">
										<div class="row">
											<div class="col-2 d-flex flex-wrap justify-content-center">
												<img src="<?=RUTA?>sprites/cubreboca.svg" alt=""> 
												<img src="<?=RUTA?>sprites/termometro.svg" alt="" class="mt-4"> 
											</div>

											<div class=" col-md-10 d-flex flex-column justify-content-between">
												<span class="paragraph blue  mt-4"> El uso de cubrebocas y careta es indispensable. </span>
												<span class="paragraph blue  mb-4"> Al llegar, te tomaremos la temperatura.</span> 
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

		<section class="experiencia">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 offset-custom-1">
						<h2 class="subtitle">
							Experiencia
						</h2>
						<h1 class="title blue">
							Más de 10 años al servicio de la salud
						</h1>
					</div>

					<div class="col-md-5 offset-md-1">
						<div class="paragraph">
							<p><strong>Soy Médico Cirujano,</strong> egresada de la Universidad Autónoma de Yucatán, con más de 10 años de experiencia en la práctica privada. Me encuentro certificada ante el Comité Normativo Nacional de Medicina General. </p>

							<p>Desde hace 7 años me desempeño como <strong>Coordinadora de Donación</strong> de Órganos y Tejidos con entrenamientos realizados en la unión europea. </p>

							<p>Como profesional de la salud me siento con el compromiso de implementar acciones cuyo impacto social generen un cambio perceptible en la salud de todos mis pacientes; por lo que decidí comenzar a compartir contenido médico para el cuidado de la salud a través de mi canal de YouTube. </p>

							<p>A partir de febrero del 2016 tengo la fortuna de ser parte del Grupo Médico Edificio Platino, del Centro Médico de las Américas, y el cual se encuentra constituido por <strong>especialistas</strong> de diversas áreas, cuyo único objetivo es ofrecer un espacio de atención médica integral. </p>

							<p>En 2018 comienzo una nueva aventura al ser el <strong>titular de la columna de salud</strong> en el Diario de Yucatán, que lleva por título “Salud y Vida”, con entregas semanales. </p>

							<p>Soy miembro de la Sociedad Mexicana y de la Sociedad Española de Trasplantes. </p>

							<p>Participo activamente con diversas Asociaciones como #SoloDona, #PintemosaMéxicodeVerde e "Iniciativa por el Corazón de la Mujer", para promover un estilo de vida saludable.</p>

							<img src="<?=RUTA?>img/experiencia-logos.png" alt="" class="img-fluid mt-4" >
						</div>
					</div>

					<div class="col-md-5 offset-custom-1">
						<figure>
							<img src="<?=RUTA?>img/experiencia.png" alt="" class="img-fluid">

							<img src="<?=RUTA?>sprites/experiencia-bg.svg" class="forma bg-imagen img-fluid" alt="">
						</figure>
					</div>
				</div>
			</div>
		</section>


		<section class="conoceme">
			<div class="container-fluid">
				<div class="row">
					
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