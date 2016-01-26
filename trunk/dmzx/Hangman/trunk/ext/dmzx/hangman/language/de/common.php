<?php
/*
*
* @package Hangman game
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2015 by dmzx (www.dmzx-web.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'HANGMAN'	=> 'Hangman',
	'HANGMAN_TITLE'	=> 'Hangman Spiel',
	'HANGMAN_TENLIVES'	=> 'Du hast 10 Leben für dein Spiel.',
	'HANGMAN_SCORE'	=> 'Score',
	'HANGMAN_LIVES_USED'	=> 'Leben verbraucht',
	'HANGMAN_NEW_QUOTE'	=> 'Neues Zitat',
	'HANGMAN_RESTART'	=> 'Neustart',
	'HANGMAN_NEW_QUOTE_START'	=> 'Klicke Neues Zitat um das Hangman-Spiel zu starten',
	'HANGMAN_FAILED_TRIES'	=> 'Fehlversuche',
	'HANGMAN_CORRECT_TRIES'	=> 'Korrekte Versuche',
	'HANGMAN_YOUWIN'	=> 'Du gewinnst!',
	'HANGMAN_QUOTE_ALREADY'	=> 'Zitat ist bereits im Spiel!',
	'HANGMAN_NEW_QUOTE_TO'	=> 'Klicke Neues Zitat um zu starten !',
	'HANGMAN_YOU_LOSE'	=> 'Leider verloren - versuchs noch mal!',
	'HANGMAN_LETTER'	=> 'Buchstabe',
	'HANGMAN_ALREADY_USED'	=> 'wurde schon benutzt!',
));
