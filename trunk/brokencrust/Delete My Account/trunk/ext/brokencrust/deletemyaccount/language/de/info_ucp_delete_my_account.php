<?php
/**
 *
 * Delete My Account (deutsch)
 * @version $Id$
 * @copyright (c) 2017 BrokenCrust
 * @license GNU General Public License, version 2 (GPL-2.0)
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

	'DELETE_MY_ACCOUNT' => 'Lösche mein Konto',
	'DELETE_YOUR_ACCOUNT' => 'Lösche dein Konto',
	'DELETE_MY_ACCOUNT_TEXT' => 'Du kannst dieses Formular benutzen, um dein Benutzerkonto zu löschen. Wenn dieses vollständig ausgeführt wird, werden alle deine persönlichen und privaten Daten von dieser Seite entfernt, und du kannst dich nicht mehr anmelden.',
	'REALY_DELETE' => 'Ich möchte wirklich mein Benutzerkonto löschen.',
	'UNDERSTAND_DELETE' => 'Ich verstehe, dass diese Aktion nicht mehr rückgängig gemacht werden kann.',
	'DELETE_MY_POSTS' => 'Lösche ausserdem alle meine Beiträge (wenn dies nicht angehakt ist, werden die Beiträge erhalten, und zu Gastbeiträgen).',
	'ENTER_PASSWORD' => 'Gib zur Bestätigung dein Passwort an',
	'ENTER_PASSWORD_HERE' => 'gib hier dein Passwort ein...',
	'DELETED_USER' => 'Benutzer %s gelöscht',
	'DELETE_FINAL' => 'Abschließende Bestätigung',
	'DELETE_FINAL_CONFIRM' => '<p>Danke, dass du Mitglied auf dieser Seite warst. Es tut uns leid, dass du gehst.</p><p>Deine Anfrage ist erfasst und gültig. Dies ist die abschließende Bestätigung. Möchtest du wirklich dein Benutzerkonto dauerhaft löschen?</p>',

	'LOG_USER_DELETED' => 'Benutzer %s (ID %s) hat das eigene Benutzerkonto gelöscht. ',
	'LOG_POST_REMOVED' => 'Die Forenbeiträge wurden gelöscht.',
	'LOG_POST_RETAINED' => 'Die Forenbeiträge blieben erhalten.',
	'LOG_NO_POSTS' => 'Es gab keine Forenbeiträge.',

	'REALLY_ERROR' => 'Du musst bestätigen, dass du wirklich dein Benutzerkonto löschen willst.',
	'UNDERSTAND_ERROR' => 'Du musst bestätigen, dass du verstanden hast, dass dieser Prozess nicht rückgängig gemacht werden kann.',
	'PASSWORD_ERROR' => 'Das eingegebene Passwort ist nicht richtig.',
	'FOUNDER_ERROR' => 'Gründer können ihr Benutzerkonto nicht mit dieser Funktion selbst löschen.',
	'BAD_FORM_KEY_ERROR' => 'Die Formularübermittlung konnte nicht bestätigt werden. Bitte reiche deine Anfrage noch einmal ein.',
	'GOODBYE_ERROR' => 'Dein Benutzerkonto wurde gelöscht.'

));
