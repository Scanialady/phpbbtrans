<?php

/**
*
* @package PM Welcome [English]
* @copyright BB3.MOBi (c) 2015 Anvar http://apwa.ru
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

$lang = array_merge($lang, array(
	'ACP_PMWELCOME'					=> 'Willkommensnachricht',
	'ACP_PMWELCOME_EXPLAIN'			=> 'Hier kannst du den Text festlegen, den die Persönliche Nachricht enthalten soll, die einem neuen Benutzer nach seiner Registrierung gesendet wird.',
	'ACP_PMWELCOME_SETTINGS'		=> 'Einstellungen Willkommensnachricht.',
	'ACP_PMWELCOME_USER'			=> 'Absender',
	'ACP_PMWELCOME_USER_EXPLAIN'	=> 'Gib die ID des Forumbenutzers an, unter dessen Namen die private Nachricht gesendet werden soll.',
	'ACP_PMWELCOME_SUBJECT'			=> 'Betreff der Nachricht',
	'ACP_PMWELCOME_TEXT'			=> 'Text der Willkommensnachricht',
	'ACP_PMWELCOME_TEXT_EXPLAIN'	=> 'Du kannst BBCode und Smilies benutzen, und den Token {USERNAME}, der in der Nachricht durch den Benutzernamen des Empfängers ersetzt wird.',
));
