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
define('DB_NAME', 'apn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sofat');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '`}HzI+Pweq=6PX{z`78j0zhq=&(2%~jBzq<~|l)&`dzFy*FB*Y &Mt^V*&EpLjA|');
define('SECURE_AUTH_KEY',  '}?92_!2Y?<RG=bUiCLtMDdLpUM! QmzT*@~mb(2fL,A)Pi kx1cjX2WQP|89y4L(');
define('LOGGED_IN_KEY',    'nn;7RabPcM%_TC,YiYq>ey0u#hb?ZMs}oxG@)8X,`<X@%Y^u{=+kSoaP>x{YNn-W');
define('NONCE_KEY',        '~h?s:fZV>Di@V-N!@I4m7&@!8Z6r79X,Zr3Bl^)/`Ak:^i8P<TnVl-AfK7IpDoXA');
define('AUTH_SALT',        'ecJA0:$$EG[5QG^t=ad+RfU_z3wxTT!%LP:E0[VX1+-*9HOyE,F<H4zW3*RZ%%Tk');
define('SECURE_AUTH_SALT', 'F7mkAbhTf[mDCy?G/=Pj|RIT]*_jZJ6;MjaX/7Ckf5Au8O|d^#HmMX$A~,HoRKFJ');
define('LOGGED_IN_SALT',   ':@R4{<z,[R>K^sY~8obsVjBUOt}IkoJc`?l4emEzc2v>b)V%V=-1#{{vbLk %iYh');
define('NONCE_SALT',       'K^nD)%HtY9b1a?rnN~/7tub9-kDd;&,G]}>g&/B+V.C9g3&2^;XVG^z3@kqc/u+l');

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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
