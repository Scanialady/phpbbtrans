<?php
/**
*
* @package phpBB Extension - Sinkship (DEUTSCH)
* @version $Id$
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'SINK_TITLE' 		=> 'DM Sinkship: Schiffe versenken',
	'SINK_DESC'			=> 'Du kannst hier das bekannte “Schiffe versenken” gegen den Computer spielen.<br />Du startest einfach, indem du irgendein Feld im gegnerischen Bereich anklickst.<br />Wenn du ein Schiff triffst, wird das Feld rot markiert. Andernfalls wird es blau markiert.<br />Wenn ein Schiff gesunken ist, wirst du über ein kleines Pop-Up informiert.<br /><br />Viel Spaß!',
	'SINK_COPY'			=> 'Powered by DM Sinkship &copy; 2008, 2010 <a href="http://die-muellers.org" onclick="window.open(this.href); return false">Die Muellers</a>',
	'SINK_COPYRIGHT'	=> '&copy; 2015 <a href="http://www.dmzx-web.net" onclick="window.open(this.href); return false">dmzx-web.net</a>',
	'MINE_SWEEPER'		=> 'Minensucher',
	'FRIGATE'			=> 'Fregatte',
	'CRUSIER'			=> 'Kreuzer',
	'BARTTLESHIP'		=> 'Kampfschiff',
	'RELOAD_PAGE'		=> 'Seite neu laden',
	'LOADING'			=> 'Lade Bilder... Bitte warten',
	'THE_COMPUTER'		=> 'Der Computer ',
	'COMPUTER_FLEET'	=> 'Computer-Flotte',
	'YOUR_FLEET'		=> 'Deine Flotte',
	'I_SUNK'			=> 'Der Computer hat versenkt: ',
	'YOU_SUNK'			=> 'Du hast versenkt: ',
	'YOU_WON'			=> 'Du hast gewonnen! Klicke auf “Seite neu laden”, um ein neues Spiel zu starten.',
	'YOU_LOST'			=> 'Du hast verloren! Klicke auf “Seite neu laden”, um ein neues Spiel zu starten.',
	'YOU_GUILT'			=> 'ist nichts mehr übrig, deine Schuld!',
));
