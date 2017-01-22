<?php
/**
*
* @version $ID$
* @package phpBB Extension - Link menu [Deutsch]
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
	'ACP_LINKMENU'						=> 'Einfaches Link-Menü',
	'ACP_LINKMENU_SETTINGS'				=> 'Einstellungen Link-Menü',
	'ACP_LINKMENU_CONFIG_SETTINGS'		=> 'Einstellungen',
	'ACP_LINKMENU_CONFIG_SET'			=> 'Konfiguration',
	'ACP_LINKMENU_CONFIG_SAVED'			=> 'Link-Menü Einstellungen gespeichert',
	'ACP_LINKMENU_VERSION'				=> 'Version',
	'ACP_LINKMENU_CREDITS'				=> 'Extension erstellt von <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>',
	'ACP_LINKMENU_ENABLE'				=> 'Aktiviere Link-Menü',
	'ACP_LINKMENU_ENABLE_EXPLAIN'				=> 'Aktiviere Link-Menü-Extension im Header.',
	'ACP_LINKMENU_ENABLE_FIRST'					=> 'Aktiviere ersten Link ',
	'ACP_LINKMENU_ENABLE_FIRST_EXPLAIN'			=> 'Wechsle zum ersten Link.',
	'ACP_LINKMENU_NAME_FIELD_FIRST'				=> 'Name der ersten Seite',
	'ACP_LINKMENU_NAME_FIELD_FIRST_EXPLAIN'		=> 'Gib den Namen der ersten Seite ein.',
	'ACP_LINKMENU_TEXT_FIELD_FIRST'				=> 'URL der ersten Seite',
	'ACP_LINKMENU_TEXT_FIELD_FIRST_EXPLAIN'		=> 'Gib die URL der ersten Seite ein.',
	'ACP_LINKMENU_ENABLE_SECOND'				=> 'Aktiviere zweiten Link',
	'ACP_LINKMENU_ENABLE_SECOND_EXPLAIN'		=> 'Wechsle zum zweiten Link.',
	'ACP_LINKMENU_NAME_FIELD_SECOND'			=> 'Name der zweiten Seite',
	'ACP_LINKMENU_NAME_FIELD_SECOND_EXPLAIN'	=> 'Gib den Namen der zweiten Seite ein.',
	'ACP_LINKMENU_TEXT_FIELD_SECOND'			=> 'URL der zweiten Seite',
	'ACP_LINKMENU_TEXT_FIELD_SECOND_EXPLAIN'	=> 'Gib die URL der zweiten Seite ein.',
	'ACP_LINKMENU_ENABLE_THIRD'					=> 'Aktiviere dritten Link',
	'ACP_LINKMENU_ENABLE_THIRD_EXPLAIN'			=> 'Wechsle zum dritten Link.',
	'ACP_LINKMENU_NAME_FIELD_THIRD'				=> 'Name der dritten Seite',
	'ACP_LINKMENU_NAME_FIELD_THIRD_EXPLAIN'		=> 'Gib den Namen der dritten Seite ein.',
	'ACP_LINKMENU_TEXT_FIELD_THIRD'				=> 'URL der dritten Seite',
	'ACP_LINKMENU_TEXT_FIELD_THIRD_EXPLAIN'		=> 'Gib die URL der dritten Seite ein.',
));
