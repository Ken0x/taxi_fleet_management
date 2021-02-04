<?php
/**
 * Bazna konfiguracija WordPressa.
 *
 * wp-config.php instalacijska skripta koristi ovaj fajl prilikom
 * instalacije. Ne morate koristiti web stranicu, ovaj fajl
 * možete kopirati kao "wp-config.php" i popuniti vrijednosti.
 *
 * Ovaj falj sadrži sljedeće postavke:
 *
 * MySQL postavke
 * Tajne ključeve
 * Prefiks baze podataka
 * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL postavke - Informacije o postavkama možete dobiti od vašeg web hosting servisa ** //
/** Ime vaše baze podataka za WordPress */
define( 'DB_NAME', 'taxi_fleet_management' );

/** MySQL korisničko ime za bazu podataka */
define( 'DB_USER', 'root' );

/** MySQL šifra baze podataka */
define( 'DB_PASSWORD', '' );

/** MySQL naziv hostinga*/
define( 'DB_HOST', 'localhost' );

/** Kodiranje znakova koje će se koristiti u tabelama unutar baze podataka. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Collate tip baze podataka. Ne mijenjajte ovo ako niste sigurni. */
define('DB_COLLATE', '');

/**#@+
 * Unikatni ključevi za autentifikaciju i salts.
 *
 * Promijenite ključeve u vaše unikatne fraze!
 * Ključeve možete generisati pomoću WordPress.org servisa za generisanje ključeva {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Ključeve možete promijeniti bilo kada. Svi korisnici će se morati ponovo prijaviti jer kolačići neće važiti nakon izmjene ključeva.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G:31N~F^bGZuKg0e31Eo>MJVI$>@?@4DF@4bY{c,`P1A]4o`LCBgawUW: =amzie' );
define( 'SECURE_AUTH_KEY',  'Zc?aEG9OemnE$t?Nt.VrcmFmm_M(TdveiE(B7tF/E?k1qPkYl|<]TNfVp<c2yDOu' );
define( 'LOGGED_IN_KEY',    'snzs+/w+kAcE#-M]i6,c]o2MpWm]I)`I#I)-6 )%b:/4Iv$=YnqFY(Rh8%zR{W^i' );
define( 'NONCE_KEY',        'IX;+51U$o<*0KBqYSy8ald<:2H|U[X.,jQo&K)Nd [>L~]xpuMPy7ZM1nC3S[H5T' );
define( 'AUTH_SALT',        'N@,:!QaCCO7tWa}!8LQ/-K4DQZN7z:vkwy5xUvIFZ?y:0&?1lp&$HivgRKR~p,/Z' );
define( 'SECURE_AUTH_SALT', 'K]vK`=/wwJD;Rg-A[6D^z5o4Mqz!qC!j8rZ_^m-EN2I>]Z3jitDD1s}8)>|#~1^Z' );
define( 'LOGGED_IN_SALT',   '[[AqOguIYxyns&w?t]7pgO?WL+/Ak,nJ8<Dj~8(HKh{iU KS-bpPe,2`udcaEm^p' );
define( 'NONCE_SALT',       'm%3@)V>N#N{:O?V^M9~1BG^Pf4yzlB?K,-tBG+qmhwmH*O:c&f?p5T#A(T5<.>3g' );

/**#@-*/

/**
 * Prefiks WordPressove tabele u bazi podataka.
 *
 * Možete imati više instalacija unutar jedne baze ukoliko svakoj date jedinstven prefiks.
 * Molimo vas da koristite samo brojeve, slova, i donje crtice!
 */
$table_prefix = 'wp_';

/**
 * Za programere: WordPress debugging mod.
 *
 * Promijenite ovu vrijednost u true da omogućite prikaz obavijesti prilikom razvoja.
 * Preporučeno je da programeri tema i plugina koriste WP_DEBUG
 * u svojim razvojnim okruženjima.
 *
 * Za informacije o drugim konstantama za debugovanje, posjetite Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To je sve, ne morate više ništa mijenjati! Sretno objavljivanje. */

/** Apsolutna putanja do WordPress foldera. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Postavke za WordPress varijable i već uključene datoteke. */
require_once( ABSPATH . 'wp-settings.php' );
