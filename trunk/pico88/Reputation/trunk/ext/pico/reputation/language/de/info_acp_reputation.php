<?php
/**
*
* Reputation System extension for the phpBB Forum Software package.
*
* @version $Id: info_acp_reputation.php 30 2014-12-23 10:17:55Z Scanialady $
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
//  ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'ACP_REPUTATION_SYSTEM'				=> 'Reputation System',
	'ACP_REPUTATION_OVERVIEW'			=> 'Überblick',
	'ACP_REPUTATION_SETTINGS'			=> 'Einstellungen',
	'ACP_REPUTATION_RATE'				=> 'Wertung',
	'ACP_REPUTATION_SYNC'				=> 'Synchronisieren',

	'RS_FORUM_REPUTATION'			=> 'Aktiviere Beitragsbewertung (Reputation)',
	'RS_FORUM_REPUTATION_EXPLAIN'	=> 'Erlaube Mitgliedern, Beiträge anderer Benutzer in diesem Forum zu bewerten.',

	'RS_GROUP_POWER'				=> 'Gruppen-Bewertungsenergie',
	'RS_GROUP_POWER_EXPLAIN'		=> 'Wenn dieses Feld gefüllt ist, wird die Bewertungsenergie der Mitglieder überschrieben, und basiert nicht mehr auf Beiträgen etc.',

	'LOG_REPUTATION_DELETED'		=> '<strong>Bewertung gelöscht </strong><br />Von Benutzer ID: %1$s<br />Für Benutzer ID: %2$s<br />Punkte: %3$s<br/>Typ: %4$s<br/>Gegenstands-ID: %5$s',
	'LOG_POST_REPUTATION_CLEARED'	=> '<strong>Beitragsbewertung gelöscht</strong><br />Beitragsautor: %1$s<br />Beitragsbetreff: %2$s',
	'LOG_USER_REPUTATION_CLEARED'	=> '<strong>Benutzerbewertung gelöscht</strong><br />Benutzer: %1$s',
	'LOG_REPUTATION_SYNC'			=> '<strong>Reputation System resynchronisiert</strong>',
	'LOG_REPUTATION_TRUNCATE'		=> '<strong>Bewertungen geleert</strong>',
));
