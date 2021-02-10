<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 col-12 text-center offset-md-1">
				<figure>
					<img src="<?=RUTA?>sprites/logo-footer.svg" class="img-fluid" alt="">
				</figure>
				<div class="d-flex d-md-none mt-4 justify-content-center">
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

			<div class="col-md-2 offset-md-1 nav-footer">
				<ul>
					<li>						
						<a href="<?=RUTA?>" class="anchor small gris no-underline"> Inicio</a>
					</li>
					<li>						
						<a href="<?=RUTA?>#servicios" class="anchor small gris no-underline"> Servicios</a>
					</li>
					<li>						
						<a href="<?=RUTA?>#experiencia" class="anchor small gris no-underline"> Experiencia</a>
					</li>
					<li>						
						<a href="<?=RUTA?>#blog" class="anchor small gris no-underline"> Salud y vida</a>
					</li>
					<li>						
						<a href="<?=RUTA?>#contactame" class="anchor small gris no-underline marker"> Contáctame</a>
					</li>

				</ul>
			</div>

			<div class="col-md-3 post-footer">
				<h1 class="subtitle rosa underline-custom left" >
					Salud y vida
				</h1>
				<h1 class="paragraph montserat-medium mt-3"> Vacunarse contra el Covid-19 La enfermería vuelta un arte Una nueva cepa de coronavirus </h1>
			</div>
			<div class="col-md-2 contact">
				<h1 class="subtitle blue">Contacto</h1>
				<div class="paragraph blue">
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

				<div class=" mt-4 d-none d-md-flex">
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
</footer>