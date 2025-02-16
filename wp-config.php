<?php
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_38314294_wp335' );

/** Database username */
define( 'DB_USER', '38314294_2' );

/** Database password */
define( 'DB_PASSWORD', '5!Rp4c6q!S' );

/** Database hostname */
define( 'DB_HOST', 'sql309.byetcluster.com' );

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
define( 'AUTH_KEY',         'cyjfbipmjh34oz2rox7ayzktxfbje1wubevedf7zzp6rjtbbdiqxxj66irncacam' );
define( 'SECURE_AUTH_KEY',  'dvztjavuxiwwxn4fxywpddolzngcpyn4auu9lhrx0xf9buwyjo5gwdj40pfee0k0' );
define( 'LOGGED_IN_KEY',    '2rrodvrctrjvep8ljh8ynesgnzpdilehv56c4bvnvujqzm4piggwhdbikgxsjux6' );
define( 'NONCE_KEY',        'dtx5ctcsoxsr2vf5y2um1rog6p8bhdxacsil62uubcznkcs4p4o0s8uy0pxlu7al' );
define( 'AUTH_SALT',        'ksdhasycabhl7ywz5pmbilpapndvjmelhi9xgxthrt16ip1binwke7mwqqciu1vt' );
define( 'SECURE_AUTH_SALT', 'ectxay35odasbaexqydccbbbjinnqt7lws00bxe1zvojvbfvghatigowfnzn0ngv' );
define( 'LOGGED_IN_SALT',   'pyirnnxrrw77fpbvvxdqzmem3yj5n8qjaizifdmasr0tjs0lniirsjalbmyf2wx3' );
define( 'NONCE_SALT',       'xcnlab52j2nxojx6uqvejyjq3mmkui76h92hpmdneesklzltnfjxeiqlwnbb0o5p' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'unibd';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
