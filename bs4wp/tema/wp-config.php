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
define('DB_NAME', 'bd_bs4wp');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QN5H]<<J_K+o>b!#qeBz$V)f%kI&t^QlrWq/x7:@LC{2M:]v6Cm)Ss6Q*bRs?*-+');
define('SECURE_AUTH_KEY',  '#}Ebp~.##~9>Ifw)A*0Dkq;V10T2Z_@/uh!;3~UY@pjLk@xGmqCHez~k{R:K@LqD');
define('LOGGED_IN_KEY',    'ks:7!sTvBPlA{2U ](7q,41,OrWw7:Rc}Pj_m{?3ZIumoz*?Jk]Y2N^<w]^Fe>)>');
define('NONCE_KEY',        'm,%C66]<[cU7|(F2MTzLJ7zWlM5E<ifJL+)3cU/rL$]W)Kqbd= EiS&P0q,$v]&;');
define('AUTH_SALT',        ']sY:LUyEvyA?j3NeYxQHCh3@(Te%/4q,rCySPuhRm5bITNbgHZpeE4AgE|3[~)#<');
define('SECURE_AUTH_SALT', 'c>Ls!~3,xz=YBN:D8Ri~ThRs(0+My!5&f@Cw&;3g(gv!(-IPoV1ndWqS3urdEaGQ');
define('LOGGED_IN_SALT',   'Y9BNpCrD7?a}[Ul&alJ!31M=qZh$D:[d0#h%;?`1ep#X3iLdX*a#:nbg6Mec/@gj');
define('NONCE_SALT',       '6_KvH sk(5~+~Pvps^.`-r&1h;wAw%7ez1wQ,^60_=QD) _zX=P!F{@#r3Iy@Ii5');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
