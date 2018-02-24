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
define('DB_NAME', 'probecr12');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`Ne4BVN}TsB:GO|YQAjBvx>p(+R+RzY`$~k_II|;.g`=Y@CiX+9tE(hOLWvk_]77');
define('SECURE_AUTH_KEY',  'D^0;B.8J:x<~[b?NV-b`+{`7,xG7ODjy&R#0maKiqBF3P>^{2%Fo=Iv.,eRH~H)d');
define('LOGGED_IN_KEY',    '}@bP*h<CRF4-8T@{DA,NRJA,S-c4AdLfsxwQ_Vg_>P6)YNx^#f};Zp-#c?hc?n}M');
define('NONCE_KEY',        '<CG2P2ECun}<C.jAq6]-|_9n+.W)j7N_8DvE|ZB2u`?s@-Uh1qo53ymd-#FnKR3Z');
define('AUTH_SALT',        ',Cf/8mY4c#aS<` E</_~=+m{_sE|cbuKDZukr+Zm!hd?aj,[WJA)zYObpM)Qmcr0');
define('SECURE_AUTH_SALT', 'jb)X;jaKzZR |!Vs2zckd#1Zu%=ADJH[< ]_-p4:9=z?m&Ad.^@%MDRXcx%lFLU<');
define('LOGGED_IN_SALT',   'l*T<?EV:-^P$AG[ZQ!)W>lf+uJ55?gdc_K]<vg[+(]hh6?QDgH<L0dvazf^aeN:$');
define('NONCE_SALT',       '}_tPQTIkyfI`}r>vaa3F-r/~O)gR%$0/Xti<:hJe}.@6KA)lmDOX]u?|^lxqy4<H');

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
