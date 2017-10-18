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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'demoapi');

/** MySQL database username */
define('DB_USER', 'gatsbytest');

/** MySQL database password */
define('DB_PASSWORD', 'n8NLP5qVQSSbNIOi');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'entP--+p4K>+>DTZ<Pq@>(tp(_.u7>x3 7@f5+X?V{[ wbBYP4QF*+M%fR|TCX+6');
define('SECURE_AUTH_KEY', '&6{+}<9wZ53Z9(V*rq$kT4@p1Qp(WXM+PMhoxL?_GelgktXw@,ExB,A^EqW_NAO:');
define('LOGGED_IN_KEY', 'Og##}r<Y3`&P3nN-L)5eFp*thrXB*]#.Ul^{O|o f<HLYU&^5]Z#^$q|Q^W1W=#Z');
define('NONCE_KEY', 'leMukvy&|WB9-eSac!>OE@U|wx*nFqG.mHjE{7luni|6w-dbhvwHvvFrInG6&aUc');
define('AUTH_SALT', '=Pm%)Q WB2-FoVl>EW0GOc.h6$M}--To[ VUSzYLe`lddZ$|~PLf*h}U0R@VjHKJ');
define('SECURE_AUTH_SALT', 'W {zRT0wH%%7fc{Rq3o+N@F3||CB=-/z*LUgu(}Tt[+rXRl_:]{z(#j-RISs||y ');
define('LOGGED_IN_SALT', 'TaysfYN`TY*;y8{eJvg?+kt:Cj?$o>?}8cl<#O3yi9+%u ng53in8-X*S.1nzo(5');
define('NONCE_SALT', 'hT:]L2]nbb|iD_<5v)^feJidfM|K<`!/>s:UDh~8K1Kq z6QV(1BbSw40${5.I{!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/* URL where wordpress core files reside */
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
/* URL where people can reach your website */
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

/*
 * Define wp-content directory dynamically based on server name
 * This allows multiple sites to run off one set of core files
 */
/* Full local path for content directory */
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
/* URL of content directory */
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
