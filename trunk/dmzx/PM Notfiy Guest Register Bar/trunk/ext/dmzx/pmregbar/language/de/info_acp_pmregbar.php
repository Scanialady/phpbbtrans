<?php
/**
*
* @version $Id$
* @package phpBB Extension - PM Notify & Guest Register bar (deutsch)
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
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
// ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'ACP_PMREGBAR'						=> 'PM Benachrichtigung & Gäste-Registrierungsleiste',
	'ACP_PMREGBAR_CONFIG_SETTINGS'		=> 'Einstellungen',
	'ACP_PMREGBAR_CONFIG_SET'			=> 'Konfiguration',
));
