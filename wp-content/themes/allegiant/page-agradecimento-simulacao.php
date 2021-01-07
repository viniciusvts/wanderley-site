<?php
/* vem de dna/page-simulador.php */
if(isset($_POST["nome"])){
  $regiao = $_POST["regiao"];
  $empreendimento = $_POST["empreendimentocliente"];
  $cidade = $_POST["cidade"];
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $renda = $_POST["renda"];
  $entrada = $_POST["entrada"];
  $tel = $_POST["tel"];
  $fgts = $_POST["fgts"];
  $convertido = $_POST['converteuEm'];
  //$cash = $_POST["cash"];
  $urlOrigem = $_POST["urlOrigem"];
  //send email
  $to = 'gesika@wanderleyconstrucoes.com.br';
  $subject = 'Form prestes (simulador Pop-Up)';
  $message = "Nome: ".$nome
      ."<br>Email: ".$email
      ."<br>Regiao: ".$regiao
      ."<br>Cidade: ".$cidade
      ."<br>Renda: ".$renda
      ."<br>Entrada: ".$entrada
      ."<br>Telefone: ".$tel
      ."<br>Pretende usar o FGTS: ".$fgts
      ."<br>Empreendimento de Interesse: ".$empreendimento
      ."<br>Url de Origem: ".$urlOrigem
      ."<br>Converteu em: ".$convertido;
  $headers = array('Content-Type: text/html; charset=UTF-8');
  $wpmail = wp_mail( $to, $subject, $message, $headers );
}
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/element', 'page-header' ); ?>

<div id="main" class="main">
	<div class="container">
		<section id="content">
			<?php do_action( 'cpotheme_before_content' ); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="page-content">
					<?php the_content(); ?>
					<?php cpotheme_post_pagination(); ?>
				</div>
			</div>
			<?php do_action( 'cpotheme_after_content' ); ?>
		</section>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>
