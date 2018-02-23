<?php
/**
*
* @package Who posted (deutsch)
* @version $Id$
* @copyright (c) 2016 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'WHOPOSTED_TITLE'	=> 'Wer hat gepostet?',
	'WHOPOSTED_EXP'		=> 'Dies ist eine Liste von allen Mitgliedern, die in diesem Thema geschrieben haben',
	'WHOPOSTED_SHOW'	=> 'Zeige Thema',
	'AND_MORE_USERS'				=> array(
		1 => 'und %s weiterer Benutzer',
		2 => 'und %s weitere Benutzer',
	),
));
