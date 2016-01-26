<?php
/***************************************************************************
*
* @package Medals Mod for phpBB3
* @version $Id: medals.php,v 0.7.0 2008/01/14 Gremlinn$
* @copyright (c) 2008 Nathan DuPra (mods@dupra.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
***************************************************************************/

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

$lang = array_merge($lang, array(
	'IMG_ICON_POST_APPROVE'			=> 'Zustimmen',
	'ACP_MEDALS_INDEX'				=> 'Orden ACP',
	'ACP_MEDALS_INDEX_EXPLAIN'		=> 'Erklärung Orden Hauptseite',
	'ACP_MEDALS_TITLE'				=> 'Ordensverwaltung',
	'ACP_MEDALS_SETTINGS'			=> 'Konfiguration',

	'MEDALS_MOD_INSTALLED'			=> 'Medals Extension Version %s installiert',
	'MEDALS_MOD_UPDATED'			=> 'Medals Extension aktualisiert auf %s',
	'MEDALS_MOD_MANUAL'				=> 'Du hast eine ältere Version der Medals Extension installiert.<br />Du musst diese Version zuerst deinstallieren<br />Vergiss nicht, zuerst ein Backup zu erstellen!',

	'ACL_U_AWARD_MEDALS'			=> 'Kann Benutzer mit Orden auszeichnen',
	'ACL_U_NOMINATE_MEDALS'			=> 'Kann andere Benutzer für Orden nominieren',
	'ACL_A_MANAGE_MEDALS'			=> 'Kann das Ordensverwaltunsmodul benutzen',

// Medals Management
	'ACP_MEDAL_MGT_TITLE'				=> 'Ordensverwaltung',
	'ACP_MEDAL_MGT_DESC'				=> 'Hier kannst du Ordenskategorien ansehen, erstellen, ändern und löschen',

	'ACP_MEDALS'						=> 'Orden',
	'ACP_MEDALS_DESC'					=> 'Hier kannst du Orden für diese Kategorie ansehen, erstellen, ändern und löschen.',
	'ACP_MULT_TO_USER'					=> 'Anzahl der Auszeichnungen je Benutzer',
	'ACP_USER_NOMINATED'				=> 'Nominierte Benutzer',
	'ACP_MEDAL_LEGEND'					=> 'Orden',
	'ACP_MEDAL_TITLE_EDIT'				=> 'Orden bearbeiten',
	'ACP_MEDAL_TEXT_EDIT'				=> 'Ändere einen bestehenden Orden',
	'ACP_MEDAL_TITLE_ADD'				=> 'Orden erstellen',
	'ACP_MEDAL_TEXT_ADD'				=> 'Einen von Grund auf neuen Orden erstellen',
	'ACP_MEDAL_DELETE_GOOD'				=> 'Der Orden wurde erfolgreich entfernt.<br /><br /> Klicke <a href="%s">hier</a> um zur vorherigen Kategorie zurückzukehren',
	'ACP_MEDAL_EDIT_GOOD'				=> 'Der Orden wurde erfolgreich aktualisiert.<br /><br /> Klicke <a href="%s">hier</a> um zur Kategorie des Ordens zu gehen',
	'ACP_MEDAL_ADD_GOOD'				=> 'Der Orden wurde erfolgreich hinzugefügt.<br /><br /> Klicke <a href="%s">hier</a> um zur Kategorie des Ordens zu gehen',
	'ACP_CONFIRM_MSG_1'					=> 'Bist du sicher, dass du diesen Orden löschen willst? Das wird diesen Orden auch von jedem Benutzer löschen, der ihn erhalten hat. <br /><br /><form method="post"><fieldset class="submit-buttons"><input class="button1" type="submit" name="confirm" value="Yes" />&nbsp;<input type="submit" class="button2" name="cancelmedal" value="No" /></fieldset></form>',
	'ACP_NAME_TITLE'					=> 'Ordensname',
	'ACP_NAME_DESC'						=> 'Ordensbeschreibung',
	'ACP_IMAGE_TITLE'					=> 'Ordensbild',
	'ACP_IMAGE_EXPLAIN'					=> 'Das gif-Bild für den Orden innerhalb des images/medals/ Ordners auf dem FTP',
	'ACP_DEVICE_TITLE'					=> 'Basisbild-Name',
	'ACP_DEVICE_EXPLAIN'				=> 'Der Basisname des gif-Bildes innerhalb des images/medals/devices Ordners auf dem FTP, das dynamisch erstellten Orden zugeordnet werden soll.<br /> Beispiel: device-2.gif = device',
	'ACP_PARENT_TITLE'					=> 'Ordenskategorie',
	'ACP_PARENT_EXPLAIN'				=> 'Die Kategorie, in die der Orden eingeordnet werden soll',
	'ACP_DYNAMIC_TITLE'					=> 'Dynamisches Ordensbild',
	'ACP_DYNAMIC_EXPLAIN'				=> 'Dynamische Erstellung des Bildes für mehrfache Auszeichnungen.',
	'ACP_NOMINATED_TITLE'				=> 'Ordensnominierungen',
	'ACP_NOMINATED_EXPLAIN'				=> 'Können Benutzer andere Benutzer für diesen Orden nominieren?',
	'ACP_CREATE_MEDAL'					=> 'Erstelle Orden',
	'ACP_NO_MEDALS'						=> 'Keine Orden',
	'ACP_NUMBER'						=> 'Anzahl der Auszeichnungen',
	'ACP_NUMBER_EXPLAIN'				=> 'Definiert, wie oft dieser Orden einem Benutzer verliehen werden kann.',
	'ACP_POINTS'						=> 'Punkte',
	'ACP_POINTS_EXPLAIN'				=> 'Definiert, wie viele Punkte verliehen (oder abgezogen) werden für den Empfang dieses Ordens.<br />Arbeitet mit Simple Points.',

	'ACP_MEDALS_MGT_INDEX'				=> 'Ordenskategorien',
	'ACP_MEDAL_TITLE_CAT'				=> 'Bearbeite Kategorie',
	'ACP_MEDAL_TEXT_CAT'				=> 'Ändere eine bestehende Kategorie',
	'ACP_MEDAL_LEGEND_CAT'				=> 'Kategorie',
	'ACP_NAME_TITLE_CAT'				=> 'Kategorienname',
	'ACP_CREATE_CAT'					=> 'Erstelle Kategorie',
	'ACP_CAT_ADD_FAIL'					=> 'Es ist kein Kategorienname zum Hinzufügen angegeben.<br /><br /> Klicke <a href="%s">hier</a> um zur Kategorienliste zurückzukehren',
	'ACP_CAT_ADD_GOOD'					=> 'Die Kategorie wurde erfolgreich hinzugefügt.<br /><br /> Klicke <a href="%s">hier</a> um zur Kategorienliste zurückzukehren',
	'ACP_CAT_EDIT_GOOD'					=> 'Die Kategorie wurde erfolgreich bearbeitet.<br /><br /> Klicke <a href="%s">hier</a> um zur Kategorienliste zurückzukehren',
	'ACP_CAT_DELETE_CONFIRM'			=> 'In welche Kategorie möchtest du alle Orden aus dieser Kategorie beim Löschen verschieben? <br /><form method="post"><fieldset class="submit-buttons"><select name="newcat">%s</select><br /><br /><input class="button1" type="submit" name="moveall" value="Move All Medals" />&nbsp;<input class="button2" type="submit" name="deleteall" value="Delete All Medals" />&nbsp;<input type="submit" class="button2" name="cancelcat" value="Cancel Deletion" /></fieldset></form>',
	'ACP_CAT_DELETE_CONFIRM_ELSE'		=> 'Es gibt keine anderen Kategorien, in die diese Orden verschoben werden könnten.<br />Bist du sicher, dass du diese Kategorie mit allen Ihren Orden löschen willst? Are you sure you wish to remove this category and all of its medals?<br /><form method="post"><fieldset class="submit-buttons"><br /><input class="button2" type="submit" name="deleteall" value="Yes" />&nbsp;<input type="submit" class="button2" name="cancelcat" value="No" /></fieldset></form>',
	'ACP_CAT_DELETE_GOOD'				=> 'Diese Kategorie, alle ihre Inhalte und alle zugehörigen Auszeichnungen wurden erfolgreich gelöscht. <br /><br /> Klicke <a href="%s">hier</a> um zur Kategorienliste zurückzukehren',
	'ACP_CAT_DELETE_MOVE_GOOD'			=> 'Alle Orden aus "%1$s" wurden verschoben nach "%2$s", und die Kategorie wurde erfolgreich gelöscht.<br /><br /> Klicke <a href="%3$s">hier</a> um zur Kategorienliste zurückzukehren',
	'ACP_NO_CAT_ID'						=> 'Keine Kategorien',

// Medals Configuration
	'ACP_CONFIG_TITLE'					=> 'Ordenskonfiguration',
	'ACP_CONFIG_DESC'					=> 'Hier kannst du die grundlegenden Einstellungen für das Medal System wählen',
	'ACP_MEDALS_CONF_SETTINGS'			=> 'Ordens-Konfigurationseinstellungen',
	'ACP_MEDALS_CONF_SAVED'				=> 'Ordenskonfiguration gespeichert<br /><br /> Klicke <a href="%s">hier</a> um zum Ordens-ACP zu gehen',
	'ACP_MEDALS_SM_IMG_WIDTH'			=> 'Breite kleines Ordensbild',
	'ACP_MEDALS_SM_IMG_WIDTH_EXPLAIN'	=> 'Die Breite (in pixel) in der Orden in der Themenansicht und im Bereich der Ordensinformation im Profil dargestellt werden sollen.<br />Wenn du hier 0 angibst, wird keine Breite definiert.',
	'ACP_MEDALS_SM_IMG_HT'				=> 'Höhe kleines Ordensbild',
	'ACP_MEDALS_SM_IMG_HT_EXPLAIN'		=> 'Die Höhe (in pixel) in der Orden in der Themenansicht (viewtopic) und im Bereich der Ordensinformation im Profil dargestellt werden sollen.<br />Wenn du hier 0 angibst, wird keine Höhe definiert..',
	'ACP_MEDALS_VT_SETTINGS'			=> 'Viewtopic Anzeigeeinstellungen',
	'ACP_MEDALS_TOPIC_DISPLAY'			=> 'Erlaube Anzeige von Orden in der Themenansicht',
	'ACP_MEDALS_TOPIC_ROW'				=> 'Anzahl Orden waagerecht',
	'ACP_MEDALS_TOPIC_ROW_EXPLAIN'		=> 'Anzahl der Orden, die in Viewtopic waagerecht angezeigt werden sollen.',
	'ACP_MEDALS_TOPIC_COL'				=> 'Anzahl Orden abwärts',
	'ACP_MEDALS_TOPIC_COL_EXPLAIN'		=> 'Anzahl der Orden, die in Viewtopic abwärts angezeigt werden sollen.',
	'ACP_MEDALS_PROFILE_ACROSS'			=> 'Anzahl Orden Profil waagerecht',
	'ACP_MEDALS_PROFILE_ACROSS_EXPLAIN'	=> 'Anzahl der Orden, die Profil waagerecht angezeigt werden sollen.',
	'ACP_MEDALS_ACTIVATE' 				=> 'Medals Extension aktivieren',
));
