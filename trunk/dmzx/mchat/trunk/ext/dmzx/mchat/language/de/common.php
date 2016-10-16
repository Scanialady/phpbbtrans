<?php

/**
* @version $Id$
* @package phpBB Extension - mChat [German]
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @copyright (c) 2016 kasimi - https://kasimi.net
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
// Some characters you may want to copy&paste:
// ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'MCHAT_TITLE'					=> 'mChat',
	'MCHAT_TITLE_COUNT'				=> 'mChat [<strong>%1$d</strong>]',
	
	// Who is chatting
	'MCHAT_WHO_IS_CHATTING'			=> 'Wer chattet',
	'MCHAT_ONLINE_USERS_TOTAL'		=> array(
		0 => 'Niemand ist im Chat',
		1 => '<strong>%1$d</strong> Benutzer chattet',
		2 => '<strong>%1$d</strong> Benutzer chatten', 		
	),
	'MCHAT_ONLINE_EXPLAIN'			=> 'basierend auf den aktiven Besuchern der letzten %1$s',
	'MCHAT_HOURS'					=> array(
		1 => '%1$d Stunde',
		2 => '%1$d Stunden',
	),
	'MCHAT_MINUTES'					=> array(
		1 => '%1$d Minute',
		2 => '%1$d Minuten',
	),
	'MCHAT_SECONDS'					=> array(
		1 => '%1$d Sekunde',
		2 => '%1$d Sekunden',
	),

	// Post notification messages (%1$s is replaced with a link to the new/edited post, %2$s is replaced with a link to the forum)
	'MCHAT_NEW_POST'				=> 'erstellte einen neuen Beitrag: %1$s in %2$s',
	'MCHAT_NEW_POST_DELETED'		=> 'erstellte einen neuen Beitrag, der gelöscht wurde',	
	'MCHAT_NEW_REPLY'				=> 'erstellte eine neue Antwort: %1$s in %2$s',
	'MCHAT_NEW_REPLY_DELETED'		=> 'erstellte eine Antwort, die gelöscht wurde',	
	'MCHAT_NEW_QUOTE'				=> 'antwortete mit einem Zitat: %1$s in %2$s',
	'MCHAT_NEW_QUOTE_DELETED'		=> 'erstellte eine Zitatantwort, die gelöscht wurde',	
	'MCHAT_NEW_EDIT'				=> 'bearbeitete einen Beitrag: %1$s in %2$s',
	'MCHAT_NEW_EDIT_DELETED'		=> 'bearbeitete einen Beitrag, der gelöscht wurde',	
	'MCHAT_NEW_LOGIN'				=> 'hat sich angemeldet',	
));
