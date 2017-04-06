<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

foreach ( explode( PHP_EOL, file_get_contents( __DIR__ . '/.env' ) ) as $setting ) {
	if ( $setting ) {
		list( $key, $value ) = explode( '=', $setting );
		define( $key, $value );
	}
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']U>vEJH,v&t)MN2Mhuf]VRi}AaFw~]kpk0Cm]AB$~Tjh:=,Uu^rb`1|<V5#x8H{V');
define('SECURE_AUTH_KEY',  'O=c}6(]By:rP:xO34M/VAo>6Xy6r0i6^PE_g+VV*r>A1^2Pv@=W7>Za,2AXER+k&');
define('LOGGED_IN_KEY',    'bYvTHn-i+E&`i2.Qw00DDT+TC+S{E&0zy5UTA-~q?cLNN5%%>65zo3B{Tg+%AYR#');
define('NONCE_KEY',        'e.*4p`w9`},o^RSqD FAjeKUQ{j=`VR~p:Z9ad>cx|`j^V3=|V|mYtFS3i&i6jSK');
define('AUTH_SALT',        'Ke{Z -S+oV-pLt.0bd^d%>mbpNPjshpA$oRV7`fo+@J@P,4,Kw^RlAD?[<xS~xR1');
define('SECURE_AUTH_SALT', '4glGn./Sl$8:m=c9uWR(*V5?1luEe#)ujB:sxg~4I$+L%}nam:?]t/f)-X+t E;H');
define('LOGGED_IN_SALT',   'pS!c{j&NU3z.A&ot~>c,H._?9}L[-qzQT O6l2Uf3MNkQ~+pb ,jen-HCv|vxgYT');
define('NONCE_SALT',       '$:ff`}+$#h-3-!*W}X1H8Glv!Mz4!$`$Q@8Y+`<BKZI&Smq90zEYzLkU0iox(_mh');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_URL', WP_HOME . '/wp');
define('WP_CONTENT_URL',  WP_HOME . '/content');
define('WP_CONTENT_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'content');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
