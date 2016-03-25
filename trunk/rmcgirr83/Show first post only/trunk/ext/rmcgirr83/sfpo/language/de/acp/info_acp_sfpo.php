<?php
/**
*
* Show first post only to guest [German]
* @version $Id$
* @package language phpBB extension
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP
	'ENABLE_SFPO' 			=> 'Show first post only to guest aktivieren',
	'ENABLE_SFPO_EXPLAIN' 	=> 'Wenn dies auf Ja gesetzt wird, können unregistrierte Benutzer / Gäste nur noch den ersten Beitrag eines Themas sehen. Der Rest der Beiträge in einem Thema wird sie dazu anhalten, sich zu registrieren oder anzumelden.',
	'SFPO_CHARACTERS'		=> 'Anzahl der anzuzeigenden Zeichen',
	'SFPO_CHARACTERS_EXPLAIN'	=> 'Gib die Anzahl der Zeichen ein, die aus dem ersten Beitrag anzuzeigen sind (Standard ist 150). Den Wert auf 0 zu setzen deaktiviert diese Funktion.',
	'SFPO_CHARS'			=> 'Zeichen',
));
