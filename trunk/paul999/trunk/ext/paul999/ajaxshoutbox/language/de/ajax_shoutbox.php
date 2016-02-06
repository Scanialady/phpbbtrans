<?php
/**
 *
 * Ajax Shoutbox extension for the phpBB Forum Software package [German].
 * @version $Id$
 * @copyright (c) 2014 Paul Sohier <http://www.ajax-shoutbox.com>
 * @license       GNU General Public License, version 2 (GPL-2.0)
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
//  ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge(
	$lang, array(
		'AJAX_SHOUTBOX'                  => 'Shoutbox',
		'AJAX_SHOUTBOX_MESSAGE'          => 'Nachricht hinzufügen',
		'AJAX_SHOUTBOX_ONLY_AJAX'        => 'Entschuldigung, Beiträge können nur in die Shoutbox geschrieben werden, wenn JavaScript aktiviert ist.',
		'AJAX_SHOUTBOX_NO_PERMISSION'    => 'Keine Berechtigung für die gewählte Aktion',
		'AJAX_SHOUTBOX_MESSAGE_EMPTY'    => 'Nachricht ist leer.',
		'AJAX_SHOUTBOX_ERROR'            => 'Fehler',
		'AJAX_SHOUTBOX_MISSING_ID'       => 'Kann Beitrag nicht löschen',
		'AJAX_SHOUTBOX_NO_SUCH_POST'     => 'Kann Beitrag nicht finden',

		'AJAXSHOUTBOX_BOARD_DATE_FORMAT'            => 'Mein Shoutbox-Datumsformat',
		'AJAXSHOUTBOX_BOARD_DATE_FORMAT_EXPLAIN'    => 'Lege ein Datumsformat für die Shoutbox fest. Du solltest kein relatives Datumsformat benutzen.',
		
		'AJAXSHOUTBOX_UNSUPPORTED_STYLE'    => 'Anscheinend benutzt du einen nicht-prosilverbasierenden Style, oder der Style erbt nicht korrekt von prosilver.
			<br />Wenn du einen Style benutzt, der auf prosilver basiert, stelle sicher, dass die Vererbung von prosilver korrekt funktioniert.
			<br />Wenn du einen Style benutzt, der nicht auf prosilver basiert, musst du ein Template für die Shoutbox erstellen,
				oder den Autor bitten, für die Shoutbox ein funktionierendes Template anzubieten.
			<br />Ich biete keine Unterstützung für nicht-prosilver-Styles an (eingeschlossen subsilver2!). Diese Nachricht wird nur Administratoren angezeigt.',
	)
);