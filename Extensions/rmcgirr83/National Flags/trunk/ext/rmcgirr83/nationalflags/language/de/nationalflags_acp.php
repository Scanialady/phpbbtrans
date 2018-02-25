<?php

/**
*
*
* @package - National Flags language (Deutsch)
* @version $Id$
* @copyright (c) RMcGirr83
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// Some characters you may want to copy&paste:
//  ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'ACP_FLAGS_EXPLAIN'					=> 'Hier kannst du die unterschiedlichen Flaggen hinzufügen, bearbeiten und löschen.',
	'ACP_NO_UPLOAD'						=> '<br><strong>Wenn du Bilder verwenden möchtest, solltest du sie nach ext/rmcgirr83/nationalflags/flags hochladen, bevor du die neuen Flaggen hinzufügst. Die Flagge muss einen Namen in Kleinbuchstaben haben, beispielsweise uk.gif</strong>',
	'ACP_FLAGS_DONATE'					=> 'Bitte ziehe eine <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=S4UTZ9YNKEDDN&item_name=National%20Flags" onclick="window.open(this.href); return false;"><strong>Spende</strong></a> in Betracht, wenn du die Extension magst.',
	'ACP_FLAG_USERS'					=> 'Anzahl an Benutzern',

	//Add/Edit Flags
	'FLAG_DEFAULT'						=> 'Standardflagge',
	'FLAG_DEFAULT_EXPLAIN'				=> 'Wenn dies auf Ja gesetzt wird, wird die Flagge als erste in der Benutzerauswahl angezeigt, wenn ein Benutzer keine Flagge ausgewählt hat.',
	'FLAG_EDIT'							=> 'Flagge bearbeiten',
	'FLAG_NAME'							=> 'Flaggenname',
	'FLAG_NAME_EXPLAIN'					=> 'Der Name der Flagge. Der Flaggentitel wird so angezeigt, wie es hier eingestellt ist.',
	'FLAG_IMG'							=> 'Bildname',
	'FLAG_IMG_EXPLAIN'					=> 'Der Name der Bilddatei, beispielsweise: uk.gif. Neue Bilder sollten hochgeladen werden nach ext/rmcgirr83/nationalflags/flags.',
	'FLAG_IMAGE'						=> 'Flaggenbild',
	'FLAG_ADD'							=> 'Neue Flagge hinzufügen',
	'FLAG_UPLOAD'						=> 'Flagge hochladen',
	'FLAG_UPLOAD_NOTICE'				=> 'Ein hochgeladenes Bild wird ein bereits auf dem Server vorhandenes überschreiben. Groß- und Kleinschreibung <strong>wird</strong>  bei der Bilddatei beachtet.',
	'FLAG_UPLOAD_NO_OVERWRITE'			=> 'Du kannst ein bereits vorhandenes Bild nicht mit dem gleichen Namen und der gleichen Erweiterung wie unten gezeigt überschreiben.',
	'FLAG_FOUND'						=> 'Flagge gefunden',
	'IMAGES_ON_SERVER'					=> 'Bildnamen auf dem Server',

	//Settings
	'FLAGS_REQUIRED'					=> 'Erforderliches Feld',
	'FLAGS_REQUIRED_EXPLAIN'			=> 'Wenn du hier auf Ja klickst, erzwingst du, dass neue Registranten, sowie diejenigen, die ihr Benutzerprofil aufrufen, eine Flagge auswählen müssen.',
	'FLAGS_DISPLAY_MSG'					=> 'Zeige eine Nachricht an',
	'FLAGS_DISPLAY_MSG_EXPLAIN'			=> 'Wenn hier Ja ausgewählt wird, wird im Forum eine Nachricht für den Benutzer angezeigt, dass er eine Flagge auswählen soll.',
	'FLAGS_NUM_DISPLAY'					=> 'Anzahl an Flaggen',
	'FLAGS_NUM_DISPLAY_EXPLAIN'			=> 'Die Anzahl an Flaggen, die auf der Forenübersicht angezeigt wird.',
	'FLAGS_ON_INDEX'					=> 'Auf Forenübersicht anzeigen',
	'FLAGS_ON_INDEX_EXPLAIN'			=> 'Zeigt eine Zusammenfassung von Flaggenbenutzern auf der Forenübersicht an.',
	'FLAGS_DISPLAY_TO_GUESTS'			=> 'Gästen Flaggen anzeigen',
	'FLAGS_DISPLAY_TO_GUESTS_EXPLAIN'	=> 'Wenn hier Ja ausgewählt wird, werden die Flaggen Gästen und Bots angezeigt',

	'FLAGS_VIEWTOPIC_POSITION'			=> 'Position der Flagge',
	'FLAGS_VIEWTOPIC_POSITION_EXPLAIN'	=> 'Wo du eine Benutzerflagge gern anzeigen lassen würdest',
	'FLAG_POSITION_AFTER_AVATAR'		=> 'Nach dem Benutzeravatar', //1
	'FLAG_POSITION_BEFORE_AVATAR'		=> 'Vor dem Benutzeravatar', //2
	'FLAG_POSITION_AFTER_USER_NAME'		=> 'Nach dem Benutzernamen', //3
	'FLAG_POSITION_BEFORE_USER_NAME'	=> 'Vor dem Benutzernamen', //4
	'FLAG_POSITION_ABOVE_RANK'			=> 'Über dem Benutzerrang', //5
	'FLAG_POSITION_BELOW_RANK'			=> 'Unter dem Benutzerrang', //6
	'FLAG_POSITION_AFTER_PROFILE_FIELDS'	=> 'Nach den Profilfeldern', //7
	'FLAG_POSITION_BEFORE_PROFILE_FIELDS'	=> 'Vor den Profilfeldern', //8
	'FLAG_POSITION_AFTER_CONTACT_FIELDS'	=> 'Nach den Kontaktfeldern', //0

	//Logs, messages and errors

	'MSG_FLAGS_DELETED'					=> 'Flagge wurde gelöscht.',
	'MSG_CONFIRM'						=> '<strong>Bist du sicher, dass du diese Flagge löschen möchtest?</strong>',
	'MSG_FLAG_CONFIRM_DELETE'			=> array(
		1	=> '<br><strong>%d</strong> Benutzer verwendet diese Flagge, und muss eine andere Flagge wählen, wenn du diese hier löschst.',
		2	=> '<br><strong>%d</strong> Benutzer verwenden diese Flagge, und müssen eine andere Flagge wählen, wenn du diese hier löschst.',
	),
	'MSG_FLAG_EDITED'					=> 'Die Flagge wurde bearbeitet.',
	'MSG_FLAG_ADDED'					=> 'Die neue Flagge wurde hinzugefügt.',
	'FLAG_ERROR_NO_FLAG_NAME'			=> 'Kein Flaggenname definiert, dies ist ein erforderliches Feld.',
	'FLAG_ERROR_NO_FLAG_IMG'			=> 'Kein Flaggenbild definiert, dies ist ein erforderliches Feld.',
	'FLAG_ERROR_NOT_EXIST'				=> 'Die ausgewählte Flagge existiert nicht.',
	'FLAG_CONFIG_SAVED'					=> '<strong>National Flags Einstellungen gespeichert</strong>',
	'FLAG_NAME_EXISTS'					=> 'Eine Flagge mit diesem Namen existiert bereits',
	'FLAG_SETTINGS_CHANGED'				=> 'National Flags Einstellungen geändert.',
	'FLAG_IMAGE_GENERAL_UPLOAD_ERROR'	=> 'Konnte die Flagge nicht hochladen nach %s. Möglicherweise existiert das Flaggenbild bereits.',
	'FLAG_IMAGE_DISALLOWED_CONTENT'			=> 'Die Übertragung wurde abgebrochen, weil die Datei als potentielle Bedrohung eingestuft wurde.',
	'FLAG_IMAGE_DISALLOWED_EXTENSION'		=> 'Diese Datei kann nicht angezeigt werden, weil die Erweiterung <strong>%s</strong> nicht zugelassen ist.',
	'FLAG_IMAGE_EMPTY_FILEUPLOAD'			=> 'Die Flaggendatei ist leer.',
	'FLAG_IMAGE_EMPTY_REMOTE_DATA'			=> 'Die eingereichte Flagge kann nicht übertragen werden, weil die Daten falsch oder beschädigt zu sein scheinen.',
	'FLAG_IMAGE_IMAGE_FILETYPE_MISMATCH'	=> 'Konflikt bezüglich Flaggendateityp: erwartete Erweiterung %1$s, aber Dateierweiterung %2$s vorgefunden.',
	'FLAG_IMAGE_INVALID_FILENAME'			=> '%s ist ein fehlerhafter Dateiname.',
	'FLAG_IMAGE_NOT_UPLOADED'				=> 'Die Flagge kann nicht übertragen werden',
	'FLAG_IMAGE_PARTIAL_UPLOAD'				=> 'Die Datei kann nicht vollständig übertragen werden.',
	'FLAG_IMAGE_PHP_SIZE_NA'				=> 'Die Flagge ist zu groß.<br>Die in der php.ini gesetzte maximale Größe konnte nicht ermittelt werden.',
	'FLAG_IMAGE_PHP_SIZE_OVERRUN'			=> 'Die Flagge ist zu groß.<br>Die in der php.ini gesetzte maximale Größe konnte nicht ermittelt werden.',
	'FLAG_IMAGE_REMOTE_UPLOAD_TIMEOUT'		=> 'Die gewählte Flagge konnte nicht hochgeladen werden, weil die Anfrage mit einer Zeitüberschreitung endete.',
	'FLAG_IMAGE_UNABLE_GET_IMAGE_SIZE'		=> 'Es war nicht möglich, die Abmessungen der Flagge zu ermitteln',
	'FLAG_IMAGE_URL_INVALID'				=> 'Die Adresse der Flagge ist fehlerhaft',
	'FLAG_IMAGE_URL_NOT_FOUND'				=> 'Die Datei konnte nicht gefunden werden.',
	'FLAG_IMAGE_WRONG_FILESIZE'				=> 'Die Flaggengröße muss  zwischen 0 und %1d %2s liegen.',
	'FLAG_IMAGE_WRONG_SIZE'					=> 'Die Flagge muss exakt %3$s breit und %4$s hoch sein. Das übermittelte Bild ist %5$s breit und %6$s hoch.',
	'FLAGS_REQUIRE_540'			=> 'Diese Erweiterung benötigt mindestens PHP Version 5.4.0 und phpBB version 3.1.4-RC1. Bitte aktualisiere deine PHP version und/oder deine phpBB Version, um diese Erweiterung benutzen zu können.',
));
