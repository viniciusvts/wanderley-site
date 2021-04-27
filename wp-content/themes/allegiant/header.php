<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157772219-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-157772219-2');
    </script>
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/3ddad4b209.js" crossorigin="anonymous"></script>
	
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-668757201"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-668757201');
    </script>

</head>

<body <?php body_class(); ?>>
	<div class="outer" id="top">
		<?php do_action( 'cpotheme_before_wrapper' ); ?>
		<div class="wrapper">
			<div class="fixed-top mb-5">
				<header id="header" class="header">
					<div class="container">
						<div class="row">
							<div class="col-4 col-sm-4 col-md-4 col-lg-4 d-none d-sm-block d-md-block d-lg-block">
								<?php do_action( 'cpotheme_logo' ); ?>
							</div>
							<div class="col-2 col-sm-4 col-md-4 col-lg-4 d-none d-block d-sm-none d-md-none d-lg-none">
								<?php $template_directory = get_template_directory_uri(); ?>
								<a href="<?php bloginfo('url')?>">
									<img class="pt-2" src="<?php echo $template_directory;?>/images/logo-mobile.png" alt="logo mobile"/>
								</a>
							</div>
							<div class="col-8 col-sm-6 col-md-6 col-lg-6">
								<?php get_search_form(); ?>
							</div>
							<div class="col-2 col-sm-2 col-md-2 col-lg-2">
								<?php do_action( 'cpotheme_menu_toggle' ); ?>
							</div>
						</div>
						<?php //do_action( 'cpotheme_header' ); ?>
						<div class='clear'></div>
					</div>
				</header>
			</div>
			<?php do_action( 'cpotheme_before_main' ); ?>
			<div class="clear"></div>
