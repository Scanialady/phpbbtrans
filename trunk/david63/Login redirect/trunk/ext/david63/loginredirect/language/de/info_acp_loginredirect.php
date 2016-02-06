<?php
/**
*
* @version $Id$
* @package User Login Redirect
* @copyright (c) 2014 david63
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
	'INVALID_ANNOUNCEMENT_TOPIC'			=> 'Das Ankündigungsthema ist fehlerhaft.',
	'INVALID_GROUP_TOPIC'					=> 'Das Gruppenthema ist fehlerhaft.',
	'INVALID_WELCOME_TOPIC'					=> 'Das Willkommensthema ist fehlerhaft.',

	'LATEST'								=> 'Aktuellste',
	'LOG_LOGIN_REDIRECT'					=> '<strong>Optionen von Login Weiterleitung aktualisiert</strong>',

	'REDIRECT'								=> 'Login Weiterleitung',

	'REDIRECT_ANNOUNCE'						=> 'Weiterleitung zu Ankündigung bei Login',
	'REDIRECT_ANNOUNCE_EXPLAIN'				=> 'Leite alle Benutzer weiter, die noch nicht angemeldet waren, seit die letzte Ankündigung veröffentlicht wurde.',
	'REDIRECT_ANNOUNCE_MESSAGE_EXPLAIN'		=> 'Zeige eine Nachricht an, um mitzuteilen, dass der Benutzer zur letzten Ankündigung weitergeleitet wird.',
	'REDIRECT_ANNOUNCE_OPTIONS'				=> 'Ankündigungsoptionen',
	'REDIRECT_ANNOUNCE_PRIORITY'			=> 'Ankündigung Priorität Weiterleitung',
	'REDIRECT_ANNOUNCE_PRIORITY_EXPLAIN'	=> 'Lege fest, welche Ankündigung Vorrang hat',
	'REDIRECT_ANNOUNCE_TOPIC_ID'			=> 'Ankündigung Themen-ID',
	'REDIRECT_ANNOUNCE_TOPIC_ID_EXPLAIN'	=> 'Gib die ID des Ankündigungsthemas ein, zu welchem du alle Benutzer weiterleiten möchtest.',
	'REDIRECT_ANY_ANNOUNCE_EXPLAIN'			=> 'Leite alle Benutzer weiter, die noch nicht angemeldet waren, seit die ausgewählte Ankündigung veröffentlicht wurde.',

	'REDIRECT_ENABLED'						=> 'Login-Weiterleitung für Benutzer aktivieren',

	'REDIRECT_GROUP'						=> 'Themen-Weiterleitung Gruppe',
	'REDIRECT_GROUP_ALL'					=> 'Alle Gruppenmitglieder',
	'REDIRECT_GROUP_ALL_EXPLAIN'			=> 'Hier auf JA einzustellen überschreibt jede unten einzeln ausgewählte Gruppe.',
	'REDIRECT_GROUP_EXPLAIN'				=> 'Weiterleitung von Mitgliedern einer Gruppe oder aller Gruppen zu einem festgelegten Thema bei der Anmeldung im Forum.',
	'REDIRECT_GROUP_ID'						=> 'Gruppe wählen',
	'REDIRECT_GROUP_MESSAGE_EXPLAIN'		=> 'Zeige eine Nachricht an, um mitzuteilen, dass der Benutzer zu einem festgelegten Thema weitergeleitet wird.',
	'REDIRECT_GROUP_OPTIONS'				=> 'Gruppenoptionen',
	'REDIRECT_GROUP_TOPIC_ID'				=> 'Gruppe Themen-ID',
	'REDIRECT_GROUP_TOPIC_ID_EXPLAIN'		=> 'Gib die ID des Themas an, zu welchem du die Gruppenmitglieder weiterleiten möchtest.',

	'REDIRECT_LATEST_ANNOUNCE'				=> 'Weiterleitung zu letzter Ankündigung bei Login',

	'REDIRECT_LOGIN'						=> 'Login Weiterleitung',
	'REDIRECT_LOGIN_EXPLAIN'				=> 'Hierkannst du auswählen, einen neuen Benutzer beim ersten Login nach der Registrierung zu einem Willkommensbeitrag weiterzuleiten, alle Benutzer zur letzten Ankündigung, wenn sie diese noch nicht gesehen haben, und/oder alle Mitglieder oder die einer bestimmten Gruppe zu einer neuen Mitteilung weiterzuleiten bei der Anmeldung im Forum.',

	'REDIRECT_MANAGE'						=> 'Weiterleitungen verwalten',

	'REDIRECT_SHOW_MESSAGE'					=> 'Zeige eine Weiterleitungs-Nachricht',

	'REDIRECT_WELCOME'            			=> 'Weiterleitung Willkommensthema',
	'REDIRECT_WELCOME_EXPLAIN'				=> 'Leite alle neuen Benutzer bei der ersten Anmeldung am Board zu einem Willkommensthema weiter.',
	'REDIRECT_WELCOME_MESSAGE_EXPLAIN'		=> 'Zeige eine Nachricht an, um mitzuteilen, dass der neue Benutzer zu einem Willkommensthema weitergeleitet wird.',
	'REDIRECT_WELCOME_OPTIONS'				=> 'Willkommensoptionen',
	'REDIRECT_WELCOME_TOPIC_ID'				=> 'Willkommensthema-ID',
	'REDIRECT_WELCOME_TOPIC_ID_EXPLAIN'		=> 'Gib die ID des Begrüßungsthemas ein, zu welchem du alle neuen Benutzer weiterleiten möchtest.',

	'SELECTED'								=> 'Ausgewählte',
));
