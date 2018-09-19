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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Jpnwf1JOQDK4BPay2j1fdHZEtBOxs+HUx636T7N+vYDkaSJirWy98vij1JOOzOUXPDdhsti5uDfFm98BaQE6ag==');
define('SECURE_AUTH_KEY',  'PTnFHPQqbQfb4+v736zeD/At5JhEio7O/5oo92DRSuhocQQpfEzT0Kk+m94iH36kahXjxkb3YZRpTXfAPvis9A==');
define('LOGGED_IN_KEY',    'eI3mevXGtXeomf8njS1ZOvl8AJo2Cr90GLVRpb/KKQdSgDP6lBQxCKw/lzZ6s8Ze4UXhkoHXoiaSfUoOTEswIg==');
define('NONCE_KEY',        '9pxMMwtkSY2PWgyoEDkEhNkju2EtWC6K5RE6yIjNY/mpzVSRfL2VwbIzGSu3JD+em1zP5MLWmhJ2yD6ZBe1ARQ==');
define('AUTH_SALT',        '3+LjGMGWIV5sUk7zY1C0CutRnnqngP8dI9lQaQGsdy+l+7bqXvVlnvFHWkU8oACpwpq0+og9kuJmxUde+BETkg==');
define('SECURE_AUTH_SALT', 'RzExUdtRo/spdo6ABtcfl68GGRwugOkJ1K9FWL6AQHBUT5USECUt73tRRD8dB8yRnMtAtWPg2viOlgXYjbfEKg==');
define('LOGGED_IN_SALT',   'g5ofR8yLqQ9MVQzE6nsTn/aIukvab0t8vCa7RtCir7eA3WsQ6mDyYriFRONNkn5e+WyWqyAM1gZIiaR1X4vErg==');
define('NONCE_SALT',       '823GdjmUUHnWcLMoDsrr6nhuWVv0EUj8Y5DMa+xXYLLWOlxnkmb2hVEr6Ik9xG2hUcg8y1RlTb1TEgwdrwjwhw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
