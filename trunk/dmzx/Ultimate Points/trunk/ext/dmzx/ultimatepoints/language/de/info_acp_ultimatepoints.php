<?php
/**
*
* @version $Id$
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2015 dmzx & posey - http://www.dmzx-web.net
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
// ‚ ‘ ’ « » „ “ ” …
//

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_POINTS'						=> 'Ultimate Points',
	'ACP_POINTS_BANK_EXPLAIN'			=> 'Hier kannst du die Einstellungen für das Bank Modul vornehmen',
	'ACP_POINTS_BANK_TITLE'				=> 'Bank Einstellungen',
	'ACP_POINTS_DEACTIVATED'			=> 'Der Ultimate Points ist derzeit deaktiviert!',
	'ACP_POINTS_FORUM_EXPLAIN'			=> 'Hier kannst du die Standartwerte für die Forenpunkte und den Schalter für Dateianhang Kosten aller Foren auf einmal einstellen.<br />Diese Einstellungen gelten dann für <strong>ALLE</strong> Foren. Bitte beachte: Wenn du zuvor einzelne Foren manuell verändert hast, werden diese Einstellungen überschrieben und du musst sie erneut vornehmen!',
	'ACP_POINTS_FORUM_TITLE'			=> 'Einstellungen Forenpunkte',
	'ACP_POINTS_INDEX_EXPLAIN'			=> 'Hier kannst du die allgemeinen Einstellungen für Ultimate Points ändern',
	'ACP_POINTS_INDEX_TITLE'			=> 'Einstellungen Punkte',
	'ACP_POINTS_LOTTERY_EXPLAIN'		=> 'Hier kannst du die Einstellungen des Lotteriemoduls ändern',
	'ACP_POINTS_LOTTERY_TITLE'			=> 'Einstellungen Lotterie',
	'ACP_POINTS_ROBBERY_EXPLAIN'		=> 'Hier kannst du die Einstellungen des Diebstahlmoduls ändern',
	'ACP_POINTS_ROBBERY_TITLE'			=> 'Einstellungen Diebstahl',
	'ACP_POINTS_VALUES_HINT'			=> '<strong>Hinweis: </strong>Zahlenwerte immer ohne Tausender-Trennzeichen eingeben und<br />Nachkommastellen mit einem Punkt, z.B. 1000.50',
	'ACP_POINTS_USERGUIDE_TITLE'		=> 'Benutzerhilfe',
	'ACP_POINTS_USERGUIDE_EXPLAIN'		=> 'Hier findest du Hilfe für die Einstellungen des Ultimate Points.<br />Wenn du Fragen hast, dann schaue bitte immer zuerst hier, ehe du in den Supportforen fragst!',
	'ACP_USER_POINTS_TITLE'				=> 'Einstellungen Ultimate Points',

	'BANK_COST'							=> 'Die Kosten für die Verwaltung eines Bankkontos',
	'BANK_COST_EXPLAIN'					=> 'Hier stellst du den Preis ein, den Benutzer für ihr Bankkonto je Periode zu bezahlen haben (setze 0 um die Funktion zu deaktivieren)',
	'BANK_ENABLE'						=> 'Aktiviere Bankmodul',
	'BANK_ENABLE_EXPLAIN'				=> 'Dies erlaubt den Benutzern, das Bankmodul zu verwenden',
	'BANK_FEES'							=> 'Auszahlungsgebühr',
	'BANK_FEES_ERROR'					=> 'Die Auszahlungsgebühr kann nicht höher als 100\% sein!',
	'BANK_FEES_EXPLAIN'					=> 'Der Betrag in Prozent (\%), den Benutzer zahlen müssen, wenn sie etwas von der Bank abheben',
	'BANK_INTEREST'						=> 'Zinssatz',
	'BANK_INTERESTCUT'					=> 'Deaktiviere Zinssatz ab',
	'BANK_INTERESTCUTP'					=> '(setze 0 um diese Funktion zu deaktivieren)',
	'BANK_INTERESTCUT_EXPLAIN'			=> 'Das ist der maximale Betrag, für den ein Benutzer Zinsen erhält. Wenn sie mehr besitzen, ist der gesetzte Betrag trotzdem das Maximum! Setze 0 um diese Funktion zu deaktivieren.',
	'BANK_INTEREST_ERROR'				=> 'Der Zinssatz kann nicht höher sein als 100\%!',
	'BANK_INTEREST_EXPLAIN'				=> 'Der Zinssatz in \%',
	'BANK_MINDEPOSIT'					=> 'Min. Einzahlung',
	'BANK_MINDEPOSIT_EXPLAIN'			=> 'Der Mindestbetrag, den ein Benutzer auf sein Bankkonto einzahlen kann',
	'BANK_MINWITHDRAW'					=> 'Min. Auszahlung',
	'BANK_MINWITHDRAW_EXPLAIN'			=> 'Der Mindestbetrag, den ein Benutzer von seinem Bankkonto auszahlen lassen kann',
	'BANK_NAME'							=> 'Name deiner Bank',
	'BANK_NAME_EXPLAIN'					=> 'Gib einen Namen für deine Bank ein, z.B. Unsere Forum Bank',
	'BANK_OPTIONS'						=> 'Einstellungen Bank',
	'BANK_PAY'							=> 'Zeitrum Zinszahlung',
	'BANK_PAY_EXPLAIN'					=> 'Die Zeitperiode zwischen den Bankzahlungen',
	'BANK_TIME'							=> 'Tage',
	'BANK_VIEW'							=> 'Aktiviere Bank',
	'BANK_VIEW_EXPLAIN'					=> 'Dies aktiviert das Bankmodul',

	'FORUM_OPTIONS'						=> 'Forumpunkte',
	'FORUM_PEREDIT'						=> 'Punkte je Beitragsbearbeitung',
	'FORUM_PEREDIT_EXPLAIN'				=> 'Hier kannst du einstellen, wieviele Punkte ein Benutzer für eine <strong>Änderung</strong> seines Beitrages erhalten soll. Setze hier 0, wenn die Benutzer keine Punkte in diesem Forum bekommen sollen.',
	'FORUM_PERPOST'						=> 'Punkte pro Beitrag',
	'FORUM_PERPOST_EXPLAIN'				=> 'Hier kannst du einstellen, wieviele Punkte ein Benutzer für das Schreiben eines <strong>Beitrages (Antwort)</strong> erhalten soll. Bitte beachte, daß der Benutzer auch die zusätzlich Punkte erhält, die du in den Erweiterten Punkteeinstellung vorgenommen hast.<br /> Setze hier 0, wenn die Benutzer keine Punkte bekommen sollen. Damit wird auch gleichzeite die Vergabe der erweiterten Punkt ausgeschaltet!',
	'FORUM_PERTOPIC'					=> 'Punkte pro Thema',
	'FORUM_PERTOPIC_EXPLAIN'			=> 'Hier kannst du einstellen, wieviele Punkte ein Benutzer für das Schreiben eines <strong>neuen Themas</strong> erhalten soll. Bitte beachte, daß der Benutzer auch die zusätzlich Punkte erhält, die du in den Erweiterten Punkteeinstellung vorgenommen hast.<br /> Setze hier 0, wenn die Benutzer keine Punkte bekommen sollen. Damit wird auch gleichzeite die Vergabe der erweiterten Punkt ausgeschaltet!',
	'FORUM_COST'						=> 'Punktekosten je Anhang-Download',
	'FORUM_COST_EXPLAIN'				=> 'Hier kannst du einstellen, wie viele Punkte ein Benutzer für den <strong>Download eines Dateianhangs</strong> zahlen muss.<br />Setze hier 0 um die Funktion zu deaktivieren.',
	'FORUM_COST_TOPIC'					=> 'Punktekosten für neue Themen',
	'FORUM_COST_TOPIC_EXPLAIN'			=> 'Hier kannst du einstellen, wie viele Punkte ein Benutzer für die <strong>Erstellung eines neuen Themas</strong> in diesem Forum zahlen muss.',
	'FORUM_COST_POST'					=> 'Punktekosten für neue Beiträge',
	'FORUM_COST_POST_EXPLAIN'			=> 'Hier kannst du einstellen, wie viele Punkte ein Benutzer für die <strong>Erstellung eines neuen Beitrags</strong> in diesem Forum zahlen muss.',
	'FORUM_POINT_SETTINGS'				=> 'Ultimate Points Einstellungen',
	'FORUM_POINT_SETTINGS_EXPLAIN'		=> 'Hier kannst du einstellen, wie viele Punkte Benutzer erhalten werden für die Erstellung neuer Themen, neuer Beiträge (Antworten) und die Bearbeitung ihrer Beiträge. Diese Einstellungen wirken auf einer pro-Forum-Basis. Auf diese Weise kannst du sehr detailliert bestimmen, wo Benutzer Punkte erhalten und wo nicht.',
	'FORUM_POINT_SETTINGS_UPDATED'		=> 'Globale Forenpunkte aktualisiert',
	'FORUM_POINT_UPDATE'				=> 'Aktualisiere globale Forenpunkte',
	'FORUM_POINT_UPDATE_CONFIRM'		=> '<br />Bist du sicher, dass du alle Forenpunkte mit den eingetragenen Werten aktualisieren willst? <br />Dieser Schritt wird alle derzeitigen Einstellungen überschreiben und ist nicht rückgängig zu machen!',

	'LOG_GROUP_TRANSFER_ADD'			=> 'Einer Gruppe wurden Punkte überwiesen',
	'LOG_GROUP_TRANSFER_SET'			=> 'Die Punkte einer Gruppe wurden auf einen neuen Wert gesetzt',
	'LOG_MOD_BANK'						=> '<strong>Bankpunkte bearbeitet</strong><br />» %1$s',
	'LOG_MOD_POINTS'					=> '<strong>Punkte bearbeitet</strong><br />» %1$s',
	'LOG_MOD_POINTS_BANK'				=> '<strong>Bankeinstellungen bearbeitet</strong>',
	'LOG_MOD_POINTS_BANK_PAYS'			=> '<strong>Zinszahlungen Bank</strong><br />» %1$s',
	'LOG_MOD_POINTS_FORUM'				=> '<strong>Globale Forenpunkte-Einstellungen bearbeitet</strong>',
	'LOG_MOD_POINTS_FORUM_SWITCH'		=> '<strong>Forenpunkte-Schalter bearbeitet</strong>',
	'LOG_MOD_POINTS_FORUM_VALUES'		=> '<strong>Forenpunkte-Werte bearbeitet</strong>',
	'LOG_MOD_POINTS_LOTTERY'			=> '<strong>Lotterieeinstellungen bearbeitet</strong>',
	'LOG_MOD_POINTS_RANDOM'				=> '<strong>Zufällige Punkte gewonnen von</strong><br />» %1$s',
	'LOG_MOD_POINTS_ROBBERY'			=> '<strong>Diebstahleinstellungen bearbeitet</strong>',
	'LOG_MOD_POINTS_SETTINGS'			=> '<strong>Punkteeinstellungen bearbeitet</strong>',
	'LOG_RESYNC_LOTTERY_HISTORY'		=> '<strong>Lotterieverlauf erfolgreich zurückgesetzt</strong>',
	'LOG_RESYNC_POINTSCOUNTS'			=> '<strong>Alle Benutzerpunkte wurden erfolgreich zurückgesetzt</strong>',
	'LOG_RESYNC_POINTSLOGSCOUNTS'		=> '<strong>Alle Benutzerprotokolle wurden erfolgreich zurückgesetzt</strong>',
	'LOTTERY_BASE_AMOUNT'				=> 'Basis-Jackpot',
	'LOTTERY_BASE_AMOUNT_EXPLAIN'		=> 'Der Jackpot beginnt mit diesem Wert. Während der Kaufphase kann dieser Wert ansteigen. Alles was zusätzlich eingezahlt wird, erhöht den Gesamt-Jackpot für die folgende Auslosung. Der Jackpot kann nicht unterhalb dieses Wertes fallen.',
	'LOTTERY_CHANCE'					=> 'Wahrscheinlichkeit, den Jackpot zu gewinnen',
	'LOTTERY_CHANCE_ERROR'				=> 'Die Chance zu gewinnen kann nicht höher sein als 100\% !!',
	'LOTTERY_CHANCE_EXPLAIN'			=> 'Setze hier die Wahrscheinlichkeit für einen erfolgreichen Gewinn (je größer die Zahl, desto höher ist die Wahrscheinlichkeit den Jackpot zu gewinnen)',
	'LOTTERY_DISPLAY_STATS'				=> 'Nächste Ziehung auf der Hauptseite anzeigen',
	'LOTTERY_DISPLAY_STATS_EXPLAIN'		=> 'Dies wird den Zeitpunkt der nächsten Ziehung für die Lotterie auf der Hauptseite des Forums anzeigen.',
	'LOTTERY_DRAW_PERIOD'				=> 'Kaufphase',
	'LOTTERY_DRAW_PERIOD_EXPLAIN'		=> 'Zeitraum in Stunden zwischen den Auslosungen. Eine Änderung hier wirkt sich direkt auf die aktuelle Ziehung (Tag/Zeit) aus. Setze auf 0 um die Auslosung auszusetzen, die aktuellen Lose und der Jackpot bleiben erhalten.',
	'LOTTERY_DRAW_PERIOD_SHORT'			=> 'Die Kaufphase muss höher sein als 0!',
	'LOTTERY_ENABLE'					=> 'Aktiviere Lotteriemodul',
	'LOTTERY_ENABLE_EXPLAIN'			=> 'Dies wird den Benutzern erlauben, das Lotteriemodul zu verwenden',
	'LOTTERY_MAX_TICKETS'				=> 'Maximale Anzahl Lose',
	'LOTTERY_MAX_TICKETS_EXPLAIN'		=> 'Hier kannst du die maximale Anzahl an Losen einstellen, die ein Benutzer kaufen kann',
	'LOTTERY_MULTI_TICKETS'				=> 'Erlaube Kauf mehrerer Lose',
	'LOTTERY_MULTI_TICKETS_EXPLAIN'		=> 'Setze dies auf "JA" um Benutzern zu erlauben, mehr als ein Los zu kaufen',
	'LOTTERY_NAME'						=> 'Name deiner Lotterie',
	'LOTTERY_NAME_EXPLAIN'				=> 'Gib einen Namen für deine Lotterie ein, z.B. Unsere Forumlotterie',
	'LOTTERY_OPTIONS'					=> 'Lotterieeinstellungen',
	'LOTTERY_PM_ID'						=> 'Absender ID',
	'LOTTERY_PM_ID_EXPLAIN'				=> 'Gib hier die Benutzer-ID des Benutzers ein, von dem die PN an den Gewinner gesendet wird (0 = Die ID des Gewinners)',
	'LOTTERY_TICKET_COST'				=> 'Kosten für ein Los',
	'LOTTERY_VIEW'						=> 'Aktiviere Lotteriemodul',
	'LOTTERY_VIEW_EXPLAIN'				=> 'Dies wird das Lotteriemodul im Punkteblock aktivieren',

	'NO_RECIPIENT'						=> 'Kein Empfänger angegeben.',

	'POINTS_ADV_OPTIONS'				=> 'Erweiterte Punkteeinstellungen',
	'POINTS_ADV_OPTIONS_EXPLAIN'		=> 'Wenn die Forenpunkte auf 0 gesetzt sind (deaktiviert), haben alle Einstellungen hier keine Wirkung.',
	'POINTS_ATTACHMENT'					=> 'Allgemeine Punkte für hinzufügen von Dateianhängen im Beitrag',
	'POINTS_ATTACHMENT_PER_FILE'		=> 'Zusätzliche Punkte für jeden Dateianhang',
	'POINTS_BONUS_CHANCE'				=> 'Chance auf Punktebonus',
	'POINTS_BONUS_CHANCE_EXPLAIN'		=> 'Die Chance, dass ein Benutzer Bonuspunkte für die Erstellung eines neuen Themas, eines Beitrags oder einer Beitragsbearbeitung erhält. <br />Die Chance liegt zwischen 0 and 100%, du kannst Dezimalstellen benutzen.<br />Setze auf <strong>0</strong> um die Funktion zu deaktivieren.',
	'POINTS_BONUS_VALUE'				=> 'Wert Punktebonus',
	'POINTS_BONUS_VALUE_EXPLAIN'		=> 'Gib hier die Grenzen ein, zwischen denen ein zufälliger Bonus gewählt werden soll. <br />Wenn du einen festen Betrag möchtest, setze Minimum und Maximum auf den gleichen Betrag.',
	'POINTS_COMMENTS'					=> 'Erlaube Kommentare',
	'POINTS_COMMENTS_EXPLAIN'			=> 'Erlaubt den Benutzer ihrer Überweisung einen Kommentar hinzuzufügen',
	'POINTS_CONFIG_SUCCESS'				=> 'Du hast die Punkte Einstellung erfolgreich aktualisiert',
	'POINTS_DISABLEMSG'					=> 'Deaktivierungsnachricht',
	'POINTS_DISABLEMSG_EXPLAIN'			=> 'Nachricht, die angezeigt wird, wenn der Ulitmate Points deaktiviert ist',
	'POINTS_ENABLE'						=> 'Punkte aktivieren',
	'POINTS_ENABLE_EXPLAIN'				=> 'Erlaubt den Benutzern, Ultimate Points zu verwenden',
	'POINTS_GROUP_TRANSFER'				=> 'Gruppenüberweisung',
	'POINTS_GROUP_TRANSFER_ADD'			=> 'Hinzufügen',
	'POINTS_GROUP_TRANSFER_EXPLAIN'		=> 'Hier kannst du Punkte an eine Gruppe überweisen, abziehen oder deren Punktestand auf einen gleichen Wert setzen. Du kannst zu deiner Überweisung den Benutzern auch eine persönliche Nachricht mit dem Grund für den Transfer zukommen lassen (du kannst Smilies und BBCodes verwenden). Wenn du keine persönliche Nachricht senden willst, lasse die Felder Überschrift und Kommentar einfach leer.',
	'POINTS_GROUP_TRANSFER_FUNCTION'	=> 'Funktion',
	'POINTS_GROUP_TRANSFER_PM_COMMENT'	=> 'Kommentar für die persönliche Nachricht',
	'POINTS_GROUP_TRANSFER_PM_ERROR'	=> 'Um eine persönlich Nachricht zum Gruppentransfer zu senden, musst du die Felder Überschrift <strong>und</strong> Kommentar ausfüllen!',
	'POINTS_GROUP_TRANSFER_PM_SUCCESS'	=> 'Der Gruppentransfer wurde erfolgreich abgeschlossen und<br />die Benutzer der Gruppe haben deine persönliche Nachricht erhalten',
	'POINTS_GROUP_TRANSFER_PM_TITLE'	=> 'Überschrift für die persönliche Nachricht',
	'POINTS_GROUP_TRANSFER_SEL_ERROR'	=> 'Du kannst keine Gruppenüberweisung an die Gruppen Bots und Gäste durchführen!',
	'POINTS_GROUP_TRANSFER_SET'			=> 'Setzen',
	'POINTS_GROUP_TRANSFER_SUBSTRACT'	=> 'Abziehen',
	'POINTS_GROUP_TRANSFER_SUCCESS'		=> 'Der Gruppentransfer wurde erfolgreich abgeschlossen.',
	'POINTS_GROUP_TRANSFER_USER'		=> 'Benutzergruppe',
	'POINTS_GROUP_TRANSFER_VALUE'		=> 'Betrag',
	'POINTS_IMAGES_MEMBERLIST'			=> 'Zeige ein Bild hinter den Punkten im Profil',
	'POINTS_IMAGES_MEMBERLIST_EXPLAIN'	=> 'Zeige im Profil des Benutzers ein Bild hinter den Punkten',
	'POINTS_IMAGES_TOPIC'				=> 'Zeige ein Bild hinter den Punkten',
	'POINTS_IMAGES_TOPIC_EXPLAIN'		=> 'Zeige in Beiträgen ein Bild hinter den Punkten',
	'POINTS_LOGS'						=> 'Punkte Log aktivieren',
	'POINTS_LOGS_EXPLAIN'				=> 'Erlaube den Benutzern ein Protokoll der Transaktionen zu sehen (Kontobewegeungen von sich und an sich)',
	'POINTS_MINIMUM'					=> '&nbsp;Minimum', // &nbsp; is for alignment of input boxes for Points Bonus Value
	'POINTS_MAXIMUM'					=> 'Maximum',
	'POINTS_NAME'						=> 'Punkte',
	'POINTS_NAME_EXPLAIN'				=> 'Der Anzeigenamen, den du statt des Wortes <em>Punkte</em> im Forum verwenden möchtest',
	'POINTS_POLL'						=> 'Punkte für neue Umfragen',
	'POINTS_POLL_PER_OPTION'			=> 'Punkte für jede Auswahl in neuen Umfragen',
	'POINTS_POST_PER_CHARACTER'			=> 'Punkte pro Zeichen in neuen Beiträgen',
	'POINTS_POST_PER_WORD'				=> 'Punkte pro Wort in neuen Beiträgen',
	'POINTS_SHOW_PER_PAGE'				=> 'Anzeige Einträge pro Seite',
	'POINTS_SHOW_PER_PAGE_ERROR'		=> 'Die Anzahl der anzuzeigenden Einträge muss mind. 5 betragen. Ansonsten haut es dir dein Layout durcheinander!',
	'POINTS_SHOW_PER_PAGE_EXPLAIN'		=> 'Gib hier an, wieviele Eintrage in den Logs und dem Lotterieverlauf pro Seite angezeigt werden sollen (min. 5)',
	'POINTS_SMILIES'					=> 'Smilies',
	'POINTS_STATS'						=> 'Zeige Punkte Statistik im Index',
	'POINTS_STATS_EXPLAIN'				=> 'Zeige Punkte Statistik auf der Hauptseite',
	'POINTS_TOPIC_PER_CHARACTER'		=> 'Punkte pro Zeichen in neuen Themen',
	'POINTS_TOPIC_PER_WORD'				=> 'Punkte pro Wort in neuen Themen',
	'POINTS_TRANSFER'					=> 'Überweisungen erlauben',
	'POINTS_TRANSFER_EXPLAIN'			=> 'Erlaube den Benutzern untereinander Punkte zu überweisen',
	'POINTS_TRANSFER_FEE'				=> 'Überweisungsgebühren',
	'POINTS_TRANSFER_FEE_EXPLAIN'		=> 'Prozentualer Betrag, der von einer Überweisung einbehalten wird',
	'POINTS_TRANSFER_FEE_ERROR'			=> 'Überweisungsgebühren können nicht 100\% oder mehr ausmachen!.',
	'POINTS_TRANSFER_PM'				=> 'Benachrichtige Benutzer über Überweisung mit PN',
	'POINTS_TRANSFER_PM_EXPLAIN'		=> 'Erlaube Benutzern eine Mitteilung über PN zu erhalten, wenn jemand ihnen Punkte gesendet hat',
	'POINTS_WARN'						=> 'Betrag an Punkten, die einem Benutzer abgezogen werden, wenn er verwarnt wird (setze 0 um diese Funktion zu deaktivieren)',

	'REG_POINTS_BONUS'					=> 'Punktebonus für Registrierung',
	'RESYNC_ATTENTION'					=> 'Die folgenden Aktionen können nicht rückgängig gemacht werden!!',
	'RESYNC_DESC'						=> 'Benutzerpunkte und Protokolle zurücksetzen',
	'RESYNC_LOTTERY_HISTORY'			=> 'Lotterieverlauf zurücksetzen',
	'RESYNC_LOTTERY_HISTORY_CONFIRM'	=> 'Bist du sicher, dass du den Lotterieverlauf zurücksetzen möchtest?<br />Hinweis: Diese Aktion kann nicht rückgängig gemacht werden!',
	'RESYNC_LOTTERY_HISTORY_EXPLAIN'	=> 'Dies wird den kompletten Lotterieverlauf zurücksetzen',
	'RESYNC_POINTS'						=> 'Benutzerpunkte zurücksetzen',
	'RESYNC_POINTSLOGS'					=> 'Benutzerprotokolle zurücksetzen',
	'RESYNC_POINTSLOGS_CONFIRM'			=> 'Bist du sicher, dass du die Benutzerprotokolle zurücksetzen möchtest?<br /><br />Hinweis: Diese Aktion kann nicht rückgängig gemacht werden!',
	'RESYNC_POINTSLOGS_EXPLAIN'			=> 'Lösche alle Benutzerprotokolle',
	'RESYNC_POINTS_CONFIRM'				=> 'Bist du sicher, dass du alle Benutzerpunkte zurücksetzen möchtest?<br />Hinweis: Diese Aktion kann nicht rückgängig gemacht werden!',
	'RESYNC_POINTS_EXPLAIN'				=> 'Setze alle Benutzerpunktekonten zurück auf Null',
	'ROBBERY_CHANCE'					=> 'Chance für einen erfolgreichen Diebstahl',
	'ROBBERY_CHANCE_ERROR'				=> 'Die Chance auf einen erfolgreichen Diebstahl kann nicht höher sein als 100% !!',
	'ROBBERY_CHANCE_EXPLAIN'			=> 'Hier kannst du den Prozentsatz für einen erfolgreichen Diebstahl eingeben (je höher der Wert, umso größer die Chance auf Erfolg)',
	'ROBBERY_CHANCE_MINIMUM'			=> 'Die Chance auf einen erfolgreichen Diebstahl muss höher sein als 0% !',
	'ROBBERY_ENABLE'					=> 'Aktiviere Diebstahlmodul',
	'ROBBERY_ENABLE_EXPLAIN'			=> 'Dies wird den Benutzern erlauben, das Diebstahlmodul zu benutzen',
	'ROBBERY_LOOSE'						=> 'Strafe für einen fehlgeschlagenen Diebstahl',
	'ROBBERY_LOOSE_ERROR'				=> 'Die Strafe für einen fehlgeschlagenen Diebstahl kann nicht höher als 100% sein!!',
	'ROBBERY_LOOSE_EXPLAIN'				=> 'Falls der Diebstahl fehlschlägt, verliert der verhinderte Dieb x% des versuchten Diebstahls',
	'ROBBERY_LOOSE_MINIMUM'				=> 'Der Wert für Strafe sollte schon etwas größer als 0% sein. Der Dieb sollte schon bestraft werden!',
	'ROBBERY_MAX_ROB'					=> 'Prozentsatz des maximalen Diebstahls',
	'ROBBERY_MAX_ROB_ERROR'				=> 'Du kannst keinen Wert höher als 100% einstellen!',
	'ROBBERY_MAX_ROB_EXPLAIN'			=> 'Dieser Wert gibt an, wieviel Prozent des Barvermögens eines Benutzers man maximal stehlen kann',
	'ROBBERY_MAX_ROB_MINIMUM'			=> 'Der Wert für die Höhe des Diebstahls sollte schon etwas höher als 0% sein. Sonst macht diese Option ja keinen Sinn!',
	'ROBBERY_NOTIFY'					=> 'Sende dem Bestohlenen eine Benachrichtigungs-PN',
	'ROBBERY_NOTIFY_EXPLAIN'			=> 'Dies aktiviert, ob angegriffene Benutzer per PN darüber informiert werden',
	'ROBBERY_OPTIONS'					=> 'Einstellungen Diebstahl',

	'TOP_POINTS'						=> 'Anzuzeigende Anzahl der reichsten Benutzer',
	'TOP_POINTS_EXPLAIN'				=> 'Hier kannst du den Wert für die Anzeige der reichsten Benutzer einstellen. Dies wird von verschiedenen Anzeigen benutzt.',

	'UPLIST_ENABLE'						=> 'Aktiviere Ultimate Points Liste',
	'UPLIST_ENABLE_EXPLAIN'				=> 'Erlaubt Benutzern, die Ultimate Points Liste zu verwenden',
	'USER_POINTS'						=> 'Benutzerpunkte',
	'USER_POINTS_EXPLAIN'				=> 'Anzahl der Punkte, die ein Benutzer besitzt',

));

$help = array(
	array(
		0 => '--',
		1 => 'Allgemeines'
	),
	array(
		0 => 'Beiträge bearbeiten',
		1 => 'Bearbeitet ein Benutzer seinen Beitrag wird der Beitrag neu berechnet und der Benutzer bekommt nur die Punkte für die Änderung. Der Beitrag wird allerdings nur neu berechnet, wenn du in dem jeweiligen Forum im ACP auch eingestellt hast, dass man in diesem Forum Punkte erhält ( > 0 ) und die Forenpunkte für neue Beiträge global auch eingeschaltet sind.'
	),
	array(
		0 => 'Themen bearbeiten',
		1 => 'Bearbeitet ein Benutzer sein Thema (oder den ersten Beitrag eines Themas),  erhält er nur die Punkte die für die Erstellung eines neuen Themas bezahlt werden. Das Thema wird sozusagen neu berechnet, als ob er es neu erstellt hätte. 
		Das Thema wird allerdings nur dann neu berechnet, wenn du in dem jeweiligen Forum auch eingestellt hast, dass man Forenpunkte für ein neues Thema bekommt (größer als 0), sowie global für neue Themen auch die Forenpunkte eingeschaltet.'
	),
	array(
		0 => 'Dateianhänge bearbeiten',
		1 => 'Fügt man einem Beitrag mit einem Dateianhang ein neues Attachment hinzu oder löscht ein Attachment, dann werden immer nur die jeweiligen Dateianhänge berechnet, welche der Beitrag wirklich enthält. 
		Löscht man alle Attachments aus dem Beitrag, werden auch die allgemeinen Punkte für Dateianhänge wieder abgezogen. Attachments werden immer neu berechnet und haben nichts mit den Punkten für Beitrag oder Thema zu tun!'
	),
	array(
		0 => 'Umfrage bearbeiten',
		1 => 'Bearbeitet ein Benutzer seine Umfrage werden die Punkte für jeden neuen Umfragepunkt immer wieder neu berechnet und der Benutzer erhält nur die Punkte als wäre es eine neue Umfrage. 
		Ändert man eine Umfrage zu einem normalen Thema, werden auch die allgemeinen Punkte für die Umfrage wieder abgezogen. 
		Die Umfragen werden allerdings nur neu berechnet, wenn du in dem jeweiligen Forum auch eingestellt hast, daß man Forenpunkte für ein neues Thema bekommt (größer als 0), sowie global auch die Forenpunkte eingeschaltet sind für ein neues Thema. Das macht Sinn, weil eine Umfrage ja auch gleichzeitig ein Thema ist.'
	),
	array(
		0 => 'Beiträge löschen',
		1 => 'Löscht man einen Beitrag aus der Beitragsansicht, werden die Punkte die der Benutzer für diesen Beitrag erhalten hat von seinem Punktekonto abgezogen. 
		Löscht ein Moderator einen Beitrag aus dem Moderationsbereich, bleiben die Punkte erhalten, genauso wie bei aktiviertem automatischen löschen.'
	),
	array(
		0 => 'BBCodes',
		1 => 'Der Inhalt von BBCodes wird als normaler Beitrag berechnet, der BBCode selber wird  nicht berücksichtigt.'
	),
	array(
		0 => 'Codeblöcke',
		1 => 'Inhalte von Codeblöcken [code] wird nicht bei der Berechnung berücksichtigt.'
	),
	array(
		0 => 'Smilies',
		1 => 'Für das senden von Smilies erhält man keine Punkte. Beachte aber, dass zwischen zwei Smilies immer Leerzeichen sind, welche widerum als Zeichen gewertet werden.'
	),
	array(
		0 => 'Zeichen und Sonderzeichen',
		1 => 'Alle einzelnen Zeichen sowie Sonderzeichen und auch Leerzeichen werden gesondert berechnet. Wieviel für  ein Zeichen ausgezahlt wird, lässt sich bei den erweiterten Punkteeinstellungen einstellen.'
	),
	array(
		0 => 'Zitierte Beiträge',
		1 => 'Beiträge welche innerhalb des [quote] bbcodes liegen werden nicht berechnet. Es werden also nur Punkte gezahlt für Beiträge, welcher der Benutzer selber geschrieben hat, nicht für zitierte Beiträge.'
	),
	array(
		0 => 'Wichtiger Hinweis!',
		1 => 'Nur Texten innerhalb von BBCodes werden gezählt, aber nicht der BBCode selbst. Der Code wird nicht aus der Datenbank ausgelesen! Darum sind die öffnenden [xxx] und beendenden [/xxx] Codes wichtig. Wenn ein BBCode nicht beendet wird, wird nur der Text nach dem öffnenden Tag gezählt. 
		<br /><br />
		Wenn ein Benutzer einen Beitrag bearbeitet, für den er auch früher noch keine Punkte bekommen hatte (z.B. vor der Installation der Extension verfasst, oder während die Extension deaktiviert war), wird er auch für die Bearbeitung keine Punkte erhalten!
		<br /><br />
		Wenn ein Benutzer einen Beitrag oder ein Thema bearbeitet, wofür er vorher noch keine Punkte aus den erweiterten Punkteeinstellungen erhalten hat, wird dieser geänderte Beitrag auch nicht neu berechnet!'
	),
	array(
		0 => '--',
		1 => 'Punkteeinstellungen'
	),
	array(
		0 => 'Allgemein',
		1 => 'Hier kannst du einen anderen Namen für deine Punkte wählen, das Ultimate Points System aktivieren/deaktivieren und eine Deaktivierungsnachricht eingeben.
		Zusätzlich kannst du die unterschiedlichen Teile des Ultimate Points Systems aktivieren/deaktivieren und einige weitere Einstellungen vornehmen, welche eigentlich selbsterklärend sein sollten.'
	),
	array(
		0 => 'Gruppenüberweisung',
		1 => 'Der Menüpunkt Gruppenüberweisung (bei Punkte Einstellungen) ermöglicht es dir einzelnen Benutzergruppen Punkte zu überweisen, abzuziehen oder auf einen eingebenen Wert zu setzen. Wenn du den Betreff und das Kommentarfeld ausfüllst, kannst du eine persönliche Nachricht an alle Gruppenmitglieder senden. Du kannst BBCodes benutzen, aber in der Minibox werden nur die gebräuchlichsten angezeigt.'
	),
	array(
		0 => 'Benutzerpunkte zurücksetzen',
		1 => 'Mit dieser Option in den Haupteinstellungen des Punktesystems kannst du alle Benutzerpunkte auf Null setzen. Aber sei vorsichtig! <strong>Diese Aktion kann nicht rückgängig gemacht werden!</strong>'
	),
	array(
		0 => 'Benutzerprotokolle zurücksetzen',
		1 => 'Mit dieser Option in den Haupteinstellungen des Punktesystems kannst du alle Benutzerprotokolle zurücksetzen. Aber sei vorsichtig! <strong>Diese Aktion kann nicht rückgängig gemacht werden!</strong>'
	),
	array(
		0 => '--',
		1 => 'Erweiterte Punkteeinstellungen'
	),
	array(
		0 => 'Dateianhänge',
		1 => 'Du kannst Punkte vergeben für Themen und Beiträge mit einem Dateianhang. Die Hauptpunkte werden einmal vergeben, und es gibt dann zusätzliche Punkte für jeden Dateianhang. Du <strong>KANNST NICHT</strong> Dateianhänge forenbasiert deaktivieren!'
	),
	array(
		0 => 'Umfragen',
		1 => 'Du kannst Punkte für die Umfrage selbst vergeben (diese werden einmal vergeben) und zusätzliche Punkte für jede Umfrageoption.
		Weil Umfragen nur in neuen Themen möglich sind, werden Punkte nur dann vergeben, wenn du in den Forenpunkten auch eingestellt hast, dass Punkte für neue Themen vergeben werden (größer als 0), sowie der globale Schalter für Punkte für neue Themen auch aktiviert ist!'
	),
	array(
		0 => 'Neue Themen',
		1 => 'Zusätzlich zu den Hauptpunkten je Thema aus den Foreneinstellungen kannst du Punkte für jedes Wort und/oder für jedes Zeichen vergeben. 
		Wenn du im Forum 0 eingestellt hast, oder die Punkte für neue Themen deaktiviert sind, werden die zusätzlichen Punkte nicht gezählt!'
	),
	array(
		0 => 'Neue Beiträge/Antworten',
		1 => 'Zusätzlich zu den Hauptpunkten je Thema aus den Foreneinstellungen kannst du Punkte für jedes Wort und/oder für jedes Zeichen vergeben. 
		Wenn du im Forum 0 eingestellt hast, oder die Punkte für neue Beiträge deaktiviert sind, werden die zusätzlichen Punkte nicht gezählt!'
	),
	array(
		0 => 'Punkte für Verwarnungen',
		1 => 'Du hast die Möglichkeit einem Benutzer, der eine Verwarnung erhält, dafür Punkte von seinem Konto abzuziehen. Wenn der Benutzer nicht genug Punkte hat, wird der Betrag trotzdem abgezogen. Er wird dann einen negativen Punktestand haben!'
	),
	array(
		0 => 'Punktebonus für Registrierung',
		1 => 'Hier kannst du einstellen, wieviele Punkte ein Benutzer bei der Registrierung auf deinem Board empfangen soll. Auf diese Weise hat er sofort ein Startkapital. Diese Punkte werden direkt einmal bei der Registrierung vergeben, nicht erst bei der Freischaltung des Accounts!'
	),
	array(
		0 => 'Punktebonus-Chance',
		1 => 'Hier kannst du den Prozentsatz für die Chance eingeben, dass ein Benutzer einen Punktebonus obendrauf erhält, wenn er ein neues Thema oder einen neuen Beitrag erstellt, oder einen vorhandenen Beitrag bearbeitet. Du kannst Dezimalstellen verwenden, diese werden in die Berechnungen einbezogen.<br />Setze auf <strong>0</strong> um diese Funktion zu deaktivieren, und dann hat niemand eine Chance auf Bonuspunkte.'
	),
	array(
		0 => 'Wert Bonuspunkte',
		1 => 'Hier kannst du das Minimum und Maximum einstellen, zwischen dem ein zufälliger Betrag an Punkten erzeugt und als Bonus gegeben wird, wenn der Benutzer so viel Glück hat, einen zu erhalten. Wenn du einen festen Betrag als Bonuswert einsetzen möchtest, setze Minimum und Maximum auf <strong>exakt</strong> den gleichen Wert.'
	),
	array(
		0 => 'Einträge pro Seite',
		1 => 'Gib hier an, wie viele Eintrage in den Protokollen und dem Lotterieverlauf pro Seite angezeigt werden sollen. Du kannst hier eine gewünschte Anzahl ab 5 einstellen (Minimalwert).'
	),
	array(
		0 => 'Anzahl der reichsten Benutzer',
		1 => 'Du kannst hier die Anzahl der reichsten Benutzer einstellen, welche im Index, der Bank und im Überblick angezeigt werden. Diese Einstellung gilt also für mehrere Ansichten! 
		Setzt du 0 werden die Anzeigen deaktiviert. 
		Im Überblick und in der Bank bekommt der Benutzer einen entsprechenden Hinweis angezeigt. Im Index wird es komplett ausgeblendet.'
	),
	array(
		0 => '--',
		1 => 'Einstellungen Forenpunkte'
	),
	array(
		0 => 'Allgemein',
		1 => 'Die Forenpunkte arbeiten weitgehend unabhängig von den anderen Punkte Einstellungen und werden zusätzlich gezählt. Du kannst die Punkte je Forum anders setzen. Auf diese Weise kannst du für jedes Forum die Punkte komplett individuell einstellen, die ein Benutzer erhalten wird. Du findest diese Einstellungen im ACP - Foren - Foren verwalten - Foren-Administration - jeweiliges Forum, welches du einstellen möchtest.'
	),
	array(
		0 => 'Die Schalter',
		1 => 'Mit den Forenpunkte-Schaltern kannst du global die Forenpunkte aktivieren oder deaktivieren. Wenn du die Punkte für Themen, Beiträge oder Bearbeitungen deaktivierst, werden in allen Foren KEINE Punkte mehr gezählt. Zusätzlich werden auch die erweiterten Punkte nicht mehr gezählt, bis du den Schalter wieder umstellst.'
	),
	array(
		0 => 'Global Forenpunkte-Einstellungen',
		1 => 'Hier kannst du die Punkte global für alle Foren auf einmal setzen. Diese Einstellungen werd jede vorherige individuelle Punkteeinstellung überschreiben! Wenn du diese Funktion benutzt, musst du also alle Foren erneut bearbeiten, wo du unterschiedliche Punkte eingestellen möchtest!'
	),
	array(
		0 => 'Neues Thema',
		1 => 'Hier kannst du einstellen, wie viele Punkte ein Benutzer für die Erstellung eines neuen Themas erhalten soll. Das kannst du global einstellen, oder individuell über ACP -> Foren. 
		Wenn du dies auf 0 setzt, werden auch die erweiterten Punkteeinstellungen (Worte, Zeichen) NICHT gezählt.'
	),
	array(
		0 => 'Neuer Beitrag',
		1 => 'Hier kannst du einstellen, wie viele Punkte ein Benutzer für die Erstellung eines neuen Beitrags oder einer neuen Antwort erhalten soll. Das kannst du global einstellen, oder individuell über ACP -> Foren. 
		Wenn du dies auf 0 setzt, werden auch die erweiterten Punkteeinstellungen (Worte, Zeichen) NICHT gezählt.'
	),
	array(
		0 => 'Beitrag/Thema bearbeiten',
		1 => 'Hier kannst du einstellen, wieviele Punkte ein Benutzer für die Bearbeitung eines Themas oder eines Beitrages erhalten soll.'
	),
	array(
		0 => 'Punkte je Dateianhang-Download',
		1 => 'Hier kannst du einstellen, wie viele Punkte ein Benutzer für das Herunterladen eines Dateianhangs zahlen muss. Diese Einstellung wirkt je Anhang, nicht je Beitrag mit Anhang. Du kannst über die Berechtigungen festlegen, welche Gruppen für Dateianhänge zahlen müssen, und welche nicht. <br />
		<strong>Wichtiger Hinweis (1):</strong> Dateianhänge in privaten Nachrichten <em>(PN)</em> sind ausgeschlossen von dieser Einstellung/Zahlung. Über PN versendete Dateianhänge können kostenlos heruntergeladen werden.<br />
		<strong>Wichtiger Hinweis (2):</strong> Bildanhänge in Beiträgen sind ausgenommen von dieser Einstellung/Zahlung. Weil Bilder jedes Mal, wenn ein Benutzer den Beitrag besucht, direkt im Beitrag angezeigt werden, würden die Kosten jedes Mal fällig, wenn man den Beitrag nur ansieht. Deshalb sind Bildanhänge von der Zahlung ausgenommen.'
	),
	array(
		0 => 'Points to pay for new topic',
		1 => 'Here you can set, how much a user has to pay to make a new topic in a specific forum. This is per forum specific, you can set them all at once through the Forum Point Settings or per individual forum. Afterwards you\'ll have to set permissions for which users/groups have to pay and which do not.'
	),
	array(
		0 => 'Kosten für neue Beiträge',
		1 => 'Hier kannst du einstellen, wie viele Punkte ein Benutzer für das Erstellen eines neuen Beitrages <em>(Antwort)</em> in einem speziellen Forum zahlen muss. Dies kannst du forenspezifisch einstellen, oder du kannst es für alle Foren auf einmal einstellen über die Forenpunkte-Einstellungen. Danach musst du über die Berechtigungen einstellen, welche Gruppen/Benutzer zahlen müssen und welche nicht.'
	),
	array(
		0 => '--',
		1 => 'Bank'
	),
	array(
		0 => 'Allgemein',
		1 => 'Wenn die Bank aktiviert ist, sehen die Benutzer eine gesonderte Bankseite im Ultimate Points Hauptmenü. Zusätzlich werden Informatioen in der Profilansicht und Themenansicht angezeigt, wo Administratoren/Moderatoren die Möglichkeit haben, das Benutzerguthaben und den Bankbetrag zu ändern, wenn es erlaubt wurde.'
	),
	array(
		0 => 'Zinsen',
		1 => 'Es lässt sich ein Zinssatz von 0 - 100 % pro Zinsauszahlungsperiode einstellen. Die Zinsauszahlung lässt sich in Tagen einstellen. In diesem eingestellten Rhythmus, werden dann jeweils die Zinsen automatisch an die Bankbenutzer ausbezahlt. Du kannst die Zinsen ab einem einstellbaren Wert deaktivieren. Für Guthaben, die diesen Wert überschreiten, erhält der Benutzer dann keine Zinsen mehr, sondern lediglich für Guthaben bis zu diesem gesetzten Wert. Setzt du hier 0, wird diese Option deaktivert und die Zinsen werden für das gesamte Guthaben ausbezahlt.'
	),
	array(
		0 => 'Bankkosten',
		1 => 'Es lassen sich Gebühren festsetzen, welche für Abhebungen bei der Bank erhoben werden. Diese lassen sich von 0 - 100 % einstellen. 
		Zusätzlich lassen sich noch Kontoführungsgebühren als fester Betrag einstellen, welche regelmäßig vom Bankkonto abgezogen werden. 
		Die Zeitperiode für die Bankkosten ist die gleiche wie die eingestellte Zinsauszahlungsperiode.'
	),
	array(
		0 => '--',
		1 => 'Lotterie'
	),
	array(
		0 => 'Allgemein',
		1 => 'Ist die Lotterie aktiviert haben die Benutzer Zugriff auf das Lotteriemodul.
		Wenn du das Modul deaktivierst, läuft die Lotterie im Hintergrund weiter, aber die Benutzer haben keinen Zugriff darauf. Der Anstoß bzw Berechnung zur nächsten Ausspielung erfolgt über den Aufruf der Lotterieseite sowie auch der Index Seite.'
	),
	array(
		0 => 'Wie die Lotterie funktioniert',
		1 => 'Aus allen gekauften Losen wird durch ein Zufallsprinzip ein Los gezogen. Anschließend wird anhand der eingestellten Erfolgswahrscheinlichkeit entschieden, ob dieses Los gewinnt oder nicht. Gewinnt es nicht, landet der komplette Betrag der beim Loskauf eingenommen wurde in einem Jackpot, in dem er so lange bleibt, bis ein Los gewinnt.'
	),
	array(
		0 => 'Jackpot',
		1 => 'Die Lotterie arbeitet mit einem Jackpotsystem. Der Wert aller gekauften Lose geht dort hinein. Zusätzlich kannst du einen Startwert bestimmten, welcher zusätzlich ausgeschüttet wird. Wenn niemand gewinnt, bleibt der Jackpot stehen und erhöht sich in der nächsten Spielrunde weiter, bis er ausgeschüttet wird.'
	),
	array(
		0 => 'Gewinnchance',
		1 => 'Hier kannst du die Chance auf einen Gewinn einstellen. Der Benutzer kann diesen Wert nicht sehen. Je höher du diesen Wert einstellst, umso größer ist die Chance auf einen Gewinn. Eine 0 bedeutet, niemand wird gewinnen, 100 bedeutet, der Jackpot wird auf jeden Fall an einen der Spieler ausgezahlt.'
	),
	array(
		0 => 'Kaufphase',
		1 => 'Du kannst die Kaufphase in Stunden einstellen. Das hat eine sofortige Wirkung!
		Wenn du die Kaufphase auf 0 setzt, stoppt die Auszahlung.
		Die Benutzer können keine Lose kaufen, und der Jackpot bleibt mit seinem aktuellen Wert bestehen. Du kannst diese Funktion benutzen, um die Auszahlung zu erzwingen. Sobald du einen neuen Wert einsetzt, wird die Auszahlung nach dem nächsten Seitenaufruf starten.'
	),
	array(
		0 => 'Nächste Ziehung einstellen',
		1 => 'Gib hier die nächste Ausspielungszeit für deine Lotterie ein. Du musst das UNIX-Zeitformat benutzen. Das bekommst du von <a href="http://www.onlineconversion.com/unix_time.htm" onclick="window.open(this.href); return false">OnlineConversion.com</a>. Das ist nur ein Mal erforderlich. Während des normalen Betriebes passt sich die nächste Ziehung immer anhand der Kaufphase an.'
	),
	array(
		0 => 'Absender-ID',
		1 => 'Hier kannst du die Benutzer-ID des Benutzers eingeben, der als Glücksfee dem glücklichen Gewinner die Gewinnbenachrichtigung als PN sendet. Wenn du nicht möchtest, dass ein anderer Benutzer verwendet wird, setze hier 0. Der Benutzer erhält diese Nachricht dann unter seinem eigenen Namen.'
	),
	array(
		0 => '--',
		1 => 'Diebstahl'
	),
	array(
		0 => 'General',
		1 => 'Mit dem Diebstahlmodul ist es den Benutzern möglich, anderen Benutzern Punkte von ihrem Account zu stehlen (nicht vom Bankkonto!). Du kannst das Modul einschalten/ausschalten. Wenn es ausgeschaltet ist, können die Benutzer es nicht sehen.'
	),
	array(
		0 => 'Einstellungen Persönliche Nachricht',
		1 => 'Hier kannst du einstellen, ob die Benutzer über Diebstahlsversuche informiert werden sollen. Hat der Benutzer in seinen persönlichen Einstellungen den Empfang von PNs ausgeschaltet, wird er auch die Diebstahlsbenachrichtigungen nicht erhalten. 
		Wenn derjenige, der einen Raub versucht, für den Versand von PNs gesperrt ist, wird trotzdem eine Nachricht an das Opfer geschickt. Diese Nachricht ist vorgefertigt und der potentielle Dieb kann die Nachricht nicht beeinflussen. Jeder Benutzer kann im Diebstahlmodul für sich selbst einstellen, ob er bei Diebstahlversuchen gern benachrichtigt werden möchte. Ist das Versenden von Nachrichten generell deaktiviert, kann der Benutzer diese Option nicht sehen.'
	),
	array(
		0 => 'Chance auf erfolgreichen Diebstahl',
		1 => 'Du kannst die Erfolgswahrscheinlichkeit für einen Diebstahl in Prozent einstellen.
		Die Erfolgswahrscheinlichkeit wird den Benutzern auch auf der Diebstahlseite angezeigt.Du kannst eine beliebige Zahl zwischen 0 und 100 % eingeben.'
	),
	array(
		0 => 'Strafe für fehlgeschlagenen Diebstahl',
		1 => 'Hier kannst du die Strafe einstellen, die ein Benutzer für seinen fehlgeschlagenen Diebstahlsversuch zahlen muss. Der Dieb hat den hier gesetzten Prozentsatz von dem Betrag zu zahlen, den er stehlen wollte. Die Strafe wird auf der Diebstahlsseite angezeigt. Du kannst einen Wert zwischen 0 and 100 Prozent eintragen.'
	),
	array(
		0 => 'Maximalwert, der auf einmal geraubt werden kann',
		1 => 'Hier kannst du den Maximalwert in Prozent einstellen, der einem Benutzer bei einem Raub von seinen Punkten gestohlen werden darf. Dieser Wert wird auf der Diebstahlsseite angezeigt. TDu kannst einen Wert zwischen 0 and 100 Prozent eingeben.'
	),
	array(
		0 => 'Verwendung der Strafe bei fehlgeschlagenen Überfällen',
		1 => 'Du kannst einstellen, was mit der Strafe für einen fehlgeschlagenen Diebstahl passieren soll. Du kannst diese entweder direkt in den Lotteriejackpot überweisen, oder per Zufall entweder an den Beraubten oder den Lotteriejackpot auszahlen.'
	),
	array(
		0 => '--',
		1 => 'Überweisen / Spenden'
	),
	array(
		0 => 'Allgemein',
		1 => 'Wenn die Benutzer die entsprechende Berechtigung erhalten, können sie Punkte von ihrem eigenen auf ein fremdes Konto überweisen. Das kann von der Überweisungsseite aus stattfinden, aus der Themenansicht oder aus der Profilansicht heraus.'
	),
	array(
		0 => 'Private Nachricht bei Überweisung',
		1 => 'Du kannst diese Funktion einschalten/ausschalten auf der Hauptseite der Punkteeinstellungen im ACP. Wenn ein Benutzer für den Versand von PNs gesperrt ist, kann er keinen Kommentar zu dieser Überweisung hinzufügen.'
	),
	array(
		0 => 'Protokolle',
		1 => 'Alle Überweisungen werden auf der Protokollseite mit allen vorhandenen Informationen angezeigt. Die Protokollseite kannst du im ACP auf der Punktehauptseite aktivieren/deaktiveren.Dort kannst du die Benutzerprotokolle auch alle zurücksetzen. 
		Aber sei vorsichtig! Diese Aktion kann nicht rückgängig gemacht werden!'
	),
	array(
		0 => '--',
		1 => 'Berechtigungen'
	),
	array(
		0 => 'Administratorberechtigungen',
		1 => 'Du kannst Administratoren das Recht geben, das Ultimate Points System zu verwalten. Das kannst du einstellen im ACP Modul Berechtigungen --> Allgemeine Berechtigungen --> Administratoren oder über die Benutzerrollen der Administratoren.'
	),
	array(
		0 => 'Globale Moderatorenberechtigungen',
		1 => 'Im ACP Modul Berechtigungen --> Allgemeine Berechtigungen --> Globale Moderatoren bzw. in den Berechtigungsrollen für Moderatoren kannst du einstellen ob deine globalen Moderatoren die Punkte anderer Benutzer, sowie die Bankguthaben anderer Benutzer ändern können.'
	),
	array(
		0 => 'Benutzer- und Gruppenrechte',
		1 => 'Im ACP Modul Berechtigungen --> Allgemeine Berechtigungen --> Gruppenrechte bzw Benutzerrechte oder in den Benutzerrollen kannst du Gruppen bzw. Benutzern die Berechtigung geben, das Ultimate Points System verwenden zu können oder ggf die Nutzung untersagen. Dir stehen folgende Einstellungen zur Verfügung:
<ul>
	<li>Kann Ultimate Points benutzen</li>
	<li>Kann das Bank Modul benutzen</li>
	<li>Kann das Protokoll-Modul benutzen</li>
	<li>Kann das Lotteriemodul benutzen</li>
	<li>Kann das Diebstahlmodul benutzen</li>
	<li>Kann das Überweisungsmodul benutzen</li>
</ul>'
	),
	array(
		0 => '--',
		1 => 'Sonstiges',
	),
	array(
		0 => 'Punkte-Symbolbild ändern',
		1 => 'Zur Klarstellung: Das Punkte-Symbolbild ist das Bildchen in deinem overall_header, neben dem Link, der dich in die Ultimate Points Module führt <em>(wie Übersicht, Lotterie, Diebstahl etc.) <em> und <strong>NICHT</strong> das Symbol hinter deinen Punkten überall im Forum!<br />
				<ul><li>Bild ändern<br />Du kannst das Bild ändern, indem du es in  <em>root/ext/dmzx/ultimatepoints/styles/all/theme/images/</em> durch ein anderes ersetzt. Stelle sicher, dass es <strong>icon_points.gif</strong> heißt, und die Größe von <strong>12px x 12px</strong> hat!</li>
				<li>Ein neues Bild hinzufügen<br />Oder du kannst ein neues Bild hinzufügen in <em>root/ext/dmzx/ultimatepoints/styles/all/theme/images/</em>, <br />
				und dann musst du die Datei  <em>root/ext/dmzx/ultimatepoints/styles/all/theme/ultimatepoints.css</em> öffnen, <br />
				und den Eintrag <strong>.icon-points { background-image: url("./images/<em>your_image_name.gif</em>"); }</strong>anpassen.</li></ul>'
	),
	array(
		0 => 'Punktebild ändern',
		1 => 'Zur Klarstellung: Das Punktebild ist das Bild, das hinter deinem Guthaben überall im Forum in der Beitragsanzeige, den Profilen und der Themenansicht angezeigt wird.<br />
				<ul><li>Bild ändern<br />
				Du kannst ein neues Bild hochladen nach  <em>root/ext/dmzx/ultimatepoints/styles/all/theme/images/</em>, <br />
				Dieses Bild <strong>MUSS</strong> <strong>money.png</strong> heißen, und muss  <strong>11px x 11px</strong> groß sein!'
		),
);
