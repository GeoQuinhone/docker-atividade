<?php
/** The name of the database for WordPress */
define( 'DB_NAME', 'exampledb' );

/** Database username */
define( 'DB_USER', 'geovaneuser' );

/** Database password */
define( 'DB_PASSWORD', 'geovanepass' );

/** Database hostname (nome do serviço MySQL no docker-compose) */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 * Generated from https://api.wordpress.org/secret-key/1.1/salt/
 */
define( 'AUTH_KEY',         'p$L%g|<H0h>Y~[fO6?b@=H-Qj~rQf,K?X}v@,T~J,|y~%fC+xP}H$7!p;u}<f+;X' );
define( 'SECURE_AUTH_KEY',  'L{y7V0Z]J8*ue+S|:P#|A+{Z|k?fQ3m;_uI*eQ;|Qb|bqZqK%xF#nR+q@P^W%=r%' );
define( 'LOGGED_IN_KEY',    'R+vC:x|nQf{h?u7{y|x+W6Qp|H!}7dPqk^%X}pO>q]v$C!~b0|gF+}R?uH@L%{n' );
define( 'NONCE_KEY',        'Q?o|x^%YzJ|v{X>G|~p~T!P~e%F~x|#C+%pP{u@x~qQp+~b|Z^W|v%R!pG$J@Q!' );
define( 'AUTH_SALT',        'Vq|x%R+@|+p^|u~C~@r@!v!q+X?@x|C}~|%zF!@p@G+%uQq@b~^x+!r|H@~L+?|' );
define( 'SECURE_AUTH_SALT', 'b|G~qQp+^X|~!%v@!uQ?+H|q^p~X|C~r+!v%zF!@p~q@|^X~C|!@pR+Xq$~|@%' );
define( 'LOGGED_IN_SALT',   'x@!Q|p^R+~G|%v!~q@C+X|@!p~r^|!%vG+@~Cq^!R|+X@p~q|~!v$' );
define( 'NONCE_SALT',       'q@!|^p+~X|G|%r!@C^+v~!|pX@!~q|^G+!R|~@p~Xq^!v|%C+@!p~' );
/**#@-*/

/** WordPress database table prefix. */
$table_prefix = 'wp_';

/** Enable debugging mode. */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
