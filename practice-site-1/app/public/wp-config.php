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
define('AUTH_KEY',         'tObuLxKK4HaBsfhktzBu+XeYxFTUiMz3jBC7WJEFQ19uyK1Lxn2Ag2Znx9/tI2LjHiLyEcFqnr/wbBBz9+oyxQ==');
define('SECURE_AUTH_KEY',  'jW3s2RXkVOdYKrVI/PSlkR1r343gdluIj9Ov3yisn9Q5t+XU2n4fqn0S0Y3ztWBDIwvo85A2LamnooPDByOrfg==');
define('LOGGED_IN_KEY',    'OYnqHMgU6CJQepGvhmw1X4OcocdA14IHGKoBhyTm1QrFM8lDDWfmBuQdl/TuPXCpj8FhC01X/t7jKFqjdn6LDA==');
define('NONCE_KEY',        'iSYwgLWYzo0D6fWK6OsBmn9H62muzsXLjYIKEC3098/Ph/uOupmRi+4r7DR4fD9GYAmTTGk1LRDgcfk+6FkjLw==');
define('AUTH_SALT',        'mrMtm8A3j8B449fYagR83u5zssccnv5kt419sFaHJvxQb8cBKTzEYRiDZabVLJ5hWPqgo5VYHYn4DuL8qO/Q2A==');
define('SECURE_AUTH_SALT', 'ZhwoYEBzCy5gQp62oc7JnsLD2WD7IzMLF5/5ELqahpXh5KKsTDp9mUBJmbEdr/WB3fLQjTf3uUCy4EqgG+oPTA==');
define('LOGGED_IN_SALT',   'kJkWo1+oK5Jo89JAbNQxh67kY1K6+GGnWI0VQ/ohXdqBknKxZtmoPrQ6Bix4xk7J/tZ9lvyXIQrQ3wzWXLWmhA==');
define('NONCE_SALT',       'yaxIbNzJH7HBKic7ugsD10Bty3Jpp1JRY3X+CA47Zqe1sDsFpRiCdMBnAxpAgTYQEVD38Ha2BY7oRM62xGbmUQ==');

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
