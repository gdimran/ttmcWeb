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
define( 'DB_NAME', 'ttmc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'V+d87a%_4}pWpzITGq-=F/#lc]m}hx-Be4 @ikQ|.d?J@tG,%1+@V}Q>7hV~nzz[' );
define( 'SECURE_AUTH_KEY',  '*(c8evllCMC.B2ICN+$FphQw N{F].C<0:}Ep,4Lj`szQ;!LIcr)Rz[ZwMJn[(VA' );
define( 'LOGGED_IN_KEY',    'Y=l2d0^J@*}Q>zM2h?&sv^EtO%HR~yu3. 3*4E:GxJQn<YaSj[XYf)$kYdw{/!*.' );
define( 'NONCE_KEY',        '6:cQEaf/Cn8l]G-x-+ujrK[AZ{e&u6*np9B` 3t]F`i@^v**1cEH;&&Ye8;xWU}6' );
define( 'AUTH_SALT',        'jazD<cSI}|cHMAVsqAV?^2rjw_#>+R:eN4*w(:NPnSY}kQad[`YSs3B9|dg=ysV>' );
define( 'SECURE_AUTH_SALT', 'Hc6)Z.lBtzF<7n1}$#  M;{>)od-1f7)]ZGvx&X/:RU(=~EBm$%1_z,Al|ydEPFn' );
define( 'LOGGED_IN_SALT',   '4?Dp>? K).M${y 47!N9i(P8HANJygi,aSoBonl[$BqdYGpR221L%bcFjXITLpl*' );
define( 'NONCE_SALT',       '`D(ynCh::NDU+sVg`nfFj?gDr0/x2-LdSg5^/u3+?M*ydk:d!q3&!@Homrm{UjDZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ttmc_';

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
