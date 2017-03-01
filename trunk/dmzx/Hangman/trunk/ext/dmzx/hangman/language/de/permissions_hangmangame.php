<?php
/**
*
* @version $Id$
* @package phpBB Extension - Hangman Game (deutsch)
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
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
// Some characters for use
//  ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	// PERMISSIONS HANGMAN
	'ACL_A_HANGMAN_SET'			=>	'Kann Hangman Einstellungen bearbeiten',
	'ACL_A_HANGMAN_IMPORT'		=>	'Kann Hangmans importieren/exportieren',
	'ACL_M_HANGMAN_DELETE'		=>	'Kann Hangmans löschen',
	'ACL_U_HANGMAN_PLAY'		=>	'Kann Hangmans spielen',
	'ACL_U_HANGMAN_CREATE'		=>	'Kann Hangmans erstellen',
));
