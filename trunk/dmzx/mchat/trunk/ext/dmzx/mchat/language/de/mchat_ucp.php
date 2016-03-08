<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
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
// Some characters for use
//  ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'MCHAT_PREFERENCES'				=> 'mChat Einstellungen',

	'MCHAT_DISPLAY'					=> 'Auf dem Index anzeigen',
	'MCHAT_SOUND'					=> 'Ton einschalten',
	'MCHAT_DISPLAY_STATS_INDEX'		=> 'Zeige „Wer chattet“ auf dem Index',
	'MCHAT_DISPLAY_NEW_TOPICS'		=> 'Zeige neue Beiträge im Chat',
	'MCHAT_DISPLAY_AVATARS'			=> 'Zeige Avatare im Chat',
	'MCHAT_CAPITAL_LETTER'			=> 'In deinen Nachrichten den ersten Buchstaben groß anzeigen',
	'MCHAT_CHAT_AREA'				=> 'Eingabetyp',
	'MCHAT_CHAT_AREA_EXPLAIN'		=> 'Der Bereichstyp, der für die Eingabe von Nachrichten benutzt werden soll',
	'MCHAT_INPUT_AREA'				=> 'Eingabebereich',
	'MCHAT_TEXT_AREA'				=> 'Textbereich',
));
