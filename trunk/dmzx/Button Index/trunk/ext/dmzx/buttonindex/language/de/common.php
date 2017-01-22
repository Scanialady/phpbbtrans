<?php
/**
*
* @version $Id$
* @package phpBB Extension - Button index [Deutsch]
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
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
//
// Some characters you may want to copy&paste:
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	//ACP
	'ACP_BUTTONINDEX_TITLE'				=> 'Button Index',
	'ACP_BUTTONINDEX_CONFIG'			=> 'Einstellungen',
	'BUTTONINDEX_ENABLE'				=> 'Aktiviere Button on Index',
	'BUTTONINDEX_ENABLE_EXPLAIN'		=> 'Aktiviert die Button on Index Extension.',
	'BUTTONINDEX_PLACEHOLDER'			=> 'http://www.google.com',
	'BUTTONINDEX_PLACEHOLDER_NAME'		=> 'Buttonname',
	'BUTTONINDEX_REPOSITORY'			=> 'Setze URL',
	'BUTTONINDEX_REPOSITORY_EXPLAIN'	=> 'Gib die URL und den Buttonnamen ein.<br /> Die URL kann relativ sein, wie etwa <em>viewforum.php?f=2</em>',
	'BUTTONINDEX_REPOSITORY_TEXT'		=> 'Buttonname',
	'BUTTONINDEX_MORE_LINKS'			=> 'Button hinzufügen',
	'LOG_BUTTONINDEX_SAVE'				=> '<strong>Button Index Einstellungen geändert</strong>' ,
	'BUTTONINDEX_SAVED'					=> 'Button Index Einstellungen gespeichert',
	'BUTTONINDEX_VERSION'				=> 'Version',
	'BUTTONINDEX_VERSION_CHECK'			=> 'Button Index Versionsprüfung',
	'BUTTONINDEX_AUTHOR'				=> 'Autoren',
	'BUTTONINDEX_ANNOUNCEMENT_TOPIC'	=> 'Release Ankündigung',
	'BUTTONINDEX_CURRENT_VERSION'		=> 'Derzeitige Version',
	'BUTTONINDEX_VERSION'				=> 'Version',
	'BUTTONINDEX_DOWNLOAD_LATEST'		=> 'Neueste Version herunterladen',
	'BUTTONINDEX_DOWNLOAD'				=> 'Download',
	'BUTTONINDEX_LATEST_VERSION'		=> 'Neueste Version',
	'BUTTONINDEX_NOT_UP_TO_DATE'		=> '%s ist nicht aktuell',
	'BUTTONINDEX_RELEASE_ANNOUNCEMENT'	=> 'Ankündigungsthema',
	'BUTTONINDEX_UP_TO_DATE'			=> '%s ist aktuell',
));
