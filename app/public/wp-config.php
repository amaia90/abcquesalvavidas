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
define('AUTH_KEY',         'zdxJ/MVazjB5cA9j682YyZOOGNNVwtGEjdyGQN4Tk62d/CbGqI0UnLmFui0GXOxplUQyoaQp+NSc38IUNUFUiQ==');
define('SECURE_AUTH_KEY',  'KxmRtXm6naZKVaYnIiCWschVEM7TXjqL5RpeIkMnt9t1tOv0272H40T8ICIUudzHOuDO4OSL6YhibgO/7gyYdQ==');
define('LOGGED_IN_KEY',    'X01HY8byIz9zKNbitx63kAM5Rp+qNCXT+XCPjqqVwHWyEVtwbEuScLhD+esmC4AcTqZULIqgKz7yqorEKXipZg==');
define('NONCE_KEY',        'gxaEOaUo3052CVUE2Yqtiz4bOeiat9Q2x20jdYosNiIZobnn7zv2oBwuV+SaPQ7YIfrDi65D9PEj+cabMeIOOw==');
define('AUTH_SALT',        'ZK0yYJ2VefGMfLrO4OH8DAaeXFTmWuA7y/7J1SAbF+ktXHi2DXNyu8uau7FErHwAclfxrCyo9tNv0A2qjYGYFw==');
define('SECURE_AUTH_SALT', 'YhzhPlP7KMnB7dORNjWyd538hmDuN4STZGHuF51gc65ujTBYnAsTHbrfDGDOVT/y2qprfqghmD+6S5D1NIPTRw==');
define('LOGGED_IN_SALT',   '6idQoOQ9jenrH2P1aHRFp+vijjrJMUgmI7slR/OxdK88FsQrHoT8k2WPFrzYOiozmvmpJB5ryyV1H1JTgirVvg==');
define('NONCE_SALT',       'lhxAlAEXhSSH+t2uDvOtECYq2p0DJ8xHerRIWIiv6x+tQrsmxfIFdbAQK6b+3B0Fg+cas3oa8+R4WWDUQk+9tQ==');

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
