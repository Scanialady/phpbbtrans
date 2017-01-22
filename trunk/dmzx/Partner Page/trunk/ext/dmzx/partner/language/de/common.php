<?php
/**
*
* @version $ID$
* @package phpBB Extension - Partner Page [Deutsch]
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'DM_PARTNERS'			=> 'Partner',
	'PARTNERS'				=> 'Partner',
	'DM_PARTNERS_EXPLAIN'	=> 'Unsere Partner ansehen',
	'DMP_ADD'				=> 'Neue Partner hinzufügen',
	'DMP_ADDED'				=> 'Deine Seite wurde erfolgreich hinzugefügt. Der Administrator wird deine Anfrage prüfen, und sie aktivieren wenn alles gut ist.<br />',
	'DMP_ADD_BACK_LINK'		=> '<br />Klicke %shier%s um deinen Eintrag neu zu starten.',
	'DMP_BACK_LINK'			=> 'Klicke %shier%s um zur Partnerseite zurückzukehren.',
	'DMP_COUNT'				=> ' Klick',
	'DMP_COUNTS'			=> ' Klicks',
	'DMP_DESC'				=> 'Beschreibung deiner Seite (*) ',
	'DMP_DESC_DESC'			=> 'Bitte gebe eine detaillierte Beschreibung deiner Seite ein. Du kannst BBCodes und Smilies benutzen.',
	'DMP_DESC_FRONT'		=> 'Hier kannst du unsere Partner finden',
	'DMP_EMPTY_TEXT'		=> 'Keine Beschreibung',
	'DMP_GO_ADD'			=> 'Füge deine Seite hinzu',
	'DMP_IMG'				=> 'Logo deiner Seite ',
	'DMP_IMG_DESC'			=> 'Gib hier die URL zu deinem Seitenlogo ein (<strong>incl. http://</strong>).<br />Die URL darf die maximale Anzahl von 255 Zeichen nicht überschreiten!<br />Die Bildbreite soll nicht mehr als 400px betragen.',
	'DMP_NEED'				=> 'Felder mit einem (*) müssen ausgefüllt werden!',
	'DMP_BG_IMG'			=> 'bg_header.gif deines Partners',
	'DMP_BG_IMG_DESC'		=> 'Gib hier die URL des Bildes bg_header.gif deines Partners (<strong>incl. http://</strong>) ein.',
	'DMP_NEED_DATA'			=> 'Du musst eine <strong>URL</strong> und einen <strong>Titel</strong> eingeben, wenn du deine Seite hinzufügen möchtest.',
	'DMP_NEED_SITE'			=> 'Du musst einen <strong>Titel</strong> eingeben, wenn du deine Seite hinzufügen möchtest.',
	'DMP_NEED_URL'			=> 'Du musst eine <strong>URL</strong> eingeben, wenn du deine Seite hinzufügen möchtest.',
	'DMP_NEW_ENTRY'			=> 'Du hast Anfragen zu neuen Partnern. Please go to your ACP and check them!',
	'DMP_NO_ENTRY'			=> 'Keine Partner für %s',
	'DMP_SITE'				=> 'Name deiner Seite (*) ',
	'DMP_SITE_DESC'			=> 'Gib hier den Namen deiner Seite ein. Dieser Name wird als Titel angezeigt.',
	'DMP_TITLE_ADD'			=> 'Füge deine Seite hinzu',
	'DMP_TITLE_ADD_DESC'	=> 'Hier kannst du deine eigene Seite hinzufügen, wenn du bei uns als Partner gelistet werden möchtest.<br /> Bitte fülle das Formular aus, und prüfe deinen Eintrag sorgfältig! Du kannst den Eintrag nachträglich nicht mehr ändern.',
	'DMP_URL'				=> 'URL zu deiner Seite (*) ',
	'DMP_URL_DESC'			=> 'Bitte gib hier die URL zu deiner Seite (<strong>incl. http://</strong>) ein.<br />Die URL darf die maximale Anzahl von 255 Zeichen nicht überschreiten!',
	'DMP_VIEW_NOT_ALLOWED'	=> 'Entschuldige, aber du hast nicht die erforderliche Berechtigung, unsere Partnerseiten anzusehen!',
	'DMP_COPYRIGHT'			=> '&copy; 2008, 2009 Die Muellers Dot Org',
	'DMP_COPYRIGHT_TITLE'	=> 'DM Partners',
	'DMP_COPYRIGHT_BASED'	=> 'Basierend auf',
	'DMP_COPYRIGHT2'		=> 'phpBB3 Partners Mod by djchrisnet',
	'DMP_COPYRIGHT_TITLE2'	=> 'phpBB3 Partners',
	'DMP_COPYRIGHT_DMZX'	=> '&copy; 2015 dmzx-web.net',
	'DMP_TITLE_DMZX'		=> 'dmzx-web.net',
));