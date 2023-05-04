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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'n8_wp_banco' );

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
define( 'AUTH_KEY',         '|(q/q>5dr|YJB)f8@&Q%-.{u~$Ryc_j=_^e ++`.IF<#!1DF P.|(!qCtz6h)I1|' );
define( 'SECURE_AUTH_KEY',  '8<6fYQK+<5|B @fhFa>4f;edYu,&D%PnCn66%BIuPvIV,uAag,2?;FuU3Gy&)@eS' );
define( 'LOGGED_IN_KEY',    'r^>/yzo/Q:O,1[<P]Ju1nC>? oDJQB2[gH)pV]hga^ dAL^I03#:c=9 +P#MDTQN' );
define( 'NONCE_KEY',        'J;l$cM9O/aNw]I~1@>?TW4/l-4Ff1pOB;j$l]qut*`6@TyH,t&Op)+5YC2V|n^vF' );
define( 'AUTH_SALT',        'TzGYa>2o4PLy4x*C[GU=qSXU;b:7hzh9&>2SXU)EjZ#KJ@=JI6hg`(E]g/KMAp4%' );
define( 'SECURE_AUTH_SALT', 'K1@pHECLaXIF8{EQHbXI9|I>BSWpHNVS@2$vdipKS9T7!@5O`V^6cCe{wa@wC|1#' );
define( 'LOGGED_IN_SALT',   '&s9Eb@eEVh<K|0=w`2Q3/WrB$!V14?_q#~+a#;%N.M:kYS:UC%X<5Td%`wgF-N`>' );
define( 'NONCE_SALT',       'N>6|A8uk7Qf]S@T=*QUyN61MWLVb<m4P9T5GcUD6U[2CCMK^m%6o+;8hp!GJr][u' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
