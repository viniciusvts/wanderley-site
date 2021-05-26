<?php
/**
 * Função que retorna o conteudo  do shortcode, 
 * função mágica
 * @param Array $atts atributos do shortcode
 * @author Vinicius de Santana
 */
function ssw_shortcode_add( $atts ) {
	$name = shortcode_atts( array('short' => null), $atts );//ou o array ou o atributo, se houver
    if(!$name){return null;}//se não tem atributo, não tem shortcode
    $archive = $name['short'].'.php';
    include 'shortcodes/'.$archive;
    return;
}
add_shortcode( 'DNAsc', 'ssw_shortcode_add');