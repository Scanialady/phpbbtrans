<?php
/**
*
* Auto Database Backup
* @version $Id$
* @copyright (c) 2014 Lukasz Kaczynski
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

$lang = array_merge($lang, array(
	'AUTO_DB_BACKUP_SETTINGS'				=> 'Auto Database Backup Einstellungen',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'		=> 'Hier kannst du die Standardeinstellungen für die autmatischen Datenbankbackups setzen. Abhängig von deiner Serverkonfiguration kann es möglich sein, die Datenbank zu komprimieren.<br />Alle Backups werden gespeichert im Ordner <samp>/store/</samp>. Du kannst ein Backup wiederherstellen über das <em>Wiederherstellen</em> Menü.',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'		=> 'Auto Database Backup Einstellungen geändert.',
	'AUTO_DB_BACKUP_ENABLE'					=> 'Auto Database Backup aktivieren',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'			=> 'Aktiviere oder deaktiviere automatische Datenbank-Backups',
	'AUTO_DB_BACKUP_FREQ'					=> 'Backup Frequenz',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'			=> 'Setze die Backup Frequenz fest. Der Wert muss höher sein als 0.',
	'AUTO_DB_BACKUP_FREQ_ERROR'				=> 'Der eingegebene Wert für <em>Backup Frequenz</em> ist nicht korrekt. Der Wert muss höher sein als <strong>0</strong>.',
	'AUTO_DB_BACKUP_COPIES'					=> 'Gespeicherte Backups',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'			=> 'Wie viele Backups auf dem Server gespeichert werden sollen. 0 bedeutet deaktiviert, und alle Backups werden auf dem Server gespeichert.',
	'AUTO_DB_BACKUP_COPIES_ERROR'			=> 'Der eingegebene Wert für <em>Gespeicherte Backups</em> ist nicht korrekt. Der Wert muss gleich oder höher sein als <strong>0</strong>.',
	'AUTO_DB_BACKUP_FILETYPE'				=> 'Dateityp',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'		=> 'Wähle den Dateityp für Backups.',
	'AUTO_DB_BACKUP_OPTIMIZE'				=> 'Optimiere DB vor dem Backup',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'		=> 'Optimiere nur nicht optimierte Datenbanktabellen, bevor ihr Backup erstellt wird.',
	'AUTO_DB_BACKUP_TIME'					=> 'Startzeit für das nächste Backup',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'			=> 'Stelle ein, wann ein nachfolgendes Backup ausgeführt werden soll.<br /><strong>Beachte</strong>: du solltest einen bestimmten Punkt in der Zukunft eingeben.',
	'AUTO_DB_BACKUP_TIME_ERROR'				=> 'Die <em>Startzeit für das nächste Backup</em> ist nicht korrekt. Die Zeit muss in der Zukunft liegen.',

	'HOUR'		=> 'Stunde',
	'MINUTE'	=> 'Minute',
));
