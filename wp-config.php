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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[6J3eqNe2C&`5uqPiHs 2DN|=M4qtSVK GVVhZz!hf~-tL|xj|@HtB<Fl,NrjWil' );
define( 'SECURE_AUTH_KEY',  '&aqT9=>|WuxMuAWuh >ciZAP`^wK?M@KRcLm9M|mCyJ9rh<p|I_2Zdv%*NDJ#pLI' );
define( 'LOGGED_IN_KEY',    't)Aw:@]?>T{]99qf(ss/w?@-E_#P0m,3+|H0vv5*0c`{{([=GxCPOB1!R~,.{YP?' );
define( 'NONCE_KEY',        '2M>Ee@,w_+aldgku/Xf*TW$Ks+lkrBHI~0e 9&?[-#@AwQnWb=;n7#DbViay*: #' );
define( 'AUTH_SALT',        '[_8}>3=?fqC|tuNpqC]!0V&7&aKA4F2Z)kL6wI$NzRGc&VNht5>q780qc^E(:u,I' );
define( 'SECURE_AUTH_SALT', 'CznS?C 6Fe7a_1eK4,NJA:LEN>{+:jkWZ#zk|a{qBDCu57asMv!KhgP_=mS2gJS_' );
define( 'LOGGED_IN_SALT',   'p&$vWr>35VbH]<#G,`tK|4Rm)TJ,:kHV<%^iV44@lfw#jj&n@sA7f58Wi.;2_4pG' );
define( 'NONCE_SALT',       '?*vHEL-q?$O6gjD4fFfxxu1hE8ic)0C{y!xN2/&n;BgG,3Res2Z|2g(Q5z[zUZ9~' );

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

/** Cosas para el Envio de Correos */
define( 'SMTP_USER', 'tamaki094@gmail.com' );
define( 'SMTP_PASS', 'yimbo_tamarindo' );
define( 'SMTP_HOST', 'smtp.gmail.com' );
define( 'SMTP_FROM', 'edri.alan.94@gmail.com' );
define( 'SMTP_NAME', 'Edri Alan' );
define( 'SMTP_PORT', '587' );
define( 'SMTP_SECURE', 'tls' );
define( 'SMTP_AUTH', true );
