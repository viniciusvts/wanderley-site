<?php get_header(); ?>

<?php get_template_part( 'template-parts/element', 'blog-topo' ); ?>

<div id="main" class="main">
	<!-- <div class="container"> -->
		<section id="topo">
            <?php
                get_template_part( 'template-parts/element', 'single-header-blog');
            ?>
        </section>
		<section id="content" class="pb-0 pl-lg-5 content">	
			<?php do_action( 'cpotheme_before_content' ); ?>
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) :
					the_post();
				?>
			<?php get_template_part( 'template-parts/element', 'single-blog' ); ?>

			<?php
			endwhile;
			};
?>
			<?php do_action( 'cpotheme_after_content' ); ?>
		</section>
        <aside id="sidebar" class="sidebar sidebar-blog">
            <?php
                dynamic_sidebar('blog-sidebar');
                echo do_shortcode('[contact-form-7 id="506"]');
            ?>
        </aside>
		<div class="clear"></div>
	<!-- </div> -->
</div>

<?php get_footer(); ?>
