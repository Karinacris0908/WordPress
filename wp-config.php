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
define('AUTH_KEY',         ',z_?V~+=:c_AUa0e-.D|n%J_2xaGV9C}X|inH:@y8Kxr+]s?/;)z$2!.ZWhMq[}*');
define('SECURE_AUTH_KEY',  '+8nWg*n-(8vy(^1|j&g|2h;I~LO+nuDPYHlD:P(h:qw%aW7VDUtvY<[8@9C1I23T');
define('LOGGED_IN_KEY',    'IQ=O1w{19)yeWGH aIDrjZg_Mb,[>lF.sUEDUxR3*jLWc8,)Zx&C#6ves kU<hNg');
define('NONCE_KEY',        '_+tAQd+Q2FJy/#M/[w3m2CKW0S=q.Cjab9(O Fi>j.JUIcxHIWU1?K<hf.<ojJ9q');
define('AUTH_SALT',        'RS7I7w85e?w^<}9x~ZnPZxtc^NUuGrm? &iNNoU,t-6#ExK{tdR.i>Xwa3dPs&,8');
define('SECURE_AUTH_SALT', 'l+u0mKboz/]MEeU6/1fpN5&nS|4hNiqzYx5Y//zP+F;F.`xQoneE5k04O5*PVc%y');
define('LOGGED_IN_SALT',   'nx+T3E/C^|PP)$p@T^JmtD>,a_^3Ue5j+R<k3@rD-@,*f[{9z<|kC~P%+-xvqu+D');
define('NONCE_SALT',       'HuBN<M;*~$x*!J4}_W{z.ibZ3@E2a7t`AM@vES;/%;X=#ys,-p5ZKCA,/o:csFL<');

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
