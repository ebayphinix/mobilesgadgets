<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wplaila_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '=*qzoV#j@@!Gg`fI2cfxx:l-fHG5EsTH&T~:PrX;7GM<Qs7+lAcHH*H)FFe;;m8*');
define('SECURE_AUTH_KEY',  '9q1=rlJ%3:hnYt+b&2|{9%pqj~wfw-6TX|k uzqTwCfbsuOP~P%LH:nN8M7e/&s8');
define('LOGGED_IN_KEY',    'JSH&/Jp.2xjmYjL2_d3JM&F8y@$ZoV2HduT:,|?pHK[sL`J*T.Jy>#Xmb[te[jPV');
define('NONCE_KEY',        'AN-I0}i|,:UN{a1nSNBU,5s1L3=2T;rZiMMl-9U($0<;vV <~seFJuZ87~>A?i{)');
define('AUTH_SALT',        'mNDWmdO;U}zSyB8e)~*C*J>a=U-ZWJ!-(E5@-]6or:f7rY8TbwgrhcUf4+<pD)Gj');
define('SECURE_AUTH_SALT', '|[%:OnLy,6T5PwF,Biv(w7VqX*BFA1E<1%$YUcWUKZy8)h=~ig:-B>kr(3~F-WH}');
define('LOGGED_IN_SALT',   'r4FXL,~},|H2>-NxwwsLm474-^?3er33LMoD$$E6<kpmXF1}3_+j_<hw)``^#xK?');
define('NONCE_SALT',       '[<Bpb ipvLHo(>o2r#k[lo3M-i2.$DlN7d|qa3YrO<+R1P|TF0 13HgOn@u!r,`m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
