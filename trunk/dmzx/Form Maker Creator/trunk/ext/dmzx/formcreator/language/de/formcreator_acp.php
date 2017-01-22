<?php
/**
*
* @version $ID$
* @package phpBB Extension - Form Maker/Creator [Deutsch]
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net & michaelo - http://www.phpbbreland.com
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

$lang = array_merge($lang, array(
	'MODE'						=> 'Modus',
	'ELEMENTS'					=> 'Elemente',
	'FORM_NAME'					=> 'Forumname',
	'FORUM_ID'					=> 'Forum ID',
	'ACP_FORM_CURRENT'		 	=> 'Derzeitiges Formular',
	'ACP_FORM_MAKER'			=> 'Form Maker',
	'ACP_FORM_MAKER_EXPLAIN'	=> 'Mit diesem Werkzeug kannst du Formulare für dein Forum erstellen und verwalten.',
	'ACP_FORM_CURRENT'		 	=> 'Derzeitiges Formular',
	'ACP_FORM_MAKER'			=> 'Form Maker',
	'ACP_FORM_MAKER_EXPLAIN'	=> 'Mit diesem Werkzeug kannst du Formulare für dein Forum erstellen und verwalten.',
	'ACP_FORM_MOD_MORE_INFO'	=> 'Klick mich für mehr Information.',
	'ACP_FORM_MOD_NOTE'			=> '<br /><strong>Hinweis:</strong> Alle Aktionen werden sofort auf dem derzeit ausgewählten/angezeigten Formular ausgeführt, es wird keine Bestätigung eingeholt...',
	'ACP_FORM_MOD_MORE_INFO'	=> 'Klick mich für mehr Information.',
	'ACP_FORM_MOD_NOTE'			=> '<br /><strong>Hinweis:</strong> Alle Aktionen werden sofort auf dem derzeit ausgewählten/angezeigten Formular ausgeführt, es wird keine Bestätigung eingeholt...',

	'ACP_FORM_MAKER_EXPLAIN_2' => 'Wie ändere ich das Formular?<br /> &nbsp; &bull; Wähle ein neues Formular vom <strong><i>Derzeitiges Formular</i></strong>-Dropdown-Menü...<br /><br />
	Wie füge ich ein neues Formularelement ein?<br /> &nbsp; &bull; Benutze <strong><i>Füge neues Formularelement ein</i></strong>.<br /><br />
	Wie lösche ich ein Formular?<br /> &nbsp; &bull; Lösche einfach alle Formularelemente...<br /><br />
	<strong>&#8730;</strong> Das Häkchen-Zeichen bedeutet, dass ein Element erforderlich ist, und nicht leer sein darf.<br />',

	'CURRENT_FORM'			 	=> 'Derzeitiges Formular',
	'FORM_ADD_ITEM'				=> 'Füge neues Formularelement ein',
	'FORM_CHECKBOX'				=> 'Kontrollkästchen',
	'FORM_DETAILS'			 	=> 'Alle Formulare benutzen ein generische Template-Datei: styles/prosilver/template/forms/form_maker.html',
	'FORM_ELEMENT'			 	=> 'Eingabetyp',
	'FORM_ELEMENT_TYPE'			=> 'Elementtyp',
	'FORM_ELEMENT_HINT'			=> 'Hilfe',
	'FORM_ELEMENT_NAME'			=> 'Name Eintrag',
	'FORM_ELEMENT_OPTIONS'		=> 'Optionen',
	'FORM_EMAILBOX'				=> 'Email',
	'FORM_INPUTBOX'				=> 'Text',
	'FORM_MAKER_ACP_DELETED'	=> 'Eintrag gelöscht',
	'FORM_MAKER_ACP_ERROR'	 	=> 'Fehler beim Aktualisieren der Form Maker Datenbank',
	'FORM_MAKER_ACP_MOVED'	 	=> 'Verschieben fertiggestellt...',
	'FORM_MAKER_ACP_RETURN'		=> 'Zurück zu Formulare verwalten',
	'FORM_MANAGE'				=> 'Dieses Formular verwalten',
	'FORM_MANAGE_EXPLAIN'		=> 'Hier kannst du alle derzeitigen Formularelemente modifizieren, bearbeite einfach die Felder, und drücke den <strong>Aktualisieren</strong>-Button...',
	'FORUM_NAME'				=> 'Forumname',

	'FORM_NEW_ITEM_EXPLAIN_2'	=> '<pre style="font-size:11px; line-height: 100%;"><strong><u>Von der Formular-Extension unterstützte Formularelemente</u></strong><br />
	<strong>Eingabefeld:</strong>		(Bis zu 255 Zeichen)<br />
	<strong>Textfeld:</strong>	 	Mehrere Textzeilen, angeordnet in 3 Reihen mit 76 Spalten.<br />
	<strong>Kontrollkästchen:</strong>		Eine oder mehr Optionen können ausgewählt werden. Wenn als erforderlich gesetzt, müssen alle Optionen in der Kontrollkästchen-Gruppe angehakt sein.<br />
	<strong>Schaltfläche:</strong> 		Nur eine Option kann ausgewählt werden.<br />
	<strong>Auswahlfeld:</strong>		Eine Option aus einer Dropdown-Liste.<br />
	<strong>Email:</strong>			Gültige Emailadresse.<br />
	<strong>Passwort:</strong>		Nur zum Testen...<br />
	<strong>URL:</strong>			Eine gültige URL muss eingegeben werden.<br />
	<strong>Anhang:</strong>		Füge ein Bild an.<br /><br /></pre>',

	'FORM_NO_FORM'			 	=> 'Es sind keine Formulare zugeordnet zu: <strong>%s</strong>...<br />Um ein neues Forumular zu diesem Forum hinzuzufügen, füge einfach ein Formularelement unten ein...',
	'FORM_RADIOBOX'				=> 'Schaltflächen',
	'FORM_PASSWORDBOX'			=> 'Passwort',
	'FORM_SELECTBOX'			=> 'Auswahlfeld',
	'FORM_SELECT_DB'			=> 'Verfügbare Formulare',
	'FORM_STATUS'				=> 'Status',
	'FORM_TXTBOX'				=> 'Textfeld',
	'FORM_URLBOX'				=> 'URL',
	'FORM_ATTACH'				=> 'Anhang',
	'HIDE_FORM_INFO'			=> 'Information verstecken',
	'HIDE_PREVIEW'			 	=> 'Vorschau verstecken',
	'HOW_TO'					=> '<strong>Zusätzliche Hilfe...</strong>',
	'HOW_TO_MORE'				=> 'Mehr Information...',
	'HOW_TO_HIDE'				=> '<strong>Verstecken</strong>',
	'FORM_IMAGE_HERE'			=> ' (ersetze diesen Text mit einem Inline-Bild) ',
	'MOREINFO_MSG'			 	=> 'Um einen Anhang anzufügen, klicke einfach auf den "Durchsuchen"-Knopf, und wähle das Bild aus.',
	'NDX'						=> 'NDX',
	'NDX_ORDER'					=> 'Verzeichnisordnung (Die Reihenfolge, in welcher Elemente im Formular erscheinen)',
	'NO_FOURM'				 	=> 'Kein Forum zu diesem Formular zugeordnet',
	'FORMS_MOD_SAMPLE'		 	=> 'Darstellung des derzeitigen Formulars nur zur unterstützenden Visualisierung... kein funktionierendes Formular.',
	'SELECT_FORM_TO_MANAGE'		=> 'Bitte wähle ein Forum, dem dieses Formular zugeordnet werden soll',
	'SHOW_FORM_INFO'			=> 'Mehr Information zu Elementtypen',
	'SHOW_PREVIEW'			 	=> 'Vorschau des Formulars',

	'CHECKBOX_NOTE'				=> '<strong>Hinweis:</strong>???',
	'CHECKBOXE_NOTES'			=> 'Kontrollkästchen!',
	'CHKNOTE'					=> 'Kontrollkästchen mit mehreren Elementen sind selten als erforderlich gesetzt, denn in dem Fall müsste der Benutzer jedes einzelne und alle anhaken.',
));
