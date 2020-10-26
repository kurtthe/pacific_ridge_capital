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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pacific_ridge_capital' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8h-c)fQw3t{CceSI0>K=}f2s.;t8Hr^yD;nr;577K@M<0@_Cv/}z$A8O3:Vt]=S:' );
define( 'SECURE_AUTH_KEY',  'p@@-5Q/muAi*t!J-7Fjc V05zr/}x!:q46`(Pi@+nTQ40e7,dB4}iS N#nowS2`G' );
define( 'LOGGED_IN_KEY',    '$`[l$6jl`dm,fkX*Ab^ZYbY2yBqy9{YJU~b;uskWMKu ;Z3_uFT#_{Qawes],7TX' );
define( 'NONCE_KEY',        'HBLi(8+^n++TWlOCT:dkrQO4R^winJA!:dc(<}+T+u;^Hv#xb_po_`n:}{%*D@F>' );
define( 'AUTH_SALT',        'MAdS?`Yd, )-|r LmMrGpa,wEK|#6xqibp]DFnKZR9%>W49l6.AqoC9|9KAdU*UK' );
define( 'SECURE_AUTH_SALT', '$5dTgX.B[[$~GE6cL^Rms<N +@1JAnMH)=n#5Zc_!G2C[*z68TO6AfV--$HN+6wr' );
define( 'LOGGED_IN_SALT',   '4}Yur,LOVL$:J5455|LslLw2<]K3D.aiRft999y>gm,t<4cXEiA4G79tNyXQo9t`' );
define( 'NONCE_SALT',       'zN8/KHhr$ J~r;w#3eCOW=$<mR(?0ZH-.J_+hk)=B.4J>|:xY?$,;K~qRWU$ [_R' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
