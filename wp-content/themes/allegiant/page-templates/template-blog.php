<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/element', 'blog-topo' ); ?>

<div id="main" class="main">
	<div class="container">
		<section id="content" class="content">
            <?php do_action( 'cpotheme_before_content' ); ?>
            
            <section>
                <div class="row">
                    <?php
                        global $post;
                        $args = array( 'cat' => '13', 'numberposts' => 20 );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ) : setup_postdata($post); ?>
                            <div class="col-12 col-sm-12 col-md-6">
                                <a class="no-style" href="<?php the_permalink(); ?>">
                                    <div class="card shadow-sm mb-5">
                                        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="post thumbnail">
                                        <div class="card-body">
                                            <h5 class="card-title mt-3 mb-3"><?php the_title(); ?></h5>
                                            <?php the_excerpt(); ?>
                                            <a class="btn btn-outline-danger btn-sm mt-4" href="<?php the_permalink(); ?>">Saiba mais</a>
                                        </div>                                    
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
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
