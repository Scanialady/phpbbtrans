<?php
/**
*
* Pages extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// Manage page
	'ACP_PAGES_MANAGE'					=> 'Pages verwalten',
	'ACP_PAGES_MANAGE_EXPLAIN'			=> 'Auf dieser Seite kannst du benutzerdefinierte statische Seiten hinzufügen, bearbeiten und löschen.',
	'ACP_PAGES_CREATE_PAGE'				=> 'Seite erstellen',
	'ACP_PAGES_CREATE_PAGE_EXPLAIN'		=> 'Unter Verwendung des Formulars unten kannst du eine neue benutzerdefinierte statische Seite für dein Board erstellen.',
	'ACP_PAGES_EDIT_PAGE'				=> 'Seite bearbeiten',
	'ACP_PAGES_EDIT_PAGE_EXPLAIN'		=> 'Unter Verwendung des Formulars unten kannst du eine existierende benutzerdefinierte statische Seite deines Forums aktualisieren.',

	// Display pages list
	'ACP_PAGES_TITLE'					=> 'Titel',
	'ACP_PAGES_DESCRIPTION'				=> 'Beschreibung',
	'ACP_PAGES_ROUTE'					=> 'Pfad',
	'ACP_PAGES_TEMPLATE'				=> 'Template',
	'ACP_PAGES_ORDER'					=> 'Reihenfolge',
	'ACP_PAGES_LINK'					=> 'Link',
	'ACP_PAGES_VIEW'					=> 'Seite ansehen',
	'ACP_PAGES_STATUS'					=> 'Status',
	'ACP_PAGES_PUBLISHED'				=> 'Veröffentlicht',
	'ACP_PAGES_PUBLISHED_NO_GUEST'		=> 'Veröffentlicht (nur Mitglieder)',
	'ACP_PAGES_PRIVATE'					=> 'Privat',
	'ACP_PAGES_EMPTY'					=> 'Keine Seiten gefunden',

	// Purge icons
	'ACP_PAGES_PURGE_ICONS'				=> 'Leere Symbole',
	'ACP_PAGES_PURGE_ICONS_LABEL'		=> 'Leere den Symbolcache der Seiten',
	'ACP_PAGES_PURGE_ICONS_EXPLAIN'		=> 'Wenn benutzerdefinierte Seitenlink-Symbolbilder hinzugefügt werden, musst du vielleicht den Cache leeren, um die neuen Bilder zu sehen. Platziere persönliche Symbolbilder namens <samp>pages_route.gif</samp>, wobei <samp>route</samp> der Pfadname der Seite ist, in den <samp>styles/*/theme/images/</samp> Ordnern von phpBB.',

	// Messages shown to user
	'ACP_PAGES_DELETE_CONFIRM'			=> 'Bist du sicher, dass du diese Seite löschen willst?',
	'ACP_PAGES_DELETE_SUCCESS'			=> 'Seite erfolgreich gelöscht.',
	'ACP_PAGES_DELETE_ERRORED'			=> 'Seite konnte nicht gelöscht werden.',
	'ACP_PAGES_ADD_SUCCESS'				=> 'Seite erfolgreich hinzugefügt.',
	'ACP_PAGES_EDIT_SUCCESS'			=> 'Seite erfolgreich aktualisiert.',

	// Add/edit page
	'ACP_PAGES_SETTINGS'				=> 'Seiteneinstellungen',
	'ACP_PAGES_OPTIONS'					=> 'Seitenoptionen',
	'ACP_PAGES_FORM_TITLE'				=> 'Seitentitel',
	'ACP_PAGES_FORM_TITLE_EXPLAIN'		=> 'Dies ist ein erforderliches Feld.',
	'ACP_PAGES_FORM_DESC'				=> 'Seitenbeschreibung',
	'ACP_PAGES_FORM_DESC_EXPLAIN'		=> 'Dies wird nur in der Liste der Seiten im ACP angezeigt.',
	'ACP_PAGES_FORM_ROUTE'				=> 'Seiten-URL Pfad (Route)',
	'ACP_PAGES_FORM_ROUTE_EXPLAIN'		=> 'Der <strong>Pfad</strong> ist eine eindeutige Kennung, benutzt am Ende einer Seiten-URL, um den Link zu der Seite zu definieren, z.B. <samp>phpBB/page/<strong>Pfad</strong></samp>. Nur Buchstaben, Zahlen, Binde- und Unterstrich sind erlaubt. Dies ist ein Pflichtfeld.',
	'ACP_PAGES_FORM_CONTENT'			=> 'Seiteninhalt',
	'ACP_PAGES_FORM_CONTENT_EXPLAIN'	=> 'Der Inhalt kann unter Verwendung normaler phpBB-BBcodes, Smilies und Magic URLs erstellt werden, oder du kannst den HTML-Modus aktivieren. Im HTML-Modus werden BBCodes, Smilies und Magic URLs nicht funktionieren, dafür hast du die Möglichkeit, jede gültige HTML-Syntax zu verwenden. Bitte beachte, dass dieser Inhalt zu einem existierenden HTML-Template hinzugefügt wird, also solltest du keine DOCTYPE, HTML, BODY oder HEAD-Tags verwenden. Allerdings können alle anderen HTML-Formatierungstags, einschließlich IFRAME, SCRIPT, STYLE, EMBED, VIDEO, etc. benutzt werden.',
	'ACP_PAGES_FORM_TEMPLATE'			=> 'Seitentemplate',
	'ACP_PAGES_FORM_TEMPLATE_EXPLAIN'	=> 'Benutzerdefinierte Seitentemplates, benannt <samp>pages_*.html</samp> können zu den Ordnern <samp>styles/*/template</samp> von phpBB hinzugefügt werden.',
	'ACP_PAGES_FORM_TEMPLATE_SELECT'	=> 'Wähle ein Template',
	'ACP_PAGES_FORM_ORDER'				=> 'Seiten-Reihenfolge',
	'ACP_PAGES_FORM_ORDER_EXPLAIN'		=> 'Seiten werden unter Berücksichtigung dieses Feldes sortiert, was dabei helfen kann, die Reihenfolge zu organisieren, in der ihre Links erscheinen. Niedrigere Zahlen haben Vorrang vor höheren Nummern.',
	'ACP_PAGES_FORM_LINKS'				=> 'Seitenlink-Standorte',
	'ACP_PAGES_FORM_LINKS_EXPLAIN'		=> 'Wähle einen oder mehrere Standorte, wo der Link zu dieser Seite erscheinen kann. Benutze STRG+KLICK (oder CMD+KLICK bei Mac) um mehr als ein Objekt zu wählen/abzuwählen.',
	'ACP_PAGES_FORM_DISPLAY'			=> 'Seite anzeigen',
	'ACP_PAGES_FORM_DISPLAY_EXPLAIN'	=> 'Wenn auf Nein gesetzt, wird die Seite nicht erreichbar sein. (Beachte: Administratoren sind noch in der Lage, auf die Seite zuzugreifen, was ihnen eine private Vorschau auf die Seite während der Entwicklung erlaubt.)',
	'ACP_PAGES_FORM_GUESTS'				=> 'Seite Gästen anzeigen',
	'ACP_PAGES_FORM_GUESTS_EXPLAIN'		=> 'Wenn auf Nein gesetzt, werden nur registrierte Benutzer in der Lage sein, auf die Seite zuzugreifen.',
	'ACP_PAGES_FORM_VIEW_PAGE'			=> 'Seitenlink',
	'PARSE_HTML'						=> 'Parse HTML',

	// Page link location names
	'NAV_BAR_LINKS_BEFORE'				=> 'In Nav Bar vor den Links',
	'NAV_BAR_LINKS_AFTER'				=> 'In Nav Bar nach den Links',
	'NAV_BAR_CRUMBS_BEFORE'				=> 'In Nav Bar vor Breadcrumbs',
	'NAV_BAR_CRUMBS_AFTER'				=> 'In Nav Bar nach Breadcrumbs',
	'FOOTER_TIMEZONE_BEFORE'			=> 'Footer vor Zeitzone',
	'FOOTER_TIMEZONE_AFTER'				=> 'Footer nach Zeitzone',
	'FOOTER_TEAMS_BEFORE'				=> 'Footer vor Teamlink',
	'FOOTER_TEAMS_AFTER'				=> 'Footer nach Teamlink',
	'QUICK_LINK_MENU_BEFORE'			=> 'Schnellzugriff-Menü oben',
	'QUICK_LINK_MENU_AFTER'				=> 'Schnellzugriff-Menü unten',
));
