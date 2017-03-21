<?php
/**
 *
 * @version $Id$
 * Knowledge Base extension for the phpBB Forum Software package (deutsch)
 * @copyright (c) 2017, kinerity, https://www.acsyste.com
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
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'ACP_KNOWLEDGEBASE'				=> 'Wissensdatenbank',
	'ACP_KNOWLEDGEBASE_MANAGE'		=> 'Kategorien verwalten',
	'ACP_KNOWLEDGEBASE_SETTINGS'	=> 'Wissensdatenbank Einstellungen',

	// ACP Logs
	'ACP_KNOWLEDGEBASE_SETTINGS_LOG'	=> '<strong>Wissensdatenbank Einstellungen geändert</strong>',

	'ACP_KNOWLEDGEBASE_ARTICLE_APPROVED_LOG'	=> '<strong>Wissensdatenbank Artikel genehmigt</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_ARTICLE_DELETED_LOG'		=> '<strong>Wissensdatenbank Artikel gelöscht</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_ARTICLE_DENIED_LOG'		=> '<strong>Wissensdatenbank Artikel verweigert</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_ARTICLE_DISAPPROVED_LOG'	=> '<strong>Wissensdatenbank Artikel abgelehnt</strong><br />» %s',

	'ACP_KNOWLEDGEBASE_CATEGORY_ADD_LOG'		=> '<strong>Neue Wissensdatenbank Kategorie erstellt</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_CATEGORY_EDIT_LOG'		=> '<strong>Wissensdatenbank Kategorieinformation aktualisiert</strong><br />» %1$s',
	'ACP_KNOWLEDGEBASE_CATEGORY_MOVE_DOWN_LOG'	=> '<strong>Wissensdatenbank Kategorie verschoben</strong> %1$s <strong>abwärts</strong> %2$s',
	'ACP_KNOWLEDGEBASE_CATEGORY_MOVE_UP_LOG'	=> '<strong>Wissensdatenbank Kategorie verschoben</strong> %1$s <strong>aufwärts</strong> %2$s',

	// Settings page
	'ACP_KNOWLEDGEBASE_SETTINGS_EXPLAIN'	=> 'Hier kannst du die Haupteinstellungen für die Wissensdatenbank vornehmen.',
	'ACP_KNOWLEDGEBASE_ENABLE'				=> 'Aktiviere Wissensdatenbank',
	'ACP_KNOWLEDGEBASE_HEADER_LINK'			=> 'Zeige Wissensdatenbank Link im Kopfbereich',
	'ACP_KNOWLEDGEBASE_FONT_ICON'			=> 'Wissensdatenbank Link-Icon',
	'ACP_KNOWLEDGEBASE_FONT_ICON_EXPLAIN'	=> 'Gib den Namen eines <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Font Awesome</a> Icons ein, welches du für den Link zur Wissensdatenbank im Kopfbereich verwenden möchtest. Lass dieses Feld leer, um kein Icon für die Wissensdatenbank zu benutzen.',
	'ACP_KNOWLEDGEBASE_FONT_ICON_INVALID'	=> 'Der Link zum Icon für die Wissensdatenbank enthält ungültige Zeichen.',
	'ACP_KNOWLEDGEBASE_SETTINGS_CHANGED'	=> 'Wissensdatenbank Einstellungen geändert.',

	// Manage page
	'ACP_KNOWLEDGEBASE_MANAGE_EXPLAIN'			=> 'Auf dieser Seite kannst du Kategorien hinzufügen, bearbeiten, löschen und reorganisieren. Eine Kategorie ist eine Gruppe zusammengehöriger Artikel. Jede Kategorie kann eine unbegrenzte Anzahl an Artikeln enthalten.',
	'ACP_KNOWLEDGEBASE_CATEGORY'				=> 'Kategorie',
	'ACP_KNOWLEDGEBASE_CREATE_CATEGORY'			=> 'Kategorie erstellen',
	'ACP_KNOWLEDGEBASE_CREATE_CATEGORY_EXPLAIN'	=> 'Mit dem Formular unten kannst du eine neue Kategorie erstellen, welche in der Wissensdatenbank angezeigt wird.',
	'ACP_KNOWLEDGEBASE_EDIT_CATEGORY'			=> 'Kategorie bearbeiten',
	'ACP_KNOWLEDGEBASE_EDIT_CATEGORY_EXPLAIN'	=> 'Mit dem Formular unten kannst du eine existierende Kategorie aktualisieren, welche in der Wissensdatenbank angezeigt wird.',
	'ACP_ARTICLES'								=> 'Artikel',
	'ACP_CATEGORIES'							=> 'Kategorien',
	'ACP_CATEGORY_SETTINGS'						=> 'Kategorie-Einstellungen',
	'ACP_CATEGORY_NAME'							=> 'Kategoriename',
	'ACP_CATEGORY_NAME_EXPLAIN'					=> 'Kategorienamen werden auf der Indexseite für jeden Artikel angezeigt, in der Kategorienansicht und in der Artikelansicht. Kategorienamen werden auch zur Identifikation deiner Kategorien benutzt, wenn du sie im ACP verwaltest.',
	'ACP_CATEGORY_DESCRIPTION'					=> 'Kategoriebeschreibung',
	'ACP_CATEGORY_DESCRIPTION_EXPLAIN'			=> 'Die Kategoriebeschreibung wird in der Kategorienansicht für die Kategorie angezeigt.',
	'ACP_ADD_CATEGORY'							=> 'Erstelle eine neue Kategorie',
	//'ACP_DELETE_CATEGORY_CONFIRM'				=> 'Bist du sicher, dass du diese Kategorie löschen willst?<br />Warnung: Wenn eine Kategorie gelöscht wird, werden alle darin enthaltenen Artikel ebenfalls gelöscht.',
	'ACP_CATEGORY_ADDED'						=> 'Kategorie erfolgreich hinzugefügt.',
	//'ACP_CATEGORY_DELETED'						=> 'Kategorie erfolgreich gelöscht.',
	'ACP_CATEGORY_EDITED'						=> 'Kategorie erfolgreich bearbeitet.',
));
