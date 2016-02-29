<?php
/**
*
* @package phpBB Extension - mChat
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
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
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACP_MCHAT_CONFIG'						=> 'Konfiguration',
	'ACP_CAT_MCHAT'							=> 'mChat',
	'ACP_MCHAT_TITLE'						=> 'Mini-Chat',
	'ACP_MCHAT_VERSION'						=> 'Version',
	'UCP_CAT_MCHAT'							=> 'mChat Präferenzen',
	'UCP_MCHAT_CONFIG'						=> 'mChat Benutzerpräferenzen',
	
	// ACP configuration sections
	'MCHAT_SETTINGS_INDEX'					=> 'Einstellungen Index',
	'MCHAT_SETTINGS_CUSTOM'					=> 'Einstellungen eigene Seite',
	'MCHAT_SETTINGS_ARCHIVE'				=> 'Einstellungen Archivseite',
	'MCHAT_SETTINGS_POSTS'					=> 'Einstellungen neuer Beitrag',
	'MCHAT_SETTINGS_MESSAGES'				=> 'Einstellungen Nachricht',
	'MCHAT_SETTINGS_PRUNE'					=> 'Einstellungen für Löschen',
	'MCHAT_SETTINGS_STATS'					=> 'Einstellungen für <em>Wer chattet</em>',
	
	// ACP entries
	'ACP_MCHAT_RULES'						=> 'Regeln',
	'ACP_MCHAT_RULES_EXPLAIN'				=> 'Gib deine Regeln hier ein. Jeder Regel in eine neue Zeile.<br />Lass das Feld frei um die Anzeige zu deaktivieren. <em>Das Limit liegt bei 255 Zeichen.</em><br />Diese Nachricht kann übersetzt werden: bearbeite dazu die MCHAT_RULES_MESSAGE Sprachvariable in der Datei /ext/dmzx/mchat/language/XX/common.php.',
	'LOG_MCHAT_CONFIG_UPDATE'				=> '<strong>mChat-Konfiguration geändert</strong>',
	'MCHAT_CONFIG_SAVED'					=> 'Die mChat-Konfiguration wurde erfolgreich geändert',
	'MCHAT_TITLE'							=> 'mChat',
	'MCHAT_AVATARS'							=> 'Avatare anzeigen',
	'MCHAT_AVATARS_EXPLAIN'					=> 'Wenn JA eingestellt ist, werden verkleinerte Benutzeravatare angezeigt',
	'MCHAT_ON_INDEX'						=> 'mChat im Index anzeigen',
	'MCHAT_INDEX_HEIGHT'					=> 'Seitenhöhe im Index',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'			=> 'Die Höhe der Chat Box in Pixeln auf der Index-Seite des Forums.<br /><em>Die Einstellung ist begrenzt von 50 bis 1000 Pixel.</em>.',
	'MCHAT_LOCATION'						=> 'Platzierung im Forum',
	'MCHAT_TOP_OF_FORUM'					=> 'Oberhalb des Forums',
	'MCHAT_BOTTOM_OF_FORUM'					=> 'Unterhalb des Forums',
	'MCHAT_REFRESH'							=> 'Aktualisierungsintervall',
	'MCHAT_REFRESH_EXPLAIN'					=> 'Die Anzahl Sekunden, bis sich der mChat automatisch aktualisiert. <em>Die Einstellung ist begrenzt von 5 bis 60 Sekunden.</em>',
	'MCHAT_LIVE_UPDATES'					=> 'Live-Aktualiserung von bearbeiteten und gelöschten Nachrichten',
	'MCHAT_LIVE_UPDATES_EXPLAIN'			=> 'Wenn ein Benutzer Nachrichten bearbeitet oder löscht, werden die Änderungen für alle live angezeigt, ohne dass sie die Seite aktualisieren müssen. Deaktiviere das, falls du Leistungsprobleme bekommst.',
	'MCHAT_PRUNE'							=> 'Automatisches Löschen erlauben',
	'MCHAT_PRUNE_EXPLAIN'					=> 'Stelle JA ein, um die automatische Löschfunktion zu aktivieren.<br /><em>Hat nur Auswirkung, wenn ein Benutzer die separate Seite oder das Archiv betrachtet.</em>.',
	'MCHAT_PRUNE_NUM'						=> 'Anzahl verbleibender Nachrichten nach dem automatischem Löschen',
	'MCHAT_MESSAGE_LIMIT'					=> 'Nachrichtenlimit',
	'MCHAT_MESSAGE_LIMIT_EXPLAIN'			=> 'Die maximale Anzahl der Nachrichten, die auf der Hauptseite des Forums angezeigt werden soll.<br /><em>Empfohlen sind zwischen 10 und 20</em>.',
	'MCHAT_MESSAGE_NUM'						=> 'Nachrichtengrenze',
	'MCHAT_MESSAGE_NUM_EXPLAIN'				=> 'Die maximale Anzahl von Nachrichten im Chat-Bereich die auf der Indexseite angezeigt werden. <br /> <Em> Empfohlen von 10 bis 50 </em>.',
	'MCHAT_ARCHIVE_LIMIT'					=> 'Archivlimit',
	'MCHAT_ARCHIVE_LIMIT_EXPLAIN'			=> 'Die maximale Anzahl Nachrichten pro Seite im Archiv.<br /> <em>Empfohlen sind 25 bis 50</em>.',
	'MCHAT_FLOOD_TIME'						=> 'Flood-Intervall',
	'MCHAT_FLOOD_TIME_EXPLAIN'				=> 'Die Zeit in Sekunden, die ein Benutzer warten muß, bis er eine neue Nachricht im mChat absenden kann.<br /><em>Empfohlen sind 5 bis 30, stelle 0 ein, um die Funktion zu deaktivieren</em>.',
	'MCHAT_EDIT_DELETE_LIMIT'				=> 'Zeitbegrenzung für bearbeiten und löschen von Nachrichten',
	'MCHAT_EDIT_DELETE_LIMIT_EXPLAIN'		=> 'Nachrichten, die älter sind als die hier angegebene Anzahl Sekunden können nicht mehr durch den Verfasser bearbeitet oder gelöscht werden.<br />Benutzer mit <em>Berechtigung zum bearbeiten/löschen sowie mit Moderatorberechtigung sind ausgenommen</em> von dieser Begrenzung.<br />Um unbegrenzte Bearbeitung und Löschen zu erlauben, setze auf 0.',
	'MCHAT_MAX_MESSAGE_LENGTH'				=> 'Maximale Nachrichtenlänge',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'		=> 'Die maximal erlaubte Anzahl von Zeichen pro Nachricht.<br /><em>Empfohlen sind 100 bis 500, stelle 0 ein, um die Funktion zu deaktivieren</em>.',
	'MCHAT_CUSTOM_PAGE'						=> 'Eigenständige Seite',
	'MCHAT_CUSTOM_PAGE_EXPLAIN'				=> 'Erlaubt die Benutzung des Chats auf einer eigenständigen Seite.',
	'MCHAT_CUSTOM_HEIGHT'					=> 'Höhe der eigenen mChat Seite',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'			=> 'Die Höhe der Chat-Box in Pixeln auf der eigenen mChat Seite.<br /><em>Du kannst nur von 50 bis 1000 Pixel einstellen</em>.',
	'MCHAT_DATE_FORMAT'						=> 'Datums-Format',
	'MCHAT_DATE_FORMAT_EXPLAIN'				=> 'Die Syntax entspricht der der date()-Funktion von PHP <a href="http://www.php.net/date">date()</a>',
	'MCHAT_CUSTOM_DATEFORMAT'				=> 'Eigenes…',
	'MCHAT_BBCODES_DISALLOWED'				=> 'Nicht erlaubte BBcodes',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'		=> 'Hier kann man BBCodes eintragen, die <strong>nicht</strong> in einer Nachricht verwendet werden dürfen.<br />Trenne BBCodes mit einem senkrechten Strich (pipe), zum Beispiel: <br />b|i|u|code|list|list=|flash|quote und/oder einem %1$scustom bbcode tag name%2$s',
	'MCHAT_STATIC_MESSAGE'					=> 'Permanente Nachricht in der Chatbox',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'			=> 'Hier kannst du eine permanente Nachricht für die Benutzer des mChats eingeben. HTML-Code ist erlaubt.<br />Wenn das Feld leer bleibt wird keine Nachricht angezeigt. <em>Die Nachricht kann maximal 255 Zeichen beinhalten.</em><br />Diese Nachricht kann auch übersetzt werden: bearbeite dafür die Sprachvariable MCHAT_STATIC_MESSAGE in der Datei /ext/dmzx/mchat/language/XX/common.php.',
	'MCHAT_USER_TIMEOUT'					=> 'Zeitüberschreitung für Benutzer',
	'MCHAT_USER_TIMEOUT_EXPLAIN'			=> 'Stelle einen Wert für die Zeitüberschreitung in Sekunden ein, nach der die Sitzung für einen Benutzer im mChat endet. Setze hier 0 für kein Timeout.<br /><em>Diese Einstellung ist eingeschränkt durch die Einstellungen in deiner %1$sForenkonfiguration für Sitzungen%2$s, welche derzeit auf %3$d Sekunden eingestellt ist.</em>',	
	'MCHAT_OVERRIDE_SMILIE_LIMIT'			=> 'Smilielimit überschreiben?',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'	=> 'Falls JA eingestellt ist, wird das eingestellte Limit im Forum für Smilies im mChat aufgehoben.',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'			=> 'Minimale Anzahl von Zeichen aufheben?',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'	=> 'Falls ja eingestellt ist, wird das Limit für die minimale Anzahl an Zeichen für mChat-Nachrichten aufgehoben.',
	'MCHAT_NEW_POSTS_TOPIC'					=> 'Zeige neue Themen an',
	'MCHAT_NEW_POSTS_TOPIC_EXPLAIN'			=> 'Stelle auf Ja, damit neue Themen und Beiträge aus dem Forum im Chat Nachrichtenbereich angezeigt werden.',
	'MCHAT_NEW_POSTS_REPLY'					=> 'Zeige neue Antworten in Beiträgen an',
	'MCHAT_NEW_POSTS_REPLY_EXPLAIN'			=> 'Stelle auf Ja, damit beantwortete Beiträge aus dem Forum im Chat Nachrichtenbereich angezeigt werden.',
	'MCHAT_NEW_POSTS_EDIT'					=> 'Zeige editierte Beiträge an',
	'MCHAT_NEW_POSTS_EDIT_EXPLAIN'			=> 'Stelle auf Ja, damit bearbeitete Beiträge aus dem Forum	im Chat Nachrichtenbereich angezeigt werden.',
	'MCHAT_NEW_POSTS_QUOTE'					=> 'Zeige zitierte Beiträge an',
	'MCHAT_NEW_POSTS_QUOTE_EXPLAIN'			=> 'Stelle auf Ja, damit die zitierten Beiträge aus dem Forum im Chat Nachrichtenbereich angezeigt werden.',

	'MCHAT_WHOIS'							=> 'Zeige <em>Wer chattet</em> unterhalb des Chats an',
	'MCHAT_STATS_INDEX'						=> 'Zeige <em>Wer chattet</em> im Statistikbereich an',
	'MCHAT_STATS_INDEX_EXPLAIN'				=> 'Zeigt unterhalb von <em>Wer ist online</em> auf dem Index an, wer chattet',
	'MCHAT_WHOIS_REFRESH'					=> 'Aktualisierungsintervall für <em>Wer chattet</em>',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'			=> 'Die Anzahl Sekunden, bis die Wer-chattet-Anzeige aktualisiert wird.<br /><em>Einstellbar von 30 bis 300 Sekunden</em>.',
	'MCHAT_MESSAGE_TOP'						=> 'Nachricht unten / oben',
	'MCHAT_MESSAGE_TOP_EXPLAIN'				=> 'Hier kannst Du einstellen, ob der Nachrichtenbereich oben oder unten angezeigt werden soll.',
	'MCHAT_BOTTOM'							=> 'Unten',
	'MCHAT_TOP'								=> 'Oben',
	'MCHAT_PAUSE_ON_INPUT'					=> 'Den Chat während einer Nachrichteneingabe nicht aktualisieren',
	'MCHAT_PAUSE_ON_INPUT_EXPLAIN'			=> 'Falls JA eingestellt ist, ist das automatische Aktualisieren während der Eingabe einer Nachricht deaktiviert.',
	'MCHAT_PURGE'							=> 'Lösche jetzt alle Nachrichten',
	'MCHAT_PURGE_CONFIRM'					=> 'Bestätige dass du alle Nachrichten löschen möchtest',
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

	// User perms
	'ACL_U_MCHAT_USE'			=> 'Kann mChat benutzen',
	'ACL_U_MCHAT_VIEW'			=> 'Kann mChat sehen',
	'ACL_U_MCHAT_EDIT'			=> 'Kann im mChat Nachrichten bearbeiten',
	'ACL_U_MCHAT_DELETE'		=> 'Kann im mChat Nachrichten löschen',
	'ACL_U_MCHAT_IP'			=> 'Kann im mChat IP sehen',
	'ACL_U_MCHAT_PM'			=> 'Kann Private Nachricht im mChat verwenden',
	'ACL_U_MCHAT_LIKE'			=> 'Kann "gefällt mir" für Nachrichten im mChat verwenden',
	'ACL_U_MCHAT_QUOTE'			=> 'Kann mChat-Nachrichten zitieren',
	'ACL_U_MCHAT_FLOOD_IGNORE'	=> 'Kann das mChat Floodintervall ignorieren',
	'ACL_U_MCHAT_ARCHIVE'		=> 'Kann das mChat-Archiv sehen',
	'ACL_U_MCHAT_BBCODE'		=> 'Kann BBCode im mChat verwenden',
	'ACL_U_MCHAT_SMILIES'		=> 'Kann Smilies im mChat verwenden',
	'ACL_U_MCHAT_URLS'			=> 'Kann URLs im mChat posten',

	// Admin perms
	'ACL_A_MCHAT'				=> 'Kann mChat Einstellung verwalten',

));
