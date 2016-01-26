<?php
/**
 *
 * @package phpBB Extension - Add User
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
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

$lang = array_merge($lang, array(
	// ACP Module
	'ACP_ADD_USER'				=> 'Benutzer hinzufügen',
	'DIR_NOT_EXIST'				=> 'Die von dir gewählte Sprache %s enthält nicht die notwendigen Dateien für die Extension. Bitte übersetze sie und lade sie in den Ordner %s der Extension, damit du die Extension benutzen kannst.',
	'ACP_ACCOUNT_ADDED'			=> 'Das Benutzerkonto wurde angelegt. Der Benutzer kann sich nun mit dem Benutzernamen und Passwort anmelden, die an die von dir angegebene Emailadresse gesendet wurden.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Das Benutzerkonto wurde angelegt. Allerdings ist es nach den Foreneinstellungen erforderlich, daß Benutzer ihren Account aktivieren.<br />Eine Aktivierungsmail wurde an die Email Adresse geschickt, die du angegeben hast.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Das Benutzerkonto wurde angelegt. Allerdings ist es nach den Foreneinstellungen erforderlich, daß ein Administrator den Account aktiviert.<br />Eine Email wurde an den/die Administrator(en) gesendet. Der Benutzer erhält dann eine Email, sobald sein Account aktiviert wurde',
	'ACP_ADMIN_ACTIVATE'		=> 'Eine Email wird an einen Administrator gesendet, damit er den Account aktiviert, alternativ kannst du die Box Konto aktivieren unten anhaken, um das Konto sofort zu aktivieren, wenn es erstellt wurde. Der Benutzer erhält dann eine Email mit den Logindaten.',
	'ACP_EMAIL_ACTIVATE'		=> 'Sobald das Benutzerkonto erstellt wurde, erhält der Benutzer eine Email mit dem Aktivierungslink, um das Konto zu aktivieren.',
	'ACP_INSTANT_ACTIVATE'		=> 'Das Benutzerkonto wird direkt aktiviert. Der Benutzer erhält dann eine Email mit seinen Login Daten.',

	'ADD_USER'					=> 'Benutzer hinzufügen',
	'ADD_USER_EXPLAIN'			=> 'Erstellt ein neues Benutzerkonto. Falls deine Aktivierungsoption auf "Aktivierung durch den Administrator" steht, kannst du den Account direkt aktivieren.',
	'MOD_VERSION'				=> 'Version %s',
	'ADMIN_ACTIVATE'			=> 'Aktiviere Benutzerkonto',
	'CONFIRM_PASSWORD'			=> 'Bestätige Passwort',
	'EDIT_USER_GROUPS'			=> 'Klicke %shier um die Benutzergruppen für diesen Benutzer zu bearbeiten%s',
	'GROUP_ADD'					=> 'Hier eine Auswahl zu treffen wird den Benutzer zu dieser gewählten Gruppe hinzufügen, ebenso wie zu der Gruppe Registrierte Benutzer.',
	'GROUP_DEFAULT_EXPLAIN'		=> 'Diese Box anzuklicken wird die oben ausgewählte Gruppe als Standardgruppe für die Benutzer gesetzt.',
	'CONTINUE_EDIT_USER'		=> '%1$sKlicke hier für die Verwaltung von %2$s’s Profil%3$s', // z.B.: Klick hier um Joe’s Profil zu bearbeiten.
	'PASSWORD_EXPLAIN'			=> 'Wenn du das hier frei lässt, wird ein Passwort automatisch generiert.',
	// ACP Logs
	'LOG_USER_ADDED'			=> '<strong>Neuer Benutzer erstellt</strong><br />» %s',
));
