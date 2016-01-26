<?php
/**
*
* Limit For Guest extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 brunino
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
   'MAX_GUEST_YEAR' => '<b>Ein Forum ist ein öffentlicher Ort für Diskussionen und lebt von den Beiträgen der Mitglieder. Es ist kein Selbstbedienungsladen, nur um Dateien herunterzuladen oder Anleitungen zu lesen. Darum haben wir die Ansicht für Gäste eingeschränkt. Du hast die erlaubte Anzahl Themen gelesen, nun bitten wir dich, selbst auch dein Scherflein beizutragen und dich anzumelden oder zu <a href="ucp.php?mode=register">registrieren</a> ehe du weiterliest. Damit hilfst du uns, unsere Projekte am Leben zu erhalten und fortzusetzen. Danke für dein Verständnis.</b>',
   'BBCODE_GUEST' => '<b>Nur registrierte Mitglieder können diesen Inhalt sehen</b>',
'MAX_GUEST_DAY' => '<b>Du musst dich registrieren um weiterzulesen, dein Kontingent für heute ist aufgebraucht. Melde dich bitte an, oder komm morgen wieder zum Lesen her.</b>',
'ACP_LFG_CATEGORY' => 'Limit für Gäste',
'ACP_LFG_TITLE' => 'Allgemeine Einstellungen',
  'LFG_BBCODE' => 'Aktiviere BBcode',
  'LFG_BBCODE_EX' => 'Du kannst [ghide]ex[/ghide] in Beiträgen benutzen, das wird "ex" vor Gästen verbergen',
  'LFG_FIRSTPOST' => 'Deaktiviere nur den 1. Beitrag"',
  'LFG_FIRSTPOST_EX' => 'Nach erreichen der Anzahl der maximalen Beiträge versteckt das für Gäste nur den ersten Beitrag jedes Themas, während die anderen sichtbar bleiben; stelle auf NEIN um alle Beiträge zu verbergen.',
  'LFG_COOKIE' => 'Zeitraum',
  'LFG_COOKIE_EX' => 'Zeitraum, wie lange Gäste blockiert werden, nachdem sie die maximale Anzahl Themen erreicht haben.',
  'LFG_MAXTOPICS' => 'Anzahl Themen',
  'LFG_MAXTOPICS_EX' => 'Anzahl an Themen, die Gäste sehen können ohne angemeldet zu sein. Setze auf 0 um diese Funktion zu deaktivieren',
'LFG_PT' => 'Zeige die Warnung in jedem Beitrag',
'LFG_PT_EX' => 'Wenn du JA auswählst, werden Gäste in jedem Beitrag die gleiche Warnung sehen. Wenn du NEIN auswählst, werden alle anderen Beiträge außer dem ersten leer sein. Die Option "Deaktiviere nur den 1. Beitrag" muss auf NEIN stehen, wenn du diese Funktion benutzen möchtest.',
'LFG_CD' => 'Countdown',
'LFG_CD_EX' => 'Wenn du JA auswählst, werden Gäste einen Countdown sehen, der ihnen erklärt, wie viele Beiträge sie jetzt noch sehen dürfen. Die Option "Anzahl Themen" darf nicht auf 0 gesetzt sein, wenn du diese Funktion benutzen möchtest.',
'ACP_LFG_SAVED' => 'Einstellungen aktualisiert',
  'ONE_YEAR' => 'Ein Jahr',
  'ONE_DAY' => 'Einen Tag',
'LFG_CD_WT' => 'Du hast nun {RE} Beiträge gesehen und du kannst maximal {MAX} Beiträge lesen. Nach Erreichen des Limits musst du dich anmelden oder registrieren, um weiterlesen zu können.',
'ATTENTION' => 'ACHTUNG',
));