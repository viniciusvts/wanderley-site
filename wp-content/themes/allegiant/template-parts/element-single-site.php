<article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
	<div class="post-image">
		<?php //cpotheme_postpage_image(); ?>		
	</div>	
	<div class="post-body">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-8 col-lg-8">
				<?php cpotheme_postpage_title(); ?>

				<div class="post-content">
					<?php cpotheme_postpage_content(); ?>

					<h3 class="post-title text-center mb-5"><?php the_field('titulo_depoimentos'); ?></h3>
					<div class="row pt-3">
						<div class="col-12 col-sm-12 col-md-4">
							<div class="card text-center" style="border: none">
								<div class="card-body">
									<!-- <h2 class="card-title"><?php //the_title(); ?></h2> -->
									<?php //the_content(); ?>
									<?php the_field('depoimento_01'); ?>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-12 col-md-4">
							<div class="card text-center" style="border: none">
								<div class="card-body">
									<!-- <h2 class="card-title"><?php //the_title(); ?></h2> -->
									<?php //the_content(); ?>
									<?php the_field('depoimento_02'); ?>
								</div>
							</div>
						</div>

						<div class="col-12 col-sm-12 col-md-4">
							<div class="card text-center" style="border: none">
								<div class="card-body">
									<!-- <h2 class="card-title"><?php //the_title(); ?></h2> -->
									<?php //the_content(); ?>
									<?php the_field('depoimento_03'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<aside id="sidebar" class="sidebar col-12 col-sm-12 col-md-4 col-lg-4">
				<div class="card shadow mb-5">
					<span class="dados"><?php the_field('situacao'); ?></span>
					<span class="info-valor pl-3 pr-3"><?php the_field('valor'); ?></span>
					<a data-toggle="modal" data-target="#whatsapp" href="#" class="ml-3 mr-3 mb-3 btn btn-success text-white"><i class="fab fa-whatsapp pr-2"></i> Fale conosco pelo whatsapp</a>
					<a data-toggle="modal" data-target="#faleConosco" href="#" class="ml-3 mr-3 mb-3 btn btn-danger text-white"><i class="far fa-envelope small pr-2"></i> Fale conosco pelo email</a>
					<a href="<?php the_field('mapa_google'); ?>" target="_blank" class="ml-3 mr-3 mb-3 btn btn-primary text-white"><i class="fas fa-map-marker-alt small pr-2"></i> Vá de Google Maps</a>
					<a href="<?php the_field('mapa_waze'); ?>" target="_blank" class="ml-3 mr-3 mb-3 btn btn-info text-white"><i class="fab fa-waze pr-2"></i> Vá de Waze</a>
				</div>
			</aside>
		</div>
		<?php
            if ( is_singular( 'post' ) ) {
                cpotheme_postpage_tags( false, '', '', '' );
            }
        ?>
		<?php //cpotheme_postpage_readmore( 'button' ); ?>
		<div class="clear"></div>
	</div>
</article>
