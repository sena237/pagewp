<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'z>kvIA <E9/B1iaE|H8uNarxjqUYzv)]%l&b{$jD8+]0~yQZ[p5$k7^Jg_%TDND[');
define('SECURE_AUTH_KEY',  ':_*wsi5VOt:7EwQ]QHRJ%]!/L=k|L RKbKxK&+o~mrGK/R.Q|JE=MsPB$DN4E.0*');
define('LOGGED_IN_KEY',    '9sljw?b8&;Zz[ImdD7[!)b||SxF?S4D=@pNpEy/^MnaGk!vmO,qTFG?ZtC8oZ*GB');
define('NONCE_KEY',        'T2{DisB1x=w*jzL{}h*q!F.,mA?^_N#-giQ0y&v^=Iy1?w1j&7`3}.k`IktTa.zG');
define('AUTH_SALT',        '7@T)5)jDUQ1Y+}}-EQ=0EvoG4HBc2Q@`(Ac|YA03auPsyNX`q?7SxiDSlom&Ok].');
define('SECURE_AUTH_SALT', 'f}^[^Liwmt/4%z<Yc!>Vq2E#osthQ|w|^80L}sU>m3oQ b.>r:slsu0_wah.~F?S');
define('LOGGED_IN_SALT',   '>q[tLy0bBG8Y0g5GX&M} KOAM@Z(Wl.u#HP!kd(%;VTK)^/@QQk*fSCMq|e4sPl]');
define('NONCE_SALT',       'VEx4n67Nlol#!-pN3x|A+NQ7:3)m]v_`=x(JJq,x_jDUi3Y{g,4+nF[qHtw<K:p2');
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
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');