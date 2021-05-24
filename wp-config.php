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
define( 'DB_NAME', 'slimwp_db525' );

/** MySQL database username */
define( 'DB_USER', 'slimwp_usr525' );

/** MySQL database password */
define( 'DB_PASSWORD', 'q+%iQ5KRZns_Y1Qf+flrGM-eFu#wVWC.' );

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
 define('AUTH_KEY',         'CD4VS@d}|d)6&Tg+Zf~Sk+V|x%*!o,]r(k3h$-SV+<B]MKYMt!;i@vWQruJ@(nOz');
 define('SECURE_AUTH_KEY',  '-F.:G+8{oZAKVi-)9N+/G!ivGmC-Hq:L+L-.WaB/hc!+SF(,WRyF$_09nyR|mxcq');
 define('LOGGED_IN_KEY',    'mQ+rDUo-abj/o4PS~e8BgI::<k@!1y[4Bb9@1MT9~,(P<0;]Vc:+2A~<!ExH)y6 ');
 define('NONCE_KEY',        'ID+9m]Yo{B/JVJY-W^cq|asUs&%M>J!Rv7:|q;_Gq$3K#>Mhm-i}_+`hc:-MvZZ7');
 define('AUTH_SALT',        '-w)>(~k%8oO6BCC!Vd<KQtWzYa-|V38*!_1o!q@hl^K!yKDbG#pW|S^kC9zwjRKw');
 define('SECURE_AUTH_SALT', 'sDf}B)%^p5E0&_!8#63DxW=to~[3a+R<4CcCV#%0/}|VN~[.G@(B]BxEaIn+%vMR');
 define('LOGGED_IN_SALT',   'jrfdr`Ym ^vIgC@cm9<IB l3r-diMU#@W06/ZPv>1,P)V3ugr6pon#|4cx7LTiC|');
 define('NONCE_SALT',       'p!z>T?0>W*{)+jIt|i|_P%C)*yqO]MCJS]<93,G61mjmr9|8>cq#|);FauVsCz-(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 's3curewp_';

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
