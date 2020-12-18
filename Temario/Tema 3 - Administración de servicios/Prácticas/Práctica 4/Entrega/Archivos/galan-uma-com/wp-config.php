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
define( 'DB_NAME', 'galanuma_com' );

/** MySQL database username */
define( 'DB_USER', 'galan_com' );

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
define('AUTH_KEY',         'X!2-_xZuFWueSOA}C(O_[I;NKmbbh/Vm4I0hmUi|MGeGj[q;+=9)_+BFos7wefLE');
define('SECURE_AUTH_KEY',  'U]0kb%d+Lk=N?aad;p!]Os[)E`=09X[at0;F8@ My~1h-$.@geXbh.$%=6EK42 {');
define('LOGGED_IN_KEY',    'Phe_aiBJ> ckSCu{U%JQv.IyiXO:L Z4+6Oz(/+HouJo02/KWq_b>h^+C+<GG41X');
define('NONCE_KEY',        'nuw,3d2zcA]6z^Q;.ZKS6wu4sQL=eWQCY]N.-tbh!+*u.b09x@K9F9-2F~+d7.Cp');
define('AUTH_SALT',        'ZTgl}ap<}*?Pf@kQ^38j:eq|}+S,m(L?X-mk<|nHVo+|qW`N?{{Du2q.S|+1NA#{');
define('SECURE_AUTH_SALT', 'ipdhJ-)T]A8-eU.ZzgyWri(<BrR04Y<+SB9&dlkxBmJHr1ilBb){.*th?3R-uedf');
define('LOGGED_IN_SALT',   '_JGkP&AE#0!O!V&g!>eq@N49`q)#/ ;v^)_+@%#wj,bG26.]vIw$*$o_Y}H1|<qH');
define('NONCE_SALT',       'f&w+G?#`+R7+RH)md85 |Y8(@+JC3^+Qd>=<e^Q))|46fdjY5DeuF~_yr]F:aO8+');

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


