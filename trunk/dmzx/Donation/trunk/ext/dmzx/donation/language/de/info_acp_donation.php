<?php
/**
*
* @version $Id
* @package phpBB Extension - Donation extension (deutsch)
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
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
// Some characters you may want to copy&paste:
// ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'ACP_DONATION'						=> 'Donation Extension',
	'ACP_DONATION_CONFIG'				=> 'Konfiguration',
	'ACP_DONATION_GOAL'					=> 'Spendenziel',
	'ACP_DONATION_DONORS'				=> 'Spenderliste',
	'ACP_DONATION_HISTORY'				=> 'Spendenverlauf',
	'ACP_DONATION_IPN'					=> 'IPN Einstellungen',
	// Log entries
	'LOG_DONATION_CONFIG_UPDATE'	 			=> '<strong>Donation Extension Einstellungen aktualisiert</strong>',
	'LOG_DONATION_RESET_DATE'	 				=> '<strong>Donation Extension Installationsdatum zurückgesetzt</strong>',
	'LOG_DONATION_UPDATED'	 					=> '<strong>Spender aktualisiert</strong><br />» %1$s',
	'LOG_DONATION_ADDED'	 					=> '<strong>Spender hinzugefügt</strong><br />» %1$s',
	'LOG_DONATION_DELETED'	 					=> '<strong>Spender gelöscht</strong><br />» %1$s',
	'LOG_DONATION_GOAL_UPDATE'	 				=> '<strong>Spendenziel aktualisiert</strong>',
	'LOG_DONATION_IPN_UPDATE'	 				=> '<strong>Spenden-IPN Einstellungen aktualisiert</strong>',
	'LOG_DONATION_HISTORY_DELETED'	 			=> '<strong>Spendenverlauf gelöscht</strong>',
	'LOG_DONATION_EMAIL'						=> '<strong>Email gesendet an abgelaufene Spender</strong><br />» %s',
));
