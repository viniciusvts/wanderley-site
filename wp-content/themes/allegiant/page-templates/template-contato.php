<?php /* Template Name: Fale Conosco */ ?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/element', 'page-header' ); ?>

<div id="main" class="main pt-0 pl-0 pr-0">
	<div class="container">
		<section id="content" class="content">
			<?php do_action( 'cpotheme_before_content' ); ?>
			
			<?php
                if ( have_posts() ) {
                    while ( have_posts() ) :
                        the_post();
                    ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="page-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                };
            ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>
