<?php
/**
*
* @version $Id$
* @package phpBB Extension - mChat [deutsch]
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE!
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

// Adding the permissions
$lang = array_merge($lang, array(

	'MCHAT_TITLE'				=> 'mChat',
	'MCHAT_ADD'					=> 'Senden',
	'MCHAT_ANNOUNCEMENT'		=> 'Ankündigung',
	'MCHAT_ARCHIVE'				=> 'Archiv',
	'MCHAT_ARCHIVE_PAGE'		=> 'mChat Archiv',
	'MCHAT_BBCODES'				=> 'BBCodes',
	'MCHAT_CUSTOM_BBCODES'		=> 'Eigene BBCodes',
	'MCHAT_DELCONFIRM'			=> 'Nachricht endgültig löschen?',
	'MCHAT_EDIT'				=> 'Bearbeiten',
	'MCHAT_EDITINFO'			=> 'Bearbeite die Nachricht und klick auf OK',
	'MCHAT_FLOOD'				=> 'Du kannst keine Nachricht so schnell nach deiner letzten Nachricht schreiben',
	'MCHAT_FOE'					=> 'Die Nachricht wurde von <strong>% 1 $ s </ strong> gemacht, der derzeit auf der Ignorieren-Liste steht.',
	'MCHAT_RULES'					=> 'Rules',
	'MCHAT_HOURS'					=> array(
		1 => '%1$d Stunde',
		2 => '%1$d Stunden',
	),
	'MCHAT_MINUTES'					=> array(
		1 => '%1$d Minute',
		2 => '%1$d Minuten',
	),
	'MCHAT_SECONDS'					=> array(
		1 => '%1$d Sekunde',
		2 => '%1$d Sekunden',
	),
	'MCHAT_WHOIS_USER'				=> 'IP whois für %1$s',	
	'MCHAT_MESS_LONG'			=> 'Deine Nachricht ist zu lang.\nBitte kürze deine Nachricht auf %s Zeichen',
	'MCHAT_NO_CUSTOM_PAGE'		=> 'Die separate Seite für mChat ist derzeit nicht aktiviert!',
	'MCHAT_NO_RULES'			=> 'Die Seite mit den mChat-Regeln ist derzeit nicht aktiviert!',
	'MCHAT_NOACCESS'			=> 'Du hast keine Berechtigung im mChat zu schreiben',
	'MCHAT_NOACCESS_ARCHIVE'	=> 'Du hast keine Berechtigung das Archiv zu sehen',
	'MCHAT_NOJAVASCRIPT'		=> 'Dein Browser unterstützt kein Javascript oder Javascript ist deaktiviert',
	'MCHAT_NOMESSAGE'			=> 'Keine Nachrichten',
	'MCHAT_NOMESSAGEINPUT'		=> 'Du hast keine Nachricht eingegeben',
	'MCHAT_NOSMILE'				=> 'Keine Smilies gefunden',
	'MCHAT_OK'					=> 'OK',
	'MCHAT_PAUSE'				=> 'Pausiert',
	'MCHAT_PERMISSIONS'			=> 'Ändere die Benutzerrechte',
	'MCHAT_REFRESHING'			=> 'Aktualisiere...',
	'MCHAT_REFRESH_NO'			=> 'Automatische Aktualisierung ist ausgeschaltet',
	'MCHAT_REFRESH_YES'			=> 'Automatische Aktualisierung alle <strong>%d</strong> Sekunden',
	'MCHAT_RESPOND'				=> 'Antworte dem Benutzer',
	'MCHAT_RESET_QUESTION'		=> 'Lösche den Eingabebereich?',
	'MCHAT_SESSION_OUT'			=> 'mChat Sitzung ist abgelaufen',
	
	'MCHAT_SESSION_ENDS'		=> 'Deine mChat-Sitzung endet in',
	'MCHAT_SMILES'				=> 'Smilies',
	'MCHAT_TOTALMESSAGES'		=> 'Nachrichten insgesamt: <strong>%s</strong>',
	'MCHAT_USESOUND'			=> 'Sound aktivieren',
	'MCHAT_ONLINE_USERS_TOTAL'		=> array(
		0 => 'Niemand ist im Chat',
		1 => 'Aktuell chattet <strong>%1$d</strong> Benutzer',
		2 => 'Aktuell chatten <strong>%1$d</strong> Benutzer', 
	),
	'MCHAT_ONLINE_EXPLAIN'				=> '(basierend auf den aktiven Besuchern der letzten %s)',
	'WHO_IS_CHATTING'			=> 'Wer ist im mChat',
	'WHO_IS_REFRESH_EXPLAIN'	=> 'Aktualisieren alle <strong>%d</strong> Sekunden',
	'MCHAT_NEW_POST'			=> 'Erstellte einen neuen Beitrag: %1$s in %2$s',
	'MCHAT_NEW_REPLY'			=> 'Erstellte eine neue Antwort: %1$s in %2$s',
	'MCHAT_NEW_QUOTE'			=> 'Antwortete mit einem Zitat: %1$s in %2$s',
	'MCHAT_NEW_EDIT'			=> 'Bearbeitete: %1$s in %2$s',
	
	// UCP
	'UCP_PROFILE_MCHAT'	=> 'mChat Einstellung',
	'DISPLAY_MCHAT' 	=> 'mChat auf der Indexseite anzeigen',
	'SOUND_MCHAT'		=> 'Aktiviere Sound für mChat',
	'DISPLAY_STATS_INDEX'	=> 'Zeige die "Wer ist im mChat" Statistik auf der Indexseite an',
	'DISPLAY_NEW_TOPICS'	=> 'Zeige neue Beiträge im mChat an',
	'DISPLAY_AVATARS'	=> 'Zeige Avatare im mChat an',
	'CHAT_AREA'		=> 'Chat Umgebung',
	'CHAT_AREA_EXPLAIN'	=> 'Wähle welche Art von Umgebung für die Eingabe mit einem Chat: <br /> Ein Textbereich oder <br /> einem Eingangsbereich',
	'INPUT_AREA'		=> 'Eingangsbereich',
	'TEXT_AREA'			=> 'Textbereich',
	'UCP_CAT_MCHAT'		=> 'mChat',
	'UCP_MCHAT_CONFIG'	=> 'mChat',

	//Preferences
	'LOG_MCHAT_TABLE_PRUNED'	=> 'mChat Tabelle löschen',
	'ACP_USER_MCHAT'			=> 'mChat Einstellung',
	'LOG_DELETED_MCHAT'		=> '<strong>Lösche mChat Nachricht</strong><br />» %1$en',
	'LOG_EDITED_MCHAT'		=> '<strong>Editiere mChat Nachricht</strong><br />» %1$en',
	'MCHAT_NEW_CHAT'			=> 'Neue mChat Nachricht!',	
	'MCHAT_SEND_PM'			 => 'Sende private Nachricht',
	'MCHAT_LIKE'					=> 'Mag diesen Beitrag',
	'MCHAT_LIKES'					=> 'Mögen diesen Beitrag',	


	// Custom translations for administrators
	'MCHAT_RULES_MESSAGE'			=> '',
	'MCHAT_STATIC_MESSAGE'			=> '',
));
