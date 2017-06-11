<?php

define ('WPLANG', 'ru_RU');

/**
define('DB_NAME', 'pnprpg');
define('DB_USER', 'pnprpg');
define('DB_PASSWORD', 'kociw3rasid');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
**/

define('WP_DEBUG', true);

define('DB_FILE', 'wp-test.sqlite');
define('DB_DIR', '/opt/app-root/src');

define('AUTH_KEY',         'jOH7CI2)3*@2hHJW@cPo66vuB4LMOrJHsymgEFITTPlN2F1Spr@i%oBGJ%yndRur');
define('SECURE_AUTH_KEY',  'H@XBeV&(*Fl0DfNGpOnNw*Qd&V*LA7ZxfOad&tl3OYK@jBEDY#dbThax$*J4Vzj&');
define('LOGGED_IN_KEY',    '9Ovp0rjECw!LKimkzU4n#o^SMr!ns)j2rchk00qRZHfRP#G*eN$w6vCFx6QNu52u');
define('NONCE_KEY',        'l0a#SXMge@Qxm9kqOo$8Zz!9Orb*^rp6oSS3xtHhvVV6BgWoi9P%pfs8&4B2*EZk');
define('AUTH_SALT',        '0V^KoHKDPE8%!kpX)7%drwo7H*OhERgwF%jpYOe(cl4^T(9wKeWzGzYF^8ZPY9LU');
define('SECURE_AUTH_SALT', 'vYkB2gQ54sq$1*qTgMO!qS4G%2GX)Xw5DMDIWpNA@X4lHmo%&umD5Gi)bbTd5a^G');
define('LOGGED_IN_SALT',   'kU6QwK0z3ON6q)mfDoS*2z0K48D9H2uwHAIALcC9z!%u3%%F@HH%AdjRM!PjFEH(');
define('NONCE_SALT',       'qOO5lUSDxjghcoO0Kn1%Rl$!iG$t@d$zlQ(pFH7IEdRF6lGk55126XHov4CjF@1F');

$table_prefix  = 'wp_';


define ('WPLANG', 'ru_RU');
define ('FS_METHOD', 'direct');
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

?>
