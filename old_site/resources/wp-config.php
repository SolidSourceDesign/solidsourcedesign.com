<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hearthst_wp317');

/** MySQL database username */
define('DB_USER', 'hearthst_wp317');

/** MySQL database password */
define('DB_PASSWORD', 'vS5L-84-PO');

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
define('AUTH_KEY',         'tr1dr7kklksi1spuvddbwhjjvb760pkfftcll8szd3uqqq5z1w7rxxgscvftfpqz');
define('SECURE_AUTH_KEY',  'xsm62wn1msdjlqsowyznshoguft5nckq7ttzwqf1yuvdqy7seqfxyph8kzjun0qd');
define('LOGGED_IN_KEY',    'igmuqk4andsyiu7fsenuytfnvgprgxyxqplopk7bijomhhamwhysinvg3uxylz3s');
define('NONCE_KEY',        'r9drwazw6ygyhffhh7w2v9nppardsb2eeg6klrvo5e1tton0ssgehjsntxjqrdj4');
define('AUTH_SALT',        'msqocssfivg5h8kvuoxgi5chrrhfcnyeusy7rwlevrpd71t2hi0a3iiaglujeich');
define('SECURE_AUTH_SALT', '3qcgriycc2ki595vq2rdicvtaozimgjkwyzprxvdkq5hkk9kf1ofrig73wwm1f9k');
define('LOGGED_IN_SALT',   'gnee7cckv0qgdwottvtzpkqg3pjbatmh6tyk2uujruboxgmvblrppwm7yv53ogwu');
define('NONCE_SALT',       'do4kxrlriaqkw468suolwqntxo0noorqw9iq7j2pjkztu6gj9swschddi7xnnzeg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ssdwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
