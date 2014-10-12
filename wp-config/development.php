<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'NonMadden');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'oomN8iy[z,');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '|h|~tAH[DqH4+a/wAcH LiL~cZH6UH3-ws-KD_3HT^)+n%Y=4WVT_32l`+N-?CW{');
define('SECURE_AUTH_KEY',  '%?-Q<b-9Wt=!2^dq@GWLjr _)z!*$7Hm(-0#UEpTg.nE r![.|L},Q?oH?T,cQOV');
define('LOGGED_IN_KEY',    'h)OeG-C#-fSFaJ8`9q.iJ]Oz^`~9_k;wV&8-+_H=YwI/c )f72}Q8kM+3Pyv)K&h');
define('NONCE_KEY',        '|d*-&EKgYx*6pbW-Q!i@O(azye&|FQ}o2`Dag=_Zs28S;eM5g<|OcM[V :q@oWm2');
define('AUTH_SALT',        'LNK+,4VWdT]U9XV?VKG4T3jEK5T30<>&aV./_p2t(j9hhrEm+PWp-`|sm<|@{3-<');
define('SECURE_AUTH_SALT', 'r87+ZLz?,d<UF!w}YAazyzlr|$r:A/7=:zwt,vLxM6-Z,rOteR0|U>5PB5Rqc&[j');
define('LOGGED_IN_SALT',   '(sSrm_-kch,q|B-VoHJV,,A)N9A-t0{=a&k}@*Jg]S.ARyo8vwOU4cvOEaM20{=5');
define('NONCE_SALT',       'J|6g=|doZVrz/TBE{3KAU54tr>YL5l&au]nEyOy6,W# uv6*&JGh$@-CD`K08?tI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'x7ttfmm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
