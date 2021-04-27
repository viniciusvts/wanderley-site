<?php /* Template Name: Em Obras */ ?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/element', 'page-header' ); ?>

<div id="main" class="main pt-0 pl-0 pr-0">
	<div class="container">
		<section id="content">
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
			
			<div class="row mt-5">
                <?php
                    global $post;
                    $args = array( 'cat' => '5' );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) : setup_postdata($post); ?>
                        <div class="col-12 col-sm-12 col-md-4">
                            <a href="<?php the_permalink(); ?>" title="Ver empreendimento">
                                <div class="card shadow-sm mb-5 text-white rounded">
                                    <img class="card-img" src="<?php the_post_thumbnail_url(); ?>" alt="post thumbnail">
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
			
			<?php do_action( 'cpotheme_after_content' ); ?>
		</section>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>
