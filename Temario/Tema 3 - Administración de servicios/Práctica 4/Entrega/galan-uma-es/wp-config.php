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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'galanuma_es' );

/** MySQL database username */
define( 'DB_USER', 'galan_es' );

/** MySQL database password */
define( 'DB_PASSWORD', 'local' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1guy7xnDW[=n;buHWJKt:dH*k+2%OF7*&dcqrQ<c@~|<GGKMx`t^OuTg;^W%+7w*');
define('SECURE_AUTH_KEY',  'FBCsX,I3tr9Z)@u~u>?D{KB`aW96+u -?=m)wSTL?S(4`}Tv4<?za5p]32Hb)l2*');
define('LOGGED_IN_KEY',    'U9}Yle*s^^@M^;GQyQI/<9mnpEPnHn0KRGJZtZ%&--olrYwthC=Z|wD&Z.jU<~AH');
define('NONCE_KEY',        'gtzQ+5q`cCIkuLHtYtqV>u2|nd%a6Q?- <GIZTB|k_x[l6OS=>S+=p/-{/+HG5WZ');
define('AUTH_SALT',        '19+` iR+28&$>ZlsO,$S-GTL:[e~sk@! Q+,f-T@nJU#S dr(z3/O:C~+JxNNrqg');
define('SECURE_AUTH_SALT', '|}Oy^wJg zu){v 24U>Xx@U(~1w2(*W6{]>3oogxv6i,]@NmNTE5>K:|MME(Y26l');
define('LOGGED_IN_SALT',   ' N aLP`hP^]~=tZr/hz-XKv>hk8KBOv3`<*!Q+nSz.-f8zm~GOO6+-Ft^x#bX-I>');
define('NONCE_SALT',       '~naP,KB!X<Rn/u]{lX~qV<;EieMEg1;UHMc=H +U+Aol< DkX3zcmlH`x,(Jf}~:');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

