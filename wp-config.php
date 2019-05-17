<?php

define('FS_METHOD', 'direct');

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db738295316' );

/** MySQL database username */
define( 'DB_USER', 'dbo738295316' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zWFxgCRsBohONuduLlQP' );

/** MySQL hostname */
define( 'DB_HOST', 'db738295316.db.1and1.com' );

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
define('AUTH_KEY',         'Sek-tq^u|o`iE>pAW7]?hD]0wSfclZYC*fFxN_978ZJ+ON4%-0B)Ii]#^.gVy (z');
define('SECURE_AUTH_KEY',  ')*apI0j^PK]oL8d9]d>.P=s1g&s4v+q%&z%v)+fweGJ7W:5<:bX`z9m%)|U?:2hL');
define('LOGGED_IN_KEY',    'O7<>*OJGQH?@T2Df,-Tg22oZLXX&yn/SqkrQko|Z%j+*n`FWkk28|:X|km6,_ijQ');
define('NONCE_KEY',        'C9|=s=b(jU^e-Tj|E1Jog+VI^PF/cXuUR0OY!-%86z%5j-MZ1]{0@i,iOrM!$<.4');
define('AUTH_SALT',        'In{!h$I@=e4{I@@`Tp3$c*DL:LB&<Ftb1g2R<T(H5G_]dv#e`w){MMD1|%8&{:EE');
define('SECURE_AUTH_SALT', '=_n*Y[uv%TmaRR+(Rt@V8NdIBI9]l<c0X:SVuUv`B2|`zJ;;2Gl{aMj])=GS?|.1');
define('LOGGED_IN_SALT',   'xflI %S!|<]Se+t)3^(]XsGo2j-{G/H?BeHB!;vlNz]$yknb@-EJ+2(>j^l[rSkP');
define('NONCE_SALT',       '{&44j,0sA$~/! OB:<%4(ZH$.H!P(kgIQSju=fesEhA^:+1a5hJ48g;{|~Z(TL:*');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mSxuv';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
