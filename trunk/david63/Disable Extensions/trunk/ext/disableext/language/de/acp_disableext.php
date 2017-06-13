<?php
/**
*
* @version $Id$
* @package Disable Extensions (deutsch)
* @copyright (c) 2017 david63
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

/// DEVELOPERS PLEASE NOTE
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
	'ARE_YOU_SURE'					=> array(
		1 => 'Bist du sicher, dass du die Extension %1$s deaktivieren möchtest?',
		2 => 'Bist du sicher, dass du die Extensionen %1$s deaktivieren möchtest?',
	),

	'CONTINUE'						=> 'Fortsetzen',

	'DISABLE_COUNT'					=> array(
		1 => 'Du bist gerade dabei, die Extension %1$s zu deaktivieren.',
		2 => 'Du bist gerade dabei, die Extensionen %1$s zu deaktiveren.',
	),
	'DISABLE_EXTENSIONS'			=> 'Extensionen deaktivieren',
	'DISABLE_EXTENSIONS_EXPLAIN'	=> 'Diese Extension wird alle deine Extensionen deaktivieren. Sie wird keinerlei Daten löschen, die zu irgendeiner Extension gehören, und du wirst in der Lage sein, sie wieder zu reaktivieren über <strong>“Erweiterungen verwalten”</strong>.<br /><br />Wenn du eine Extension nach der Deaktivierung entfernen möchtest, <strong>musst</strong> du für die betreffende Extension zuerst die “Arbeitsdaten löschen”, <strong>bevor</strong> du die Dateien vom FTP löschst.',

	'EXTENSIONS_DISABLED'			=> array(
		0 => 'Es wurden keine Extensionen deaktiviert bei diesem Durchgang',
		1 => '%1$s von %2$s Extension wurde deaktiviert',
		2 => '%1$s von %2$s Extensionen wurden deaktiviert',
	),

	'NO_EXT_DATA'					=> 'Es gibt keine Extensionen, die deaktiviert werden können',
	'NO_EXT_UNABLE'					=> 'Es ist nicht möglich, irgendwelche Extensionen zu deaktivieren',

	'VERSION'						=> 'Version',
));
