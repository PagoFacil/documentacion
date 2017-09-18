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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '172.19.0.4');

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
define('AUTH_KEY',         'T*H~5a$pu].S;RZy*}gddhS?wkKtgqrb}HU{3W[@PzULc&b3pz<3X^QcBk:g8`U#');
define('SECURE_AUTH_KEY',  ':4}5;vbgm<46T}BenhM<9q+HPdC;41t4/A4Aey{ir6[B&;T2f7@<.]b&WE3e~y$@');
define('LOGGED_IN_KEY',    'N6+njI7<-Q} &6bf8jb9m9;(C.O$otdqw/M5Cqt;_!x*uS}ra(r5-[K}7>n= 9I_');
define('NONCE_KEY',        'xPU$4+Cxs}zslg!-8``^JJ4Nir%f[AKb0<#6w/#bknO/%O%iI!702%Zo&!uNYx([');
define('AUTH_SALT',        'ixAu+0DK<WI*Qy^Kp)Asl//@qd,^<5mgp,{gn7QtlS+ee!OtF^vK+RTwW#J4EN1c');
define('SECURE_AUTH_SALT', '@%X*H#4lP}XB{+1DxA/HYk2df3()ih&M!34<I[0J9aLyb-.MW;}VT!OzE0dN-]$V');
define('LOGGED_IN_SALT',   '9-sD{OM9X@, c}K!:xh88Ol{cE>G%Cs# Ev.dbYv8%*rrU`Bxxnj.8Vgqf]6/*O/');
define('NONCE_SALT',       '%`j6n}%PS1QOf=OA>(l2x4z m* N!hMoV?}Y1V,GD?8O+`$Q~zKF%8$DI8b|CDfB');

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
