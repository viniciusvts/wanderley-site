<article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
	<div class="post-image">
		<?php //cpotheme_postpage_image(); ?>		
	</div>
	<div class="post-body">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-8 col-lg-8">
					<?php cpotheme_postpage_title(); ?>
			
					<div class="post-content">
						<?php cpotheme_postpage_content(); ?>
						
						<h3 class="post-title text-center mb-5"><?php the_field('titulo_depoimentos'); ?></h3>
						<div class="container">
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
											<?php the_field('depoimento_01'); ?>
										</div>
									</div>
								</div>
				
								<div class="col-12 col-sm-12 col-md-4">
									<div class="card text-center" style="border: none">
										<div class="card-body">
											<!-- <h2 class="card-title"><?php //the_title(); ?></h2> -->
											<?php //the_content(); ?>
											<?php the_field('depoimento_01'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<aside id="sidebar" class="sidebar col-12 col-sm-12 col-md-4 col-lg-4">
					<div class="card shadow mb-5 flutuante">
						
					</div>
				</aside>
			</div>
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
