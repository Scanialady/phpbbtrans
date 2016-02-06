<?php
/**
*
* Reputation System [German]
*
* @version $Id$
* @copyright (c) 2014 Lukasz Kaczynski
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
	'ACP_REPUTATION_SETTINGS_EXPLAIN'	=> 'Auf dieser Seite kannst du die Einstellungen des Bewertungssystems konfigurieren. Sie sind in Gruppen aufgeteilt.',
	'ACP_REPUTATION_RATE_EXPLAIN'		=> 'Hier kannst du zusätzliche Bewertungspunkte für alle Benutzer verleihen.',

	'RS_ENABLE'						=> 'Aktiviere Reputation System',

	'RS_SYNC'						=> 'Synchronisiere Reputation System',
	'RS_SYNC_EXPLAIN'				=> 'Du kannst die Bewertungspunkte synchronisieren nach einer Massenlöschung von Beiträgen/Themen/Benutzern, geänderten Einstellungen des Bewertungssystems, Änderungen an Beitragsautoren, Konvertierung von anderen Systemen, usw. Das kann eine Weile dauern. Du wirst benachrichtigt, wenn der Prozess beendet ist.<br /><strong>Warnung!</strong> Alle Bewertungspunkte, die nicht zu den Bewertungseinstellungen passen, werden während der Synchronisierung gelöscht. Diese Aktion kann man nicht rückgängig machen. Es wird empfohlen, vorher ein Backup der Bewertungstabelle (Datenbank) zu erstellen.',
	'RS_SYNC_REPUTATION_CONFIRM'	=> 'Bist du sicher, dass du die Bewertungen synchronisieren möchtest?',

	'RS_TRUNCATE'				=> 'Leere Reputation System',
	'RS_TRUNCATE_EXPLAIN'		=> 'Diese Aktion entfernt komplett alle Daten der Bewertungen.<br /><strong>Diese Aktion kann nicht rückgängig gemacht werden!</strong>',
	'RS_TRUNCATE_CONFIRM'		=> 'Bist du sicher, dass du das Bewertungssystem leeren möchtest?',
	'RS_TRUNCATE_DONE'			=> 'Bewertungen wurden gelöscht.',

	'REPUTATION_SETTINGS_CHANGED'	=> '<strong>Reputation System Einstellungen geändert</strong>',

	// Setting legend
	'ACP_RS_MAIN'			=> 'Allgemein',
	'ACP_RS_DISPLAY'		=> 'Einstellungen anzeigen',
	'ACP_RS_POSTS_RATING'	=> 'Bewertung senden',
	'ACP_RS_USERS_RATING'	=> 'Benutzerbewertung',
	'ACP_RS_COMMENT'		=> 'Kommentare',
	'ACP_RS_POWER'			=> 'Reputationsenergie',
	'ACP_RS_TOPLIST'		=> 'Topliste',

	// General
	'RS_NEGATIVE_POINT'				=> 'Erlaube negative Punkte',
	'RS_NEGATIVE_POINT_EXPLAIN'		=> 'Wenn das deaktiviert ist, können Benutzer keine Negativpunkte geben.',
	'RS_MIN_REP_NEGATIVE'			=> 'Minimum Bewertungspunkte für negative Abstimmung',
	'RS_MIN_REP_NEGATIVE_EXPLAIN'	=> 'Wie viel eigene Bewertungspunkte sind erforderlich, um negative Punkte zu vergeben? Setze die Einstellung auf 0, um diese Funktion zu deaktivieren.',
	'RS_WARNING'					=> 'Warnungen einschalten',
	'RS_WARNING_EXPLAIN'			=> 'Benutzer mit entsprechenden Berechtigungen können negative Punkte geben, wenn sie Benutzer verwarnen.',
	'RS_WARNING_MAX_POWER'			=> 'Maximale Reputationsenergie für Warnungen',
	'RS_WARNING_MAX_POWER_EXPLAIN'	=> 'Die maximal erlaubte Menge an Reputationsenergie, die für Warnungen erlaubt ist.',
	'RS_MIN_POINT'					=> 'Minimum Punkte',
	'RS_MIN_POINT_EXPLAIN'			=> 'Beschränkt die minimalen Bewertungspunkte, die ein Benutzer erhalten kann. Setze den Wert auf 0, um dieses Verhalten abzuschalten.',
	'RS_MAX_POINT'					=> 'Maximum Punkte',
	'RS_MAX_POINT_EXPLAIN'			=> 'Beschränkt die maximalen Bewertungspunkte, die ein Benutzer erhalten kann. Setze den Wert auf 0, um dieses Verhalten abzuschalten.',
	'RS_PREVENT_OVERRATING'			=> 'Überbewertung vermeiden',
	'RS_PREVENT_OVERRATING_EXPLAIN'	=> 'Blocke die Möglichkeit, immer den selben Benutzer zu bewerten.<br /><em>Beispiel:</em> wenn ein Benutzer mehr als 10 Bewertungseinträge hat, und 85% davon kommen von Benutzer B, kann Benutzer B dieses Mitglied nicht mehr bewerten,  bis sein Stimmenverhältnis höher ist als 85%.<br />Um dieses Verhalten abzuschalten, setze einen der beiden Werte auf 0.',
	'RS_PREVENT_NUM'				=> 'Die gesamten Bewertungseinträge von Benutzer A sind gleich oder höher als',
	'RS_PREVENT_PERC'				=> '<br />und das Stimmverhältnis von Benutzer B ist gleich oder höher als',
	'RS_PER_PAGE'					=> 'Bewertungen je Seite',
	'RS_PER_PAGE_EXPLAIN'					=> 'Wie viele Zeilen sollen wir in den Bewertungpunktestabellen anzeigen?',
	'RS_DISPLAY_AVATAR'						=> 'Zeige Avatare',
	'RS_POINT_TYPE'							=> 'Anzeigemethode  für Punkte',
	'RS_POINT_TYPE_EXPLAIN'					=> 'Die Bewertungspunktanzeige kann entweder als exakter Wert, den ein Benutzer gab, dargestellt werden, oder als ein Bild, welches ein Plus oder Minus für positive oder negative Punkte zeigt. Die Methode mit Bild ist nützlich, wenn du die Bewertungspunkte so einstellst, dass eine Abstimmung immer einem Punkt entspricht.',
	'RS_POINT_VALUE'						=> 'Wert',
	'RS_POINT_IMG'							=> 'Bild',

	// Post rating
	'RS_POST_RATING'				=> 'Aktiviere Beitragsbewertung',
	'RS_POST_RATING_EXPLAIN'		=> 'Erlaube Benutzern, die Beiträge anderer Benutzer zu bewerten.<br />Du kannst auf der Verwaltungsseite jedes Forums die Bewertung einschalten oder ausschalten.',
	'RS_ALLOW_REPUTATION_BUTTON'	=> 'Bestätige hier, und aktiviere das Bewertungssystem in allen Foren',
	'RS_ANTISPAM'					=> 'Anti-Spam',
	'RS_ANTISPAM_EXPLAIN'			=> 'Sperre Benutzern die Möglichkeit, noch irgendeinen Beitrag zu bewerten, nachdem sie die definierte Anzahl an Beiträgen in der eingestellten Anzahl von Stunden vergeben haben. Um diese Funktion zu deaktivieren, setze die Werte auf 0.',
	'RS_POSTS'						=> 'Anzahl bewerteter Beiträge',
	'RS_HOURS'						=> 'in den letzten Stunden',
	'RS_ANTISPAM_METHOD'			=> 'Anti-Spam Prüfmethode',
	'RS_ANTISPAM_METHOD_EXPLAIN'	=> 'Methode für die Prüfung von Anti-Spam. “Der selbe Benutzer” prüft Bewertungen, die dem selben Benutzer gegeben wurden. “Alle Benutzer” prüft Bewertungen, gleichgültig wer die Punkte bekommen hat.',
	'RS_SAME_USER'					=> 'Der selbe Benutzer',
	'RS_ALL_USERS'					=> 'Alle Benutzer',

	// User rating
	'RS_USER_RATING'				=> 'Erlaube Benutzerbewertung über ihre Profilseite',
	'RS_USER_RATING_GAP'			=> 'Abstimmungspause',
	'RS_USER_RATING_GAP_EXPLAIN'	=> 'Zeitperiode, die ein Benutzer abwarten muss, ehe er einem Benutzer eine neue Bewertung geben kann, den er bereits bewertet hat. Setze den Wert auf 0, um dieses Verhalten zu deaktivieren, dann können Benutzer jeden Benutzer genau einmal bewerten.',

	// Comments
	'RS_ENABLE_COMMENT'				=> 'Aktiviere Kommentare',
	'RS_ENABLE_COMMENT_EXPLAIN'		=> 'Wenn das aktiviert ist, können Benutzer einen persönlichen Kommentar zu ihrer Abstimmung hinzufügen.',
	'RS_FORCE_COMMENT'				=> 'Zwinge Benutzer, einen Kommentar einzugeben',
	'RS_FORCE_COMMENT_EXPLAIN'		=> 'Benutzer müssen einen Kommentar eingeben, wenn sie abstimmen wollen.',
	'RS_COMMENT_NO'					=> 'Nein',
	'RS_COMMENT_BOTH'				=> 'Beide, Benutzer- und Beitragsbewertung',
	'RS_COMMENT_POST'				=> 'Nur Beitragsbewertungen',
	'RS_COMMENT_USER'				=> 'Nur Benutzerbewertungen',
	'RS_COMMEN_LENGTH'				=> 'Kommentarlänge',
	'RS_COMMEN_LENGTH_EXPLAIN'		=> 'Die Anzahl an Zeichen, die für einen Kommentar erlaubt sind. Setze auf 0, um keine Begrenzung einzustellen.',

	// Reputation power
	'RS_ENABLE_POWER'				=> 'Aktiviere Bewertungsenergie',
	'RS_ENABLE_POWER_EXPLAIN'		=> 'Bewertungsenergie ist etwas, das Benutzer verdienen und ausgeben bei Bewertungen. Neue Benutzer haben wenig Energie, aktive und langfristigere Benutzer erreichen mehr Energie. Je mehr Energie du hast, umso mehr kannst du während einer festgelegten Zeitperiode abstimmen, und um so mehr Einfluss kannst du haben auf die Ränge anderer Benutzer oder von Beiträgen. <br/>Benutzer können bei einer Abstimmung wählen, wie viel Bewertungsenergie sie für eine Bewertung ausgeben wollen, und interessantere Beiträge höher bewerten, als andere.',
	'RS_POWER_RENEWAL'				=> 'Zeit für Energie-Erneuerung',
	'RS_POWER_RENEWAL_EXPLAIN'		=> 'Das steuert, wie Benutzer ihre verdiente Bewertungsenergie ausgeben können.<br/>Wenn du diese Option setzt, müssen Benutzer die eingestellte Zeit abwarten, ehe sie erneut abstimmen können. Je mehr Bewertungsenergie ein Benutzer hat, umso mehr Punkte kann er während der gesetzten Zeit ausgeben.<br/>Um dieses Verhalten zu deaktivieren, setze den Wert auf 0, und Benutzer können ohne Wartezeit abstimmen.',
	'RS_MIN_POWER'					=> 'Minimum Bewertungsenergie beim Start',
	'RS_MIN_POWER_EXPLAIN'			=> 'Hier kannst du einstellen, wie viel Bewertungsenergie neu registrierte Benutzer, gesperrte Benutzer, und Benutzer mit wenig Ansehen oder anderen Auswahlkriterien mindestens haben. Benutzer können nicht unter diese minimale Bewertungsenergie fallen.<br/>Erlaubt: 0-10. Empfohlen: 1.',
	'RS_MAX_POWER'					=> 'Maximale Bewertungsenergie pro Abstimmung',
	'RS_MAX_POWER_EXPLAIN'			=> 'Die maximale Menge an Energie, die ein Benutzer pro Abstimmung ausgeben kann. Selbst wenn ein Benutzer Millionen von Punkten hat, werden sie immer noch von dieser Höchstzahl bei der Abstimmung beschränkt werden.<br/>Benutzer können dies bei der Abstimmung aus einem Dropdown-Menü wählen: 1 bis X<br/>Erlaubt: 1-20. Empfohlen: 3.',
	'RS_POWER_EXPLAIN'				=> 'Erklärung Bewertungsenergie',
	'RS_POWER_EXPLAIN_EXPLAIN'		=> 'Erkläung, wie die Bewertungsenergie für Benutzer berechnet wird.',
	'RS_TOTAL_POSTS'				=> 'Energie erhalten durch Anzahl der Beiträge',
	'RS_TOTAL_POSTS_EXPLAIN'		=> 'Der Benutzer wird jede X Anzahl von Beiträgen 1 Bewertungsenergiepunkt erhalten, so wie es hier eingestellt ist.',
	'RS_MEMBERSHIP_DAYS'			=> 'Energie erhalten nach Dauer der Mitgliedschaft des Benutzers',
	'RS_MEMBERSHIP_DAYS_EXPLAIN'	=> 'Der Benutzer wird jede X Anzahl an Tagen seiner Mitgliedschaft 1 Bewertungsenergiepunkt erhalten, so wie es hier eingestellt ist.',
	'RS_POWER_REP_POINT'			=> 'Energie erhalten durch Ansehen des Benutzers',
	'RS_POWER_REP_POINT_EXPLAIN'	=> 'Der Benutzer wird jede X Anzahl von verdienten Bewertungspunkten 1 Bewertungsenergiepunkt erhalten, so wie es hier eingestellt ist.',
	'RS_LOSE_POWER_WARN'			=> 'Verliere Energie durch Verwarnungen',
	'RS_LOSE_POWER_WARN_EXPLAIN'	=> 'Jede Verwarnung vermindert die Bewertungsenergie in dieser eingestellten Menge an Punkten. Verwarnungen laufen ab im Einklang mit den Einstellungen unter Allgemein -> Board Konfiguration -> Board Einstellungen',

	// Toplist
	'RS_ENABLE_TOPLIST'				=> 'Aktiviere Topliste',
	'RS_ENABLE_TOPLIST_EXPLAIN' 	=> 'Zeigt eine Liste von Benutzern mit den meisten Bewertungspunkten auf der Startseite an.',
	'RS_TOPLIST_DIRECTION'			=> 'Richtung der Liste',
	'RS_TOPLIST_DIRECTION_EXPLAIN'	=> 'Zeige die Benutzer in einer horizontalen oder vertikalen Liste an.',
	'RS_TL_HORIZONTAL'				=> 'Horizontal',
	'RS_TL_VERTICAL'				=> 'Vertikal',
	'RS_TOPLIST_NUM'				=> 'Anzahl der anzuzeigenden Benutzer',
	'RS_TOPLIST_NUM_EXPLAIN'		=> 'Anzahl der Benutzer, die in der Topliste angezeigt werden sollen.',

	// Rate module
	'POINTS_INVALID'	=> 'Das Punktefeld darf nur Zahlen enthalten.',
	'RS_VOTE_SAVED'		=> 'Deine Abstimmung wurde erfolgreich gespeichert',
));
