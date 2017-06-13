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

	'ACL_U_DELETE_MY_ACCOUNT_POSTS' => 'Kann bei Accountlöschung eigene Beiträge löschen'

));
