<?php
/**
*
* @package phpBB Extension - Did You Know
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
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

$lang = array_merge($lang, array(
	'ACP_DYK_EDIT_WORD'				=> 'Bearbeite Schon Gewusst',
	'ACP_DYK_ENTER_WORD'			=> 'Du musst einen Text eingeben!',
	'ACP_DYK_EXPLAIN'				=> 'Hier kannst du deine Schon Gewusst-Texte eingeben, bearbeiten oder löschen. Diese Texte werden dann in zufälliger Reihenfolge auf der Forenseite erscheinen.',
	'ACP_DYK_EXPLAIN_EDIT'			=> 'Hier kannst du Schon Gewusst Texte eingeben oder bearbeiten.',
	'ACP_DYK_FORM_INVALID'			=> 'Der gesendete Text war fehlerhaft. Versuche, ihn noch einmal abzusenden.',
	'ACP_DYK_NEW_WORD'				=> 'Füge neuen Text hinzu',
	'ACP_DYK_NO_WORD'				=> 'Kein Text für die Bearbeitung ausgewählt!',
	'ACP_DYK_TITLE'					=> 'Schon-Gewusst-Administration',
	'ACP_DYK_WORD'					=> 'Text',
	'ACP_DYK_WORD_ADDED'			=> 'Der Text wurde erfolgreich hinzugefügt.',
	'ACP_DYK_WORD_EDIT'				=> 'Bearbeite oder erstelle den Text hier',
	'ACP_DYK_WORD_ID'				=> 'ID',
	'ACP_DYK_WORD_REMOVED'			=> 'Der ausgewählte Text wurde erfolgreich entfernt.',
	'ACP_DYK_WORD_UPDATED'			=> 'Der ausgewählte Text wurde erfolgreich aktualisiert.',
	'ACP_DYK_REMOVE_TABLES'			=> 'Schon Gewusst-Tabelle erfolgreich gelöscht',
	'ACP_DYK_INSERT_FIRST_FILL'		=> 'Schon Gewusst-Tabelle mit Basisdaten gefüllt filled with basic values',
	'ACP_DYK_UPDATE'				=> 'Schon Gewusst-Modul erfolgreich aktualisiert',
	'ADD_DYK'						=> 'Neuen Eintrag hinzufügen',
	'EDIT_DYK'						=> 'Bearbeite Eintrag',
	'LANGUAGE_SET'					=> 'Sprachpaket',
	'LANGUAGE_SET_DEFAULT'			=> 'Unabhängig',
	'LANGUAGE_SET_EXPLAIN'			=> 'Setze hier die Sprache, in der der Text den Benutzern angezeigt werden soll.',
	'LANGUAGE_SET_SETTINGS'			=> 'Sprachpaket-Einstellungen',
	'LOG_DYK_DELETE'				=> '<strong>"Schon Gewusst?" text Nr. %s wurde gelöscht</strong>',
	'LOG_DYK_SAVE'					=> '"Schon Gewusst?" Text Nr. %s wurde bearbeitet',
	'LOG_DYK_SAVE_NEW'				=> 'Ein neuer "Schon gewusst" Text wurde hinzugefügt',

	// Permission
	'ACL_U_DID_YOU_KNOW'			=> 'Kann "Schon gewusst?" Texte verwalten',
));
