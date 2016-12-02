<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'hxtutorsalex');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6{B,YV0Pl:NFQH8z=>-]}20Xzw695xHnFYHD(^+.k*%M&5RwHn1^lC57AP1(dMw`');
define('SECURE_AUTH_KEY',  ':o51zqHIX)_#].L,&4mbux;Gb:+Bjb8MA1pXvKQC<%li;gKb$LWB%uaVuA/eGg2f');
define('LOGGED_IN_KEY',    'x|DI3#/.^d.o/Td:]D,Z6($@BCN.9552W=>54SlPcv7i9X22jt;w*csHk%)qKL&Q');
define('NONCE_KEY',        'D<ch#]ojV}N3=iKJkNWgjeRd4& 5z9o=X4zPsHM1DfB<L6n<q|&TCi# 4x,257%i');
define('AUTH_SALT',        'EBR`x@qlG/2AE+LRDfASso8%^}ME,[U1^@@Y53`}FHAhk<Q5*[]yQ#NmiomTi=kD');
define('SECURE_AUTH_SALT', 'I~!uB#Q$HhC1N_H{F};0ZZL{MfG{ei??V]ilk|vB0:oB=@9Rc6hb6IR?Xb,%!W_!');
define('LOGGED_IN_SALT',   '1a1O28OOD6%n&w${SI7A!C)^b(-tvm6[B=GXUt>kH:q!Tdy=`1)ShU4iC`[=UJ x');
define('NONCE_SALT',       '!4AJZu{gY`UuE[_m@c0o!Mrnv~ODoIVwgdYQU.7x`J/,-:quCj0P4~=EPRe6!Yy@');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
