<?php
function custom_materiais() {
	$labels = array(
		'name'                  => _x( 'Materiais', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Material', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Materiais', 'text_domain' ),
		'name_admin_bar'        => __( 'Materiais', 'text_domain' ),
		'archives'              => __( 'Materiais Arquivados', 'text_domain' ),
		'parent_item_colon'     => __( 'Item Pai:', 'text_domain' ),
		'all_items'             => __( 'Todos os materiais', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar novo material', 'text_domain' ),
		'add_new'               => __( 'Adicionar novo', 'text_domain' ),
		'new_item'              => __( 'Novo material', 'text_domain' ),
		'edit_item'             => __( 'Editar material', 'text_domain' ),
		'update_item'           => __( 'Atualizar material', 'text_domain' ),
		'view_item'             => __( 'Ver material', 'text_domain' ),
		'search_items'          => __( 'Buscar material', 'text_domain' ),
		'not_found'             => __( 'Nenhum cadastrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Nenhum na lixeira', 'text_domain' ),
		'featured_image'        => __( 'Imagem destaque', 'text_domain' ),
		'set_featured_image'    => __( 'Definir imagem', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagem', 'text_domain' ),
		'use_featured_image'    => __( 'Usar imagem material', 'text_domain' ),
		'insert_into_item'      => __( 'Inserir no material', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subir para material', 'text_domain' ),
		'items_list'            => __( 'Lista de material', 'text_domain' ),
		'items_list_navigation' => __( 'Navegar pelos material', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar material', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Material', 'text_domain' ),
		'description'           => __( 'Cadastrar material', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-book',	
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
	);
	register_post_type( 'materiais', $args );
}
add_action( 'init', 'custom_materiais', 0 );
?>