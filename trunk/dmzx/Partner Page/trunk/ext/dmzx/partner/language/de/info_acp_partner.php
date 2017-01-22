<?php
/**
*
* @version $ID$
* @package phpBB Extension - Partner Page [Deutsch]
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
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

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_DMP_CONFIG'			=> 'Konfiguration',
	'ACP_DMP_PARTNERS'			=> 'Partnerseiten',
	'ACP_DMP_PARTNERS_DESC'		=> 'Hier kannst du deine Partner verwalten',
	'ACP_DMP_ADDED'				=> 'Partner wurde erfolgreich hinzugefügt',
	'ACP_DMP_AKTIV'				=> 'Partner aktiviert',
	'ACP_DMP_AKTIV_DESC'		=> 'Wenn dies ausgewählt wird, werden deine Partner auf der Partnerseite angezeigt',
	'ACP_DMP_BB_SET'			=> 'Aktiviere BBCodes',
	'ACP_DMP_COUNT'				=> ' Klick',
	'ACP_DMP_COUNTS'			=> ' Klicks',
	'ACP_DMP_DELETED'			=> 'Partner wurde erfolgreich gelöscht.',
	'ACP_DMP_DESC'				=> 'Beschreibung des Partners',
	'ACP_DMP_DESC_DESC'			=> 'Gib hier eine detaillierte Beschreibung deines Partners ein. Wenn aktiviert, kannst du BBCodes und Smilies in der Beschreibung deiner Partner benutzen.',
	'ACP_DMP_DESC_FRONT'		=> 'Hier kannst du alle Partner deines Forums finden',
	'ACP_DMP_EMPTY_TEXT'		=> 'Keine Beschreibung',
	'ACP_DMP_IMG'				=> 'Logo-Bild deines Partners',
	'ACP_DMP_IMG_DESC'			=> 'Gib hier die URL des Logo-Bildes deines Partners ein (incl. http://)',
	'ACP_DMP_BG_IMG'			=> 'bg_header.gif deines Partners',
	'ACP_DMP_BG_IMG_DESC'		=> 'Gib hier die URL zur bg_header.gif deines Partners ein (incl. http://)',
	'ACP_DMP_KLICKS'			=> 'URL Klicks',
	'ACP_DMP_KLICKS_AKTIV'		=> 'Wird gezählt',
	'ACP_DMP_NEED_DATA'			=> 'Du musst eine <strong>URL</strong> und einen <strong>Titel</strong> eingeben, wenn du einen Partner hinzufügen möchtest.',
	'ACP_DMP_NEED_SITE'			=> 'Du musst einen <strong>Titel</strong> eingeben, wenn du einen Partner eingeben möchtest.',
	'ACP_DMP_NEED_URL'			=> 'Du musst eine <strong>URL</strong> eingeben, wenn du einen Partner hinzufügen möchtest.',
	'ACP_DMP_NO_ENTRY'			=> 'Es sind keine Partner gelistet',
	'ACP_DMP_REALY_DELETE'		=> 'Bist du sicher, dass du diesen Partner löschen willst?',
	'ACP_DMP_SAVE_KLICK'		=> 'Klickzähler aktiviert',
	'ACP_DMP_SAVE_KLICK_DESC'	=> 'Wenn diese Option ausgewählt wurde, ist der Klickzähler aktiviert und wird angezeigt. Du kannst einen Startwert im nebenstehenden Feld eintragen.',
	'ACP_DMP_SETTING'			=> 'Texteinstellungen',
	'ACP_DMP_SETTING_DESC'		=> 'Wähle aus, ob du BBCodes, Smilies und/oder URLs benutzen möchtest.',
	'ACP_DMP_SITE'				=> 'Seitenname deines Partners',
	'ACP_DMP_SITE_DESC'			=> 'Gib hier den Namen oder den Seitennamen deines Partners ein. This will be shown as clickable title',
	'ACP_DMP_SMILY_SET'			=> 'Aktiviere Smilies',
	'ACP_DMP_TITLE_ADD'			=> 'Partner hinzufügen',
	'ACP_DMP_TITLE_EDIT'		=> 'Partner bearbeiten',
	'ACP_DMP_UPDATED'			=> 'Partner wurde erfolgreich geändert',
	'ACP_DMP_URL'				=> 'URL',
	'ACP_DMP_URL_DESC'			=> 'Gib hier die URL zur Seite deines Partners ein (incl. http://)',
	'ACP_DMP_URL_SET'			=> 'Aktiviere URL Verwendung',
	'ACP_DMP_EDIT_EXPLAIN'		=> 'Hier kannst du einen existierenden Partner bearbeiten.',
	'ACP_DMP_ADD_EXPLAIN'		=> 'Hier kannst du einen neuen Partner hinzufügen',
	'TOO_FEW_CHARS'				=> 'Deine Nachricht enthält zu wenig Zeichen.',

	// Log entires
	'LOG_DMP_DELETE'			=> 'Gelöscht: Partner <strong># %s</strong>',
	'LOG_DMP_SAVE'				=> 'Bearbeitet: Partner <strong>%s</strong>',
	'LOG_DMP_SAVE_NEW'			=> 'Neuer Partner <strong>%s</strong> hinzugefügt',

	// Permissions
	'ACL_U_DM_PARTNERS_ADD'		=> 'Kann Partner zur Partnerseite hinzufügen',
	'ACL_U_DM_PARTNERS_VIEW'	=> 'Kann Partnerseite ansehen',
));
