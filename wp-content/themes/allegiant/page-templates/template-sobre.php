<?php /* Template Name: Sobre */ ?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/element', 'page-header' ); ?>

<div id="main" class="main pt-0 pl-0 pr-0">
	<!-- <div class="container-fluid"> -->
        <section class="mb-5">
            <div class="container">
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
            </div>
        </section>

        <section id="pilares" class="mt-5 mb-5">
            <div class="container">
                <h2 class="titulos text-center mb-5">Nossos Pilares</h2>

                <div class="row">
                    <?php
                        global $post;
                        $args = array( 'cat' => '11' );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ) : setup_postdata($post); ?>
                            <div class="col-12 col-sm-12 col-md-3">
                                <div class="card text-center" style="border: none">
                                    <figure>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="post thumbnail">
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title"><?php the_title(); ?></h3>
                                        <p class="card-text"><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </section>

		<div class="clear"></div>
	<!-- </div> -->
</div>

<?php get_footer(); ?>
