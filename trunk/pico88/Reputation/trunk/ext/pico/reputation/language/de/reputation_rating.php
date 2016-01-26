<?php
/**
*
* Reputation System [German]
*
* @version $Id: reputation_rating.php 30 2014-12-23 10:17:55Z Scanialady $
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
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

$lang = array_merge($lang, array(
	'RS_ANTISPAM_INFO'			=> 'Du kannst nicht so schnell nacheinander bewerten. Versuch es bitte etwas später noch mal.',
	'RS_COMMENT_TOO_LONG'		=> 'Dein Kommentar enthält %1$s Zeichen, und ist zu lang.<br />Die maximal erlaubte Anzahl Zeichen ist: %2$s.',
	'RS_NEGATIVE'				=> 'Negativ',
	'RS_NO_COMMENT'				=> 'Du darfst das Kommentarfeld nicht leer lassen.',
	'RS_NO_POST'				=> 'Diesen Beitrag gibt es nicht.',
	'RS_NO_POWER'				=> 'Du hast zu wenig Bewertungsenergie.',
	'RS_NO_POWER_LEFT'			=> 'Nicht genug Bewertungsenergie.<br/>Warte, bis sie sich erneuert.<br/>Deine Bewertungsenergie ist %s.',
	'RS_NO_USER_ID'				=> 'Der angefragte Benutzer existiert nicht.',
	'RS_POSITIVE'				=> 'Positiv',
	'RS_POST_RATING'			=> 'Beitragsbewertung',
	'RS_RATE_BUTTON'			=> 'Bewerten',
	'RS_SAME_POST'				=> 'Du hast diesen Beitrag bereits bewertet.<br />Du erteiltest %s Bewertungspunkte.',
	'RS_SAME_USER'				=> 'Du hast diesen Benutzer bereits bewertet.',
	'RS_SELF'					=> 'Du kannst dich nicht selbst bewerten.',
	'RS_USER_ANONYMOUS'			=> 'Es ist dir nicht gestattet, Bewertungspunkte für anonyme Benutzer zu erteilen.',
	'RS_USER_BANNED'			=> 'Es ist dir nicht gestattet, Bewertungspunkte für gesperrte Benutzer zu erteilen.',
	'RS_USER_CANNOT_DELETE'		=> 'Du hast nicht die Berechtigung, diese Bewertung zu löschen.',
	'RS_USER_DISABLED'			=> 'Es ist dir nicht gestattet, Bewertungspunkte zu geben.',
	'RS_USER_GAP'				=> 'Du kannst den gleichen Benutzer nicht so bald wieder bewerten. Du kannst es wieder versuchen in %s.',
	'RS_USER_NEGATIVE'			=> 'Es ist dir nicht gestattet, negative Bewertungspunkte zu geben.<br />Deine eigene Bewertung muss höher sein als %s.',
	'RS_USER_RATING'			=> 'Benutzerbewertung',
	'RS_VIEW_DISALLOWED'		=> 'Es ist dir nicht gestattet, die Bewertungspunkte anzusehen.',
	'RS_VOTE_POWER_LEFT_OF_MAX'	=> '%1$d Bewertungsenergiepunkte übrig von %2$d.<br />Maximum pro Abstimmung: %3$d',
	'RS_VOTE_SAVED'				=> 'Abstimmung gespeichert',
	'RS_WARNING_RATING'			=> 'Warnung',	
));
