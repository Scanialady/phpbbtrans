<?php
/***************************************************************************
*
* @package Medals Mod for phpBB3
* @version $Id: medals.php,v 0.7.0 2008/01/23 Gremlinn$
* @copyright (c) 2008 Nathan DuPra (mods@dupra.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
***************************************************************************/

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
// pms
	'PM_MESSAGE'					=> '%1$s' . "\n" . '[b]Du wurdest ausgezeichnet mit dem Orden "%2$s" durch %3$s.' . "\n" . '%3$s hat dir ausserdem die folgende Nachricht gesendet:[/b]' . "\n\n",
	'PM_MESSAGE_POINTS_EARN'		=> '<br />Du erhieltest %1$s Punkt%2$s.' . "\n\n",
	'PM_MESSAGE_POINTS_DEDUCT'		=> '<br />%1$s Punkt%2$s abgezogen.' . "\n\n",
	'PM_MESSAGE_NOMINATED'			=> '%1$s' . "\n" . '[b]Du wurdest ausgezeichnet mit dem Orden "%2$s" durch %3$s, nachdem du durch %4$s dafür vorgeschlagen worden bist.' . "\n" . '%3$s hat dir ausserdem die folgende Nachricht gesendet:[/b]' . "\n\n",
	'PM_MSG_SUBJECT'				=> '%s zeichnete dich mit einem Orden aus!',

// medals awarding
	'AWARDED_BY'					=> 'Ausgezeichnet durch',
	'AWARDED_MEDAL'					=> 'Erhaltene Orden',
	'AWARDED_MEDAL_TO'				=> 'Erhaltene Orden von',
	'AWARD_MEDAL'					=> 'Orden erteilen',
	'AWARD_TIME'					=> 'Erhalten am: ',
	'AWARD_TO'						=> 'Erteile Orden an',
	'MEDAL_AWARD_GOOD'				=> 'Orden erfolgreich vergeben!',
	'NOT_MEDALS_AWARDED'			=> 'Orden wurde nicht vergeben!',
	'MEDAL_REMOVE_GOOD'				=> 'Orden erfolgreich entfernt!',
	'MEDAL_REMOVE_CONFIRM'			=> 'Du bist dabei, Orden eines Benutzers zu entfernen! Bist du sicher, dass du das möchtest?',
	'MEDAL_REMOVE_NO'				=> 'Kein Orden gelöscht',
	'MEDAL_EDIT'					=> 'Bearbeiten',
	'NO_USER_SELECTED'				=> 'Es wurde kein Benutzername eingegeben. Du wirst gleich weitergeleitet',

// medals nominate
	'APPROVE'						=> 'Zustimmen',
	'USER_NOMINATED'				=> 'Benutzer nominiert',
	'USER_IS_NOMINATED'				=> ' [<a href="%s" title="Dieser Benutzer wurde für einen Orden nominiert!">!</a>]',
	'MEDAL_NOMINATE_GOOD'			=> 'Nominierung für einen Orden erfolgreich!',
	'NOMINATABLE'					=> '[Nomierungstabelle]',
	'NOMINATE'						=> 'Nominiere Orden',
	'NOMINATE_FOR'					=> 'Nominiere Orden für',
	'NOMINATE_MEDAL'				=> 'Nominierungen verwalten',
	'NOMINATE_MESSAGE'				=> '<strong>%1$s nominiert diesen Benutzer für den Orden "%2$s" aus dem folgenden Grund:</strong>' . "\n\n",
	'NOMINATE_USER_LOG'				=> 'Verwalte Nominierungen für %s',
	'NOMINATED_BY'					=> '[Nominiert durch %s]',
	'NOMINATED_EXPLAIN'				=> 'Können Benutzer andere Benutzer für diesen Orden nominieren?',
	'NOMINATED_TITLE'				=> 'Ordensnominierungen',
	'NO_MEDALS_NOMINATED'			=> 'Orden nicht nominiert',
	'NOMINATIONS_REMOVE_GOOD'		=> 'Nominierungen erfolgreich entfernt!',

// Images
	'IMAGE_PREVIEW'					=> 'Vorschau',
	'MEDAL_IMG'						=> 'Bild',

