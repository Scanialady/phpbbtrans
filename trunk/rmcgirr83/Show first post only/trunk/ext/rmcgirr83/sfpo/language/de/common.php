<?php

/**
* @version $Id$
* @package Show first post only to guest (deutsch)
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

//Show First Post Only
$lang = array_merge($lang, array(
	'SFPO_MSG_REPLY'        => array(
		1 => 'Dieses Thema hat <strong>1</strong> Antwort',
		2 => 'Dieses Thema hat <strong>%d</strong> Antworten',
	),
	'SFPO_MSG_REGISTER'        => 'Du musst registriertes Mitglied und eingeloggt sein, um die Antworten in diesem Thema anzusehen.',
	'SFPO_APPEND_MESSAGE' => '…<em>%seinloggen%s, um den Rest dieses Beitrages zu lesen</em></strong>',
));
