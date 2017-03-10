<?php
/**
 *
 * @package Recent Topics Extension (deutsch)
 * English translation by PayBas
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
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

$lang = array_merge(
	$lang, array(
		'RT_ENABLE'              => '„Aktuelle Themen“ anzeigen',
		'RT_LOCATION'            => 'Anzeigelage',
		'RT_LOCATION_EXP'        => 'Anzeigelage des Blocks „Aktuelle Themen“',
		'RT_SORT_START_TIME'     => 'Nach Themen Startzeit sortieren',
		'RT_SORT_START_TIME_EXP' => 'Wenn diese Option aktiviert ist, werden die Themen nach dem Datum des ersten Beitrags anstelle des letzten Beitrags sortiert.',
		'RT_UNREAD_ONLY'         => 'Nur ungelesene Themen anzeigen',
		'RT_TOP'                 => 'Ansicht oben',
		'RT_BOTTOM'              => 'Ansicht unten',
		'RT_SIDE'                => 'Ansicht auf die Seite',
	)
);
