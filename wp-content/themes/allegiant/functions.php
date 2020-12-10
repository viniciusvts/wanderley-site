<?php if ( ! isset( $content_width ) ) {
	$content_width = 640;
}
define( 'CPOTHEME_ID', 'allegiant' );
define( 'CPOTHEME_NAME', 'Allegiant' );
define( 'CPOTHEME_VERSION', '1.2.4' );
//Other constants
define( 'CPOTHEME_LOGO_WIDTH', '215' );
define( 'CPOTHEME_USE_SLIDES', true );
define( 'CPOTHEME_USE_FEATURES', true );
define( 'CPOTHEME_USE_PORTFOLIO', true );
define( 'CPOTHEME_USE_SERVICES', true );
define( 'CPOTHEME_USE_TESTIMONIALS', true );
define( 'CPOTHEME_USE_TEAM', true );
define( 'CPOTHEME_USE_CLIENTS', true );
define( 'CPOTHEME_USE_CONTACT', true );
define( 'CPOTHEME_USE_ABOUT', true );
define( 'CPOTHEME_PREMIUM_NAME', 'Allegiant Pro' );
define( 'CPOTHEME_PREMIUM_URL', '//www.cpothemes.com/theme/allegiant' );

// Add epsilon framework
if ( ! class_exists( 'CPO_Theme' ) ) {
	require get_template_directory() . '/includes/class-cpo-theme.php';
}

//Load Core; check existing core or load development core
$core_path = get_template_directory() . '/core/';
if ( defined( 'CPOTHEME_CORELITE' ) ) {
	$core_path = CPOTHEME_CORELITE;
}
require_once $core_path . 'init.php';
$include_path = get_template_directory() . '/includes/';
//Main components
require_once( $include_path . 'setup.php' );

if ( ! defined( 'SHORTPIXEL_AFFILIATE_CODE' ) ) {
	define( 'SHORTPIXEL_AFFILIATE_CODE', '3AXNUKA28044' );
}

