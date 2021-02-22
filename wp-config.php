<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'labroue' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':n+jsbV{&+UrL h_ |<ELsg*yA9%X`X2JPi]cyzi+lZ<%fri2V?bdT J#U8?Qk*-' );
define( 'SECURE_AUTH_KEY',  '2=G]t7mB_CH/nOz,w/%&T3J|ZCOej,-p-5y3=bTCJ_nWF3wp}Q?RW^]Uaa,9e19g' );
define( 'LOGGED_IN_KEY',    '#6=`%_,{rCJcT~r|/h^;0S)6`8 vRFm!Z> S;Y$gy3D[4ThO#B);Hv<84.sY}.v8' );
define( 'NONCE_KEY',        'o,LOZ9SeQhRQyh>r%} {M4[S,*O!&n@uVUo.jy)*wOAdWhl,#T{9@-Osk!R)E4GG' );
define( 'AUTH_SALT',        '7eJAxNYMauosTA>190D#0Q5p+rmZ8kI$Q(WWr(v[vXO>!}v7RbBId^xBJr$y V5y' );
define( 'SECURE_AUTH_SALT', '&I(7]yU0[HC?glR;xTACgLpN<,?8MDfz)CIkjYYf>CPEn<5<-X(#t8y,8m,4Cit2' );
define( 'LOGGED_IN_SALT',   'J!Upp[|K(M`B$rtIx=P7.q=Z,Z5k`JtT{0$.sRK*.0i,x4*-y-g3Nvxe*?#6wLMr' );
define( 'NONCE_SALT',       'a,K6K~j#i9J(R~taKi/.*(R~$<I),(VASww5q`H;71{!T%e5o8k0MmH`M#h[RR8,' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
