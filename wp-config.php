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
define('DB_NAME', 'snvm');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin1234');

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
define('AUTH_KEY',         'K=k(Vb#?nSc=L!#LG^]5yS7}+FokEw3ZV=CuM5bLy7y=,h>t@:tc`KT=bGci*C~h');
define('SECURE_AUTH_KEY',  'N0Yk18?SL-s(z>~u>_]vg-8LMJg1:5PlD@2{9cxTVQ, d3 KwJUi^26(ZnNHnk6I');
define('LOGGED_IN_KEY',    'v2)_VOgY,7Z,#riA9MRrgmS_Q(Z} PaDNtj38x9I]fiT*C[NEm}fGb4yLkRthu>4');
define('NONCE_KEY',        '89y>iuwIL6)ox8cxD7Erfz>=?F[@#&<$!|66>bdi@_9j~,G#%kI~/,FB2YS Ego@');
define('AUTH_SALT',        'dV8toIEc(*/*LPgwJfYc,H}NJj<Zw?dbeRq|~Wb}a/s)bS]Q P_wi-V&v,g.wh]H');
define('SECURE_AUTH_SALT', ',FZ/MJ5O^`Si]Jk@}^ v[)!~LPp!#7FVtg&r,@=n[]r)AG[Uuz_fCFa[~e0gx|uS');
define('LOGGED_IN_SALT',   '_(&o~R63lFU1(RFOItDR)lh8daOY +]SfX]B+?9G4h27O&<]@3V6dr0Y!W!1fBwK');
define('NONCE_SALT',       'p-<?I?gl=V[OPtzkR7##4Tyv6>eMp1s4?#V s+&2R7_V6GVeq|a!ZYH2GiU2)?o-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'snvm_';

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
