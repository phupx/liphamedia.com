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
define('DB_NAME', 'liphamedia_data');

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
define('AUTH_KEY',         'zjO,3CASUuw^&P=0=l`^8[0J}4z^4c-2gTmHJ%6*BD>8#Vs<-TJ-kv}PND5TcegM');
define('SECURE_AUTH_KEY',  '*vzP{l&BNa6$ICm=c8iCGWb`7w7#!4lSW(/L7y@n?1L`7h E{4haQzI^xP]Rt3G,');
define('LOGGED_IN_KEY',    'b0OZKFO3f-qn$]=OOApMLoi8|HD%]xR8Z-}w3)rp;eQ MvQA!@%}v7B~[Iy0Az5g');
define('NONCE_KEY',        '>_)7/.U3h_ cjerJ[SM69kcpo)zhQmuQ2)%&x}6?$%wm~!YI%2!vI2Jo:/N,mHrw');
define('AUTH_SALT',        'XCYe;q1k^q^s_/ak}s37,FTl/S2}9Emo0 QyC}<OtP,g$6)/n5{I-0DtGLyQn)5>');
define('SECURE_AUTH_SALT', '`Dt%FJKu{mvzUM)0cR24>}P^oS;?IC]~r!s62$sZ)vDQgPIsUU32O7L/b?/.Yo]D');
define('LOGGED_IN_SALT',   '}&tbIr*L;^uZ3:_{8Rwa2ZbO9`sft~|rV)ky&%V1UG7!TPty#D:0#B{h8_Mw[T-x');
define('NONCE_SALT',       '|6FdoTF8wBxVcemvQnk~SR<!Y>JO7C:<n?{/`|jKA?w(:]TOBL`A@)+z~6@.w?wh');

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
