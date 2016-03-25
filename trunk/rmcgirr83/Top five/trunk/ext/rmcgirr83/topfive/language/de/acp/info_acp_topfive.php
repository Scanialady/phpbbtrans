<?php
/**
*
* topfive [German]
* @version $Id$
* @package language phpBB extension Top Five
* @copyright (c) 2014 RMcGirr83
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
	'TF_ACP'		=> 'Top Five Extension',
	'TF_ACTIVE'		=> 'Aktiviert',
	'TF_TITLE'		=> 'Top Five Extension Einstellungen',
	'TF_VERSION'	=> 'Top Five Version',
	'TOPFIVE_MOD'	=> 'Top Five',
	'TF_CONFIG'		=> 'Einstellungen',
	'TF_SELECT'		=> 'Top Five',
	'TF_SAVED'		=> 'Änderungen gespeichert',
	'TF_HOWMANY'	=> 'Wie viele',
	'TF_HOWMANY_EXPLAIN'	=> 'Wie viele möchtest du anzeigen? Mindestens erforderlich sind 5, das Maximum ist 100',
	'TF_IGNORE_USERS'		=> 'Ignoriere inaktive Benutzer',
	'TF_IGNORE_USERS_EXPLAIN'	=> 'Dies wird inaktive Benutzer von der Anzeige in Top-Poster und Neueste Benutzer ausschliessen',
	'TF_IGNORE_FOUNDER'		=> 'Ignoriere Gründer',
	'TF_IGNORE_FOUNDER_EXPLAIN'	=> 'Dies wird Gründer von der Anzeige in Top-Poster und Neueste Benutzer ausschliessen',
	'TF_LOCATION'	=> 'Ort im Forum',
	'TF_LOCATION_EXPLAIN'	=> 'Wo du die Extension im Forum auf der Indexseite angezeigt haben möchtest',
	'TF_SHOW_ADMINS_MODS'	=> 'Admins und Mods einschliessen',
	'TF_SHOW_ADMINS_MODS_EXPLAIN'	=> 'Zeigt auch Admins und Mods bei den Top-Postern',
	'TOO_SMALL_TOP_FIVE_HOW_MANY'	=> 'Die anzuzeigende Anzahl ist zu niedrig.',
	'TOO_LARGE_TOP_FIVE_HOW_MANY'	=> 'Die anzuzeigende Anzahl ist zu hoch.',
	'TOP_OF_FORUM'	=> 'Oben im Forum',
	'BOTTOM_OF_FORUM'	=> 'Unten im Forum',

));
