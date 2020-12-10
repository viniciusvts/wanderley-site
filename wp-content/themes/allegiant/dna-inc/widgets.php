<?php
/**
 * mostra mais visitados
 * @author Vinicius de Santama
 */
class dna_listaMaisVisitados_widget extends WP_Widget {

  public function __construct(){
    parent::__construct(
      // widget ID
      'dna_listaMaisVisitados_widget',
      // widget name
      "DNA - Lista mais visitados do blog",
      // widget description
      array( 'description' => __( 'Exibir mais visitados', 'dna_widget_domain' ), )
    );
  }
  
  public function form($instance) {
    $title = isset($instance[ 'title' ]) ? $instance[ 'title' ] : "Mais Visitados";
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Título</label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
  }
  
  public function widget($args, $instance) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    echo $args['before_widget'];
    //if title is present
    echo $args['before_title'];
    if(empty($instance['title'])){
      echo("");
    } else{
      echo($instance['title']);
    }
    echo $args['after_title'];
    // corpo
    echo '<ul>';
    $postByViews = dna_getPostByViews();
    foreach ($postByViews as $post) {
    ?>
    <li class="cat-item">
      <a href="<?php echo get_permalink($post->ID) ?>"
      title="<?php echo $post->post_title ?>"><?php echo $post->post_title ?></a>
    </li>
    <?php
    }
    echo '</ul>';
    echo $args['after_widget'];
    wp_reset_postdata();
  }
  
  public function update($new_instance, $old_instance) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
  }
}
  
/**
 * função para o registro dos widgets
 * @author Vinicius de Santana
 */
function dna_register_widget() {
  register_widget('dna_listaMaisVisitados_widget');
}
  
add_action( 'widgets_init', 'dna_register_widget' );