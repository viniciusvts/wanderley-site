<?php
/**
 * Itera em um metadata views de um post
 * Há um widget que exibe por views
 * @param int $postID id do post em questão
 * @return int qtd de views atualizada
 * @author Vinicius de Santana
 */
function dna_addPostView($postID) {
  /**nome do metadado a ser inserido no banco */
  $countKey = 'post_views_count';
  $count = get_post_meta($postID, $countKey, true);
  if($count==''){
      $count = 1;
      delete_post_meta($postID, $countKey);
      add_post_meta($postID, $countKey, $count);
  }else{
      $count++;
      update_post_meta($postID, $countKey, $count);
  }
  return $count;
}

/**
 * pega posts ordenados pela quantidade de views
 * Há um widget que exibe por views
 * @param $postsPerPage quantidade de posts por página
 * @return ARRAY_A
 * @author Vinicius de Santana
 */
function dna_getPostByViews($postsPerPage = 10) {
  /**nome do metadado a ser inserido no banco */
  $countKey = 'post_views_count';
  //query no banco
  global $wpdb;
  $query = "SELECT * FROM {$wpdb->prefix}postmeta";
  $query .= " WHERE meta_key = '" . $countKey . "'";
  $query .= " ORDER BY meta_value DESC";
  $query .= " LIMIT 0, ".$postsPerPage.";";
  $orderedMetaKeys = $wpdb->get_results( $query, ARRAY_A );
  //monta resposta
  $resp = array();
  foreach ($orderedMetaKeys as $key => $value) {
    $post = get_post($value['post_id']);
    $DNA_custom['author'] = array();
    // $DNA_custom['author']['name'] = get_the_author_meta('display_name', $post->author);
    // $DNA_custom['author']['thumb'] = rest_get_avatar_urls($post->author);
    // $DNA_custom['SEOtitle'] = get_post_meta($post->ID, '_yoast_wpseo_title', true);
    // $DNA_custom['SEOmetaDescription'] = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
    // $DNA_custom["categories"] = array();
    // $DNA_custom["categories"]['category'] = wp_get_object_terms($post->ID, 'category');
    // $DNA_custom['thumb'] = array();
    // $DNA_custom['thumb']['thumbnail'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');
    // $DNA_custom['thumb']['medium'] = get_the_post_thumbnail_url($post->ID, 'medium');
    // $DNA_custom['thumb']['large'] = get_the_post_thumbnail_url($post->ID, 'large');
    // $DNA_custom['thumb']['full'] = get_the_post_thumbnail_url($post->ID, 'full');
    $countview = get_post_meta($post->ID, $countKey, true);
    $DNA_custom['views'] = $countview?intval($countview):0;
    $post->DNA_custom = $DNA_custom;
    $resp[] = $post;
  }
  return $resp;
}
