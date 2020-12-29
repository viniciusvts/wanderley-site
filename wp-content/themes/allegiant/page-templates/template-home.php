<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/element', 'page-header' ); ?>

<div id="main" class="main pl-0 pr-0 pb-0">
	<!-- <div class="container-fluid"> -->
        <section id="sliders" class="mt-5 mb-0 d-none d-sm-none d-md-block d-lg-block">
            <?php
                global $posts;   
                $n=0;   
                $args = array( 'post_type' => 'banner', 'posts_per_page' => 4 );   
                $loop = new WP_Query( $args );   
                if($loop->have_posts()):
            ?>

            <div class="banner-slide">
                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php while($loop->have_posts()): $loop->the_post(); ?>
                            <li data-target="#myCarousel2" data-slide-to="<?php echo $n++; ?>"></li>
                        <?php endwhile; ?>
                    </ol>
                    <?php $b=0; ?>
                    <div class="carousel-inner">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="carousel-item <?php if (0 == $b) { echo "active"; } ?> ">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <a href="<?php the_field('link'); ?>">
                                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail();} ?>
                                                <div class="carousel-caption home">
                                                    <h1 class="text-white"><?php the_title(); ?></h1>
													<span class="barra"></span>
                                                    <?php the_content(); ?>
                                                </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php $b++ ?>
                        <?php endwhile ?>

                        <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>

                        <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <?php endif; wp_reset_query(); ?>
        </section>

        <section id="slidersmobile" class="mb-0 d-block d-sm-block d-md-none d-lg-none">
            <?php
                global $posts;   
                $m=0;   
                $argsM = array( 'post_type' => 'bannermobile', 'posts_per_page' => 4 );   
                $loop = new WP_Query( $argsM );   
                if($loop->have_posts()):
            ?>

            <div class="bannermobile-slide">
                <div id="myCarouselMobile" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php while($loop->have_posts()): $loop->the_post(); ?>
                            <li data-target="#myCarouselMobile" data-slide-to="<?php echo $m++; ?>"></li>
                        <?php endwhile; ?>
                    </ol>
                    <?php $c= 0; ?>
                    <div class="carousel-inner">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="carousel-item <?php if (0 == $c) { echo "active"; } ?> ">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <a href="<?php the_field('link'); ?>">
                                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail();} ?>
                                                <div class="carousel-caption">
                                                    <h1 class="text-white"><?php the_title(); ?></h1>
													<span class="barra"></span>
                                                    <?php the_content(); ?>
                                                </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php $c++ ?>
                        <?php endwhile ?>

                        <a class="carousel-control-prev" href="#myCarouselMobile" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>

                        <a class="carousel-control-next" href="#myCarouselMobile" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <?php endif; wp_reset_query(); ?>
        </section>

        <section id="empreendimentos" class="pt-5 pb-5">
            <?php
                global $post;
                $args = array( 'cat' => '2', 'posts_per_page' => '6' );
                $myposts = get_posts( $args );
            ?>
            <div class="container">
                <h1 class="titulos mb-5  text-center">Imóveis <span style="color: #bd2130 ">à Venda</span></h1>
    
                <div class="row mx-auto mb-4" id="empFilter">
                    <a class="btn btn-danger btn-sm col-md-2 m-1"
                    data-target="cat-all"
                    href="#empreendimentos">Todos</a>
                    <?php
                    /** pega todas as categorias */
                    $allCats = array();
                    foreach( $myposts as $post ){ 
                        $cats = wp_get_post_categories($post->ID);
                        foreach( $cats as $cat ){
                            $allCats[] = $cat;
                        }
                    }
                    // remove duplicados
                    $allCats = array_unique($allCats);
                    // remove o id 2 (empreedimentos) 
                    $allCats = array_diff($allCats, [2]);
                    foreach( $allCats as $cat ){
                        $catInfo = get_category($cat);
                    ?>
                    <a class="btn btn-outline-danger btn-sm col-md-2 m-1"
                    data-target="cat-<?php echo $catInfo->term_id ?>"
                    href="#empreendimentos"><?php echo $catInfo->name ?></a>
                    <?php
                    }
                    ?>
                </div>
                <div class="row" id="empList">
                    <?php
                        foreach( $myposts as $post ) : setup_postdata($post);
                        $cats = wp_get_post_categories($post->ID);
                        $cats = preg_filter('/^/', 'cat-', $cats);
                        $cats = join(' ', $cats);
                    ?>
                            <div class="col-12 col-sm-12 col-md-4 <?php echo $cats ?>">
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
                <div class="row text-center">
                    <div class="col-12 col-sm-12 col-md-12">
                        <a class="btn btn-danger" href="https://www.wanderleyconstrucoes.com.br/empreendimentos/" role="button" title="Ver mais">Mais empreendimentos</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog" class="pt-5 pb-5 mb-0">
            <div class="container">
                <h1 class="titulos mb-3  text-center">Últimas <span style="color: #bd2130 ">do Blog</span></h1>
                
                <?php echo do_shortcode('[carousel-horizontal-posts-content-slider]'); ?>
            </div>
        </section>

<!--         <section id="anuncio" class="mb-5 text-center">
            <div class="container">
                <div class="row">
					<?php
						//global $post;
						//$args = array( 'cat' => '10' );
						//$myposts = get_posts( $args );
						//foreach( $myposts as $post ) : setup_postdata($post); ?>
							<div class="col-12 col-sm-12 col-md-12">
								<?php //the_content(); ?>
							</div>
						<?php //endforeach; ?>
				</div>
            </div>
        </section> -->

		<div class="clear"></div>
	<!-- </div> -->
</div>

<?php get_footer(); ?>
