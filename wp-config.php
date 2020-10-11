#wordpress configuration file
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'drosario');

/** MySQL database password */
define('DB_PASSWORD', 'Fullsail1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%kttdNWLx@P|`epA*}++;N>0kAK3WKgL3W:`v#S|-ZV5Z=>&?0`R}1wFcD,ZaafA');
define('SECURE_AUTH_KEY',  ';`&I* :_EV7~4e_X R;mg5CLTj%%>IK7V]u;:LZ)}f-O.!V!b- _(nxxLIY{%Kj&');
define('LOGGED_IN_KEY',    '8<5A,G{Q}YB,l#Y@S+Fkq+WSq`-TZRuI`5@.xVb_%uF(jXb#s)4}P=-J@Wd(ua|(');
define('NONCE_KEY',        '.`IQ7Wu.W9<}fpH=%o:o[-Dot9@?]h`y@*i`K]&7{m$jY|Ay6paX:|yaW=#v!+E%');
define('AUTH_SALT',        '<,s3TMo} (*v|j8ZsLVq7hG.^Qegl8]?[J*@Vw)@Qn6Vt(<92h|J=i%N:Gd$K}Q!');
define('SECURE_AUTH_SALT', '7G3<l>&}YfZLs}NN$INYR#kiE6*eXy(/}z-y7F/V7ElqPtXc$?7a<zlCwI7>ndD_');
define('LOGGED_IN_SALT',   '0}vh423]s/6vuX*Yc},&LQDsUZ!K={=$+L<+] VNUUe|2]+ZA^nEwc04QdciZftE');
define('NONCE_SALT',       '>T{tD<nA/%5,3(mXHu!C=hijjjy.C*@1I70gG>eqxWhA`nJP23b#~c|V|WP[KJ%L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
