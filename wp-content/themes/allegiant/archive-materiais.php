<?php get_header(); ?>


<?php if ( cpotheme_show_title() ) : ?>

<?php $header_image = cpotheme_header_image(); ?>
<?php
if ( $header_image != '' ) {
	$header_image = 'style="background-image:url(' . esc_url( $header_image ) . ');"';}
?>
<?php do_action( 'cpotheme_before_title' ); ?>
<section id="pagetitle" class="pagetitle" <?php echo $header_image; ?>>
	<div class="container">
		<?php do_action( 'cpotheme_bread' ); ?>
		<h1 class="pagetitle-title heading">Materiais</h1>
	</div>
</section>
<?php do_action( 'cpotheme_after_title' ); ?>
<?php endif; ?>


<div id="main" class="main">
	<div class="container">
		<section id="content" class="content">
            <?php do_action( 'cpotheme_before_content' ); ?>
            
            <section>
                <div class="row">
                    <?php
						while ( have_posts() ) :
							the_post();
							$link = get_field('link');
							$imagem = get_field('imagem');
					?>
					<div class="col-12 col-sm-12 col-md-6">
						<div class="card shadow-sm mb-5">
							<img class="card-img-top"
							src="<?php echo esc_url($imagem['url']); ?>"
							alt="<?php echo esc_attr($imagem['alt']); ?>" />
							<div class="card-body">
								<h5 class="card-title mt-3 mb-3"><?php the_title(); ?></h5>
								<a class="btn btn-outline-danger btn-sm mt-4"
								target="<?php echo $link['target'] ?>"
								href="<?php echo $link['url'] ?>">Saiba mais</a>
							</div>                                    
						</div>
					</div>
					<?php endwhile; ?>
				</div>
			</section>
			
		</section>
		<aside id="sidebar" class="sidebar sidebar-blog">
			<?php
				dynamic_sidebar('blog-sidebar');
				echo do_shortcode('[contact-form-7 id="506"]');
			?>
		</aside>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>	