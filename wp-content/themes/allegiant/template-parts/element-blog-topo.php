<?php wp_reset_query(); ?>

<?php if ( cpotheme_show_title() ) : ?>

<?php $header_image = cpotheme_header_image(); ?>
<?php
//if ( $header_image != '' ) {
//	$header_image = 'style="background-image:url(' . esc_url( $header_image ) . ');"';}
?>
<?php do_action( 'cpotheme_before_title' ); ?>
<section id="pagetitleblog" class="mb-0" style="padding-bottom: 50px;">
	<div class="container">
		<?php //do_action( 'cpotheme_title_blog' ); ?>
	</div>
</section>
<?php do_action( 'cpotheme_after_title' ); ?>

<?php endif; ?>
