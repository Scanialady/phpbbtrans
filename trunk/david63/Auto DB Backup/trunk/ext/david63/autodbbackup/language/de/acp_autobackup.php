<?php
/**
*
* @version $ID$
* @package Auto db Backup (3.2) [Deutsch]
* @copyright (c) 2015 david63
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
	'AUTO_DB_BACKUP_COPIES'				=> 'Gespeicherte Backups',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'		=> 'Die Anzahl an Sicherungen, die auf dem Server gespeichert werden.<br />0 bedeutet deaktiviert, und alle Sicherungen werden auf dem Server behalten.',
	'AUTO_DB_BACKUP_ENABLE'				=> 'Aktiviere Auto Database Backup',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'		=> 'Aktiviere oder deaktiviere automatische Datenbanksicherungen',
	'AUTO_DB_BACKUP_FILETYPE'			=> 'Dateityp',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'	=> 'Wähle den Dateitypen für Sicherungen aus.',
	'AUTO_DB_BACKUP_FREQ'				=> 'Backupintervall',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'		=> 'Setze das Intervall für die Sicherung in Stunden.',
	'AUTO_DB_BACKUP_OPTIMIZE'			=> 'Optimiere Datenbank vor Durchführung der Sicherung',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'	=> 'Optimiere nur unoptimierte Datenbanktabellen vor Erstellung der Sicherung.',
	'AUTO_DB_BACKUP_SETTINGS'			=> 'Auto Database Backup Einstellungen',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'	=> 'Auto Database Backup Einstellungen geändert.',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'	=> 'Hier kannst du Standardeinstellungen für die automatischen Datenbanksicherungen setzen. Abhängig von deiner Serverkonfiguration kannst du möglicherweise die Datenbank komprimieren. <br />Alle Sicherungen werden gespeichert im Ordner <samp>/store/</samp>. Du kannst eine Sicherung wiederherstellen über den Menüpunkt <em>Wiederherstellen</em>.',
	'AUTO_DB_BACKUP_TIME'				=> 'Startzeit für nächstes Backup',
	'AUTO_DB_BACKUP_TIME_ERROR'			=> 'Die <strong>Startzeit für nächstes Backup</strong> ist falsch. Die Zeiteinstellung muss in der Zukunft liegen.',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'		=> 'Die Zeit, zu der die nächste Datenbanksicherung stattfinden sollte.<br /><strong>Hinweis:</strong> Die Angabe Datum/Zeit muss in der Zukunft liegen.',

	'DATE_TIME_ERROR'					=> 'Die <strong>Startzeit für nächstes Backup</strong> ist fehlerhaft.',

	'HOUR'		=> 'Stunde',
	'MINUTE'	=> 'Minute',

	'FILETYPE'	=> array(
		'gzip'	=> 'gzip',
		'bzip2'	=> 'bzip2',
		'text'	=> 'text',
	),

	'VERSION'							=> 'Version',
));
