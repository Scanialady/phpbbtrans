<?php
/**
*
* @version $Id$
* @package phpBB Extension - Hangman Game (deutsch)
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
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
//  ‚ ‘ ’ « » „ “ ” …
//
// Merge the following language entries into the lang array

$lang = array_merge($lang, array(
	'ACP_IMPORT_BONUS'							=> 'Import-Bonus',
	'ACP_IMPORT_BONUS_EXP'						=> 'Soll ein Benutzer/Admin, welcher ein Hangman-Paket importiert, zusätzliche Punkte geschenkt bekommen?',
	'ACP_IMPORT_BONUS_SIZE'					 	=> 'Höhe Import-Bonus',
	'ACP_IMPORT_BONUS_SIZE_EXP'				 	=> 'Anzahl der Punkte, die ein Benutzer/Admin für den Importvorgang erhalten wird',
	'ACP_HANGMAN_BOT'							=> 'Hangman-Bot aktivieren?',
	'ACP_HANGMAN_BOT_EXP'						=> 'Wenn dies aktiviert ist, wird anstelle von Anonymous in der Übersicht und der Highscores-Seite der Name des Hangman-Bots angezeigt.',
	'ACP_HANGMAN_BOT_NAME'						=> 'Hangman-Bot Name',
	'ACP_HANGMAN_BOT_NAME_EXP'					=> 'Gib einen Namen für den Hangman-Bot ein.',
	'ACP_HANGMAN_ANONYMOUS_POINTS'				=> 'Gäste-Punkte',
	'ACP_HANGMAN_ANONYMOUS_POINTS_EXP'			=> 'Soll der Benutzer Anonymous Punkte gewinnen/verlieren?',
	'ACP_HANGMAN_CREATOR_BONUS'					=> 'Ersteller-Bonus',
	'ACP_HANGMAN_CREATOR_BONUS_EXP'				=> 'Soll der Ersteller Punkte erhalten, wenn jemand sein Hangman errät?',
	'ACP_HANGMAN_CREATOR_BONUS_SIZE'			=> 'Höhe der Ersteller-Belohnung',
	'ACP_HANGMAN_CREATOR_BONUS_SIZE_EXP'		=> 'Anzahl der Punkte, die ein Ersteller bekommt, wenn jemand beim Raten seines Hangmans verliert.',
	'ACP_HANGMAN_INCORRECT_VALUES'				=> 'Ungültige Werte eingegeben. Wenn du von x nach y exportieren möchtest, musst du beide Werte eingeben, und das Kontrollkästchen aktivieren!',
	'ACP_HANGMAN_IMPORT_SQLERR'					=> 'SQL-Fehler bei Hangman #%d',
	'ACP_HANGMAN_SKIPPED_ERROR'					=> 'Wort übersprungen <strong>%s</strong>. Fehler: %s',
	'ACP_HANGMAN_IMPORT_STOP'					=> 'Import nach %d Hangmans abgebrochen',
	'ACP_HANGMAN_IMPORT_SUCCESS'				=> 'Import von %d Hangmans abgeschlossen',
	'ACP_RESET_CREATED_CONFIRM_MESSAGE'			=> 'Bist du sicher, dass du den Zähler der erstellten Hangmans zurücksetzen willst?',
	'ACP_DELETE_EXP_CONFIRM_MESSAGE'			=> 'Bist du sicher, dass du alle abgelaufenen Hangmans löschen willst?',
	'ACP_DELETE_WON_CONFIRM_MESSAGE'			=> 'Bist du sicher, dass du alle gelösten Hangmans löschen willst?',
	'ACP_DELETE_HIGHSCORE_CONFIRM_MESSAGE'		=> 'Bist du sicher, daß du alle Hangman-Highscores löschen willst?',
	'ACP_DELETE_ALL_HANGMANS_CONFIRM_MESSAGE' 	=> 'Bist du sicher, dass du alle Hangmans löschen willst?',
	'ACP_RES_CREATED_HANGMANS'					=> 'Den Zähler für erstellte Hangmans zurücksetzen',
	'ACP_RESET_CREATED_HANGMANS'				=> 'Der Zähler für erstellte Hangmans wurde zurückgesetzt!',
	'LOG_RESET_CREATED_HANGMANS'				=> 'Zähler für erstellte Hangmans zurückgesetzt',
	'ACP_HANGMAN_SKIP'							=> 'Das Wort %s wurde ignoriert, weil ',
	'ACP_HANGMAN_SKIP_FEW'						=> '&#8226; es nicht genug Buchstaben hat',
	'ACP_HANGMAN_SKIP_ALREADY'					=> '&#8226; es bereits in der DB existiert',
	'ACP_HANGMAN_SKIP_PARSING'					=> '&#8226; es ungültige Zeichen enthält:[%s]',
	'ACP_HANGMAN_SKIP_BBCODED'					=> '&#8226; es enthält BBcode',
	'ACP_POINTS_NOTICE'		 					=> 'Obwohl du Punkte für Hangman aktiviert hast, wird es nicht funktionieren, weil das globale Punktesystem deaktiviert ist.',
	'ACP_HANGMAN_NOFILE'						=> 'Entschuldige, dieser Dateiname existiert nicht.',
	'ACP_BOARD_HANGMAN'		 					=> 'Hangman-Status',
	'ACP_BOARD_HANGMAN_ENABLE' 					=> 'Hangman aktiviert',
	'ACP_ALLOW_BBCODE'							=> 'BBcode in Titel und Hilfe',
	'ACP_ALLOW_BBCODE_EXP'						=> 'Möchtest du die Nutzung von BBCodes in der Titelzeile und im Hilfetext erlauben?',
	'ACP_ALLOW_SMILIES'		 					=> 'Smilies in Titel und Hilfe',
	'ACP_ALLOW_SMILIES_EXP'						=> 'Möchtest du die Nutzung von Smilies in der Titelzeile und im Hilfetext erlauben?',
	'ACP_CONFIG_TITLE' 							=> 'Hangman Konfiguration',
	'ACP_CONFIG_HEAD'							=> 'Konfiguration',
	'ACP_CONFIG_EXPLAIN' 						=> 'Hauptseite der Konfiguration von Hangman',
	'ACP_CONFIG_UPDATED' 						=> 'Die Konfiguration wurde erfolgreich aktualisiert.',
	'ACP_ONLY_ADMIN_CREATE'						=> 'Nur Admins können Hangmans erstellen',
	'ACP_GAMES_PER_PAGE'						=> 'Anzahl der Hangmans in der Übersicht',
	'ACP_GAMES_PER_PAGE_EXP'					=> 'Anzahl der Hangmans, welche pro Seite in der Übersichtsseite angezeigt werden sollen.',
	'ACP_GENERAL_SWITCHES'						=> 'Allgemeine Schalter',
	'ACP_GENERAL_VALUES'						=> 'Allgemeine Einstellungen',
	'ACP_DELETE_ATTENTION'						=> 'ACHTUNG: Die folgenden Änderungen können NICHT rückgängig gemacht werden!',
	'ACP_POINTS_MOD_EXIST'						=> 'Ultimate Points System',
	'ACP_POINTS_MOD_EXPLAIN'					=> 'Du hast das Ultimate Points System installiert, und kannst daher deinen Benutzern Punkte auf ihr Konto geben oder auch abziehen.',
	'ACP_POINTS_MOD_INSTALLED'					=> 'Punktesystem verwenden (nur falls installiert)',
	'ACP_POINTS_MOD_WON'						=> 'Punkte für gewonnene Hangmans',
	'ACP_POINTS_MOD_LOST'						=> 'Punkte für verlorene Hangmans',
	'ACP_POINTS_MOD_CREATOR_REWARD'				=> 'Punkte für den Ersteller, wenn Hangman verloren wird',
	'ACP_POINTS_MOD_CREATED'					=> 'Punkte fürs Erstellen von Hangmans',
	'ACP_POINTS_MOD_LETTERS'					=> 'Punkte fürs Erraten eines Buchstabens',
	'ACP_POINTS_INTERNAL'						=> 'Internes Punktesystem',
	'ACP_MAKE_WORDS_UPPER_EXP'					=> 'Sollen Hangman-Worte in Großbuchstaben konvertiert werden?',
	'ACP_MAKE_WORDS_UPPER'						=> 'Erstellte Worte in Großbuchstaben umwandeln?',
	'ACP_TIME_PLAY_AGAIN'						=> 'Nach welcher Zeit können Benutzer ungeratene Worte neu raten? (0 bedeutet „nie“)',
	'ACP_DELETE'								=> 'Löschen',
	'ACP_YES'									=> 'Ja',
	'ACP_NO'									=> 'Nein',
	'ACP_NONEMOD'								=> 'Keine',
	'ACP_TITLE'									=> 'Hangman löschen',
	'ACP_TEXT'									=> 'Möchtest du Hangman %s wirklich löschen?',
	'ACP_TEXT_SCORE' 							=> 'Auch Erstellerscore abziehen?',
	'ACP_SUBMIT'								=> 'OK',
	'ACP_RESET'									=> 'Abbruch',
	'ACP_RESET_HIGHSCORE' 						=> 'Highscore zurücksetzen',
	'ACP_RESET_HANGMANS' 						=> 'Alle Hangmans löschen',
	'ACP_MULTIDELETE_GO'						=> 'Markierte löschen',
	'ACP_DELETED_HIGHSCORE' 					=> 'Highscore erfolgreich zurückgesetzt!',
	'ACP_DELETED_HANGMANS' 						=> '%s Hangmans wurden erfolgreich gelöscht!',
	'ACP_DELETED_ALL_HANGMANS' 					=> 'Alle Hangmans gelöscht!',
	'ACP_RULES_ENABLE'							=> 'Regeln für die Hangman-Erstellung',
	'ACP_RULES_ENABLE_EXP'						=> 'Du kannst hier aktivieren, dass für die Erstellung von Hangmans Regeln angezeigt werden. (Die Regeln kannst du in der Sprachdatei anpassen)',
	'ACP_STANDART_DAYS'							=> 'Wieviele verbleibende Tage als Standard beim Erstellen?',
	'ACP_STANDART_TRIES'						=> 'Wieviele Rateversuche als Standard beim Erstellen?',
	'ACP_STANDART_FILTER'						=> 'Standardfilter in der Übersicht?',
	'ACP_RESET_WON'								=> 'Lösche gelöste Hangmans',
	'ACP_RESET_TIME_UP'							=> 'Lösche abgelaufene Hangmans',
	'ACP_SCORE_WON'								=> 'Punkte für gewonnene Hangmans',
	'ACP_SCORE_LOST'							=> 'Punkteabzug für verlorene Hangmans',
	'ACP_SCORE_CREATE'							=> 'Punkte für neu erstelltes Hangman',
	'ACP_SCORE_LETTERS'							=> 'Punkte für erratene Buchstaben',
	'ACP_HSC_LETTERS_P'							=> 'Zeige prozentual falsche und richtige Buchstaben?',
	'ACP_HIGHSCORE_FILTER'						=> 'Standardfilter für die Highscoreseite',
	'ACP_AUTO_REPLACE_LETTERS'					=> 'Welche Buchstaben sollen automatisch ersetzt werden?',
	'ACP_ALLOWED_LETTERS'						=> 'Erlaubte Buchstaben?',
	'ACP_MODERATOR_GROUP' 						=> 'Hangman-Moderatorengruppe auswählen',
	'ACP_SHOW_STATS'							=> 'Ministatus in der Übersicht?',
	'ACP_SHOW_STATS_EXP'						=> 'Zeigt eine Ministatistik auf der Übersichtsseite',
	'ACP_SHOW_NUMBERS'							=> 'Zeige die Nummer des Hangmans',
	'ACP_SHOW_NUMBERS_EXP'						=> 'Zeigt die Nummer des Hangmans auf der Übersichtsseite an.',
	'ACP_CONVERT_SPECIAL' 						=> 'Konvertiere deutsche Umlaute',
	'ACP_CONVERT_SPECIAL_EXP'					=> 'Wandelt deutsche Umlaute (Ä,Ö,Ü,ß) um, ehe die Worte in der Datenbank gespeichert werden.',
	'ACP_GAMES_PER_DAY'							=> 'Wieviele Hangmans kann ein Benutzer pro Tag erstellen? (0 bedeutet unbegrenzt)',
	'ACP_TRIES_MINIMUM'							=> 'Wie viele Versuche Minimum',
	'ACP_TRIES_MAXIMUM'							=> 'Wie viele Versuche Maximum',
	'ACP_MIN_LETTERS'							=> 'Wie viele Buchstaben muss ein Hangman enthalten?',
	'ACP_MAX_LETTERS'							=> 'Wie viele Buchstaben darf ein Hangman enthalten? (-1 bedeutet unbegrenzt)',
	'ACP_REQUESSING_LOSE' 						=> 'Punkteabzüge',
	'ACP_REQUESSING_LOSE_EXP'					=> 'Einen Buchstaben noch mal zu raten kostet einen Versuch und führt zu Punktabzug, keinen Buchstaben raten kostet ebenfalls einen Versuch und Punkte (Maßnahme gegen F5-Drücker).',
	'ACP_ALLOW_GUEST'							=> 'Gäste dürfen Hangman besuchen',
	'ACP_STANDART_TITLE'						=> 'Hangman - Titel (Standard - Kann vom Benutzer während der Erstellung bearbeitet werden)',
	'ACP_MIN_HELP'								=> 'Mindestlänge Hilfe für ein Hangman? (0 bedeutet keine erforderlich)',
	//ADMINISTRATION_XML
	'TITLE'										=> 'Hangman - EXPORT / IMPORT',
	'EXPLAIN'									=> 'Dies ist die Hauptseite für das Importieren oder Exportieren von Hangmans in XML-Dateien. <br />Wenn du eine Datei importieren möchtest, suche sie auf deinem PC und wähle „Import“. Damit werden die Hangmans importiert.<br />Wenn du einige Hangmans exportieren möchtest, wähle die Reihe der Hangmans „von/bis“ aus, drücke dann Export,<br />und dann wird der Browser dir eine Datei senden, die du speichern kannst. Du musst dann wählen, wo sie gespeichert werden soll, und dann startet der Download. Wie auch beim Import bleibe bei kleinen Exporten (max. 1000 Einträge)!',
	'EXPORT'									=> 'Hangman - Export',
	'IMPORT'									=> 'Hangman - Import',
	'IMPORT_EXPLAIN'							=> 'Wenn du die Standard-Importeinstellungen ändern möchtest, kannst du unten die Werte ändern. Du musst dann auch das Feld dahinter markieren!<br />Die Grundeinstellungen sind <strong>Anonymous</strong> als Benutzername, und ein Maximum von <strong>1000</strong> Hangmans für den Import (du solltest auch gar nicht erst mehr versuchen, um Fehler wie Zeitüberschreitungen oder Überschreitung des Speicherlimits zu vermeiden).',
	'CHOOSEFILE'								=> 'Wähle eine Datei',
	'EXPORT_START_AT'							=> 'Mit welcher ID starten',
	'EXPORT_END_AT'								=> 'Mit welcher ID enden',
	'EXPORT_ALL'								=> 'Alle exportieren',
	'EXPORT_LETTERS'							=> 'Exportiere nur Hangmans, die diese Buchstaben enthalten',
	'EXPORT_MAX'								=> 'Maximum Export zählen',
	'IGNORE_DOUBLES'							=> 'Ignoriere Hangmans, die bereits in der DB existieren (ignoriert nicht doppelte Einträge innerhalb der XML-Datei)',
	'IMPORT_MAXIMUM'							=> 'Import Maximumzähler',
	'IMPORT_USERNAME'							=> 'Den importierten Hangmans zugeordneter Benutzername (wird geprüft - Anonymous, wenn nicht gefunden.)',
	'IMPORT_MIN_LETTERS'						=> 'Importiere nur Hangmans mit mindestens xxx Buchstaben',
	'IMPORT_IGNORE_DL'							=> 'Ignoriere Zeitbegrenzung in Hangmans',
	'IMPORT_IGNORE_DL_'							=> '(setzt sie auf unbegrenzt)',
	// Error messages
	'ACP_ERROR_GAMES_PER_PAGE'					=> 'Du kannst keinen Wert kleiner als 1 eingeben für Hangmans je Seite',
	'ACP_ERROR_TIME_PLAY'						=> 'Du kannst keinen Wert kleiner als 0 eingeben für die Zeit bis zum erneuten Spielen',
	'ACP_ERROR_STD_TRIES'						=> 'Du kannst keinen Wert kleiner als 1 eingeben für die Standardversuche',
	'ACP_ERROR_MIN_HELP'						=> 'Du kannst keinen Wert kleiner als 0 eingeben für die minimale Länge der Hilfe',
	'ACP_ERROR_MIN_TRIES'						=> 'Du kannst keinen Wert kleiner als 1 oder größer als 20 eingeben für die minimalen Versuche',
	'ACP_ERROR_MAX_TRIES'						=> 'Du kannst keinen Wert kleiner als 1 oder größer als 20 eingeben für die maximalen Versuche',
	'ACP_ERROR_MIN_MAX'							=> 'Der Wert für die minimale Anzahl Versuche kann nicht höher sein, als die maximale Anzahl Versuche',
	'ACP_ERROR_MIN_LETTERS'						=> 'Du kannst keinen Wert kleiner als 1 eingeben für die minimale Anzahl Buchstaben',
	'ACP_ERROR_MAX_LETTERS'						=> 'Du kannst keinen Wert kleiner als -1 eingeben für die maximale Anzahl Buchstaben',
	'ACP_ERROR_MIN_MAX_LET'						=> 'Der minimale Wert kann nicht höher sein als der maximale Wert - die einzige Ausnahme ist -1 für unbegrenzt',
));
