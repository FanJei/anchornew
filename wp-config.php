<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qcfixersolutions_seven5' );

/** Database username */
define( 'DB_USER', 'qcfixersolutions_seven5' );

/** Database password */
define( 'DB_PASSWORD', '[Sl061p9(G' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '37yokvhtoy3lnonqxmhzhr2sfeoct1xcqbzzujzsztxntsdt8lfghzzjalq6su2m' );
define( 'SECURE_AUTH_KEY',  'q9tlvkjwwzd2fdguqzsrmkuxwiiggpcnao7s0k2tvbrrngf36oyfs89pmpeot1h7' );
define( 'LOGGED_IN_KEY',    'zcfjvy4czfmn2lvhwzfythbvs8updtnrbu77iweeppx5wjnubt44enaiditjovq7' );
define( 'NONCE_KEY',        'iuswdbgld1bxy48j8zzfintl8izdlxsu0nanbx2qvzunnhvn2ohwpm9lvoy1lcph' );
define( 'AUTH_SALT',        'y2w4oidvf9nfpvbbiasowli82uhvjkm1lfitj7ek6yi7ag9c2du013kbytguy6pm' );
define( 'SECURE_AUTH_SALT', 'wdrcb7renkpln1rwzwtm043wlngsouh6wsgtvosn0lpof9zoemnospa4rpg7tg2o' );
define( 'LOGGED_IN_SALT',   't0rhvaeo479z7cy3jrby82ryliwsgbzrxnwlpc9o1vggkhwxrodt5fx2uaauqvsk' );
define( 'NONCE_SALT',       '96zuf8gnpoqvxvcbcbsz3f8v0i5mk3gpp1qc0h5gbhehp6kvy5iog1f05jgg99pk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpi5_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
