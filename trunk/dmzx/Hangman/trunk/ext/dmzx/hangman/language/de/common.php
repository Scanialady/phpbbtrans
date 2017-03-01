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
// in a url you again do not need to specify an order e.g., 'Klicke %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
//  ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'HANGMAN_NO_HANGMANWORDS'		=> 'Keine Hangman-Worte',
	'HANGMAN_TOP'					=> 'TOP - ',
	'HANGMAN_RETURN_BACK_OVERVIEW'	=> 'Klicke %shier%s, um zurück zur Übersichtsseite zu kommen',
	'DELETE_MARKED_HANGMEN_SUCCESS' => '%d Hangman(s) wurden erfolgreich gelöscht',
	'DELETE_MARKED_HANGMEN'			=> 'Bist du sicher, daß du alle markierten Hangmans löschen willst?',
	'HANGMAN_NO_HIGHSCORES'			=> 'Keine Hangman-Highscores',
	'HANGMAN_DELETE'				=> 'Hangman löschen',
	'CLOSE_WINDOW'					=> 'Fenster schließen',
	'HANGMAN_WINDOW_MODE'			=> 'Klicke hier, um im Fenster zu spielen',
	'HANGMAN_BOARD_DISABLE'			=> 'Sorry, Board Hangman is disabled, please, try later.',
	'HANGMAN_VIEW_ONLINE'			=> 'Spielt Hangman',
	'HANGMAN_TITLE'					=> 'Hangman',
	'HANGMAN_OVERALL_HEADLINE'		=> 'Hangman Version',
	'HANGMAN_DOT'					=> '&#8226;',
	'HANGMAN'						=> 'Hangman',
	'STATUS_GREEN'					=> 'Noch nicht erraten!',
	'STATUS_TIME'					=> '%s Zeit abgelaufen!!',
	'STATUS_WON'					=> '%s erraten von: %s',
	'STATUS_UNLIMITED'				=> 'Unbegrenzt!',
	// NAVIGATION
	'HIGHSCORE_PAGE' 				=> 'Highscore',
	'PREV_PAGE' 					=> 'Vorherige Seite',
	'HELP_PAGE' 					=> 'Hilfe',
	'NEXT_PAGE' 					=> 'Nächste Seite',
	'CREATION_PAGE'					=> 'Ein Hangman erstellen',
	'OVERVIEW_PAGE'					=> 'Übersicht',
	'CREATION_DONE_PAGE' 			=> 'Hangman erstellt',
	'TOTAL_HANGMAN_PLAYERS'	=> array(
		1 => '%d Spieler',
		2 => '%d Spieler',
	),
	'TOTAL_HANGMANS'	=> array(
		1 => '%d Hangman',
		2 => '%d Hangmans',
	),
	// OVERVIEW
	'HANGMAN_CREATOR' 				=> 'Ersteller',
	'HANGMAN_DATE' 					=> 'Erstelldatum',
	'HANGMAN_LEASE_DATE'			=> 'Verbleibende Tage',
	'HANGMAN_SUBJECT'				=> 'Titel',
	'HANGMAN_MAX_TRIES'				=> 'Versuche',
	'HANGMAN_STATUS'				=> 'Status',
	'HANGMAN_QUESS_TABLE'			=> 'Hangman-Ratetabelle',
	// FILTER
	'FILTER_HEADLINE'				=> 'Filter:&nbsp;',
	'FILTER_UNQUESSED'				=> 'Nicht erratene',
	'FILTER_WON'					=> 'Gewonnen',
	'FILTER_TIME_UP'				=> 'Abgelaufen',
	'FILTER_SUBMIT'					=> 'Go',
	'FILTER_OWN'					=> 'Eigene',
	'FILTER_OTHERS'					=> 'Von anderen',
	'FILTER_NOFILTER'				=> 'Kein Filter',
	// STATS
	'HANGMANSTATS_ONLINE'			=> 'Ungelöste Hangmans: %s',
	'HANGMANSTATS_TODAY'			=> 'Heute erstellte Hangmans: %s',
	'HANGMANSTATS_WON'				=> 'Gelöste Hangmans: %s',
	'HANGMANSTATS_BEST'				=> 'Bester Spieler: %s',
	'HANGMANSTATS_TOTAL'			=> 'Hangmans gesamt: %s',
	//NEW(done)
	'NEW_TITLE'						=> 'Neues Hangman erstellen',
	'NEW_SUCESS'					=> 'Hangman erfolgreich erstellt',
	'ERROR_HANGMAN_WORD' 			=> 'Kann kein Hangman ohne ein Wort erstellen!',
	'ERROR_HANGMAN_SUBJECT'			=> 'Kann kein Hangman ohne Titel erstellen!',
	'ERROR_HANGMAN_HELP'			=> 'Kann kein Hangman ohne Lösungshilfe erstellen!',
	'ERROR_HANGMAN_TRIES'			=> 'Ungültige Option bei Versuchen angegeben!',
	'ERROR_HANGMAN_LEASE'			=> 'Ungültige Option bei verbleibenden Tagen angegeben!',
	'ERROR_HANGMAN_TOLONG'			=> 'Deine Eingabe war zu lang!',
	'ERROR_HANGMAN_FORBIDDEN_LETTERS'	=> 'Bitte verwende nur (%s) für deine Hangmans!<br />Folgende(s) Zeichen war(en) ungültig: %s',
	'ERROR_IS_SHORT'				=> 'Das Wort ist zu kurz, es muss mindestens %d Buchstaben enthalten!',
	'TRY_AGAIN'						=> 'Zurück',
	'ERROR_TO_MUCH'					=> 'Du hast zu viele Hangmans erstellt. Versuche es später wieder!',
	// CREATE
	'CREATE_SUBJECT'				=> 'Hangman-Titel',
	'CREATE_HELP'					=> 'Hangman-Lösungshilfe',
	'CREATE_HELP_HELP'				=> 'Verwende mindestens %s Buchstaben!',
	'CREATE_TRIES'					=> 'Hangman-Lösungsversuche',
	'CREATE_DAYS'					=> 'Verbleibende Tage',
	'CREATE_NEW'					=> 'Hangman erstellen',
	'CREATE_DAY_HELP'				=> '0 bedeutet unbegrenzt',
	'CREATE_HANGMAN'				=> 'Hangman-Wort',
	'CREATE_HELP_HANGMAN'			=> '(mindestens %s Buchstaben, maximal %s Buchstaben)',
	'CREATE_HELP_HANGMAN_UNLIMITED'	=> '(mindestens %1$s Buchstaben, aber in der Länge unbegrenzt)',
	'CREATE_YES'					=> 'Erstellen',
	'CREATE_NO'						=> 'Abbruch',
	'CREATE_RULES_HEADER'			=> 'Regeln zum Erstellen eines Hangmans',
	'CREATE_RULES_TEXT'				=> '<br />* Gib einen sinnvollen Titel ein (z. B.: Geografie, Pop Star)<br />
		* Gib ein geläufiges Wort ein<br />
		* Beachte die korrekte Rechtschreibung<br />
		* Gib einen kleinen Hilfetext an (z.B. Hauptstadt in Europa)<br /><br />',
	// QUESS
	'HANGMAN_NO_PLAY_PERMISSION'	=> 'Entschuldige, du hast nicht die erforderlichen Rechte, um Hangman zu spielen.',
	'HANGMAN_QUESS'					=> 'Hangman erraten',
	'QUESS_LETTERS'					=> 'Buchstaben:',
	'QUESS_WON_OTHER_WIN'			=> '<strong>Das Spiel wurde bereits erraten von %s!</strong>',
	'QUESS_WON_SELF_WIN'			=> '<strong>Herzlichen Glückwunsch, du hast dieses Spiel gewonnen!</strong>',
	'QUESS_LOST_WIN'				=> '<strong>Schade, du hast dieses Spiel leider verloren …</strong>',
	'QUESS_WON_OTHER'				=> 'Das Spiel wurde bereits erraten von %s<br /><br />Klicke %shier%s, um zur vorherigen Seite zurückzukehren',
	'QUESS_WON_SELF'				=> 'Herzlichen Glückwunsch, du hast dieses Spiel gewonnen!<br /><br />Klicke %shier%s, um zur vorherigen Seite zurückzukehren',
	'QUESS_LOST'					=> 'Schade, du hast dieses Spiel leider verloren.<br /><br />Klicke %shier%s, um zur vorherigen Seite zurückzukehren',
	'QUESS_WORD'					=> 'Das zu erratende Wort',
	'HOURS'							=> 'Stunde(n)',
	'MINUTES'						=> 'Minute(n)',
	'SECONDS'						=> 'Sekunde(n)',
	'QUESS_LOST_RETRY'				=> 'Du hast das Spiel leider verloren, in %d %s kannst du es noch einmal versuchen!',
	'QUESS_LOST_RETRY_OVERVIEW' 	=> 'Du kannst erneut spielen in %d %s!',
	'HANGMAN_SELF'					=> 'Du hast dieses Spiel selbst erstellt yourself!',
	'QUESS_TIME_UP'					=> 'Die Zeit für dieses Hangman ist bereits abgelaufen!',
	'QUESS_REMAINING_TRIES'			=> 'Du hast noch %s Versuche.',
	'QUESS_QUESSORS'				=> 'Folgende Benutzer haben es schon versucht:&nbsp;&nbsp;',
	'QUESS_NOBODY'					=> 'Bis jetzt versuchte niemand, dieses Hangman zu erraten!',
	'TRY_A_WORD'					=> 'Ein Wort versuchen',
	'TRY'							=> 'Versuchen',
	// HIGHSCORE
	'HIGHSCORE_USER'				=> 'Benutzername',
	'HIGHSCORE_WON'					=> 'Gewonnene Spiele',
	'HIGHSCORE_LOST'				=> 'Verlorene Spiele',
	'HIGHSCORE_CREATED'				=> 'Erstellt',
	'HIGHSCORE_POINTS'				=> 'Punkte',
	'HIGHSCORE_R_LETTERS'			=> 'Richtige Buchstaben',
	'HIGHSCORE_W_LETTERS'			=> 'Falsche Buchstben',
	'HIGHSCORE_ASC'					=> 'Aufsteigend',
	'HIGHSCORE_DESC'				=> 'Absteigend',
	'HIGHSCORE_FILTER_WON'			=> 'Highscore filtern nach gewonnenen',
	'HIGHSCORE_FILTER_LOST'			=> 'Highscore filtern nach verlorenen',
	'HIGHSCORE_FILTER_SCORE'		=> 'Highscore filtern nach Ergebnis',
	'HIGHSCORE_FILTER_CREATED'		=> 'Highscore filtern nach erstellten',
	'HIGHSCORE_FILTER_R_LETTERS'	=> 'Highscore filtern nach richtigen Buchstaben',
	'HIGHSCORE_FILTER_W_LETTERS'	=> 'Highscore filtern nach falschen Buchstaben',
	'ORDER_BY_WON'					=> 'gewonnen',
	'ORDER_BY_LOST'					=> 'verloren',
	'ORDER_BY_CREATED'				=> 'erstellt',
	'ORDER_BY_POINTS'				=> 'Punkte',
	'ORDER_BY'						=> 'Sortiere nach',
	'ORDER_BY_R_LETTERS'			=> 'richtige Buchstaben',
	'ORDER_BY_W_LETTERS'			=> 'falsche Buchstaben',
	// HELP
	'ADD_POINTS_PAGE'				=> 'Zusatzpunkte',
	'HELP_ADD_POINTS'				=> 'Wenn der Admin es aktiviert hat, kannst du bei der Erstellung von Hangmans zusätzliche Punkte erhalten. Jedes Mal, wenn dein Hangman nicht erraten wurde, erhältst du %1$s Punkt(e) zusätzlich.',
	'HELP_TITLE'					=> 'Hilfe zu Hangman',
	'HELP_OVERVIEW'					=> 'Dies ist die Hauptseite für die Navigation. Hier kannst du die erstellten Hangmans ansehen, ihren Status und alles weitere. <br />
		Wenn du ein Hangman spielen möchtest, klicke einfach auf seinen Titel. Beachte, dass du keine Spiele spielen kannst, die du selbst erstellt hast, die abgelaufen sind, oder die du bereits verloren hast.',
	'HELP_CREATION'					=> 'Dies ist die Hauptseite für die Erstellung, bitte beachte, dass <strong> alle </strong> Felder ausgefüllt werden müssen!<br />
		Der Titel wird der Link zum Hangman sein, und er kann schon eine kleine Ratehilfe für die Spieler enthalten. Mehr Hilfe gibst du über die „Hangman-Lösungshilfe“, BBcode und Smilies deines Boards sind hier aktiviert!<br />
		„Hangman-Wort“ ist das Wort, welches die anderen zu erraten haben, und „Verbleibende Tage“ bedeutet eine Zeitbegrenzung für alle Spieler, um das Wort zu finden.<br />
		Zuletzt ist da noch „Versuche“ -> das bedeutet, welche maximale Anzahl falscher Buchstaben ein Benutzer raten kann, ehe er verliert.<br />',
	'HELP_HIGHSCORE'				=> 'Dies ist die Seite wo du sehen kannst, wer die besten Spieler sind - sortiert nach deinem Wunsch, siehe die Links unten links.<br />',
	'HELP_POINTS'					=> 'Die Admins haben das Spiel so eingestellt, dass du <strong>%5$s</strong> von deinem %5$s Konto verlieren/gewinnen kannst: <br />
		<strong>Loose a Hangman</strong> -> du verlierst <strong>[ %1$s ]</strong> %5$s<br />
		<strong>Win a Hangman</strong> -> du erhältst <strong>[ %2$s]</strong> %5$s<br />
		<strong>Guess character</strong> -> du erhältst <strong>[ %3$s ]</strong> %5$s<br />
		<strong>Create a Hangman</strong> -> du erhältst <strong>[ %4$s ]</strong> %5$s.<br />',
	'HELP_HIGHSCORE_SYSTEM'			=> 'Das interne Punktesystem von Hangman ist wie folgt eingestellt:<br />
		<strong>Ein Hangman verlieren</strong> -> du verlierst <strong>[ %4$s ]</strong> Punkte<br />
		<strong>Ein Hangman gewinnen</strong> -> du erhältst <strong>[ %2$s ]</strong> Punkte<br />
		<strong>Ein Zeichen erraten</strong> -> du erhältst <strong>[ %3$s ]</strong> Punkte<br />
		<strong>Ein Hangman erstellt</strong> -> du erhältst <strong>[ %1$s ]</strong> Punkte<br /><br />',
	'UPS_HIGHSCORE_PAGE'			=> 'Ultimate Points System',
	// ERRORS
	'ERROR_UPDATE_SCORE'			=> 'Fehler beim Aktualisieren des Ergebnisses!',
	'ERROR_DELETE_HANGMAN'			=> 'Fehler beim Löschen!',
	'ERROR_GET_HANGMAN'				=> 'Fehler beim Auslesen der Hangman-Daten!',
	'ERROR_GET_WINNER'				=> 'Fehler beim Auslesen des Gewinners!',
	'ERROR_SET_HANGMAN'				=> 'Fehler beim Setzen der Hangman-Daten!',
	'ERROR_GET_HIGHSCORE'			=> 'Fehler beim Auslesen des Highscores!',
	'ERROR_ADMINISTRATION'			=> 'Fehler bei der Administration!',
	'ERROR_GET_CONFIG'				=> 'Fehler beim Einlesen der Konfiguration!',
	'ERROR_SET_CONFIG'				=> 'Fehler beim Setzen der neuen Konfiguration!',
	'ERROR_ONLY_ADMIN_CREATE'		=> 'Entschuldige, du hast keine ausreichenden Rechte, um eine Hangman zu erstellen',
	'ERROR_GET_USERNAME'			=> 'Konnte den Benutzernamen nicht ermitteln!',
	'ACP_RESET'						=> 'Abbruch',
	'ACP_MULTIDELETE_GO'			=> 'Lösche markierte',
));
