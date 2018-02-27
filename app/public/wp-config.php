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
define('AUTH_KEY',         'BD7qxt8NKl+YD75qy4aI4mtUPxMiFIXaAgI7DuPKP4wY8CT8pZ7A4kSqrUrCPM5CZcxn1DdG0hsZ5c6afpsYvw==');
define('SECURE_AUTH_KEY',  'FDWSoTyDOp1FzHiqfDoB1tVCH/ytP9f6W7ZKrNJWDYzQCE6DgvgeHkwknORa84Xi6dpNY9vSAJiJvW7wDa+vZA==');
define('LOGGED_IN_KEY',    'BmyNLeb/Ik2M35cc013GfLxfBc+dtO/K9kzRQ8EbibfCZNxcsVriV5X6mtO58dhXVoWoJ3vP6ivG/X7Ero6u8w==');
define('NONCE_KEY',        'JIShIZOx2xJ7CF4Z8bvokTWvPq7bRv+wb9lT5hd8kOysGsWPSXcKqOFa+6ZGKIg6WO2r0DQpgafDlIE4oAk+rw==');
define('AUTH_SALT',        'YLU6luT5AFzJZgedaffPB+0+Pll4Sk6FKC5lB5dWg8AjO2epHNq5dEnuQhSod0pkRcQmxRVtlQ/y2B8Zn7idEw==');
define('SECURE_AUTH_SALT', 'uWoPM9MsBRB0DmnuAdOKEXWXAde6/8p2kbZ14ph5SlQ1Xmr3UHgoMwx02inGVjNTf8lf2mnbGoreUubarOi6WQ==');
define('LOGGED_IN_SALT',   'CEZ1i70aJeBXHLSHc4+qnn58UJ9Kreqn8uCMGsLXGNX76BH0AtRQUzAMMOmwwn6yVe6bcYjlPaZ+Z3YBlG1t5w==');
define('NONCE_SALT',       'nQCzsxSwtvtqiRSLZgHX5OXRiUaHj3MKfohTFh95mHll91JZaIGxXFescDw6MGMN6ZzU1qc50NJKim2fgVFNiQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
