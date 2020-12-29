<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" style="margin-bottom: 0px"> 
	<div class="post-image">
		<!-- <?php
			//$image_m =  get_field('imagem_topo');
			//$image_a = get_field('imagem_topo');
		?> -->
		<figure>
			<img src="<?php the_field('imagem_topo'); ?>">
		</figure>
	</div>	
	<div class="container">
		<?php //cpotheme_postpage_title(); ?>
		<div class="post-customtype text-white mb-5">
            <p><?php the_field('cidade'); ?></p>
            <h2 class="font-weight-bold text-white" style="font-size:1.8rem;"><?php the_title(); ?></h2>
            <h2 class="text-white"><?php the_field('bairro'); ?></h2>
            <p><?php the_field('dormitorios'); ?></p>
			<p class="dados"><?php the_field('situacao'); ?></p>
		</div>

		<div class="clear"></div>
	</div>
</article>
