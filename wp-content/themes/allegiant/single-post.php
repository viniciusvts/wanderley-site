<?php get_header(); ?>

<?php get_template_part( 'template-parts/element', 'single-site-topo' ); ?>

<div id="main" class="main">
	<div class="container">
		<section id="topo">
            <?php
                get_template_part( 'template-parts/element', 'single-header');
            ?>
        </section>
		<section id="content" class="pb-0">
			<?php do_action( 'cpotheme_before_content' ); ?>
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) :
					the_post();
				?>
			<?php get_template_part( 'template-parts/element', 'single-site' ); ?>

			<?php
			endwhile;
			};
?>
			<?php do_action( 'cpotheme_after_content' ); ?>
		</section>
		<?php // get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>
<div id="relacionados">
	<div class="container">
		<h2 class="titulos mb-5  text-center">Empreendimentos <span style="color: #bd2130 ">Relacionados :</span></h2>
		<div class="row">
			<?php
			$actualPost = get_the_ID();
			global $post;
			$args = array( 'cat' => '2', 'posts_per_page' => '3', 'exclude' => $actualPost);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); ?>
				<div class="col-12 col-sm-12 col-md-4">
					<a href="<?php the_permalink(); ?>" title="Ver empreendimento">
						<div class="card shadow-sm mb-5 text-white rounded">
							<img class="card-img" src="<?php the_post_thumbnail_url(); ?>">
							<div class="card-img-overlay d-flex justify-content-end align-items-start flex-column">
								<span><?php the_field('cidade'); ?></span>
								<h3 class="card-title text-white mt-0"><?php the_title(); ?></h3>
								<?php //the_content(); ?>
								<p class="bairro mb-1"><?php the_field('bairro'); ?></p>
								<p class="dados mb-1"><?php the_field('dormitorios'); ?></p>
								<p class="dados mb-4"><?php the_field('situacao'); ?></p>
								<div class="text-right">
									<button class="btn btn-outline-light btn-sm" href="<?php the_permalink(); ?>">Saiba mais</button>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