// medals view
	'MEDAL'							=> 'Orden',
	'MEDALS'						=> 'Orden',
	'MEDALS_VIEW_BUTTON'			=> 'Auszeichnungsdetails',
	'MEDALS_VIEW'					=> 'Orden',
	'MEDAL_DETAIL'					=> 'Ordensdetails',
	'MEDAL_DESCRIPTION'				=> 'Ordensbeschreibung',
	'MEDAL_DESC'					=> 'Beschreibung',
	'MEDAL_AWARDED'					=> 'Empfänger',
	'MEDAL_AWARDED_EXPLAIN'			=> '<br />Klicke auf den Benutzernamen, um seine(n) Orden zu administrieren',
	'MEDAL_AWARD_REASON'			=> 'Auszeichnungsgrund',
	'MEDAL_AWARD_REASON_EXPLAIN'	=> '<br />Gib hier den Grund für die Auszeichnung mit diesem Orden ein',
	'MEDAL_NOMINATE_REASON'			=> 'Nominierungsgrund',
	'MEDAL_NOMINATE_REASON_EXPLAIN'	=> '<br />Gib hier den Grund für die Nominierung für diesen Orden ein',
	'MEDAL_AWARD_USER_EXPLAIN'		=> '<br />Gib hier die Benutzer ein, die mit diesem Orden ausgezeichnet werden sollen (jeder Name in einer eigenen Zeile)',
	'MEDAL_INFORMATION'				=> 'Ordensinformation',
	'MEDAL_INFO'					=> 'Information',
	'MEDAL_MOD'						=> 'Auszeichnung',
	'MEDAL_NAME'					=> 'Name',
	'NO_MEDALS_ISSUED'				=> 'Nicht erteilte Orden',
	'MEDAL_CP'						=> 'Orden Control Panel',
	'MEDAL_AWARD_PANEL'				=> 'Orden Auszeichnungs-Panel',
	'MEDAL_NOM_BY'					=> 'Nominiert durch',
	'MEDAL_AMOUNT'					=> 'Anzahl',

// Error messages
	'CANNOT_AWARD_MULTIPLE'	=> 'Dieser Benutzer hat die maximal vorgesehene Anzahl von diesem Orden erhalten',
	'IMAGE_ERROR'			=> 'Du kannst dieses Bild nicht für die Auszeichnung als Orden auswählen',
	'IMAGE_ERROR_NOM'		=> 'Du kannst dieses Bild nicht für die Nominierung als Orden auswählen',
	'NO_CAT_ID'				=> 'Es wurde keine Kategorie-ID angegeben.',
	'NO_CATS'				=> 'Keine Kategorien',
	'NO_GOOD_PERMS'			=> 'Du hast nicht die erforderlichen Berechtigungen um auf diese Seite zuzugreifen.<br /><br /><a href="index.php">Zurück zum Board Index</a>',
	'NO_MEDAL_ID'			=> 'Es wurde kein Orden ausgewählt oder es ist keiner vorhanden. Du wirst gleich weitergeleitet',
	'NO_MEDAL_MSG'			=> 'Das Nachrichtenfeld ist leer.<br /><br /><a href="%s">Zurück zur vorherigen Seite</a>',
	'NO_MEDALS'				=> 'Keine Orden verfügbar',
	'NO_MEDALS_TO_NOMINATE'	=> 'Es sind keine Orden verfügbar, für die dieser Benutzer nominiert werden kann.<br /><br /><a href="%s">Zurück zur vorherigen Seite</a>',
	'NO_USER_ID'			=> 'Es wurde keine Benutzer-ID angegeben',
	'NO_USER_MEDALS'		=> 'Dieser Benutzer wurde noch nicht mit einem Orden ausgezeichnet',
	'NO_USER_NOMINATIONS'	=> 'Dieser Benutzer wurde noch nicht für einen Orden nominiert',
	'NO_SWAP_ID'			=> 'Es wurde keine Swap-ID angegeben',
	'NOT_SELF'				=> 'Du kannst dich nicht selbst nominieren! (Das wär ja auch noch schöner... :-D )',

	'EXT_AUTHOR_COPY'		=> 'BB3.Mobi &copy; <a href="http://bb3.mobi/forum/viewtopic.php?t=78">Medals System Extension</a>',
));
