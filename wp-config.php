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
define( 'DB_NAME', 'megatradeglobal' );

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
define( 'AUTH_KEY',         'IP%~d0=j~x] HyY[8$%c_4jst3*F/=2.a?,Lzm mO}zCV,p)%tX?n[z1FVYkDP1|' );
define( 'SECURE_AUTH_KEY',  '+%eUJe5];MmeHBIP{cl!w}Vob^^b30s&mXF7}@ PyjqsSM+Q]y02GKjS?t}7Jt5-' );
define( 'LOGGED_IN_KEY',    'r0Eu]KGY:!P}ZNqxY9T=}`@Rx5q7DuRye[xE,^j#Md.z[)*&U0ho.@ZFVUD!Hj%w' );
define( 'NONCE_KEY',        '6tj|..%LwS=/UJn|tr}_Q+3_XXUJiti5}C#}6]t3t5&&Zj|#u4FJ[~)M0h<$o-:>' );
define( 'AUTH_SALT',        'c<8u| (c*?:;JMs=!:Icv.mF:$O$s[z7I-G(z9`q&gCLS=O|2kC-pxkNT`LA(3RU' );
define( 'SECURE_AUTH_SALT', ']B50$l@l!+$WFnQZ!{9LY;f~{>*F+:$^b/Vc~0sFMpTbk/DfR3jbI,RVb,p$tfko' );
define( 'LOGGED_IN_SALT',   '_gJ~E?7]s9,iEnVVLeFy{S3i= fx3ZS:V5z<!.%gG(%E)$yGh)I6fsj<ExaM?&,D' );
define( 'NONCE_SALT',       '(!pU.^|[3iVj$KRtVaXXI^q*{RNOY%q6_~/|ZY!Jrd[`}[1+ XO#X%#L@k[z5tW[' );

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
