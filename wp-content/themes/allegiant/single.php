<?php get_header(); ?>

<?php
$post = $wp_query->post;

if ( is_category( 'blog' ) ) {
  include( TEMPLATEPATH.'/single-post-blog.php' );
} 
else {
  include( TEMPLATEPATH.'/single-post.php' );
}
?>

<?php get_footer(); ?>
