<?php get_header(); ?>

<?php get_template_part( 'template-parts/element', 'blog-topo' ); ?>

<div id="main" class="main">
	<!-- <div class="container"> -->
		<section id="topo">
            <?php
                get_template_part( 'template-parts/element', 'single-header-blog');
            ?>
		</section>
		<section class="container nocontainer-lg">
			<div class="row">
				<section class="d-none d-lg-block col-1 col-fhd-2"><!--vazio--></section>
				<section id="content" class="pb-0 pl-lg-5 content mr-xl-0">	
					<?php do_action( 'cpotheme_before_content' ); ?>
					<?php
					if ( have_posts() ) {
						while ( have_posts() ) :
							the_post();
							//aqui eu adiciono contagem de views ao post
							dna_addPostView(get_the_ID());
						?>
					<?php get_template_part( 'template-parts/element', 'single-blog' ); ?>

					<?php
					endwhile;
					};
					?>
					<?php do_action( 'cpotheme_after_content' ); ?>
				</section>
				<aside id="sidebar" class="sidebar sidebar-blog col-xl-3 col-fhd-2 h-100">
					<?php
						dynamic_sidebar('blog-sidebar');
						echo do_shortcode('[contact-form-7 id="506"]');
					?>
				</aside>

			</div>
		</section>
		<div class="clear"></div>
	<!-- </div> -->
</div>

<div id="relacionados">
	<div class="container">
		<h2 class="titulos mb-5  text-center">Posts <span style="color: #bd2130 ">Relacionados :</span></h2>
		<div class="row">
			<?php
			$actualPost = get_the_ID();
			global $post;
			$args = array( 'cat' => '13', 'posts_per_page' => '3', 'exclude' => $actualPost);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); ?>
				<div class="col-12 col-sm-12 col-md-4">
					<a href="<?php the_permalink(); ?>" title="Ver empreendimento">
						<div class="card shadow-sm mb-5 text-white rounded">
							<img class="card-img filter-brig-50" src="<?php the_post_thumbnail_url(); ?>">
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
