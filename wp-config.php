<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<>{3rL]oqGE]N<4h:Kj?*@M;sy<N=0eb#;]Wf1^uYm/#Nm@VC>|s9jNj @cjCTOD' );
define( 'SECURE_AUTH_KEY',  'C_V8R)D8bO7z^hx:PHE6[#WP&;1+KULnv>MUMdanT.*vJRKZngb0n2R8d]p5=L$N' );
define( 'LOGGED_IN_KEY',    '%8m;@q4:`f][-5p<.Oe5|$*,by}pdMQ#xH;*!<0Gtl @5-J@Wk$%K#AC}d@1<Uh[' );
define( 'NONCE_KEY',        ':4<+~63Pge_Z(+|<Ej,N`shnS,~RbXZv,$<DGM1]KLvk.o3z2=n2b_uxnNy:`o/G' );
define( 'AUTH_SALT',        '3:ge>D@miJ]KLWh$jng3]uTSNK&E{,h}1mEW#fv[2t9vs6RzBfArWJi[2_e@P~S:' );
define( 'SECURE_AUTH_SALT', '}Z$=L#GOq_hg^6Pxo~JbzD0}N_a <KNh|*Fws`DZ&AX4D~3^tOSh<$v.e^%<iAzv' );
define( 'LOGGED_IN_SALT',   'oR(dlfR~B3oUA& R}L}aGV-el^Wg@5Ou7Fa|=2P!GGr%[]w;Xw+D#ud#h=3|.M,V' );
define( 'NONCE_SALT',       'LW!$U:/L%z^<czOe.+r$)7dZ(d}T:b)IzR3xa*drOUvv*p&^tH#h$Z -k~/Kl56W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
