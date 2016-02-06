<?php
/**
*
* Reputation System extension [German]
*
* @version $Id$
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
// Some characters for use
//  ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'RS_TITLE'			=> 'Reputation System',

	'RS_ACTION'					=> 'Aktion',
	'RS_DATE'					=> 'Datum',
	'RS_DETAILS'				=> 'Details der Benutzerbewertung',
	'RS_FROM'					=> 'von',
	'RS_LIST'					=> 'Liste Benutzerbewertungspunkte',
	'RS_POST_COUNT'				=> 'Punkte für Beitrag',
	'RS_POST_REPUTATION'		=> 'Beitragsbewertung',
	'RS_USER_COUNT'				=> 'Punkte von Benutzer',
	'RS_POSITIVE_COUNT'			=> 'Positiv',
	'RS_NEGATIVE_COUNT'			=> 'Negativ',
	'RS_STATS'					=> 'Statistik',
	'RS_WEEK'					=> 'Letzte Woche',
	'RS_MONTH'					=> 'Letzter Monat',
	'RS_6MONTHS'				=> 'Letzte 6 Monate',
	'RS_POINT'					=> 'Punkt',
	'RS_POINTS_TITLE'			=> array(
		1	=> 'Punkt: %d',
		2	=> 'Punkte: %d',
	),
	'RS_POST_DELETE'			=> 'Beitrag gelöscht',
	'RS_POWER'					=> 'Bewertungsenergie',
	'RS_TIME'					=> 'Zeit',
	'RS_TO'						=> 'für',
	'RS_TO_USER'				=> 'Für',
	'RS_VOTING_POWER'			=> 'Verbleibende Bewertungsenergie',

	'RS_EMPTY_DATA'				=> 'Es gibt keine Bewertungspunkte.',
	'RS_NA'						=> 'n/a',
	'RS_NO_ID'					=> 'Keine ID',
	'RS_NO_REPUTATION'			=> 'Diese Bewertung gibt es nicht.',

	'NO_REPUTATION_SELECTED'	=> 'Du hast keinen Bewertungspunkt ausgewählt.',

	'RS_REPUTATION_DELETE_CONFIRM'	=> 'Willst du wirklich diese Bewertung löschen?',
	'RS_REPUTATIONS_DELETE_CONFIRM'	=> 'Willst du wirklich diese Bewertungen löschen?',
	'RS_POINTS_DELETED'			=> array(
		1	=> 'Die Bewertung wurde gelöscht.',
		2	=> 'Die Bewertungen wurden gelöscht.',
	),

	'RS_CLEAR_POST'				=> 'Leere Beitragsbewertung',
	'RS_CLEAR_POST_CONFIRM'		=> 'Willst du wirklich alle Bewertungspunkte dieses Beitrags löschen?',
	'RS_CLEARED_POST'			=> 'Die Beitragsbewertung wurde geleert.',
	'RS_CLEAR_USER'				=> 'Leere Benutzerbewertung',
	'RS_CLEAR_USER_CONFIRM'		=> 'Willst du wirklich alle Bewertungspunkte dieses Benutzers löschen?',
	'RS_CLEARED_USER'			=> 'Die Benutzerbewertung wurde geleert.',

	'RS_LATEST_REPUTATIONS'			=> 'Letzte Bewertungen',
	'LIST_REPUTATIONS'				=> array(
		1	=> '%d Bewertung',
		2	=> '%d Bewertungen',
	),
	'ALL_REPUTATIONS'				=> 'Alle Bewertungen',

	'RS_NEW_REPUTATIONS'			=> 'Neue Bewertungspunkte',
	'RS_NEW_REP'					=> 'Du hast <strong>1 neuen</strong> Bewertungskommentar erhalten',
	'RS_NEW_REPS'					=> 'Du hast <strong>%s neue</strong> Bewertungskommentare erhalten',
	'RS_CLICK_TO_VIEW'				=> 'Gehe zu den erhaltenen Punkten',

	'RS_MORE_DETAILS'				=> '» mehr Details',

	'RS_USER_REPUTATION'			=> 'Bewertung von %s',

	'RS_VOTE_POWER_LEFT'			=> '%1$d von %2$d',

	'RS_POWER_DETAILS'				=> 'Wie Bewertungsenergie berechnet wird',
	'RS_POWER_DETAIL_AGE'			=> 'Nach Registrierungsdatum',
	'RS_POWER_DETAIL_POSTS'			=> 'Nach Beitragsanzahl',
	'RS_POWER_DETAIL_REPUTAION'		=> 'Nach Bewertung',
	'RS_POWER_DETAIL_WARNINGS'		=> 'Nach Verwarnungen',
	'RS_POWER_DETAIL_MIN'			=> 'Minimale Bewertungsenergie für alle Benutzer',
	'RS_POWER_DETAIL_MAX'			=> 'Erlaube Kappung der Bewertungsenergie bei Erreichen der erlaubten Obergrenze',
	'RS_POWER_DETAIL_GROUP_POWER'	=> 'Bewertungsenergie basierend auf Benutzergruppe',
	'RS_GROUP_POWER'				=> 'Bewertungsenergie basierend auf Benutzergruppe',
));
