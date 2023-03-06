<?php
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
define( 'DB_NAME', 'ReproduireUnSiteExistant' );

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
define( 'AUTH_KEY',         'Yr1?/bMN#gKK5CvZds=h^(K~.oy:Vo)_&3%s6W}C;3 q=Y0HP$zS-,V:YxSH-Z8u' );
define( 'SECURE_AUTH_KEY',  'MMTnU&v9phO!EGGC#H=s3lUvgMz%ZmnOyxKmAHRrx#Zz{#rv(Pad&Tc-4QeKfK.1' );
define( 'LOGGED_IN_KEY',    '$*<z8l&##ICN&0Ao[zt(9T^)?QF}1Q!>^~p:$}Z^ j &-[^*6_x+{`$w[<ifb|PS' );
define( 'NONCE_KEY',        'B6_~+{]<Q`[Z33Yb?up,}]fD-M{[w,KmzuFzgPcO$[tDA[;Oze[z3o ]G^^jN>Zd' );
define( 'AUTH_SALT',        '&C9cXpfUmv~ebCbS*c`@H|l?{Sc39JEK%cSF#l*tynEnYO.4U)Q_?b`+3s2- XU=' );
define( 'SECURE_AUTH_SALT', 't{xu`EnbB#E5/=o}y{D[?w{oAGaAUI&rj9Wc~m/1{xj;!k<nyLlhfVs.uzdZjBn,' );
define( 'LOGGED_IN_SALT',   '6m|j+4>DKG4eTI1j)<2`*S-}YJ,MC&?&7-{Ef1*63>}akk]*xD4B8X,d-SPnxdND' );
define( 'NONCE_SALT',       'i)sf&)%7||n5}6}}Tj*e1rZnvOL7QXA%Ep46Nw)8?mHu%3X(*(+-REQ=L5nZOFn/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
