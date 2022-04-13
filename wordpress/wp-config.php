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
define( 'DB_NAME', 'custom_theme' );

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
define( 'AUTH_KEY',         '~AOpr4Q2F8xytELo]oH7p[:J9pE#wG$_)$@F?]]2t0|NmP%Lwq;t`9h&zPSxCwvF' );
define( 'SECURE_AUTH_KEY',  'h_&uMp,i,LMI]kY!5b_c!Vp0Jc?2xe0%pn5Aq<;7Vr(?eN+.dE7e>WOk:]HoF|2+' );
define( 'LOGGED_IN_KEY',    '.g|UF+6^-x-Xif!tBM@M{,*)dxjEXwW.rh>DRpIySiet^uA0U]@,OwLYNRCVu8zZ' );
define( 'NONCE_KEY',        's?p8.}h}Oa/(Pr,>0*o|p,i{hR[d0C-<>+n)4Ne[s|y4A!h6u-3?9!wobp|X?A6:' );
define( 'AUTH_SALT',        '.VwpHN.O##tp~%*ld$4QdIB^As/mDw5XENCp(2!&Tdr>_U3%=.V<YL6&Rqc3Of0C' );
define( 'SECURE_AUTH_SALT', '225 OtT;4GjVMWzn>`j0k&t?LYw7_d/=cx5!IJMd-f:G+ik%P!t&=1aV8P|.!iLo' );
define( 'LOGGED_IN_SALT',   '7Ce4[Tn S|e@F;=z`hxBT?[S}={@Blj<Q]ZAm;?D$3Z#. s346oD4_z/`xW&uGNT' );
define( 'NONCE_SALT',       '2AU-VgFsv.WKqqcp=;Ngl%7hsGSWZQ<+?*?N$g$*Uwf[|1(AD0}mQPB{`|AKn-oO' );

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
