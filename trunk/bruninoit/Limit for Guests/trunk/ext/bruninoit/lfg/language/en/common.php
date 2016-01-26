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
   'MAX_GUEST_YEAR' => '<b>A forum is a public meeting place for open discussion, it isn’t a place only for files downloads or read guides. You have already seen 8 topics, now we ask you to <a href="ucp.php?mode=register">sign up</a> to continue the reading of topics and to help us to continue our projects. Thanks.</b>',
   'BBCODE_GUEST' => '<b>Only registered users can see this content</b>',
'MAX_GUEST_DAY' => '<b>You must register to continue the reading of topics, for today. Sign up or return tomorrow to continue reading.</b>',
'ACP_LFG_CATEGORY' => 'Limit For Guest',
'ACP_LFG_TITLE' => 'General settings',
  'LFG_BBCODE' => 'Enable BBcode',
  'LFG_BBCODE_EX' => 'You can use [ghide]ex[/ghide] which will hide "ex" to guests',
  'LFG_FIRSTPOST' => 'Disable only 1° post',
  'LFG_FIRSTPOST_EX' => 'It will hide to guests, after the number max of topic, only the first post of every topic; turn to no to hide all posts.',
  'LFG_COOKIE' => 'Hide time',
  'LFG_COOKIE_EX' => 'Duration of block to guest after the number max of topic.',
  'LFG_MAXTOPICS' => 'Number of topics',
  'LFG_MAXTOPICS_EX' => 'Number of topics that guests can view without sign up. Set to 0 to disable this function',
'LFG_PT' => 'Show the advise on all posts',
'LFG_PT_EX' => 'If you select YES guests will see in all posts the same advise, if you select NO other posts except the first will be empty. The option "Disable only 1° post" must be set to NO if you want to use this function.',
'LFG_CD' => 'Countdown',
'LFG_CD_EX' => 'If you select YES, guests will see a countdown which explain how many topic they can see yet. The option "Number of topics" mustn’t be set to 0 if you want to use this function.',
'ACP_LFG_SAVED' => 'Settings Updated',
  'ONE_YEAR' => 'One Year',
  'ONE_DAY' => 'One Day',
'LFG_CD_WT' => 'You have seen {RE} topics and you can see maximum {MAX} topics. After the limit, to continue to read topics, you must sign in or sign up.',
'ATTENTION' => 'ATTENTION',
));