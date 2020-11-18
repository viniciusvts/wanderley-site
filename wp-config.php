<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

$server_addr = $_SERVER['SERVER_ADDR'];
switch ($server_addr) {
    case '::1':
    case '127.0.0.1':
        $dbhost_default = 'localhost';
        $dbname = 'wanderley_site';
        $dbuser_default = 'root';
        $dbpassword_default = 'root';
        $dev_mod = true;
        $wp_home = 'http://wanderley.localhost/';
        $wp_siteurl = 'http://wanderley.localhost/';
		break;
	case '198.199.88.130':
		$dbhost_default = 'ddb-mysql-nyc1-74097-do-user-787860-0.db.ondigitalocean.com:25060';
		$dbname = 'wanderley_site';
		$dbuser_default = 'wordpressuser';
		$dbpassword_default = '53kmqydsxob789a';
        $dev_mod = false;
        $wp_home = 'https://wanderley.dnadevendas.com.br/';
        $wp_siteurl = 'https://wanderley.dnadevendas.com.br';
        break;
    default:
        $dbhost_default = 'wanderley_site.mysql.dbaas.com.br';
        $dbname = 'wanderley_site';
        $dbuser_default = 'wanderley_site';
        $dbpassword_default = 'legiony720@';
        $dev_mod = false;
        $wp_home = 'https://www.wanderleyconstrucoes.com.br/';
        $wp_siteurl = 'https://www.wanderleyconstrucoes.com.br/';
        break;
}

define('WP_HOME',$wp_home);
define('WP_SITEURL',$wp_siteurl);

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', $dbname );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', $dbuser_default );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', $dbpassword_default );

/** Nome do host do MySQL */
define( 'DB_HOST', $dbhost_default );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4z;3yj/,cBxYM15p= S5%dq$xf<m ydJUmr.@z7F}l%a4&NxD-2+gh_Mna3y<?j#' );
define( 'SECURE_AUTH_KEY',  '2&qxgsukS]x{(1v{+i!WR@q3pIY2Hc zAa4TrqDb#|$KvE1.[6NsfbuUF.A-7Y}t' );
define( 'LOGGED_IN_KEY',    'tTlg8j));yF<#`m1`Af3Sf*eWuWJ:([j11^vi?KKN252EvAj_2/3HTRgiA(j]ac^' );
define( 'NONCE_KEY',        'VI(3?U{{$KkH2Fh:[;XjAP]2&7nm 7o.ENK5^fF:*.=t+amIw~JtmRGO4<amf2F)' );
define( 'AUTH_SALT',        '0Hp.Bz_!7T+(&hEkv`BzAQkh[!XZyZ6#nq91vo8<PPpCkHTWvd7l&l-tSgcwiqRB' );
define( 'SECURE_AUTH_SALT', 'AFwx]>3g/rICHT/7XPMYa4A1o;Sg:NQs:&uF>-]#irrRxd;DLxmht}znm[-.$8=6' );
define( 'LOGGED_IN_SALT',   'A>YNK6V)]RH0-LmSkC/ug%U|JZHh<d[hC<^L:~`)Xxc7psuix>/+*o3ttA;#<$S1' );
define( 'NONCE_SALT',       'F6Dzh83HM;<1.*qfsAkESc;Gjluga}WL%=fioAzZW[wXh?R_Yb2`/vP=KA!KRq<O' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', $dev_mod );
define('DEV_MODE', $dev_mod);
define('WP_DEBUG_DISPLAY', $dev_mod );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