function remove_core_updates(){
	global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');

// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					get_stylesheet_directory_uri() . '/css/bootstrap.css', 
  					array(), 
  					'4.5.0'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

// Incluir Bootstrap JS
function bootstrap_js() {
	wp_enqueue_script( 'bootstrap_js', 
  					get_stylesheet_directory_uri() . '/js/bootstrap.js', 
  					array('jquery'), 
  					'4.5.0', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');

// Custom secondary widget sidebar
function minha_sidebar() {
	register_sidebar(
	 array (
		 'name' => __( 'Blog Sidebar', 'allegiant'),
		 'id' => 'blog-sidebar',
		 'description' => __( 'Custom Blog Sidebar', 'allegiant' ),
		 'before_widget' => '<div class="widget-content">',
		 'after_widget' => "</div>",
		 'before_title' => '<h3 class="widget-title">',
		 'after_title' => '</h3>',
	 )
	);
}
add_action( 'widgets_init', 'minha_sidebar' );

// Custom login
function custom_login_css() {
	echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/style.css"/>';
}
add_action('login_head', 'custom_login_css');


/*Função que altera a URL, trocando pelo endereço do seu site*/
function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
	
/*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
function my_login_logo_url_title() {
	return 'Wanderley Construções - Voltar para Home';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Banner 
function banner_post_type() {     
	$labels = array(         
		'name'     				=> _x( 'Banner', 'Post Type General Name', 'roots' ), // nome         
		'singular_name'       	=> _x( 'Banner', 'Post Type Singular Name', 'roots' ), // nome único         
		'menu_name'       	    => __( 'Banners', 'roots' ),         
		'parent_item_colon'   => __( 'Parent Banner:', 'roots' ),         
		'all_items'           => __( 'Todos os Banners', 'roots' ),         
		'view_item'           => __( 'Ver Banner', 'roots' ),         
		'add_new_item'        => __( 'Adicionar Novo Banner', 'roots' ),         
		'add_new'             => __( 'Adicionar Banner', 'roots' ),         
		'edit_item'           => __( 'Editar Banner', 'roots' ),         
		'update_item'         => __( 'Atualizar Banner', 'roots' ),         
		'search_items'        => __( 'Pesquisar Banner', 'roots' ),         
		'not_found'           => __( 'Não Encontrado', 'roots' ),         
		'not_found_in_trash'  => __( 'Not found in Trash', 'roots' ),         
	);     
	
	$args = array(         
		'label'               => __( 'banner', 'roots' ),         
		'description'         => __( 'Products Description', 'roots' ),         
		'labels'              => $labels,         
		'supports'            => array( 'title', 'editor', 'thumbnail',), // define o que teremos no post type, no caso teremos: título, descricão e uma imagem         
		'menu_icon' 		  => 'dashicons-format-image', // define o ícone no Menu         
		'hierarchical'        => false,         
		'public'              => true,         
		'show_ui'             => true,         
		'show_in_menu'        => true,         
		'show_in_nav_menus'   => false,         
		'show_in_admin_bar'   => true,         
		'menu_position'       => 5, // onde ele irá aparecer no menu         
		'can_export'          => true,         
		'has_archive'         => false, // aparecer ou não nos arquivos         
		'exclude_from_search' => true, // excluir ou não das buscas no site         
		'publicly_queryable'  => true,         
		'rewrite'             => false,         
		'capability_type'     => 'post',         
	);     
	register_post_type( 'banner', $args ); 
} 
// inicia o post type no menu 
add_action( 'init', 'banner_post_type', 0 );

// Banner 
function bannermobile_post_type() {     
	$labels = array(         
		'name'     				=> _x( 'Banner Mobile', 'Post Type General Name', 'roots' ), // nome         
		'singular_name'       	=> _x( 'Banner Mobile', 'Post Type Singular Name', 'roots' ), // nome único         
		'menu_name'       	    => __( 'Banners Mobiles', 'roots' ),         
		'parent_item_colon'   => __( 'Parent Banner:', 'roots' ),         
		'all_items'           => __( 'Todos os Banners', 'roots' ),         
		'view_item'           => __( 'Ver Banner', 'roots' ),         
		'add_new_item'        => __( 'Adicionar Novo Banner', 'roots' ),         
		'add_new'             => __( 'Adicionar Banner', 'roots' ),         
		'edit_item'           => __( 'Editar Banner', 'roots' ),         
		'update_item'         => __( 'Atualizar Banner', 'roots' ),         
		'search_items'        => __( 'Pesquisar Banner', 'roots' ),         
		'not_found'           => __( 'Não Encontrado', 'roots' ),         
		'not_found_in_trash'  => __( 'Not found in Trash', 'roots' ),         
	);     
	
	$args = array(         
		'label'               => __( 'bannermobile', 'roots' ),         
		'description'         => __( 'Products Description', 'roots' ),         
		'labels'              => $labels,         
		'supports'            => array( 'title', 'editor', 'thumbnail',), // define o que teremos no post type, no caso teremos: título, descricão e uma imagem         
		'menu_icon' 		  => 'dashicons-format-image', // define o ícone no Menu         
		'hierarchical'        => false,         
		'public'              => true,         
		'show_ui'             => true,         
		'show_in_menu'        => true,         
		'show_in_nav_menus'   => false,         
		'show_in_admin_bar'   => true,         
		'menu_position'       => 6, // onde ele irá aparecer no menu         
		'can_export'          => true,         
		'has_archive'         => false, // aparecer ou não nos arquivos         
		'exclude_from_search' => true, // excluir ou não das buscas no site         
		'publicly_queryable'  => true,         
		'rewrite'             => false,         
		'capability_type'     => 'post',         
	);     
	register_post_type( 'bannermobile', $args ); 
} 
// inicia o post type no menu 
add_action( 'init', 'bannermobile_post_type', 0 );

// Exibe uma página single especifica para as postagens do blog
add_filter( 'single_template', function ($single_template) {
	global $post;

   if ( in_category( 'Blog' ) ) {
		 $single_template = dirname( __FILE__ ) . '/single-post-blog.php';
	}
	return $single_template;

}, 10, 3 );
// DNA
// custom posts
require_once 'custom-posts/custom-materiais.php';
require_once 'dna-inc/posts.php';
require_once 'dna-inc/widgets.php';
// Incluir DNA assets
function dnaAssets() {
	wp_enqueue_script( 'dnajs', 
  					get_stylesheet_directory_uri() . '/js/dna.js', 
  					array('jquery'), 
  					'1.0', 
  					true);
	wp_enqueue_style( 'dnacss', 
					get_stylesheet_directory_uri() . '/css/dna/style.css', 
					array('bootstrap_css'), 
					'1.0.1'
					);  
}
add_action( 'wp_enqueue_scripts', 'dnaAssets');