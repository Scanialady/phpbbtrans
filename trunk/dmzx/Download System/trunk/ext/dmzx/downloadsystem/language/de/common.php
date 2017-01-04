<?php
/**
*
* @package phpBB Extension - Download System (deutsch)
* @version $Id$
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'EDS_BACK_INDEX'					=> 'Zurück zum Verzeichnis',
	'EDS_BACK_LINK'						=> 'Klicke %shier%s, um zum Downloadverzeichnis zurückzukehren',
	'EDS_CATS_NAME'						=> 'Kategorien',
	'EDS_CAT_DESC'						=> 'Beschreibung',
	'EDS_CAT_NAME'						=> 'Kategorie',
	'EDS_COST'							=> 'Costs',
	'EDS_COST_ERROR'					=> 'Du brauchst mehr %1$s um diese Datei herunterzuladen.',
	'EDS_COST_FREE'						=> 'Dieser Download ist kostenlos',
	'EDS_COST_OK'						=> 'Du hast genug %1$s, um diese Datei herunterzuladen.',
	'EDS_DISABLED'						=> 'Das Downloadsystem ist derzeit deaktiviert. Bitte versuche es später noch einmal.<br />Wenn du später noch immer die gleiche Meldung erhältst, informiere bitte den Administrator.',
	'EDS_DL_NOEXISTS'					=> 'Dieser Download existiert nicht.',
	'EDS_DOWNLOAD'						=> 'Download',
	'EDS_DOWNLOADS'						=> 'Downloads',
	'EDS_DOWNLOAD_EXPLAIN'				=> 'Klicke rechts auf das Icon um die gewünschte Datei herunterzuladen.',
	'EDS_FILE_CLICKS'					=> 'Gesamte Downloads',
	'EDS_FILE_DESC'						=> 'Beschreibung',
	'EDS_FILE_TITLE'					=> 'Dateiname',
	'EDS_FILE_VERSION'					=> 'Version',
	'EDS_FREE'							=> 'Kostenlos',
	'EDS_INDEX'							=> 'Verzeichnis',
	'EDS_LAST_CHANGED_ON'				=> 'Zuletzt geändert am',
	'EDS_LAST_DOWNLOAD'					=> '&nbsp;<strong>%1$s</strong><br /><br />&nbsp;Heruntergeladen: %2$s<br />&nbsp;Zuletzt geändert am: %3$s',
	'EDS_LAST_FILE'						=> 'Neueste Datei',
	'EDS_LEGEND'						=> 'Legende',
	'EDS_LEGEND_ERROR'					=> 'Du benötigst mehr %1$s',
	'EDS_LEGEND_FREE'					=> 'Der Download ist kostenlos',
	'EDS_LEGEND_NO_DL'					=> 'Du bist nicht berechtigt, Dateien herunterzuladen',
	'EDS_LEGEND_OK'						=> 'Du hast ausreichend %1$s',
	'EDS_MULTI'							=> '%1$s Downloads',
	'EDS_NO_CAT'						=> '<strong>Entschuldige! Derzeit sind keine Kategorien verfügbar.</strong><br /><br />',
	'EDS_NO_CAT_IN_UPLOAD'				=> 'Entschuldige! Derzeit sind keine Kategorien vorhanden.',
	'EDS_NO_DOWNLOADS'					=> '<strong>Entschuldige! Derzeit sind keine Downloads verfügbar.</strong><br /><br />',
	'EDS_NO_FILES'						=> 'Es gibt keine Downloads.',
	'EDS_NO_ID'							=> 'Keine ID angegeben.',
	'EDS_NUMBER_DOWNLOADS'				=> 'Dateien',
	'EDS_REGULAR_DOWNLOAD'				=> 'Klicke hier, um die ausgewählte Datei herunterzuladen',
	'EDS_REQUIRES_POINTS'				=> '<strong>Weil wir die Ultimate Points Erweiterung installiert haben, und du Punkte für diesen Download benötigst, <br />musst du angemeldet sein, ehe du diese Datei herunterladen kannst!</strong>',
	'EDS_SINGLE'						=> '1 Download',
	'EDS_SUB_CAT'						=> 'Unterkategorie',
	'EDS_SUB_CATS'						=> 'Unterkategorien',
	'EDS_TITLE'							=> 'Downloads',
	'EDS_TITLE_EXPLAIN'					=> 'Wähle unten eine Kategorie',
	'EDS_UPLOADED_ON'					=> 'Hochgeladen am',
	'EDS_UPLOAD'						=> 'Upload',
	'EDS_UPLOADS'						=> 'Downloadsystem Uploadbereich',
	'EDS_UPLOAD_SECTION'				=> 'Uploadbereich',
	'EDS_UPLOAD_MESSAGE'				=> 'Upload here your file in correct category.',
	'EDS_FILESIZE'						=> 'Dateigröße',
	'EDS_CAT_NOT_EXIST'					=> 'Die ausgewählte Kategorie existiert nicht!',
	'EDS_BACK_DOWNLOADS'				=> 'Zurück zur Downloadübersicht',
	'EDS_NO_PERMISSION'					=> 'Du hast nicht die Berechtigung, das Downloadsystem zu benutzen',
	'EDS_NO_DOWNLOAD'					=> 'Du hast nicht die Berechtigung, Dateien aus dem Downloadsystem herunterzuladen',
	'EDS_NO_UPLOAD'						=> 'Du hast nicht die Berechtigung, den Uploadbereich zu benutzen',
	'EDS_NO_DIRECT_DL'					=> 'Es ist dir nicht erlaubt, Dateien herunterzuladen',
	'EDS_CAT'							=> 'Eine Kategorie',
	'EDS_CATS'							=> '%d Kategorien',
	'EDS_CURRENT_VERSION'				=> 'Derzeitige Version',
	'EDS_NEW_TITLE'						=> 'Titel',
	'EDS_NEW_TITLE_EXPLAIN'				=> 'Titel für deinen neuen Download.',
	'EDS_NEW_VERSION'					=> 'Version',
	'EDS_NEW_VERSION_EXPLAIN'			=> 'Version deines Downloads.',
	'EDS_NEW_DESC'						=> 'Beschreibung',
	'EDS_NEW_DESC_EXPLAIN'				=> 'BBcode & Smilies sind erlaubt.',
	'EDS_NEW_DL_CAT'					=> 'Kategorie',
	'EDS_NEW_DL_CAT_EXPLAIN'			=> 'Wähle hier die Kategorie aus.',
	'EDS_NEW_DOWNLOAD'					=> 'Neuer Download',
	'EDS_NEW_FILENAME'					=> 'Dateiname',
	'EDS_NEW_FILENAME_EXPLAIN'			=> 'Wähle die Datei zum Hochladen aus.',
	'EDS_NEW_DOWNLOAD_SIZE'				=> 'Die maximale Dateigröße ist <strong>%1$s %2$s</strong>! Wegen der Zeit, die du zum Hochladen brauchst, kann dieser Wert niedriger sein!',

	// ACP
	'ACP_ADD'							=> 'Hinzufügen',
	'ACP_ALL_DOWNLOADS'					=> 'Alle Downloads',
	'ACP_ANNOUNCE_ENABLE'				=> 'Ankündigung neuer Downloads',
	'ACP_ANNOUNCE_ENABLE_EXPLAIN'		=> 'Setze auf Ja, wenn du Downloads in einem bestimmten Forum ankündigen möchtest.',
	'ACP_ANNOUNCE_LOCK'					=> 'Sperre Ankündigung',
	'ACP_ANNOUNCE_LOCK_EXPLAIN'			=> 'Setze auf Ja, und das Thema wird gesperrt.',
	'ACP_ANNOUNCE_ID'					=> 'Ankündigungsforum',
	'ACP_ANNOUNCE_ID_EXPLAIN'			=> 'Gib hier die ID des Forums ein, wo du neue Downloads ankündigen möchtest.',
	'ACP_ANNOUNCE_MSG'					=> 'Hallo,

wir haben einen neuen Download!

[b]Titel:[/b] %1$s
[b]Beschreibung:[/b] %2$s
[b]Kategorie:[/b] %3$s
[b]Klicke %4$s, um zur Downloadseite zu gehen![/b]

Viel Spaß!',
	'ACP_ANNOUNCE_SETTINGS'				=> 'Einstellungen Ankündigung',
	'ACP_ANNOUNCE_TITLE'				=> '%1$s',
	'ACP_CAT_NAME_SHOW_YES'				=> 'Ja',
	'ACP_CAT_NAME_SHOW_NO'				=> 'Nein',
	'ACP_NEW_CAT_NAME_SHOW'				=> 'Anzeigen im Uploadverzeichnis',
	'ACP_NEW_CAT_NAME_SHOW_EXPLAIN'		=> 'Zeige die Kategorie im Uploadbereich für die Gruppen an, die hochladen dürfen.<br /><strong>Hinweis:</strong> Administratoren sehen IMMER alle Kategorien im Uploadbereich.',
	'ACP_ANNOUNCE_UP'					=> 'Kündige Download erneut an',
	'ACP_ANNOUNCE_UP_EXPLAIN'			=> 'Aktiviere, wenn du den Download noch einmal ankündigen möchtest. Die Nachricht wird gesendet als Update-Information',
	'ACP_ANNOUNCE_UP_MSG'				=> 'Hallo,

wir haben einen aktualisierten Download!

[b]Titel:[/b] %1$

[b]Beschreibung:[/b] %2$s

[b]Kategorie:[/b] %3$s

[b]Klicke %4$s, um zu der Kategorie zu gehen![/b]

Viel Spaß!',
	'ACP_ANNOUNCE_UP_TITLE'				=> '[UPD] %1$s',
	'ACP_BASIC'							=> 'Grundeinstellungen',
	'ACP_CAT'							=> 'Kategorie',
	'ACP_CATEGORIES'					=> 'Kategorien',
	'ACP_CAT_DELETE'					=> 'Lösche Kategorie',
	'ACP_CAT_DELETE_DONE'				=> 'Deine Kategorie wurde erfolgreich gelöscht',
	'ACP_CAT_DELETE_EXPLAIN'			=> 'Hier kannst du eine Kategorie löschen.',
	'ACP_CAT_EDIT_DONE'					=> 'Deine Kategorie wurde erfolgreich aktualisiert',
	'ACP_CAT_EXIST'						=> 'Der Ordnername existiert bereits auf deinem Webspace!',
	'ACP_CAT_EXPLAIN'					=> 'Gib hier die Kategorie an, in der dein Download gelistet werden soll',
	'ACP_CAT_INDEX'						=> 'Kategorienverzeichnis',
	'ACP_CAT_NAME_ERROR'				=> 'Du musst einen Ordnernamen für deine Kategorie eingeben!',
	'ACP_CAT_NEW'						=> 'Neue Kategorie hinzufügen',
	'ACP_CAT_NEW_DONE'					=> 'Deine neue Kategorie wurde hinzugefügt, und der Ordner wurde erfolgreich auf deinem Webspace erstellt!',
	'ACP_CAT_NEW_EXPLAIN'				=> 'Hier kannst du eine neue Kategorie hinzufügen.',
	'ACP_CAT_NOT_EXIST'					=> 'Die angefragte Kategorie existiert nicht!',
	'ACP_CAT_SELECT'					=> 'Hier kannst du Kategorien hinzufügen, bearbeiten oder löschen.',
	'ACP_CLICK'							=> 'hier',
	'ACP_CONFIG_SUCCESS'				=> 'Die Konfiguration wurde erfolgreich aktualisiert',
	'ACP_COPY_NEW'						=> 'Als Entwurf kopieren',
	'ACP_COST_ERROR'					=> 'Du kannst keine negativen Kosten für einen Download einstellen!<br />Setze auf 0, um ihn kostenlos zu machen, oder auf irgendeinen positiven Wert.',
	'ACP_COST_EXPLAIN'					=> 'Hier kannst du einstellen, wieviele %1$s der Benutzer für diesen Download zahlen muss. Setze auf 0, um den Download kostenlos zu lassen.',
	'ACP_COST_FREE'						=> 'Kostenlos',
	'ACP_COST_SHORT'					=> 'Kosten',
	'ACP_DELETE_HAS_FILES'				=> 'Es sind noch Dateien in der Kategorie!<br />Bitte lösche sie, oder verschiebe sie erst zu einer anderen Kategorie!',
	'ACP_DELETE_SUB_CATS'				=> 'Lösche bitte zuerst deine Unterkategorien!',
	'ACP_DEL_CAT'						=> 'Bist du sicher, dass du die Kategorie <strong>%1$s</strong> löschen möchtest?<br />Wenn keine Downloads mehr in dem physikalischen Ordner auf deinem Webserver sind, wird dieser Ordner ebenfalls gelöscht!',
	'ACP_DEL_CAT_EXPLAIN'				=> 'Hier kannst du eine vorhanden Kategorie löschen.',
	'ACP_DEL_DOWNLOAD'					=> 'Lösche einen Download',
	'ACP_DEL_DOWNLOADS_TO'				=> 'Verschiebe die Downloads nach',
	'ACP_DEL_DOWNLOAD_YES'				=> 'Kategorie mitsamt den Downloads löschen?',
	'ACP_DEL_SUBS'						=> 'Lösche Unterkategorien',
	'ACP_DEL_SUBS_TO'					=> 'Verschiebe Unterkategorien nach',
	'ACP_DEL_SUBS_YES'					=> 'Kategorie mitsamt den Unterkategorien löschen?',
	'ACP_DOWNLOADS'						=> 'Downloads',
	'ACP_DOWNLOAD_DELETED'				=> 'Dein Download wurde erfolgreich gelöscht.',
	'ACP_DOWNLOAD_UPDATED'				=> 'Dein Download wurde erfolgreich aktualisiert',
	'ACP_DOWNLOAD_SYSTEM'				=> 'Downloadsystem',
	'ACP_EDIT_CAT'						=> 'Bearbeite Kategorie',
	'ACP_EDIT_CAT_EXPLAIN'				=> 'Hier kannst du eine vorhandene Kategorie bearbeiten.',
	'ACP_EDIT_DOWNLOADS'				=> 'Bearbeite Downloads',
	'ACP_EDIT_DOWNLOADS_EXPLAIN'		=> 'Hier kannst du den ausgewählten Download bearbeiten.',
	'ACP_EDIT_FILENAME'					=> 'Gespeicherte Datei',
	'ACP_EDIT_FILENAME_EXPLAIN'			=> '<strong>WICHTIG:</strong> Wenn du über diese Funktion den Dateinamen änderst, wird es keine zukünftige Prüfung mehr geben, ob die Datei real auf deinem Webspace vorhanden ist. <strong>Du musst die neue Datei mittels FTP hochladen und die alte manuell löschen!</strong>',
	'ACP_EDIT_SUB_CAT_EXPLAIN'			=> 'Das bereits erstellte Unterverzeichnis kann nicht bearbeitet werden. Wenn du also ein anderes Unterverzeichnis haben möchtest, musst du die derzeitige Kategorie löschen, und eine neue erstellen!',
	'ACP_FILE_TOO_BIG'					=> 'Die Datei ist größer, als dein Webanbieter erlaubt!',
	'ACP_FORUM_ID_ERROR'				=> 'Die eingegebene Foren-ID existiert nicht!',
	'ACP_EDS_INDEX'						=> 'Downloadsystem',
	'ACP_MANAGE_DOWNLOADS_EXPLAIN'		=> 'Hier kannst du deine Downloads hinzufügen, bearbeiten oder löschen.',
	'ACP_MULTI_DOWNLOAD'				=> '%d Downloads',
	'ACP_NEED_DATA'						=> 'Du musst alle Felder ausfüllen!',
	'ACP_NEW_ADDED'						=> 'Dein Eintrag wurde der Datenbank erfolgreich hinzugefügt',
	'ACP_NEW_CAT'						=> 'Neue Kategorie',
	'ACP_NEW_CAT_DESC'					=> 'Beschreibung der Kategorie',
	'ACP_NEW_CAT_DESC_EXPLAIN'			=> 'Gib eine sinnvolle Beschreibung deiner Kategorie ein.<br />BB-Codes, Smilies und Links werden automatisch erkannt.',
	'ACP_NEW_CAT_NAME'					=> 'Kategorienname',
	'ACP_NEW_CAT_PARENT'				=> 'Übergeordnete Kategorie',
	'ACP_NEW_COPY_DOWNLOAD'				=> 'Neuer Download mit Kopie',
	'ACP_NEW_COPY_DOWNLOAD_EXPLAIN'		=> 'Du hast ausgewählt, einen bereits existierenden Download für deinen neuen Download zu kopieren. Das wird ein wenig Zeit sparen, besonders wenn du vorhast, beispielsweise eine neue Version hochzuladen',
	'ACP_NEW_DESC'						=> 'Beschreibung',
	'ACP_NEW_DESC_EXPLAIN'				=> 'Gib hier eine Beschreibung für deinen Download ein.',
	'ACP_NEW_DL_CAT'					=> 'Kategorie',
	'ACP_NEW_DL_CAT_EXPLAIN'			=> 'Wähle hier die Kategorie, in der dein Download erscheinen soll.',
	'ACP_NEW_DOWNLOAD'					=> 'Neuer Download',
	'ACP_NEW_DOWNLOAD_EXPLAIN'			=> 'Hier kannst du neue Downloads hinzufügen.',
	'ACP_NEW_DOWNLOAD_SIZE'				=> 'Die maximale Dateigröße, die dein Webanbieter erlaubt, ist <strong>%1$s %2$s</strong>! Wegen der Zeit, die du zum Hochladen brauchst, kann dieser Wert niedriger sein!',
	'ACP_NEW_FILENAME'					=> 'Dateiname',
	'ACP_NEW_FILENAME_EXPLAIN'			=> 'Wähle die Datei zum Hochladen aus.',
	'ACP_NEW_SUB_CAT_EXPLAIN'			=> 'Gib hier den Ordnernamen auf deinem Webspace an, welchen du für diese Kategorie benutzen möchtest (ohne Slashes!).<br />Dieser Ordner wird dann automatisch erstellt unter deinem Ordner root/ext/dmzx/downloadsystem/files/.<br />Erlaubte Zeichen sind a-z, A-Z, 0-9, der Bindestrich ( - ) und der Unterstrich ( _ ).',
	'ACP_NEW_SUB_CAT_NAME'				=> 'Pfadname für die Kategorie',
	'ACP_NEW_TITLE'						=> 'Titel',
	'ACP_NEW_TITLE_EXPLAIN'				=> 'Gib hier den Titel für deinen neuen Download ein.',
	'ACP_NEW_VERSION'					=> 'Version',
	'ACP_NEW_VERSION_EXPLAIN'			=> 'Gib hier die Version deines neuen Downloads ein.',
	'ACP_NO_CAT'						=> 'Es sind keine Kategorien verfügbar!<br />Du musst zuerst mindestens eine Kategorie erstellen, bevor du anfangen kannst, Downloads hinzuzufügen!',
	'ACP_NO_CAT_ID'						=> 'Keine Kategorien-ID',
	'ACP_NO_CAT_PARENT'					=> 'Keine übergeordnete Kategorie',
	'ACP_NO_CAT_UPLOAD'					=> 'Es sind keine Kategorien verfügbar!<br />Du musst zuerst mindestens eine Kategorie erstellen, bevor du anfangen kannst, Dateien hinzuzufügen!',
	'ACP_NO_DOWNLOADS'					=> 'Keine Downloads',
	'ACP_NO_FILENAME'					=> 'Du musst eine Datei angeben, die zu deinem Upload gehört!',
	'ACP_PAGINATION_ACP'				=> 'Setze die Seitenanzahl auf der Seite Verwalte Downloads im ACP',
	'ACP_PAGINATION_ACP_EXPLAIN'		=> 'Stelle hier ein, wieviele Einträge je Seite du auf der Verwalte Downloads-Seite im ACP sehen möchtest. <em>Standard ist 5.</em>',
	'ACP_PAGINATION_DOWNLOADS'			=> 'Setze Seitenanzahl für die Kategorienseite',
	'ACP_PAGINATION_DOWNLOADS_EXPLAIN'	=> 'Stelle hier ein, wieviele Einträge je Seite du auf der Kategorienseite sehen möchtest.  <em>Standard ist 25.</em>',
	'ACP_PAGINATION_ERROR_ACP'			=> 'Du kannst keinen Wert kleiner als 5 eingeben!',
	'ACP_PAGINATION_ERROR_USER'			=> 'Du kannst keinen Wert kleiner als 3 eingeben!',
	'ACP_PAGINATION_ERROR_DOWNLOADS'	=> 'Du kannst keinen Wert kleiner als 10 eingeben!',
	'ACP_PAGINATION_USER'				=> 'Setze Seitenanzahl für die Downloadseite',
	'ACP_PAGINATION_USER_EXPLAIN'		=> 'Stelle hier ein, wieviele Einträge je Seite du auf der Downloadseite sehen möchtest.  <em>Standard ist 3.</em>',
	'ACP_PARENT_OPTION_NAME'			=> 'Wähle eine Kategorie',
	'ACP_REALLY_DELETE'					=> 'Bist du sicher, dass du deinen Download löschen möchtest?<br />Die physikalische Datei auf deinem Webserver wird ebenfalls gelöscht!',
	'ACP_SINGLE_DOWNLOAD'				=> '1 Download',
	'ACP_SORT_ASC'						=> 'Aufsteigend',
	'ACP_SORT_CAT'						=> 'Kategorie',
	'ACP_SORT_DESC'						=> 'Absteigend',
	'ACP_SORT_DIRECTION'				=> 'Sortierrichtung',
	'ACP_SORT_KEYS'						=> 'sortiere nach ',
	'ACP_SORT_TITLE'					=> 'Titel',
	'ACP_SUB_DL_CAT'					=> 'Unterkategorie',
	'ACP_SUB_NO_CAT'					=> '-----------',
	'ACP_SUB_DL_CAT_EXPLAIN'			=> 'Wähle hier die Unterkategorie.',
	'ACP_SUB_HAS_CAT_EXPLAIN'			=> 'Diese Kategorie hat Unterkategorien, daher kann sie nicht mit einer anderen Kategorie verknüpft werden.',
	'ACP_UPLOAD_FILE_EXISTS'			=> 'Die Datei, die du hochladen möchtest, existiert bereits in dieser Kategorie!',
	'ACP_WRONG_CHAR'					=> 'Du hast ein falsches Zeichen im Pfadnamen für die Kategorie eingegeben!<br />Erlaubt sind folgende Zeichen: a-z, A-Z, 0-9, der Bindestrich ( - ) und der Unterstrich ( _ )!',
	'ACP_MANAGE_CONFIG_EXPLAIN'			=> 'Hier kannst du ein paar Grundwerte einstellen.',
	'ACP_SET_USERNAME'					=> 'Benutzername für eine Übertragung',
	'ACP_SET_USERNAME_EXPLAIN'			=> 'Hier kannst du einen Benutzernamen eingeben, an den die Downloadkosten übertragen werden sollen. Lass das Feld leer, wenn niemand die genannten Kosten empfangen soll.',
	'ACP_FTP_OR_UPLOAD'					=> 'Du kannst nur einen FTP-Upload <strong>ODER</strong> einen normalen Upload machen!',
	'ACP_NEW_FTP_FILENAME_EXPLAIN'		=> 'Gib hier den Dateinamen an (z.B. beispiel.zip), wenn du die FTP-Upload-Methode benutzen möchtest.',
	'ACP_NEW_FTP_FILENAME'				=> 'FTP-Dateiname',
	'ACP_UPLOAD_METHOD'					=> 'Upload-Methode',
	'ACP_UPLOAD_METHOD_EXPLAIN'			=> 'Du kannst einen neuen Upload über FTP oder direkt hinzufügen. Wenn du vorhast, die FTP-Upload-Methode zu verwenden, muss die Datei in die richtige Kategorie hochgeladen werden, <strong>bevor</strong> du sie hier eingibst! Du kannst nur entweder die eine, oder die andere Methode zur gleichen Zeit benutzen!',
	'ACP_UPLOAD_FILE_NOT_EXISTS'		=> 'Die Datei ist in der genannten Kategorie nicht vorhanden. Da du die FTP-Upload-Methode ausgewählt hast, muss die Datei über FTP in den richtigen Ordner hochgeladen werden, <strong>BEVOR</strong> du sie hinzufügen kannst!',
));
