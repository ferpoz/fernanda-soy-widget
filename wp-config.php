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
define( 'DB_NAME', 'noticias' );

/** MySQL database username */
define( 'DB_USER', 'admin_noticias' );

/** MySQL database password */
define( 'DB_PASSWORD', '1W8ZOi5pS!Se' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '=Ktv(u>d#vPga^xP?d7woXLWYh97_X8|bE=DfV-%,x{Yw1O=2t];;c{Z<t)$>EOR' );
define( 'SECURE_AUTH_KEY',  '+MyY6BrC-dS3:E3dn<bWk$|C]$ K,O,]v]$gad8-J%CyhBtZ}.nge+ojC*5Kfb:6' );
define( 'LOGGED_IN_KEY',    '1E#5|35Kj4,Yq~4u *(0,)i;~=J5md}m)Aelr5-N&n09#E|`H181Z77|/JE(Mvco' );
define( 'NONCE_KEY',        'g+<)Tso1JJgtV?ue-e-~>ut&RhzZh62Zj?E6OsU9/uv)rCLvHC.Uug_(4b9Hh4_-' );
define( 'AUTH_SALT',        'ND&|SZe}!K}/[5r)t2BO8?0)k|Y`NR>d6^r,WZq`y5$5MBc$18yyiy^&+2*fVOQ6' );
define( 'SECURE_AUTH_SALT', 'hlzn=]K.neVm/zDM#d.W(bJ$&~;~O<p`Fwpz#kVw1{!YK@zU:lWi@ekMzgk*D6>%' );
define( 'LOGGED_IN_SALT',   'OVJ$XtPc7q+%=]vg+<Vfr4PtI>zUvw|pE*nt_}c~,cMXS$PI:[u1rh!T)ZLMoY?Z' );
define( 'NONCE_SALT',       'KhJ+Pl$V RKtQ_AHT/P9*n*d_0/NboL$bH5T]yghEU%nj8+KuK3Z)[d_&1Yi5W8z' );

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
