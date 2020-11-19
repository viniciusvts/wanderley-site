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

<div id="pop-up-simulator">
    <span onclick="close_pop_up()" class="close-pop-up">x</span>
    <form method="POST" action="<?php echo bloginfo( "url" ) ?>/agradecimento-simulacao/" class="bp-simulador container" id="formSimulator">
        <div class="title row">
            <div class="col-12">
                <h3>Simulador de financiamento</h3>
            </div>
        </div>
        <div class="page-number row">
        	<hr class="simulatorline">
            <div class="page active">1</div>
            <div class="page">2</div>
            <div class="page">3</div>
            <div class="page">4</div>
            <div class="page">5</div>
        </div>
        <!--pageshow regiao&cidade-->
        <div class="row pageshow">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pageshow-title row">
                            <h4>Selecione a sua cidade</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pageshow-choice row">
                            <select id="cidade" name="cidade">
                                <option value="">Cidade</option>
                                <option value="campina_grande">Campina grande</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class=" pageshow-btns row">
                            <div class="mt-5 mx-auto">
                                <a href="#0" class="btn btn-danger text-white" onClick="next()">Continuar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pageshow-->
        <!--pageshow nome&email-->
        <div class="row pageshow" style="display:none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pageshow-title row">
                            <h4>Qual o seu nome?</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pageshow-choice row">
                            <input type="text" name="nome" id="nome">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pageshow-title row">
                            <h4>Qual o seu email?</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pageshow-choice row">
                            <input type="email" required name="email" id="email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class=" pageshow-btns row">
                            <div class="col-6">
                                <div class="mt-5 mr-auto">
                                    <a href="#0" class="btn btn-danger text-white d-table mx-auto" onClick="prev()">Anterior</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-5 ml-auto">
                                    <a href="#0" class="btn btn-danger text-white d-table mx-auto" required onClick="next()">Continuar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pageshow-->
        <!--pageshow renda&entrada-->
        <div class="row pageshow" style="display:none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pageshow-title row">
                            <h4>Qual a sua renda? (R$)</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pageshow-choice row">
                            <input type="text" name="renda" required id="renda" onkeyup="maskMoney( this, mMoney );">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pageshow-title row">
                            <h4>Quanto será a sua entrada? (R$)</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pageshow-choice row">
                            <input type="text" name="entrada" required id="entrada" onkeyup="maskMoney( this, mMoney );">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class=" pageshow-btns row">
                            <div class="col-6">
                                <div class="mt-5 mr-auto">
                                    <a href="#0" class="btn btn-danger text-white d-table mx-auto" onClick="prev()">Anterior</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-5 ml-auto">
                                    <a href="#0" class="btn btn-danger text-white d-table mx-auto" onClick="next()">Continuar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pageshow-->
        <!--pageshow tel-->
        <div class="row pageshow" style="display:none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pageshow-title row">
                            <h4>Qual o seu telefone com DDD?</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pageshow-choice row">
                            <input type="tel" name="tel" required id="tel" onkeyup="mascara( this, mtel );" maxlength="15">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class=" pageshow-btns row">
                            <div class="col-6">
                                <div class="mt-5 mr-auto">
                                    <a href="#0" class="btn btn-danger text-white d-table mx-auto" onClick="prev()">Anterior</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-5 ml-auto">
                                    <a href="#0" class="btn btn-danger text-white d-table mx-auto" onClick="next()">Continuar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pageshow-->
        <!--pageshow fgts&cash-->
        <div class="row pageshow" style="display:none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pageshow-title row">
                            <h4>Usará o seu FGTS?</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pageshow-choice row">
                            <div class="radio-group">
                                <div class="radio-choice">
                                    <input type="radio" name="fgts" required id="fgts-y" value="sim" class="radiobuttom">
                                    <label for="fgts-y">Sim</label>
                                </div>
                                <div class="radio-choice">
                                    <input type="radio" required name="fgts" id="fgts-n" value="nao" class="radiobuttom">
                                    <label for="fgts-n">Não</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="urlOrigem" value="<?php echo $_SERVER["REQUEST_URI"] ?>">
                    <input type="hidden" name="converteuEm" value="<?php echo 'Form Pop-Up Simulador' ?>">
                    <div class="col-12">
                        <div class=" pageshow-btns row">
                            <div class="col-6">
                                <div class="mt-5 mr-auto">
                                    <a href="#0" class="btn btn-danger text-white d-table mx-auto" onClick="prev()">Anterior</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-5 ml-auto">
                                    <button type="submit" id="formSimulatorSubmit" class="btn btn-danger text-white d-table mx-auto">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</form><!--bp-simulador container-->
	<script src="<?php echo bloginfo( "url" ) ?>/wp-content/themes/allegiant/js/pop-up-simulador.js"></script>
</div>
<?php get_footer(); ?>
