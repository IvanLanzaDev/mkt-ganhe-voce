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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'u581700024_mkt');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'u581700024_mkt');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'ganhevoce@2018');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W|m*lHXF^AOZgnO*V3#|DJjO83ni6Akx@w F$z`csr;e;aLqmPPc[#AZTd(MAcAz');
define('SECURE_AUTH_KEY',  'shu#E:ys$9ArCt{p(v_+6#/5S }Bw]2uKiz_i:LL;%:dh1%%tEUHw2~i?m_m&t_;');
define('LOGGED_IN_KEY',    'hsmq|wZ,@0PEYEVf1H&T}DjfmjApAo(UmTp+)%Qa=RVSki.*lka~%/>54Gc[j><4');
define('NONCE_KEY',        '9vZ^%]s_m;jD!LN-@5?cN?58L%6xQK$96Ml]di+9v[n(bC=errz-Vy$@+*B?YDQJ');
define('AUTH_SALT',        '*lr]%c/x#qnog1u2d@N3jfcSBRU.9LvrLW*3!~.I- .$4)5FQTTkf]FQPYXnS,|6');
define('SECURE_AUTH_SALT', 'Ha2c=lZ?e;Tc4]H.T7q>dU,Cn$hRr:$zdWvQAjF@WgG$A],G(U:AreEQe|y[.9s:');
define('LOGGED_IN_SALT',   '_#2/&?G=[=j06x3# 4^woYZTQR]TQ@=I<(d9+TSoC2U|*;Wc!q/`I(ubo+.f6js:');
define('NONCE_SALT',       'ZT[XTBMO>mYI$!DvR,A|l2NlUcB<>2DfR#>B+Kcd+o|=nInluwCXx|Ad`p[O%AWk');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'mkt_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
