<?php
/**
*
* @version $Id$
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
	'CLOSE_FORM'				=> 'Abbrechen',
	'OPEN_FORM'					=> 'Formular-Modus',
	'CLOSE_FORM_EXPLAIN'		=> 'Wechsle zum Beitrags-Modus, um die Formulardaten in den Beitrag zu kopieren',
	'CLOSE_FORM_EXPLAIN'		=> 'Wechsle zurück zum Beitrags-Modus (Daten werden nicht gesendet)',
	'FORM_HELP_1'				=> 'Die Bearbeitung aus dem <strong>Formular-Modus</strong> ist noch nicht gesendet...',
	'FORM_MOD_PREVIEW'		 	=> 'Wechsle zur Vorschau und behalte die derzeitigen Formulardaten...',
	'FORM_MOD_SUBMIT'			=> 'Füge die Formulardaten zur Nachricht hinzu und sende ab...',
	'OPEN_FORM_EXPLAIN'			=> 'Wechsle zum Formular-Modus...',
	'REFRESHING_FORM'			=> 'Das derzeit ausgewählte Forum ist',
	'REQUIRED'				 	=> 'Du hast nicht alle erforderlichen Elemente eingegeben!',
	'SUBJECT_REQUIRED'		 	=> 'Bitte gib einen Betreff ein',
	'CHECKBOX_MSG'				=> 'Bei Kontrollkästchen, die als erforderlich markiert sind,  müssen alle Elemente angehakt sein (HTML5 Formularprüfung).',
	'MANDATORY'					=> 'Einträge mit einem Sternchen sind erforderlich.',
));
