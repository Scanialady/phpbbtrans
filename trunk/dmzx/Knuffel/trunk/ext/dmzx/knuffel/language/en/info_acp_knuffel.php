<?php
/**
*
* @package phpBB Extension - Knuffel
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_INSERT_FIRST_FILL'				=> 'The tables were filled successfully with some basic values',
	'ACP_REMOVE_TABLES'					=> 'The tables were deleted successfully',
	'ACP_KNUFFEL_UPDATE'				=> 'Knuffel Modul successfully updated',
	'ACP_KNUFFEL'						=> 'Knuffel',
	'ACP_KNUFFEL_SETTINGS'				=> 'Knuffel settings',

	// Settings
	'KNUFFEL_TITLE'						=> 'Knuffel',
	'KNUFFEL_ENABLE'					=> 'Enable Knuffel:',
	'KNUFFEL_ENABLE_EXPLAIN'			=> 'Here you can enable/disable Knuffel',
	'KNUFFEL_PAGINATION'				=> 'Pagination:',
	'KNUFFEL_PAGINATION_EXPLAIN'		=> 'Enter here, how much entries you like to see in the high score list per page',
	'KNUFFEL_PAGINATION_ERROR'			=> 'You cannot	enter a value below 3 (max 999)!',
	'KNUFFEL_TITLE_EXPLAIN'				=> 'Here you can delete either all high score lists or only the current list and leave the All time highscores (recommended)',
	'KNUFFEL_DELETE'					=> 'Delete high score lists',
	'KNUFFEL_DELETE_ATTENTION'			=> 'Following actions cannot be re-done!!',
	'KNUFFEL_DELETE_CONFIRM'			=> 'Are you sure, you want to delete the Knuffel highscores?',
	'KNUFFEL_DELETE_EXPLAIN'			=> 'Here you can delete the current highscores. The all time values remain intact.',
	'KNUFFEL_DELETE_ALL'				=> 'Delete all highscore lists including the Alltime records',
	'KNUFFEL_DELETE_ALL_CONFIRM'		=> 'Are you sure you want to reset all highscore lists? The alltime highscores will be deleted too!',
	'KNUFFEL_DELETE_ALL_EXPLAIN'		=> 'Here you can delete all highscore lists incl. the alltime records',
	'KNUFFEL_DELETE_BUTTON'				=> 'Delete',
	'KNUFFEL_DELETE_SUCCESSFULL'		=> 'The highscores were deleted successfully',
	'KNUFFEL_HIGHSCORE_DELETE'			=> 'Delete highscores',
	'KNUFFEL_SETTINGS_EXPLAIN'			=> 'Here you can configure the basic Knuffel settings',
	'KNUFFEL_CONFIG_SUCCESS'			=> 'The settings were updated successfully',

	// Points
	'KNUFFEL_POINTS_SETTINGS'			=> 'Ultimate Points settings',
	'KNUFFEL_POINTS_SETTINGS_EXPLAIN'	=> 'As you have the Ultimate Points Mod installed, you can set here some additional values',
	'KNUFFEL_COST'						=> 'Costs per game:',
	'KNUFFEL_COST_EXPLAIN'				=> 'Here you can set the costs for a game',
	'KNUFFEL_BASIS_JACKPOT'				=> 'Basic Jackpot:',
	'KNUFFEL_BASIS_JACKPOT_EXPLAIN'		=> 'Here you can set the basi Jackpot',
	'KNUFFEL_JACKPOT'					=> 'Current Jackpot:',
	'KNUFFEL_JACKPOT_EXPLAIN'			=> 'Here you can change the value of the current Jackpot',
	'KNUFFEL_GIVE_JACKPOT'				=> 'Payout of the Jackpot:',
	'KNUFFEL_GIVE_JACKPOT_EXPLAIN'		=> 'Here you can set, how much points are needed to win the Jackpot',

	// Logs
	'LOG_KNUFFEL_DELETE_HIGHSCORES'		=> 'Knuffel Highscores were deleted',
	'LOG_KNUFFEL_DELETE_ALL_HIGHSCORES'	=> 'Knuffel Highscores and Alltime Highscores were deleted',
	'LOG_KNUFFEL_POINTS'				=> 'Knuffel points settings were updated',
	'LOG_KNUFFEL_SETTINGS'				=> 'Knuffel settings updated',

	// Permission
	'ACL_U_USE_KNUFFEL'					=> 'Can play Knuffel game',
));
