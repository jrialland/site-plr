<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'site_plr');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'site_plr');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'site_plr');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UzSIOopJ[f:o.O+d-Fyt]K+X2rF+KM|=0+0t uYP{gI%jI#d{{;MEeR`f|aa9PC2');
define('SECURE_AUTH_KEY',  '!w03+_h!A#_1{+)OLHM@BFj,p2(dvQwVm8|%YB+dO3~Jhgxp1*X$Mvv-o4-F=xGE');
define('LOGGED_IN_KEY',    '|h%qgW*ynX++`L0vBf?+h`f;ybfB1%i,p4X*TaSyJpWBBS=dHN-v:1,/ik(r0WpO');
define('NONCE_KEY',        '%F{{=c)Wvi9<i];L)-<]>K#HrN5)(:!oP[5*(UCb9mrj-T~I.O:3(OGn*/6BF(gW');
define('AUTH_SALT',        '8P^a?r%0&A+!7%oc;S|qiM)C{$,3`~`%fBB6;n]-+Qw7R36336.3bPJtE/Z;UkrQ');
define('SECURE_AUTH_SALT', 'Q(+.H _ mvkGv{hi|!+^O-*rv2i@$H|~o5t?@J*~SlBdG/dmy.<N]MfykEPU+W)>');
define('LOGGED_IN_SALT',   ']_5;1J/`v5E$h,d|,^!0jk-ExcFT6zN+W^EnMtZb%2pa%R(nqsK 0T7xUelkEY F');
define('NONCE_SALT',       '+f@`8d-Kdso*y^WLh,Z|wQ)DGpN9zf|k7S]ZPn+Ilh4?.-g|r*+E@GlqA/mG?+*,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');