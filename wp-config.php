<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'escueladenegocios');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ')E9%S5oZmApU7/wHDS[B,LihoD-T6$[qX?O7/4ylI+Efl7$^E[Rcsb{90p {fBRh');
define('SECURE_AUTH_KEY', '!@=8U{`FbS_~dIe+}4Gh8tRcf6+>b#IobZ#zItfLFgIoC#G91fn, _*5,6OMSm4s');
define('LOGGED_IN_KEY', 'MOgQ.Q)bCe&Ao/P.=u}1!tRjy$ngq+&3.?o+r((>cyC`DGoH3BZ T4)gWNgW &H[');
define('NONCE_KEY', '(u2 *rV[1N2qWKdDkzX>cbca_GP~+KWz]6@N+#OMD?m{87=!VIN)syCr)#CV.alG');
define('AUTH_SALT', ']#ES(CJ<dEHE>?=QN?TuCO+d~W3D$~pDY}8m.6 w`8<?Mj{Hpf4RJAQ?G72D1JZ;');
define('SECURE_AUTH_SALT', 's,TKN:{Q+H&oi)TEa>a+{8wa1&{`g0B5N]64!O-SIy7l|rEb_x~{aPn<q]WO2<%?');
define('LOGGED_IN_SALT', 'iGF]pZYlu[%~A&,sd*}VuV|/1[5`w)?fB#ADl2027EXEUpSC.>nuyuDP9`YaW=pW');
define('NONCE_SALT', '3ghv&{lF3Blmw*K0/PL!_!q)I&R}~*G:r8JkxsBOs/,Pij#]e[U.4N+D9Y=>5MKs');

/**#@-*/


define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');

