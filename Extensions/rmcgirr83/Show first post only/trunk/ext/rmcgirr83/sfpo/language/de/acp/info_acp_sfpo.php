<?php
/**
*
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

$lang = array_merge($lang, array(
	// ACP
	'ENABLE_SFPO' 			=> 'Aktiviere die Anzeige "Nur der erste Beitrag für Gäste"',
	'ENABLE_SFPO_EXPLAIN' 	=> 'Wenn dies auf JA gesetzt wurde, können unregistrierte Benutzer / Gäste nur den ersten Beitrag jedes Themas sehen. Die restlichen Beiträge im Thema fordern zum Anmelden oder Registrieren auf.',
	'SFPO_CHARACTERS'		=> 'Anzahl der anzuzeigenden Zeichen',
	'SFPO_CHARACTERS_EXPLAIN'	=> 'Gib die Anzahl der Zeichen an, die vom ersten Beitrag eines Themas angezeigt werden sollen (Standard ist 150). Wenn dies auf 0 gestellt wird, wird das Feature deaktiviert.',
	'SFPO_CHARS'			=> 'Zeichen',
));
