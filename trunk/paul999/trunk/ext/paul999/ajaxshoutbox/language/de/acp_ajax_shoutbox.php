<?php
/**
 *
 * Ajax Shoutbox extension for the phpBB Forum Software package [German].
 * Translated by Scanialady <http://ladyscommunity.de> 2016-01-15
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
		'ACP_AJAXSHOUTBOX_SETTINGS'     => 'Ajax Shoutbox Einstellungen',
		'ACP_AJAXSHOUTBOX_SETTINGS_EXPLAIN'     => 'Auf dieser Seite kannst du die Einstellungen speziell für die Shoutbox ändern. <br /><br />
		',

		'ACP_AJAXSHOUTBOX_PRUNE'        => 'Löscheinstellungen',
		'AJAXSHOUTBOX_ENABLE_PRUNE'     => 'Aktiviere Beschneidung der Beiträge',
		'AJAXSHOUTBOX_PRUNE_DAYS'       => 'Beschneide Beiträge nach',

		'AJAXSHOUTBOX_DEFAULT_DATE_FORMAT'  => 'Datumsformat',
		'AJAXSHOUTBOX_DEFAULT_DATE_FORMAT_EXPLAIN'  => 'Standard-Datumsformat für die Shoutbox. Du solltest nicht die relativen Daten benutzen, das Datum würde sich nicht aktualisieren, wenn die Shoutbox aktualisiert wird.',

	)
);
