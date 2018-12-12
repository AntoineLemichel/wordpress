<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/* Utilisateur de la base de données MySQL. */
define('DB_USER', 'andrew');

/* Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'antoine');

/* Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/* Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/* Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '@6+5-WXXp~R;[,xw7gUwG[=%7+ocs|:^zyo3sR/B^NgR&OrpE`_;KsC[LZa,E~[P');
define('SECURE_AUTH_KEY', 'E;x]!4[.m#x31Mn|!-eMM7</<ADyf57!sYc5-ud6w~li-Se.ts{/6x1H e9fg`BI');
define('LOGGED_IN_KEY', 'MSRAJ%i~KY1Cgk13CMv^ZXQlEY,x0gSDy[.|b-Fk.;i @.u{{EDHI6hB4Pw5|d?0');
define('NONCE_KEY', '{eb9(cEDg=@xY/[==>M91:d(H|r@JeZ`@y==srP[v+:-JK_+EMq.2H=?H6x_+Ch>');
define('AUTH_SALT', 'x*I:?&t3b9<ka<F#WE)f?074_a3%bwip^)B58bQ=Me]/;sO*Uzb >uR)ds#oa+IL');
define('SECURE_AUTH_SALT', '6?5.89o$WLl=bUT*?|=4`0iRwL:n}#W_F:~M61[WM^imWOZFh-?G{:3Cvsu4ngxQ');
define('LOGGED_IN_SALT', '>W8zX-jw-C.$U0:zc:JBHN9rSR`E^sRDSe.kK^Bh.kweZt+*a0T$F%e|=9ebn/L>');
define('NONCE_SALT', '$~a|A)tWDpwh,vW~ aM#ZV|*[f|ZCL[G{^*%RY:/^z5>^X)z4Q;P!K;rpby2rtwX');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'recette_';

/*
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! */

/* Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once ABSPATH.'wp-settings.php';
