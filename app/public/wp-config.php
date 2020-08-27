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
define('AUTH_KEY',         '0yl9rvmzJZ8/9AuZHqp1++Lc/L0lW4o5DhOdv3U9cXgYLFpfMHXyzfautf3p3goTEFpv3kJ9RF+kl/I3oBA+Jg==');
define('SECURE_AUTH_KEY',  'iADFIV+0gnE97KkoN6si9MTJmEoefG+kxXzhESaFdvk09tuTE938OA7W2GL5k70CoIruSuI5oC1Ujy+OG21rqQ==');
define('LOGGED_IN_KEY',    'HJD/v7epbYQlu4tM0PGtf2xcE1wvAfqvlLGx8nEtcG7uHLCMh1rcAa6RWenI2/uAOmu2asSQUPdrcnPHnlvNfw==');
define('NONCE_KEY',        'z7k4eTQcGiffLFMkqLSG3SS774nBXp0wkOvNsh6Xn8tMZEpEysoPUMtjp1lfktQbjdLm4j1KeYrdb5XAq3mcHQ==');
define('AUTH_SALT',        'ZSRbgIIic+bVIG3yYGFaxaHSYmSh8fXWUj+kycTxBBohhSPWQ6xhKlmLcxHccvTWV4T0q61iUHhvOGN9QgJYhQ==');
define('SECURE_AUTH_SALT', 'lmbxS8uFFW3X1Te7svj2hjWnalsuUwcj6uSpiURxG4DSo7FFVbF8yB/jQWBsDlzOPtOsfp6kcVenB2pc2WSgrQ==');
define('LOGGED_IN_SALT',   'eFfYW/q80l4UWu+gbBMoBgVzD0QTb8fguoeyCphRDDtM0/tTnLd1STHDS+ua1kneGWRrpA5nywBJqN0HTFRVAA==');
define('NONCE_SALT',       'G11roTl8+GcSwlNM66jM0S2ve9WcKVpm65YL7/L9LurC79/R6CuYzM9EIX1kLTBKJ9aPNgaazkmsTeS5AF4EwA==');

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
