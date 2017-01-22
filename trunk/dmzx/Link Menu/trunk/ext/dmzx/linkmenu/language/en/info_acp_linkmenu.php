<?php
/**
*
* @package phpBB Extension - Link menu
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_LINKMENU'						=> 'Simple link menu',
	'ACP_LINKMENU_SETTINGS'				=> 'Link menu settings',
	'ACP_LINKMENU_CONFIG_SETTINGS'		=> 'Settings',
	'ACP_LINKMENU_CONFIG_SET'			=> 'Configuration',
	'ACP_LINKMENU_CONFIG_SAVED'			=> 'Link menu settings saved',
	'ACP_LINKMENU_VERSION'				=> 'Version',
	'ACP_LINKMENU_CREDITS'				=> 'Extension made by <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>',
	'ACP_LINKMENU_ENABLE'				=> 'Enable link menu',
	'ACP_LINKMENU_ENABLE_EXPLAIN'				=> 'Enable link menu extension in header.',
	'ACP_LINKMENU_ENABLE_FIRST'					=> 'Enable first link ',
	'ACP_LINKMENU_ENABLE_FIRST_EXPLAIN'			=> 'Switch on first link.',
	'ACP_LINKMENU_NAME_FIELD_FIRST'				=> 'Name of first site',
	'ACP_LINKMENU_NAME_FIELD_FIRST_EXPLAIN'		=> 'Enter the name of the first site.',
	'ACP_LINKMENU_TEXT_FIELD_FIRST'				=> 'URL of first site',
	'ACP_LINKMENU_TEXT_FIELD_FIRST_EXPLAIN'		=> 'Enter the URL of the first site.',
	'ACP_LINKMENU_ENABLE_SECOND'				=> 'Enable second link',
	'ACP_LINKMENU_ENABLE_SECOND_EXPLAIN'		=> 'Switch on second link.',
	'ACP_LINKMENU_NAME_FIELD_SECOND'			=> 'Name of second site',
	'ACP_LINKMENU_NAME_FIELD_SECOND_EXPLAIN'	=> 'Enter the name of the second site.',
	'ACP_LINKMENU_TEXT_FIELD_SECOND'			=> 'URL of second site',
	'ACP_LINKMENU_TEXT_FIELD_SECOND_EXPLAIN'	=> 'Enter the URL of the second site.',
	'ACP_LINKMENU_ENABLE_THIRD'					=> 'Enable third link',
	'ACP_LINKMENU_ENABLE_THIRD_EXPLAIN'			=> 'Switch on third link.',
	'ACP_LINKMENU_NAME_FIELD_THIRD'				=> 'Name of third site',
	'ACP_LINKMENU_NAME_FIELD_THIRD_EXPLAIN'		=> 'Enter the name of the third site.',
	'ACP_LINKMENU_TEXT_FIELD_THIRD'				=> 'Link of third site',
	'ACP_LINKMENU_TEXT_FIELD_THIRD_EXPLAIN'		=> 'Enter the URL of the third site.',
));
