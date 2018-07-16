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
define('AUTH_KEY',         'U6yV6Ju1wJFU0GCjXQNTPFfegMjdNRqaqiVLK+4ppMj3Kk5DSWtIMKybrf4CvRBeTKYNWhg2UynIop1lbxr2uA==');
define('SECURE_AUTH_KEY',  '7w4Ct2vJOkOw6eM0zJLRhA/SLceBzcXq4bwAAFtES3HQ+MpWKEw44koYmfnVoUlp9gnDDHG80U6O/u9sUTi0qA==');
define('LOGGED_IN_KEY',    'yHAFda2hl4+ckkz53EW4lJTW63Lt2NCgby+E93gZ0tSlfO4+UdO0GUhkf+/Zl36g+uq9p7jAXLzZnadF6UzmuQ==');
define('NONCE_KEY',        'sEXnvI/MAvMCDu691aKtTyStz6Wypnqnn6xUxEAbkV/s6rDl01r9XtHcqUK1bLLpKzF8eSigfomy1chvT8ikMA==');
define('AUTH_SALT',        'GJPi7ryjjU3W2OhdqaZ80ZjdvLftlnEfxhKLwcXn6cWH39DgEiJVawiBPvygsTciEj1VdW3TbcgfVb2RbGl/tQ==');
define('SECURE_AUTH_SALT', 'PqPZUkwzy21NmJvTmwjz6irBuWItb/U1xopCwyDwAu3X3MT7RUx7yQIdTq7SFZg5mbH8WIUIdlGDFIrVINATWQ==');
define('LOGGED_IN_SALT',   '0PROdRIrmBZmearTLF0JYnU6T7wJl9PfzguDp9Y00LFCisqLQHKG3wffxCRHyI6sqWcWPlXQw4ANztazX2x4rw==');
define('NONCE_SALT',       'p+MPjp+i3U+pJT6m28gPgm2K6l5FxpzPTV7HBd5AMaAvuEK7pqR7YXKcEnNleBoCfa40XewwOYSSwexNRQ8bGQ==');

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
