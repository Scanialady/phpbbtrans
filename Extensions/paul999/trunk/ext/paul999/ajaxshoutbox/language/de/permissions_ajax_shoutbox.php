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
// ’ » “ ” …
//

$lang = array_merge(
	$lang, array(
		'ACL_U_SHOUTBOX_VIEW'   => 'Kann Ajax Shoutbox sehen',
		'ACL_U_SHOUTBOX_POST'   => 'Kann in Ajax Shoutbox posten',
		'ACL_U_SHOUTBOX_QUOTE'  => 'Kann in Ajax Shoutbox zitieren',
		'ACL_U_SHOUTBOX_BBCODE' => 'Kann in Ajax Shoutbox BBCode benutzen',
		'ACL_U_SHOUTBOX_DELETE' => 'Kann in Ajax Shoutbox eigene Beiträge löschen',
		'ACL_M_SHOUTBOX_DELETE' => 'Kann in Ajax Shoutbox Beiträge löschen',
	)
);
