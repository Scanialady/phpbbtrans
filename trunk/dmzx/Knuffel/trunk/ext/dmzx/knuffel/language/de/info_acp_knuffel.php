<?php
/**
*
* @version $Id$
* @package phpBB Extension - Knuffel
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

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_INSERT_FIRST_FILL'				=> 'Die Tabellen wurden erfolgreich mit den Grundwerten befüllt',
	'ACP_REMOVE_TABLES'					=> 'Die Tabellen wurden erfolgreich gelöscht',
	'ACP_KNUFFEL_UPDATE'				=> 'Knuffel Modul erfolgreich aktualisiert',
	'ACP_KNUFFEL'						=> 'Knuffel',
	'ACP_KNUFFEL_SETTINGS'				=> 'Knuffel Einstellungen',

	// Settings
	'KNUFFEL_TITLE'						=> 'Knuffel',
	'KNUFFEL_ENABLE'					=> 'Aktiviere Knuffel:',
	'KNUFFEL_ENABLE_EXPLAIN'			=> 'Hier kannst du Knuffel aktivieren/deaktivieren',
	'KNUFFEL_PAGINATION'				=> 'Seiteneinstellung:',
	'KNUFFEL_PAGINATION_EXPLAIN'		=> 'Die Anzahl der anzuzeigenden Rekorde in den Highscorelisten je Seite',
	'KNUFFEL_PAGINATION_ERROR'			=> 'Du kannst keinen Wert kleiner als 3 eingeben (max 999)!',
	'KNUFFEL_TITLE_EXPLAIN'				=> 'Hier kannst Du die Highscoreliste komplett löschen oder nur die aktuellen Scores löschen und die Alltime Highscores bestehen lassen (empfohlen).',
	'KNUFFEL_DELETE'					=> 'Highscoreliste löschen',
	'KNUFFEL_DELETE_ATTENTION'			=> 'Die folgenden Aktionen können nicht rückgängig gemacht werden!',
	'KNUFFEL_DELETE_CONFIRM'			=> 'Willst du wirklich die Knuffel Highscores zurücksetzen?',
	'KNUFFEL_DELETE_EXPLAIN'			=> 'Hier kannst du die aktuelle Highscoreliste löschen, der Alltime Highscore bleibt bestehen.',
	'KNUFFEL_DELETE_ALL'				=> 'Lösche alle Highscorelisten, Alltime Rekorde eingeschlossen',
	'KNUFFEL_DELETE_ALL_CONFIRM'		=> 'Willst du wirklich alle Knuffelhighscores zurücksetzen? Du löscht dadurch alle vorhandenen Highscores inclusive der Alltime Highscores!',
	'KNUFFEL_DELETE_ALL_EXPLAIN'		=> 'Hier löscht du die komplette Highscoreliste inclusive dem Alltime Highscore.',
	'KNUFFEL_DELETE_BUTTON'				=> 'Löschen',
	'KNUFFEL_DELETE_SUCCESSFULL'		=> 'Highscores erfolgreich gelöscht',
	'KNUFFEL_HIGHSCORE_DELETE'			=> 'Highscores löschen',
	'KNUFFEL_SETTINGS_EXPLAIN'			=> 'Hier kannst du die allgemeinen Einstellungen für Knuffel vornehmen',
	'KNUFFEL_CONFIG_SUCCESS'			=> 'Die Einstellungen wurden erfolgreich aktualisiert',

	// Points
	'KNUFFEL_POINTS_SETTINGS'			=> 'Ultimate Points Einstellungen',
	'KNUFFEL_POINTS_SETTINGS_EXPLAIN'	=> 'Da du Ultimate Points installiert hast, kannst du hier gewisse Spielekosten setzen',
	'KNUFFEL_COST'						=> 'Kosten pro Spiel:',
	'KNUFFEL_COST_EXPLAIN'				=> 'Setze hier die Kosten für ein Knuffelspiel',
	'KNUFFEL_BASIS_JACKPOT'				=> 'Standardjackpot:',
	'KNUFFEL_BASIS_JACKPOT_EXPLAIN'		=> 'etze hier die Höhe des Basisjackpots',
	'KNUFFEL_JACKPOT'					=> 'Momentaner Jackpot:',
	'KNUFFEL_JACKPOT_EXPLAIN'			=> 'Hier kannst du die Höhe des momentanen Jackpots verändern',
	'KNUFFEL_GIVE_JACKPOT'				=> 'Jackpot Ausspielung:',
	'KNUFFEL_GIVE_JACKPOT_EXPLAIN'		=> 'Setze hier ab wieviel erreichten Knuffelpunkten der Jackpot gewonnen wird',

	// Logs
	'LOG_KNUFFEL_DELETE_HIGHSCORES'		=> 'Knuffel Highscores wurden gelöscht',
	'LOG_KNUFFEL_DELETE_ALL_HIGHSCORES'	=> 'Knuffel Highscores und Alltime Highscores wurden gelöscht',
	'LOG_KNUFFEL_POINTS'				=> 'Knuffel Punkte Einstellungen wurden aktualisiert',
	'LOG_KNUFFEL_SETTINGS'				=> 'Knuffel Einstellungen wurden aktualisiert',

	// Permission
	'ACL_U_USE_KNUFFEL'					=> 'Kann Knuffel spielen',
));
