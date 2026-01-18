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
define( 'DB_NAME', 'magang' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3_n@m3/zuK_0iOrBHa!x3.KmzBKXt =+1-B.C6K?F!Jo?:h#WKSc+7*|{fl&p^Vq' );
define( 'SECURE_AUTH_KEY',  'CFap9@aLq/7rI^%GjS={R},b}[AV84+M[ I1CK:=2*IXBpP._,3Wz(w$&l oGQ|6' );
define( 'LOGGED_IN_KEY',    '%^<5M3gcy*=`.7@Yi>q;vriDzIy/g*l`,K<n6IQuqZt,m4ZE=$W|8oP6}59`QJlT' );
define( 'NONCE_KEY',        'Plbr]1~IftLS3w<b%SLLQ`xuX.oZqWZ~^LUDR-L{wkY#nmMwR(bH;I!lYP`:~=ND' );
define( 'AUTH_SALT',        'kZ2u5Ip)B4!*F9;$R@01GPw8m@~SQB%lg V4~1~4##OeY&)^td0j;V*8KP(jv@5>' );
define( 'SECURE_AUTH_SALT', 'C:G`{P$$~%d5]!xoV*oy<mNRVfU%?;0Ziw GP:rsmDKlhN-wCQyk3glOT^S$.]/s' );
define( 'LOGGED_IN_SALT',   'UBzD*&3RV@v~,~%|RXk>wiyN}eS`@Xto=$A{#_T2G{wxR:>!0M7YG0=CwDWA06Tp' );
define( 'NONCE_SALT',       '#_VDs]hbJJb]!]DF*)2F88_Z,~xCFWHT/uJm4w7$;7L}QLfpH|xL>UD5.W)v6%<%' );

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
$table_prefix = 'wp_';

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
