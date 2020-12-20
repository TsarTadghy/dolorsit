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
define('AUTH_KEY',         'cMBrKkALV+zYXQPJ9rXkKXQEVr6CkupWruGrxyVoDMOMAVapLtUiOMnsLLb/20ju5dwsBDXvZUQOTf55Dq/ejQ==');
define('SECURE_AUTH_KEY',  '1k/EYSJ+W5GiXhEs4M/mQ5WO90PAEzOwE6ZBO52RyLKABBL5/P9gi+kYdgMCQ/knc6wv5SurkBuJkezkSMhpZg==');
define('LOGGED_IN_KEY',    'w5tJ9fzlg0Yn+3PM9DxgYU8HXsEFdrVtGoha58aL53Htu/SkQVyZt6kVwI9iI0lY4QIdtyBsmTffYnfaWiwXGg==');
define('NONCE_KEY',        '+YcHFzbXxOf+Ia2cKObG7CDxmw7JCQVXoYbeAEISmyk001edna5bNtmaKFXCBwCPpc81LUMrhDBp+JXAmEVZXQ==');
define('AUTH_SALT',        'KhH4b+klpp4Sk3H3sXb3VFdor0OWaDrCJSbG/nX7EtoVmN/ue8CJNEW49iUsW0SM/DvoHkb+n1pd65ZXSxIcgg==');
define('SECURE_AUTH_SALT', 'C3GolItUDx/1Zq2yv/C2hjz7UzMPturGZy0nE6L+snmSCaNUL342kf9jlRDosDcX3BZI9yOV9tpCjzCr6+poeg==');
define('LOGGED_IN_SALT',   'NbilVDseLz1rOsLcNknair7jW1eDOFDoMP0PNJinYSqO5PXDUbcbHUuZoW9XqjRLqGNbsARjCR2tXAhqYXEKQw==');
define('NONCE_SALT',       '1UJjJFdEz3NJY3SeSdhxzBDKU9IsXnKoKVNpg3J14zmSYyNg1hENEebnFgMtM4jiJ5V5NWOSe2Cznq2iG3DlhQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
