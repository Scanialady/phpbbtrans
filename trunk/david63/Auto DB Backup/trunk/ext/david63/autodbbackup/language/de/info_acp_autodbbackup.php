<?php
/**
*
* @version $ID$
* @package Auto db Backup (3.2) [Deutsch]
* @copyright (c) 2015 david63
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
	'ACP_AUTO_DB_BACKUP'			=> 'Auto Database Backup',
	'ACP_AUTO_DB_BACKUP_SETTINGS'	=> 'Einstellungen Auto-Backup',

	'LOG_AUTO_DB_BACKUP'			=> '<strong>Automatische Datenbanksicherung fertig</strong>',
	'LOG_AUTO_DB_BACKUP_SETTINGS'	=> '<strong>Einstellungen für Auto Database Backup geändert</strong>',
));
