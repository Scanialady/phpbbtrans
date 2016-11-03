<?php
/**
*
* @version $ID$
* @package phpBB Extension - Who Visited This Topic [Deutsch]
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'WHOVISITEDTHISTOPIC_INDEX'							=> 'Wer besuchte dieses Thema',
	'WHOVISITEDTHISTOPIC_PROFILE'						=> 'Letzte besuchte Themen',
	'WHOVISITEDTHISTOPIC_TOPIC_SETTINGS'				=> 'Aktiviere „Who Visited This Topic“ in Themen',
	'WHOVISITEDTHISTOPIC_TOPIC_SETTINGS_EXPLAIN'		=> 'Dies wird „Wer besuchte dieses Thema“ in der Themenansicht anzeigen.',
	'WHOVISITEDTHISTOPIC_TITLE'							=> 'Die letzten <strong>%d</strong> Mitglieder, welche dieses Thema besuchten',
	'WHOVISITEDTHISTOPIC_COUNT_SETTINGS'				=> 'Aktiviere den Themenzähler von „Who Visited This Topic“',
	'WHOVISITEDTHISTOPIC_COUNT_SETTINGS_EXPLAIN'		=> 'Dies wird den Themenzähler von „Wer besuchte dieses Thema“ in Themen anzeigen.',
	'WHOVISITEDTHISTOPIC_SHOW_AVATAR'					=> 'Aktiviere Avatare bei „Who Visited This Topic“ in Themen',
	'WHOVISITEDTHISTOPIC_SHOW_AVATAR_EXPLAIN'			=> 'Dies wird Avatare bei „Wer besuchte dieses Thema“ in Themen anzeigen.',
	'WHOVISITEDTHISTOPIC_MEMBERPAGE_SETTINGS'			=> 'Aktiviere „Who Visited This Topic“ in Profilen',
	'WHOVISITEDTHISTOPIC_MEMBERPAGE_SETTINGS_EXPLAIN'	=> 'Dies wird die letzten besuchten Themen in den Profilen anzeigen.',
	'WHOVISITEDTHISTOPIC_SETTING'						=> 'Setze einen Wert für „Who Visited This Topic“ in Themen',
	'WHOVISITEDTHISTOPIC_SETTING_EXPLAIN'				=> 'Der Wert ist einstellbar von 2 bis 255 Mitgliedern. <em>Standard ist 10.</em>',
	'WHOVISITEDTHISTOPIC_VISIT_SETTING'					=> 'Setze Wert für die letzten besuchten Themen in Profilen.',
	'WHOVISITEDTHISTOPIC_VISIT_SETTING_EXPLAIN'			=> 'Der Wert ist einstellbar von 2 bis 255. <em>Standard ist 10.</em>',
	'WHOVISITEDTHISTOPIC_VISIT_TITLE'					=> 'Die letzten <strong>%d</strong> besuchten Themen',
	'WHOVISITEDTHISTOPIC_VERSION_CHECK'					=> '„Who Visited This Topic“-Versionsprüfung',
	'WHOVISITEDTHISTOPIC_AUTHOR'						=> 'Autor',
	'WHOVISITEDTHISTOPIC_ANNOUNCEMENT_TOPIC'			=> 'Release-Ankündigung',
	'WHOVISITEDTHISTOPIC_CURRENT_VERSION'				=> 'Derzeitige Version',
	'WHOVISITEDTHISTOPIC_DOWNLOAD_LATEST'				=> 'Neueste Version herunterladen',
	'WHOVISITEDTHISTOPIC_DOWNLOAD'						=> 'Download',
	'WHOVISITEDTHISTOPIC_DISABLED_TOPIC'				=> 'Disabled set “Enable Who Visited This Topic in topics” to Yes to enter value',
	'WHOVISITEDTHISTOPIC_DISABLED_MEMBERPAGE'			=> 'Disabled set “Enable Who Visited This Topic in profile” to Yes to enter value',
	'WHOVISITEDTHISTOPIC_LATEST_VERSION'				=> 'Neueste Version',
	'WHOVISITEDTHISTOPIC_NOT_UP_TO_DATE'				=> '%s ist nicht aktuell',
	'WHOVISITEDTHISTOPIC_RELEASE_ANNOUNCEMENT'			=> 'Ankündigungsthema',
	'WHOVISITEDTHISTOPIC_UP_TO_DATE'					=> '%s ist aktuell',
	'WHOVISITEDTHISTOPIC_SAVED'							=> '<strong>„Who Visited This Topic“-Einstellungen gespeichert</strong>',
	'WHOVISITEDTHISTOPIC_SETTINGS_EXPLAIN'				=> 'Gehe zum <em><strong>Who Visited This Topic</strong></em>-Tab im Bereich der Gruppenrechte, um die Berechtigungen für jede Gruppe einzustellen.',
));
