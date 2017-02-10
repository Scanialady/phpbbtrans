<?php
/**
*
* @version $Id$
* @package Site Logo Extension (deutsch)
* @copyright (c) 2014 david63
* * @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BANNER_HEIGHT'						=> 'Bannerhöhe',
	'BANNER_HEIGHT_EXPLAIN'				=> 'Diese Einstellung setzt die Größe des Bereichs für das Bannerbild der Seite. Das aktuelle Bild muss vielleicht verkleinert werden, um in diesen Bereich zu passen, ansonsten wird es nicht korrekt dargestellt.',
	'BANNER_OPTIONS'					=> 'Banner Optionen',
	'BANNER_RADIUS'						=> 'Banner Radius',
	'BANNER_RADIUS_EXPLAIN'				=> 'Setzt die Anzahl an Pixeln für die Abrundung der Bannerecken. Hier auf 0 zu setzen bedeutet, dass das Banner eckige Ecken haben wird.',

	'CLICK_TO_SELECT'					=> 'Klicke in die Box um eine Farbe zu wählen',

	'EXTENDED_SITE_DESCRIPTION'			=> 'Erweiterte Seitenbeschreibung',
	'EXTENDED_SITE_DESCRIPTION_EXPLAIN'	=> 'Dies erlaubt dir, eine Seitenbeschreibung zu verfassen, die größer ist als die erlaubte Standardseitenbeschreibung von 255 Zeichen, und diese wird dann die Standardseitenbeschreibung <strong>ersetzen</strong>.<br /><strong>Hinweis:</strong> Wenn die Daten hier übermäßig groß sind, können einige seltsame “Seiteneffekte” auftreten. Die meisten davon können durch einstellen der anderen Optionen beseitigt werden.',

	'HEADER_COLOUR'						=> 'Kopfzeilenfarbe',
	'HEADER_COLOUR_EXPLAIN'				=> 'Wähle eine Farbe für den Hintergrund der Kopfzeile.<br />Wenn dies aktiviert wird, gilt die Option wo möglich mit den gleichen Farbverlauf-Offsets zur Hintergrundfarbe, wie sie in “prosilver” benutzt werden.<br /><em>Standard = #12A3EB</em>',
	'HEADER_OPTIONS'					=> 'Header Optionen',

	'LOGO_CENTRE'						=> 'Zentrieren',
	'LOGO_LEFT'							=> 'Links',
	'LOGO_RIGHT'						=> 'Rechts',

	'OVERRIDE_COLOUR'					=> 'Farbe überschreiben',
	'OVERRIDE_COLOUR_EXPLAIN'			=> 'Wähle eine Farbe für den Seitennamen und die Seitenbeschreibung, dies wird die im Style definierte Farbe überschreiben.',

	'PIXELS'							=> 'px',

	'REMOVE_HEADER_BAR'					=> 'Entferne die Kopfzeile',
	'REMOVE_HEADER_BAR_EXPLAIN'			=> 'Wenn diese Option eingestellt wird, wird die Anzeige der Kopfzeile verhindert.',

	'SEARCH_OPTIONS'					=> 'Suchbox Optionen',
	'SITE_BACKGROUND'					=> 'Seitenhintergrund',
	'SITE_BACKGROUND_IMAGE'				=> 'Pfad zum Seitenhintergrund',
	'SITE_BACKGROUND_IMAGE_EXPLAIN'		=> 'Wenn du ein Remote-Bild als Hintergrund benutzen möchtest, dann gib hier die komplette URL zum Bild an, sonst gib nur den internen Pfad zum Bild an.<br /><em>z.B. images/mein_hintergrund.jpg - oder<br />http://eine_seite.org/neuer-hintergrund.png</em>',
	'SITE_LOGO_EXPLAIN'					=> 'Hier kannst du die Optionen für ein persönliches Seitenlogo einstellen, um das Standardlogo zu ersetzen, ein persönliches Banner hinzufügen, eine erweiterte Boardbeschreibung oder einen Hintergrund zu deinem Board benutzen.',
	'SITE_LOGO_BANNER_IMAGE'			=> 'Pfad zu dem benutzerdefinierten Banner',
	'SITE_LOGO_BANNER_IMAGE_EXPLAIN'	=> 'Wenn du ein Remote-Bild als Banner benutzen möchtest, dann gib hier die komplette URL zum Bild an, sonst gib nur den internen Pfad zum Bild an.<br /><em>z.B. images/mein_hintergrund.jpg - oder<br />http://eine_seite.org/neues-banner.png</em>',
	'SITE_LOGO_HEIGHT'					=> 'Logohöhe',
	'SITE_LOGO_HEIGHT_EXPLAIN'			=> 'Wenn das leer bleibt, wird die Standardhöhe benutzt.<br /><em>Die Standardhöhe für das Logo ist 52px.</em>',
	'SITE_LOGO_IMAGE'					=> 'Pfad zum benutzerdefinierten Seitenlogo.',
	'SITE_LOGO_IMAGE_EXPLAIN'			=> 'Wenn das leer bleibt, wird das Standardlogo benutzt.<br />Wenn du ein Remote-Bild als Logo benutzen möchtest, dann gib hier die komplette URL zum Bild an, sonst gib nur den internen Pfad zum Bild an.<br /><em>z.B. images/mein_logo.jpg - oder<br />http://eine_seite.org/neues-logo.png</em>.',
	'SITE_LOGO_LEFT'					=> 'Linke Ecken',
	'SITE_LOGO_LEFT_EXPLAIN'			=> 'Runde die linken Ecken ab, um zum Banner zu passen.',
	'SITE_LOGO_OPTIONS'					=> 'Logo Optionen',
	'SITE_LOGO_PIXELS'					=> 'Logo Radius',
	'SITE_LOGO_PIXELS_EXPLAIN'			=> 'Setzt die Anzahl an Pixeln für die Abrundung der Logoecken.<br /><em>Der Standard für prosilver ist 7px.</em>',
	'SITE_LOGO_POSITION'				=> 'Position Seitenlogo',
	'SITE_LOGO_REMOVE'					=> 'Entferne Seitenlogo',
	'SITE_LOGO_REMOVE_EXPLAIN'			=> 'Wenn diese Option gesetzt ist, verhindert sie die Anzeige des Seitenlogos.',
	'SITE_LOGO_RESPONSIVE'				=> 'Responsiv machen',
	'SITE_LOGO_RESPONSIVE_EXPLAIN'		=> 'Mache die Seitenlogo-Optionen responsiv zur Anzeige auf Mobilgeräten und Tablets.',
	'SITE_LOGO_RIGHT'					=> 'Rechte Ecken',
	'SITE_LOGO_RIGHT_EXPLAIN'			=> 'Runde die rechten Ecken ab, um zum Banner zu passen.',
	'SITE_LOGO_SIZE_EXPLAIN'			=> '<strong>Hinweis: Diese Einstellung setzt die Größe des Bereichs für das Seitenlogo-Bild. Das aktuelle Bild muss vielleicht verkleinert werden, um in diesen Bereich zu passen, ansonsten wird es möglicherweise nicht korrekt dargestellt.</strong>',
	'SITE_LOGO_URL'						=> 'Link für Seitenlogo',
	'SITE_LOGO_URL_EXPLAIN'				=> 'Der Link, zu dem der Benutzer geleitet wird, wenn er auf das Seitenlogo klickt. Gib nur den Pfad des Links ein.<br /><em>z.B. mein_board/meine_seite.php - oder<br />http://eine_seite.org/meine_seite.html</em><br /><strong>Wenn dies frei bleibt, wird der Standardlink des Boards benutzt.</strong>',
	'SITE_LOGO_WIDTH'					=> 'Logobreite',
	'SITE_LOGO_WIDTH_EXPLAIN'			=> 'Wenn dies frei bleibt, wird die Standardbreite benutzt.<br /><em>Die Standard-Logobreite ist 149px.</em>',
	'SITE_NAME_BELOW'					=> 'Seitenname und Beschreibung and description unter dem Logo',
	'SITE_NAME_BELOW_EXPLAIN'			=> 'Verschiebe Seitennamen und Seitenbeschreibung unter das Seitenlogo. Dies verschiebt auch die Suchbox in die obere Navigationsleiste. Der Text wird ebenso positioniert (links/zentriert/rechts), wie das Logo.',
	'SITE_NAME_SUPRESS'					=> 'Entferne die Textanzeige',
	'SITE_NAME_SUPRESS_EXPLAIN'			=> 'Wird diese Option gesetzt, verhindert das die Anzeige von Seitennamen und Seitenbeschreibung.',
	'SITE_SEARCH_IN_NAVBAR'				=> 'Verschiebe die Suchbox zur Navigationsleiste',
	'SITE_SEARCH_IN_NAVBAR_EXPLAIN'		=> 'Verschiebt die Suchbox in die obere Navigationsleiste.<br />Dies kann erforderlich sein, wenn die Option für das benutzerdefinierte Banner benutzt wird.',
	'SITE_SEARCH_REMOVE'				=> 'Entferne Suchbox',
	'SITE_SEARCH_REMOVE_EXPLAIN'		=> 'Diese Option entfernt die Suchbox aus dem Kopfbereich.',

	'TEXT_OPTIONS'						=> 'Text Optionen',

	'USE_BANNER'						=> 'Benutze persönliches Banner',
	'USE_BANNER_EXPLAIN'				=> 'Fügt ein benutzerdefiniertes Banner im oberen Teil des Boards hinzu.',
	'USE_EXTENED_SITE_DESC'				=> 'Benutze erweiterte Seitenbeschreibung',
	'USE_EXTENED_SITE_DESC_EXPLAIN'		=> 'Ersetzt die Standardseitenbeschreibung mit der erweiterten Seitenbeschreibung.',
	'USE_HEADER_COLOURS'				=> 'Persönliche Kopfzeilenfarben',
	'USE_HEADER_COLOURS_EXPLAIN'		=> 'Verwende benutzerdefinierte Farben für die Kopfzeile des Boards.<br /><strong>Hinweis: Diese Option hat keinen Effekt, wenn <em>Entferne die Kopfzeile</em> ausgewählt wurde.</strong>',
	'USE_SOLID_HEADER_COLOURS'			=> 'Verwende feste Farben',
	'USE_SOLID_HEADER_COLOURS_EXPLAIN'	=> 'Verwendet feste Farben für die Kopfzeile anstelle von Farbverläufen.<br />Diese Option erfordert, dass <em>Persönliche Kopfzeilenfarben</em> auf “Ja” eingestellt ist.',
	'USE_OVERRIDE_COLOUR'				=> 'Überschreibe Standardfarbe',
	'USE_OVERRIDE_COLOUR_EXPLAIN'		=> 'Erlaubt das überschreiben der Standardfarbe, die für den Seitennamen und die Seitenbeschreibung benutzt wird.',
	'USE_SITE_BACKGROUND'				=> 'Benutze einen Seitenhintergrund',
	'USE_SITE_BACKGROUND_EXPLAIN'		=> 'Fügt ein Bild hinzu, welches zum Hintergrund für dein Board wird.',
));
