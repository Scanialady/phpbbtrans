<?php
/**
*
* @version $Id$
* @package phpBB Extension - Quotes Collection
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_DM_QC'							=> 'DM Quotes Collection',
	'ACP_DM_QC_CONFIG'					=> 'Konfiguration',
	'ACP_DM_QC_ALL'						=> 'Alle',
	'ACP_DM_QC_SORT_ID'					=> 'ID',
	'ACP_DM_QC_SORT_AUTHOR'				=> 'Autor',
	'ACP_DM_QC_SORT_DATE'				=> 'Datu',
	'ACP_DM_QC_SORT_APPROVAL'			=> 'Genehmigt',
	'ACP_DM_QC_SORT_POSTER'				=> 'Verfasser',
	'ACP_DM_QC_SINGLE'					=> '1 Zitat',
	'ACP_DM_QC_MULTI'					=> '%1$s Zitate',
	'ACP_DM_QC_RELEASE'					=> 'Zitate freischalten',
	'ACP_DM_QC_RELEASE_EXPLAIN'			=> 'Hier kannstdu Zitate veröffentlichen',
	'ACP_DM_QC_CONFIG_EXPLAIN'			=> 'Hier kannst du einige Grundwerte einstellen',
	'ACP_DM_QC_APPROVAL'				=> 'Zitate erfordern eine Genehmigung',
	'ACP_DM_QC_APPROVAL_EXPLAIN'		=> 'Möchtest du jedes Zitat genehmigen?',
	'ACP_DM_QC_PAGI_ACP'				=> 'Anzahl Zitate pro Seite (ACP)',
	'ACP_DM_QC_PAGI_ACP_EXPLAIN'		=> 'Anzahl an Zitaten, die du im ACP je Seite angezeigt haben möchtest.',
	'ACP_DM_QC_PAGI_USER'				=> 'Anzahl Zitate pro Benutzerseite',
	'ACP_DM_QC_PAGI_USER_EXPLAIN'		=> 'Anzahl an Zitaten, die Benutzer je Seite sehen können, wenn sie auswählen, dass alle Zitate angezeigt werden sollen',
	'ACP_DM_QC_PAGE_ERROR'				=> 'Du kannst keinen Wert unterhalb von 5 für die Anzahl der Zitate pro Seite im ACP oder auf den Benutzerseiten eingeben',
	'ACP_DM_QC_ENABLE'					=> 'Aktiviere DM Quotes Collection',
	'ACP_DM_QC_ENABLE_EXPLAIN'			=> 'Möchtest du DM Quotes Collection einschalten?',
	'ACP_DM_QC_INDEX'					=> 'Zitate auf dem Index',
	'ACP_DM_QC_INDEX_EXPLAIN'			=> 'Möchtest du ein zufälliges Zitat auf der Forenhauptseite sehen?',
	'ACP_DM_QC_GUESTS'					=> 'Zitate für Gäste',
	'ACP_DM_QC_GUESTS_EXPLAIN'			=> 'Möchtest du, dass Gäste die Zitate sehen können?',
	'ACP_DM_QC_CONFIG_SUCCESS'			=> 'Die Konfiguration wurde erfolgreich aktualisiert',
	'ACP_DM_QC_EDIT'					=> 'Zitate bearbeiten',
	'ACP_DM_QC_EDIT_EXPLAIN'			=> 'Hier kannst du Zitate hinzufügen, löschen oder bearbeiten',
	'ACP_DM_QC_EDIT_QUOTE'				=> 'Zitat bearbeiten',
	'ACP_DM_QC_EDIT_QUOTE_EXPLAIN'		=> 'Hier kannst du das ausgewählte Zitat bearbeiten',
	'ACP_DM_QC_ID'						=> 'ID',
	'ACP_DM_QC_QUOTE'					=> 'Zitat',
	'ACP_DM_QC_QUOTE_EXPLAIN'			=> 'Gib hier dein Zitat ein',
	'ACP_DM_QC_AUTHOR'					=> 'Autor',
	'ACP_DM_QC_AUTHOR_EXPLAIN'			=> 'Gib hier den Originalautor des Zitats ein',
	'ACP_DM_QC_POSTER'					=> 'beigetragen von',
	'ACP_DM_QC_DATE'					=> 'gesendet am',
	'ACP_DM_QC_APPROVE'					=> 'Aktiviert',
	'ACP_DM_QC_APPROVE_EXPLAIN'			=> 'Hier kannst du das Zitat aktivieren',
	'ACP_DM_QC_ADD'						=> 'Neues Zitat hinzufügen',
	'ACP_DM_QC_ADD_EXPLAIN'				=> 'Hier kannst du neue Zitate hinzufügen. Sei so gut und fülle alle Felder aus!',
	'ACP_DM_QC_ADDED'					=> 'Das Zitat wurde erfolgreich hinzugefügt',
	'ACP_DM_QC_DELETED'					=> 'Der Eintrag wurde erfolgreich gelöscht',
	'ACP_DM_QC_REALY_DELETE'			=> 'Bist du sicher, dass du den ausgewählten Eintrag löschen möchtest?',
	'ACP_DM_QC_NEED_DATA'				=> 'Du musst mindestens das Zitat selbst eingeben ....',
	'ACP_DM_QC_UPDATED'					=> 'Der Eintrag wurde erfolgreich aktualisiert',
	'ACP_DM_QC_NO_QUOTES'				=> 'Keine Zitate verfügbar',
	'ACP_DM_QC_UPS'						=> '%1$s für das Erstellen eines Zitats',
	'ACP_DM_QC_UPS_EXPLAIN'				=> 'Wenn du den Ultimate Points Mod installiert hast, kannst du entscheiden, wie viele %1$s Benutzer für das Verfassen eines Zitates erhalten. Wenn du ihnen keine %1$s geben möchtest, setze hier einfach 0 ein',
	'ACP_DM_QC_UPS_TITLE'				=> 'Ultimate Points',
	'LOG_DM_QC_CONFIG_SETTINGS'			=> '<strong>DM QC Konfiguration aktualisiert</strong>',
	'LOG_MODIFICATION_ADDED'			=> '<strong>Modifikation hinzugefügt</strong><br />» %s',
	'LOG_MODIFICATION_REMOVED'			=> '<strong>Modifikation entfernt</strong><br />» %s',
	'LOG_USER_QUOTE_ADDED'				=> '<strong>Zitat hinzugefügt</strong>',
	'LOG_USER_QUOTE_DELETED'			=> '<strong>Zitat Nr. %s gelöscht</strong>',
	'LOG_ADMIN_QUOTE_ADDED'				=> '<strong>Zitat hinzugefügt</strong>',
	'LOG_ADMIN_QUOTE_EDITED'			=> '<strong>Zitat Nr. %s bearbeitet</strong>',
	'LOG_ADMIN_QUOTE_DELETED'			=> '<strong>Zitat Nr. %s gelöscht</strong>',
	'LOG_ADMIN_QUOTE_RELEASED'			=> '<strong>Zitat Nr. %s freigegeben</strong>',
	'NOT_UPLOADED'						=> '',
	'ACP_DM_QC_DELAY'					=> 'Zeitraum',
	'ACP_DM_QC_DELAY_EXPLAIN'			=> 'Hier kannst du einen Zeitraum in Minuten einstellen, bevor ein Benutzer ein neues Zitat hinzufügen kann. Gib 0 ein, um diese Option zu deaktivieren.',
	'ACP_DM_QC_MINUTE'					=> 'Minute',
	'ACP_DM_QC_MINUTES'					=> 'Minuten',

	// Permissions
	'ACL_U_DM_QC_ADD'		=> 'Kann Zitate hinzufügen',
	'ACL_U_DM_QC_DELETE'	=> 'Kann eigene Zitate löschen',
	'ACL_U_DM_QC_VIEW'		=> 'Kann Zitate sehen',
	'ACL_A_DM_QC_MANAGE'			=> 'Kann Zitate verwalten'
));
