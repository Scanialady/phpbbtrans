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
	'ALL_CATEGORIES'		=> 'Alle Kategorien',
	'APPROVE'				=> 'Genehmigen',
	'APPROVE_ARTICLE'		=> 'Artikel genehmigen',
	'APPROVED'				=> 'Genehmigt',
	'ARTICLES'				=> 'Artikel',
	'ARTICLE_CONFIRM'		=> 'Bist du sicher, dass du diesen Artikel %1$s möchtest?',
	'ARTICLE_DENIED'		=> 'Artikel verweigert',
	'ARTICLE_STORED_MOD'	=> 'Dieser Artikel wurde erfolgreich übertragen, doch muss er erst durch einen Moderator genehmigt werden, ehe er öffentlich sichtbar ist.',
	'ARTICLE_DISAPPROVED'	=> 'Artikel abgelehnt',
	'AUTHOR'				=> 'Autor',

	'BUTTON_APPROVE'		=> 'Ablehnen',
	'BUTTON_DELETE'			=> 'Löschen',
	'BUTTON_DENY'			=> 'Verweigern',
	'BUTTON_EDIT'			=> 'Bearbeiten',
	'BUTTON_NEW_ARTICLE'	=> 'Neuer Artikel',
	'BUTTON_DISAPPROVE'		=> 'Ablehnen',

	'CATEGORIES'	=> 'Kategorien',
	'CHANGE_POSTER'	=> 'Ersteller ändern',

	'DELETE_ARTICLE'		=> 'Artikel löschen',
	'DENIED'				=> 'Verweigert',
	'DENY'					=> 'Verweigern',
	'DENY_ARTICLE'			=> 'Artikel verweigern',
	'DESCRIPTION'			=> 'Beschreibung',
	'DISAPPROVE'			=> 'Ablehnen',
	'DISAPPROVE_ARTICLE'	=> 'Artikel ablehnen',
	'DISAPPROVED'			=> 'Abgelehnt',

	'EDIT_ARTICLE'	=> 'Artikel bearbeiten',

	'EMTPY_TITLE'		=> 'Du musst einen Titel eingeben, wenn du einen Artikel erstellst.',
	'EMPTY_DESCRIPTION'	=> 'Du musst eine Beschreibung eingeben, wenn du einen Artikel erstellst.',
	'EMPTY_CATEGORY'	=> 'Du musst mindestens eine Kategorie angeben, zu der dieser Artikel gehört.',
	'EMPTY_TEXT'		=> 'Du musst eine Nachricht eingeben, wenn du einen Artikel erstellst.',

	'INVALID_MODE'	=> 'Ungültiger Modus',
	'INVALID_TYPE'	=> 'Ungültiger Typ',

	'KNOWLEDGEBASE'			=> 'Wissensdatenbank',
	'KNOWLEDGEBASE_EXPLAIN'	=> 'Dieser Abschnitt enthält detaillierte Artikel, die sich auf einige der häufigsten Probleme beziehen, welchen Benutzer begegnen. Artikel von Community-Mitgliedern werden durch das Team auf ihre Korrektheit geprüft. Wenn du hier keine Antwort auf deine Frage findest, empfehlen wir, auch durch die Foren zu schauen und die Suche zu benutzen.',
	'KNOWLEDGEBASE_TITLE'	=> 'Wissensdatenbank ansehen',

	'LAST_MODIFIED'		=> 'Zuletzt geändert',
	'LINK_TO_ARTICLE'	=> 'Link zu diesem Artikel',

	'NARROW_SEARCH'	=> 'Verfeinere deine Suche, indem du eine Kategorie auswählst',

	'NOTIFICATION_ARTICLE_APPROVED'		=> '<strong>Artikel genehmigt</strong>: %1$s',
	'NOTIFICATION_ARTICLE_DENIED'		=> '<strong>Artikel verweigert</strong>: %1$s',
	'NOTIFICATION_ARTICLE_DISAPPROVED'	=> '<strong>Artikel abgelehnt</strong>: %1$s',
	'NOTIFICATION_ARTICLE_IN_QUEUE'		=> 'Anfrage für <strong>Wissensdatenbank Artikelgenehmigung</strong>: %1$s',

	'NO_ARTICLE'	=> 'Der angefragte Artikel existiert nicht.',
	'NO_ARTICLES'	=> 'Keine Artikel in der Wissensdatenbank oder dieser Kategorie vorhanden.',
	'NO_CATEGORY'	=> 'Die angefragte Kategorie existiert nicht.',
	'NO_PAGE_MODE'	=> 'Ungültige oder fehlende Spezifikation des Seitenmodus.',

	'POST_ARTICLE'	=> 'Erstelle einen neuen Artikel',

	'TYPE'	=> 'Typ',

	'VIEWING_KNOWLEDGEBASE'	=> 'Betrachtet Wissensdatenbank',

	'WRITTEN_BY'	=> 'Geschrieben von',
	'WRITTEN_ON'	=> 'Geschrieben auf',
));
