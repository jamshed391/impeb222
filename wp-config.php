<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'virtual4_wp740' );

/** Database username */
define( 'DB_USER', 'virtual4_wp740' );

/** Database password */
define( 'DB_PASSWORD', 'Bw2381-Sp-' );

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
define( 'AUTH_KEY',         'egp33ayt1ulnnwvjc3fzt4ni7z00eptr9opnue1h6qwzummhodewywbaqa3duzoc' );
define( 'SECURE_AUTH_KEY',  'sltwcoarnwardfdjct64qhupm0flseleh8exnbc85znsrk3hde7fb7et46gm1ku0' );
define( 'LOGGED_IN_KEY',    'nnfhdkeanzus13unr1leoqbahw9ljbtdrya02bujcapeaf2kf7rwjdgpag8kov6q' );
define( 'NONCE_KEY',        'zemv7zyd1fpd4pk9de0bv1oajza7fw77ugwpmv7s2lyr0surawyvtte7lbluwt4m' );
define( 'AUTH_SALT',        'hbmag0znkqztawq7483ynfjcfksx8cggaaa3xqjhxdzys6pcc3nnrkkpty1rk00e' );
define( 'SECURE_AUTH_SALT', 'vfju77w0nk3mngp6mmfufd7o7yui99ivifqcmzu2ijspqunxiz8it90gupgc35pz' );
define( 'LOGGED_IN_SALT',   'aoiokhtw5gzebgdrraujes5yqyuzlnpul9yqhlcdvdm2qqx53mhkcimzriv1tohm' );
define( 'NONCE_SALT',       'dlmxrhn4p1fgr7vkwjdwbngblmqsjqiludvpf1fqya1fw6gzcqdb9eh9yrqxzn8s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvm_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
