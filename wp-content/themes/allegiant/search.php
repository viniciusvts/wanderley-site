<?php get_header(); ?>

<?php get_template_part( 'template-parts/element', 'page-header' ); ?>

<div id="main" class="main">
	<div class="container">
		<section id="content">
			<?php //do_action( 'cpotheme_before_content' ); ?>
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
?>
			<!-- <article class="search-result" id="post-<?php the_ID(); ?>"> 			
				<h4 class="search-title heading">
					<a href="<?php //the_permalink(); ?>" title="<?php //the_title_attribute(); ?>" rel="bookmark"><?php //the_title(); ?></a>
				</h4>
				<div class="search-byline">
					<?php //the_permalink(); ?>
				</div>
			</article> -->

			<div class="col-12 col-sm-12 col-md-4" id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink(); ?>" title="Ver empreendimento">
					<div class="card shadow-sm mb-5 text-white rounded">
						<img class="card-img" src="<?php the_post_thumbnail_url(); ?>" alt="post thumbnail">
						<div class="card-img-overlay d-flex justify-content-end align-items-start flex-column">
							<span><?php the_field('cidade'); ?></span>
							<h3 class="card-title text-white mt-0"><?php the_title(); ?></h3>
							<p class="bairro mb-1"><?php the_field('bairro'); ?></p>
							<p class="dados mb-4"><?php the_field('dormitorios'); ?></p>
							<div class="text-right">
								<button class="btn btn-outline-light btn-sm" href="<?php the_permalink(); ?>">Saiba mais</button>
							</div>
						</div>
					</div>
				</a>
			</div>
			
			<?php endwhile; ?>
			<?php cpotheme_numbered_pagination(); ?>
			<?php endif; ?>
			<?php do_action( 'cpotheme_after_content' ); ?>
		</section>
	</div>
</div>

<?php get_footer(); ?>