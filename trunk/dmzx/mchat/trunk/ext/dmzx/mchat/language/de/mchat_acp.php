<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
//  ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	// ACP configuration sections
	'MCHAT_SETTINGS_INDEX'					=> 'Einstellungen Index',
	'MCHAT_SETTINGS_CUSTOM'					=> 'Einstellungen separate Seite',
	'MCHAT_SETTINGS_ARCHIVE'				=> 'Einstellungen Archivseite',
	'MCHAT_SETTINGS_POSTS'					=> 'Einstellungen neuer Beitrag',
	'MCHAT_SETTINGS_MESSAGES'				=> 'Einstellungen Nachricht',
	'MCHAT_SETTINGS_PRUNE'					=> 'Einstellungen für Löschen',
	'MCHAT_SETTINGS_STATS'					=> 'Einstellungen für <em>Wer chattet</em>',

	// ACP settings
	'MCHAT_ACP_TITLE'						=> 'mChat Konfiguration',
	'MCHAT_VERSION'							=> 'Version',
	'MCHAT_RULES'							=> 'Regeln',
	'MCHAT_RULES_EXPLAIN'					=> 'Gib deine Forenregeln hier ein. HTML-Code ist erlaubt. <em>Du bist dafür auf 255 Zeichen beschränkt.</em><br />Diese Nachricht kann übersetzt werden: bearbeite dafür die Sprachvariable MCHAT_RULES_MESSAGE in /ext/dmzx/mchat/language/XX/common.php.',
	'MCHAT_CONFIG_SAVED'					=> 'mChat-Konfiguration wurde aktualisiert',
	'MCHAT_AVATARS'							=> 'Avatare anzeigen',
	'MCHAT_AVATARS_EXPLAIN'					=> 'Wenn JA eingestellt ist, werden verkleinerte Benutzeravatare angezeigt',
	'MCHAT_ON_INDEX'						=> 'mChat im Index anzeigen',
	'MCHAT_INDEX_HEIGHT'					=> 'Seitenhöhe im Index',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'			=> 'Die Höhe der Chat Box in Pixeln auf der Indexseite des Forums.<br /><em>Die Einstellung ist begrenzt von 50 bis 1000 Pixel.</em>',
	'MCHAT_LOCATION'						=> 'Platzierung von mChat auf der Indexseite',
	'MCHAT_TOP_OF_FORUM'					=> 'Oben',
	'MCHAT_BOTTOM_OF_FORUM'					=> 'Unten',
	'MCHAT_REFRESH'							=> 'Aktualisierungsintervall',
	'MCHAT_REFRESH_EXPLAIN'					=> 'Die Anzahl Sekunden, bis sich der mChat automatisch aktualisiert. <em>Die Einstellung ist begrenzt von 5 bis 60 Sekunden.</em>',
	'MCHAT_LIVE_UPDATES'					=> 'Live-Aktualiserung von bearbeiteten und gelöschten Nachrichten',
	'MCHAT_LIVE_UPDATES_EXPLAIN'			=> 'Wenn ein Benutzer Nachrichten bearbeitet oder löscht, werden die Änderungen für alle live angezeigt, ohne dass sie die Seite aktualisieren müssen. Deaktiviere das, falls du Leistungsprobleme bekommst.',
	'MCHAT_PRUNE'							=> 'Aktiviere automatisches Leeren',
	'MCHAT_PRUNE_EXPLAIN'					=> 'Geschieht nur dann, wenn ein Benutzer die separate Seite oder das Archiv betrachtet.',
	'MCHAT_PRUNE_NUM'						=> 'Anzahl verbleibender Nachrichten nach dem Leeren',
	'MCHAT_MESSAGE_LIMIT'					=> 'Anfängliche Anzahl von Nachrichten, die auf der separaten Seite angezeigt werden sollen',
	'MCHAT_MESSAGE_LIMIT_EXPLAIN'			=> '<em>Empfohlen sind 10 bis 30.</em>',
	'MCHAT_MESSAGE_NUM'						=> 'Anfängliche Anzahl von Nachrichten, die auf der Indexseite angezeigt werden sollen',
	'MCHAT_MESSAGE_NUM_EXPLAIN'				=> '<em>Empfohlen sind 10 bis 50.</em>',
	'MCHAT_NAVBAR_LINK'						=> 'Zeige Link zur separaten Seite im Navigationsbereich an',
	'MCHAT_ARCHIVE_LIMIT'					=> 'Anzahl der Nachrichten auf der Archivseite',
	'MCHAT_ARCHIVE_LIMIT_EXPLAIN'			=> 'Die maximale Anzahl Nachrichten pro Seite, die im Archiv angezeigt werden sollen. <br /><em>Empfohlen sind 25 bis 50.</em>',
	'MCHAT_FLOOD_TIME'						=> 'Flood-Intervall',
	'MCHAT_FLOOD_TIME_EXPLAIN'				=> 'Die Zeit in Sekunden, die ein Benutzer warten muß, bis er eine neue Nachricht im mChat absenden kann.<br /><em>Empfohlen sind 5 bis 30, stelle 0 ein, um die Funktion zu deaktivieren</em>',
	'MCHAT_EDIT_DELETE_LIMIT'				=> 'Zeitbegrenzung für bearbeiten und löschen von Nachrichten',
	'MCHAT_EDIT_DELETE_LIMIT_EXPLAIN'		=> 'Nachrichten, die älter sind als die hier angegebene Anzahl Sekunden können nicht mehr durch den Verfasser bearbeitet oder gelöscht werden.<br />Benutzer mit <em>Berechtigung zum bearbeiten/löschen sowie mit Moderatorberechtigung sind ausgenommen</em> von dieser Begrenzung.<br />Um unbegrenzte Bearbeitung und Löschen zu erlauben, setze auf 0.',
	'MCHAT_MAX_MESSAGE_LENGTH'				=> 'Maximale Nachrichtenlänge',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'		=> 'Die maximal erlaubte Anzahl von Zeichen pro Nachricht.<br /><em>Empfohlen sind 100 bis 500, stelle 0 ein, um die Funktion zu deaktivieren</em>.',
	'MCHAT_CUSTOM_PAGE'						=> 'Separate Seite aktivieren',
	'MCHAT_CUSTOM_PAGE_EXPLAIN'				=> 'Erlaubt die Benutzung des Chats auf einer eigenständigen Seite.',
	'MCHAT_CUSTOM_HEIGHT'					=> 'Höhe der separaten Seite',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'			=> 'Die Höhe der Chat-Box in Pixeln auf der eigenen mChat Seite.<br /><em>Die Einstellung ist begrenzt von 50 bis 1000 Pixel</em>.',
	'MCHAT_DATE_FORMAT'						=> 'Datumsformat',
	'MCHAT_DATE_FORMAT_EXPLAIN'				=> 'Die Syntax entspricht der der date()-Funktion von PHP <a href="http://www.php.net/date">date()</a>.',
	'MCHAT_CUSTOM_DATEFORMAT'				=> 'Eigenes…',
	'MCHAT_RELATIVE_TIME'					=> 'Zeige relative Zeit für neue Nachrichten',
	'MCHAT_RELATIVE_TIME_EXPLAIN'			=> 'Zeigt "gerade eben", "vor einer Minute" und so weiter für alle Nachrichten an. Zeigt das volle Datum für Nachrichten an, die älter als die aktuelle Sitzungslänge sind, aber begrenzt auf 60 Minuten.<br />Setze auf <em>Nein</em> um immer das volle Datum anzuzeigen.',
	'MCHAT_BBCODES_DISALLOWED'				=> 'Nicht erlaubte BBCodes',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'		=> 'Hier kann man BBCodes eintragen, die <strong>nicht</strong> in einer Nachricht verwendet werden dürfen.<br />Trenne BBCodes mit einem senkrechten Strich (pipe), zum Beispiel: <br />b|i|u|code|list|list=|flash|quote und/oder einem %1$scustom bbcode tag name%2$s',
	'MCHAT_STATIC_MESSAGE'					=> 'Permanente Nachricht',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'			=> 'Hier kannst du eine permanente Nachricht für die Benutzer des mChats eingeben. HTML-Code ist erlaubt.<br />Wenn das Feld leer bleibt wird keine Nachricht angezeigt. <em>Die Nachricht kann maximal 255 Zeichen beinhalten.</em><br />Diese Nachricht kann auch übersetzt werden: bearbeite dafür die Sprachvariable MCHAT_STATIC_MESSAGE in /ext/dmzx/mchat/language/XX/common.php.',
	'MCHAT_USER_TIMEOUT'					=> 'Zeitüberschreitung für Benutzer',
	'MCHAT_USER_TIMEOUT_EXPLAIN'			=> 'Stelle einen Wert für die Zeitüberschreitung in Sekunden ein, nach der die Sitzung für einen Benutzer im mChat endet. Setze hier 0 für kein Timeout.<br /><em>Diese Einstellung ist eingeschränkt durch die Einstellungen in deiner %1$sForenkonfiguration für Sitzungen%2$s, welche derzeit auf %3$d Sekunden eingestellt ist.</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'			=> 'Smilielimit überschreiben?',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'	=> 'Setze auf Ja um die Smiliebegrenzung des Forums für Chatnachrichten zu überschreiben',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'			=> 'Minimale Anzahl von Zeichen überschreiben?',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'	=> 'Setze auf Ja um die Einstellung der minimalen Anzahl von Zeichen des Forums für Chatnachrichten zu überschreiben',
	'MCHAT_NEW_POSTS_TOPIC'					=> 'Zeige neue Themen an',
	'MCHAT_NEW_POSTS_TOPIC_EXPLAIN'			=> 'Erlaubt automatische Mitteilungen über neue Themen des Forums im Chat.',
	'MCHAT_NEW_POSTS_REPLY'					=> 'Zeige neue Antworten an',
	'MCHAT_NEW_POSTS_REPLY_EXPLAIN'			=> 'Erlaubt automatische Mitteilungen über neue Antworten aus dem Forum im Chat.',
	'MCHAT_NEW_POSTS_EDIT'					=> 'Zeige bearbeitete Beiträge an',
	'MCHAT_NEW_POSTS_EDIT_EXPLAIN'			=> 'Erlaubt automatische Mitteilungen über bearbeitete Beiträge des Forums im Chat.',
	'MCHAT_NEW_POSTS_QUOTE'					=> 'Zeige zitierte Nachrichten an',
	'MCHAT_NEW_POSTS_QUOTE_EXPLAIN'			=> 'Erlaubt automatische Mitteilungen über zitierte Nachrichten aus dem Forum im Chat.',
	'MCHAT_WHOIS'							=> 'Zeige <em>Wer chattet</em> unterhalb des Chats an',
	'MCHAT_STATS_INDEX'						=> 'Zeige <em>Wer chattet</em> im Statistikbereich an',
	'MCHAT_STATS_INDEX_EXPLAIN'				=> 'Zeigt unterhalb von <em>Wer ist online</em> auf dem Index an, wer chattet',
	'MCHAT_WHOIS_REFRESH'					=> 'Aktualisierungsintervall für <em>Wer chattet</em>',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'			=> 'Die Anzahl Sekunden, bis die Wer-chattet-Anzeige aktualisiert wird.<br /><em>Einstellbar von 30 bis 300 Sekunden</em>.',
	'MCHAT_MESSAGE_TOP'						=> 'Position neuer Chatnachrichten',
	'MCHAT_MESSAGE_TOP_EXPLAIN'				=> 'Neue Nachrichten werden oben oder unten im Chat erscheinen.',
	'MCHAT_BOTTOM'							=> 'Unten',
	'MCHAT_TOP'								=> 'Oben',
	'MCHAT_PAUSE_ON_INPUT'					=> 'Pause während Eingabe',
	'MCHAT_PAUSE_ON_INPUT_EXPLAIN'			=> 'Den Chat während einer Nachrichteneingabe nicht aktualisieren',
	'MCHAT_PURGE'							=> 'Lösche jetzt alle Nachrichten',
	'MCHAT_PURGE_CONFIRM'					=> 'Bestätige, dass du alle Nachrichten löschen möchtest',
	'MCHAT_PURGED'							=> 'Alle mChat Nachrichten wurden erfolgreich gelöscht',
	
	// Error reporting
	'TOO_SMALL_MCHAT_ARCHIVE_LIMIT'			=> 'Der Wert für die Archivbegrenzung ist zu klein.',
	'TOO_LARGE_MCHAT_ARCHIVE_LIMIT'			=> 'Der Wert für die Archivbegrenzung ist zu groß.',
	'TOO_LONG_MCHAT_BBCODE_DISALLOWED'		=> 'Der Wert für nicht erlaubte BBCodes ist zu lang.',
	'TOO_SMALL_MCHAT_CUSTOM_HEIGHT'			=> 'Der Wert für die benutzerdefinierte Höhe ist zu klein.',
	'TOO_LARGE_MCHAT_CUSTOM_HEIGHT'			=> 'Der Wert für die benutzerdefinierte Höhe ist zu groß.',
	'TOO_LONG_MCHAT_DATE'					=> 'Das eingegebene Datumsformat ist zu lang.',
	'TOO_SHORT_MCHAT_DATE'					=> 'Das eingegebene Datumsformat ist zu kurz.',
	'TOO_SMALL_MCHAT_FLOOD_TIME'			=> 'Der Wert für die Flood-Zeit ist zu klein.',
	'TOO_LARGE_MCHAT_FLOOD_TIME'			=> 'Der Wert für die Flood-Zeit ist zu groß.',
	'TOO_SMALL_MCHAT_INDEX_HEIGHT'			=> 'Der Wert für die Höhe im Index ist zu klein.',
	'TOO_LARGE_MCHAT_INDEX_HEIGHT'			=> 'Der Wert für die Höhe im Index ist zu groß.',
	'TOO_SMALL_MCHAT_MAX_MESSAGE_LNGTH'		=> 'Der Wert für die maximale Länge von Nachrichten ist zu klein.',
	'TOO_LARGE_MCHAT_MAX_MESSAGE_LNGTH'		=> 'Der Wert für die maximale Länge von Nachrichten ist zu groß.',
	'TOO_SMALL_MCHAT_MESSAGE_LIMIT'			=> 'Der Wert für das Nachrichtenlimit ist zu klein.',
	'TOO_LARGE_MCHAT_MESSAGE_LIMIT'			=> 'Der Wert für das Nachrichtenlimit ist zu groß.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM'			=> 'Die Anzahl der auf dem Index anzuzeigenden Nachrichten ist zu klein.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM'			=> 'Die Anzahl der auf dem Index anzuzeigenden Nachrichten ist zu groß.',
	'TOO_SMALL_MCHAT_REFRESH'				=> 'Der Wert für die Aktualisierung ist zu klein.',
	'TOO_LARGE_MCHAT_REFRESH'				=> 'Der Wert für die Aktualisierung ist zu groß.',
	'TOO_LONG_MCHAT_STATIC_MESSAGE'			=> 'Der Wert für die statische Nachricht ist zu lang.',
	'TOO_SMALL_MCHAT_TIMEOUT'				=> 'Der Timeout-Wert für Benutzer ist zu klein.',
	'TOO_LARGE_MCHAT_TIMEOUT'				=> 'Der Timeout-Wert für Benutzer ist zu groß.',
	'TOO_SMALL_MCHAT_WHOIS_REFRESH'			=> 'Der Wert für <em>Wer chattet</em> ist zu klein.',
	'TOO_LARGE_MCHAT_WHOIS_REFRESH'			=> 'Der Wert für <em>Wer chattet</em> ist zu groß.',
));
