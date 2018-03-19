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
define('DB_NAME', 'balkanconnect');

/** MySQL database username */
define('DB_USER', 'Amire');

/** MySQL database password */
define('DB_PASSWORD', 'amire');

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
define('AUTH_KEY',         '}}L9)7OB]#P8x#pe.^R6A<(Pr99@_Ji(LpEQ~Tno9)TQ-DaENgjw7&pvtRsDQ-*?');
define('SECURE_AUTH_KEY',  'E U+N_&qoe}4KZeLcc_dfrD}wePW~}5vH$^4ve(wqbnGKx7)XQ#J;_.n~SiD:*Oa');
define('LOGGED_IN_KEY',    '1z/xT|SUbGt~)urCtKE0R6^bl$%v6ga<(% RX.1=Pg27Rln^}2:5}*{J}FX <#,M');
define('NONCE_KEY',        'NTcVGnG%l>F5fNk$Dh&mQ4O~Ameqi<8QHIe?0zQ/i8#B0)s<~*pM{(P9Ik2,[5]^');
define('AUTH_SALT',        'iGE_&,c{/iN.4?qY+(`2Uui*+6Q SQm{f*@kipzcq7v I78d3buu}y|4*?=}4t}2');
define('SECURE_AUTH_SALT', 'AMCX2 H3!=e~aQR`2p,4N0U#=yZS4|}`jm-K8Y~X/3_:;(xl/>w8]67TbWc{)rDr');
define('LOGGED_IN_SALT',   'CKzJ%>6p65D`yG+^dz>}rx&s8Hxl{P=m/!;*QY#I|e79ziYG_WQ?Oc;rH~=_=sj_');
define('NONCE_SALT',       'UQGqqT_(`E4;aB;G9>(~_Abcw^Rq#VX}U^Iiqk~Uim%{+z. 7Zm]trs4yG2kFjVQ');

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
