<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'Lo{&B rdbD,&Aka^!G,4ad+9y^U33%K{sw+trHe%%O@uZ&w;5#7Q`M3KpDp0]IhN' );
define( 'SECURE_AUTH_KEY',  '!_aQ:?{19$JM2pB(@22jU9~a7K;-QGZcI6I^&tSejOY]@>yY1Bjqr;/Zf.@.eq3@' );
define( 'LOGGED_IN_KEY',    'rOY(#o?PWCQ%6d5(=ZdBr-#OK1[d KUp,kPyqM`9u+M5y^AV={Sh,E_NPWi[p1!%' );
define( 'NONCE_KEY',        '50uE~mb;97X^<=;-:MRm/J>Oj[>(&O)@O/m19Fz 8[OY-wQ?nR<OId|K~Avj)+tS' );
define( 'AUTH_SALT',        '*_Cvt=4ihZ%*.-NI$<0qO%$I]:o5iGN=,h0CwSX;_,RDj{~vOG,[.`K@H<&~7xA>' );
define( 'SECURE_AUTH_SALT', 'K0!;Da$Uv}u1GECm?-bokHY83j;]u;z4;O1bW>e slr@]s^`D=/_G(_dXC}Dc|cs' );
define( 'LOGGED_IN_SALT',   'SyHf.WIz9*N#]q.qbkkr:nbfK0$Vw0#,q DWaZ[|61gSk0Pky|)YBgU7WaPEdE|+' );
define( 'NONCE_SALT',       'Q@z[3Bl4k9X7r{!gZ#8^Myv}(ku1*2mJf^+$o$%bhpt<z:]RVdiA$MlU2pb~L. y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
