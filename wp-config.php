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
define('DB_NAME', 'pureb2b');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%FuK$[mkVjcR74s,.EgmqI5FJ*N(vm?,t7)`Ldr,B_Wk|Bp(xA10l^[@&AF`#t8~');
define('SECURE_AUTH_KEY',  '+5tMs({)<(EIAv`Wr.e@37IAH!hF=[D) jK2VuCbTE;&e==.@V_G-SLztD/iYRJO');
define('LOGGED_IN_KEY',    'l4mc#pS?;D=^had}F%zM$~q3C2suvL-T@dkw6H_9~h8;g@N@}KT<F@-S-K@jU=M9');
define('NONCE_KEY',        '$+NnYz|-dwyj`).so`YbNF%opx`3A3v?M/25,)R1?Gx]*ApzuT)|9& /YZ#O+TbD');
define('AUTH_SALT',        'v!B|)/n~iKcG1c*3`4E~A cJ.X8})C6bg.Yapu$C@-47&RZqU4e.ivviq_BX$z.V');
define('SECURE_AUTH_SALT', '~+0B,xoSaH/5%mE{C*hh(PO3DI@V#tb6.rc*i0HOU5T,xxn3kdXf-EPkG}g&2Wc6');
define('LOGGED_IN_SALT',   ';8{}F$!ySNMd{ZO&vumk7xUO{[=>6CBP}U;un={/l~)@b[H.X~pvu/K0C5eH=A(3');
define('NONCE_SALT',       'Zq8sBKcOkpyw_~+[Ka1l>!j&X-N+t`}B^s]hygV2v.{OFFR~@@`xcGD<8Y<N#0^h');

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
