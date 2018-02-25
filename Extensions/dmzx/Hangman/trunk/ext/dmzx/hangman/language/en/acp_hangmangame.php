<?php
/**
*
* @package phpBB Extension - Hangman Game
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
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
// ’ » “ ” …
//
// Merge the following language entries into the lang array

$lang = array_merge($lang, array(
	'ACP_IMPORT_BONUS'							=> 'Import Bonus',
	'ACP_IMPORT_BONUS_EXP'						=> 'Will a user/admin who does import a Hangman\'s Pack receive additional Points as gift?',
	'ACP_IMPORT_BONUS_SIZE'					 	=> 'Import Bonus Size',
	'ACP_IMPORT_BONUS_SIZE_EXP'				 	=> 'Amount of Points a user/admin will gain for importing job',
	'ACP_HANGMAN_BOT'							=> 'Hangman Bot Enable?',
	'ACP_HANGMAN_BOT_EXP'						=> 'If enable Hangman Bot Name will be displayed instead of Anonymous in overview and high score page',
	'ACP_HANGMAN_BOT_NAME'						=> 'Hangman Bot Name',
	'ACP_HANGMAN_BOT_NAME_EXP'					=> 'Enter a name for Hangman Bot you wish to display',
	'ACP_HANGMAN_ANONYMOUS_POINTS'				=> 'Guest Points',
	'ACP_HANGMAN_ANONYMOUS_POINTS_EXP'			=> 'Will Anonymous User receive/loose Points in any circumstances?',
	'ACP_HANGMAN_CREATOR_BONUS'					=> 'Creator Bonus',
	'ACP_HANGMAN_CREATOR_BONUS_EXP'				=> 'Will creator gain points if somebody guesses his hangman?',
	'ACP_HANGMAN_CREATOR_BONUS_SIZE'			=> 'Creator Reward size',
	'ACP_HANGMAN_CREATOR_BONUS_SIZE_EXP'		=> 'Amount of Points a creator will gain if somebody lost while guessing his Hangman',
	'ACP_HANGMAN_INCORRECT_VALUES'				=> 'Incorrect values entered. If you like to export from x to y, you need to enter both values and mark the checkbox!',
	'ACP_HANGMAN_IMPORT_SQLERR'					=> 'SQL error with Hangman #%d',
	'ACP_HANGMAN_SKIPPED_ERROR'					=> 'Skipped word <strong>%s</strong>. Errors: %s',
	'ACP_HANGMAN_IMPORT_STOP'					=> 'Stopped after importing %d Hangmen',
	'ACP_HANGMAN_IMPORT_SUCCESS'				=> 'Done importing %d Hangmen',
	'ACP_RESET_CREATED_CONFIRM_MESSAGE'			=> 'Are you sure you want to reset created Hangmans counter?',
	'ACP_DELETE_EXP_CONFIRM_MESSAGE'			=> 'Are you sure you want to delete all expired Hangmen?',
	'ACP_DELETE_WON_CONFIRM_MESSAGE'			=> 'Are you sure you want to delete all solved Hangmen?',
	'ACP_DELETE_HIGHSCORE_CONFIRM_MESSAGE'		=> 'Are you sure you want to delete all Highscores?',
	'ACP_DELETE_ALL_HANGMANS_CONFIRM_MESSAGE' 	=> 'Are you sure you want to delete all Hangmen?',
	'ACP_RES_CREATED_HANGMANS'					=> 'Reset created Hangmans counter',
	'ACP_RESET_CREATED_HANGMANS'				=> 'Created Hangmans counter has been reset!',
	'LOG_RESET_CREATED_HANGMANS'				=> 'Reset counter for created Hangmans',
	'ACP_HANGMAN_SKIP'							=> 'The word %s is skipped due to ',
	'ACP_HANGMAN_SKIP_FEW'						=> '&#8226; not enough letters',
	'ACP_HANGMAN_SKIP_ALREADY'					=> '&#8226; is already in DB',
	'ACP_HANGMAN_SKIP_PARSING'					=> '&#8226; forbidden letters:[%s]',
	'ACP_HANGMAN_SKIP_BBCODED'					=> '&#8226; contains bbcode',
	'ACP_POINTS_NOTICE'		 					=> 'In spite of you set Hangman\'s Points being active they will not work because Global System Points are off',
	'ACP_HANGMAN_NOFILE'						=> 'Sorry, this filename does not exist.',
	'ACP_BOARD_HANGMAN'		 					=> 'Hangman status',
	'ACP_BOARD_HANGMAN_ENABLE' 					=> 'Hangman enabled',
	'ACP_ALLOW_BBCODE'							=> 'bbcode in subject and help',
	'ACP_ALLOW_BBCODE_EXP'						=> 'Do you want to allow the use of bbCodes in the subject line and in the help text?',
	'ACP_ALLOW_SMILIES'		 					=> 'Smilies in subject and help',
	'ACP_ALLOW_SMILIES_EXP'						=> 'Do you want to allow the use of smilies in the subject line and in the help text?',
	'ACP_CONFIG_TITLE' 							=> 'Hangman Configuration Options',
	'ACP_CONFIG_HEAD'							=> 'Configuration',
	'ACP_CONFIG_EXPLAIN' 						=> 'Main Config Page of Hangmans',
	'ACP_CONFIG_UPDATED' 						=> 'The configuration was updated successfully.',
	'ACP_ONLY_ADMIN_CREATE'						=> 'Only Admins can create Hangmans',
	'ACP_GAMES_PER_PAGE'						=> 'Number of Hangmans in Overview',
	'ACP_GAMES_PER_PAGE_EXP'					=> 'Number of Hangmans, which should be shown per page on the overview page',
	'ACP_GENERAL_SWITCHES'						=> 'General Switches',
	'ACP_GENERAL_VALUES'						=> 'General Settings',
	'ACP_DELETE_ATTENTION'						=> 'ATTENTION: Following actions are NOT reversible!',
	'ACP_POINTS_MOD_EXIST'						=> 'Ultimate Points System',
	'ACP_POINTS_MOD_EXPLAIN'					=> 'You have the Ultimate Points System installed and therefore you are able to add/subtract points from the users account.',
	'ACP_POINTS_MOD_INSTALLED'					=> 'Use Points Mod (only if installed)',
	'ACP_POINTS_MOD_WON'						=> 'Points for won Hangman',
	'ACP_POINTS_MOD_LOST'						=> 'Points for lost Hangman',
	'ACP_POINTS_MOD_CREATOR_REWARD'				=> 'Points for creator if lost Hangman',
	'ACP_POINTS_MOD_CREATED'					=> 'Points for creating Hangman',
	'ACP_POINTS_MOD_LETTERS'					=> 'Points for guessing a letter',
	'ACP_POINTS_INTERNAL'						=> 'Internal Points System',
	'ACP_MAKE_WORDS_UPPER_EXP'					=> 'Should Hangmans be converted to upper case?',
	'ACP_MAKE_WORDS_UPPER'						=> 'Make Created Words upper case?',
	'ACP_TIME_PLAY_AGAIN'						=> 'After which time users can retry unquessed words (0 means never)',
	'ACP_DELETE'								=> 'Delete',
	'ACP_YES'									=> 'Yes',
	'ACP_NO'									=> 'No',
	'ACP_NONEMOD'								=> 'None',
	'ACP_TITLE'									=> 'Hangman deleting',
	'ACP_TEXT'									=> 'Do you want to delete %s ?',
	'ACP_TEXT_SCORE' 							=> 'Delete creators score?',
	'ACP_SUBMIT'								=> 'OK',
	'ACP_RESET'									=> 'Cancel',
	'ACP_RESET_HIGHSCORE' 						=> 'Reset Highscore',
	'ACP_RESET_HANGMANS' 						=> 'Delete all Hangmans',
	'ACP_MULTIDELETE_GO'						=> 'Delete Marked',
	'ACP_DELETED_HIGHSCORE' 					=> 'Highscore reset successful!',
	'ACP_DELETED_HANGMANS' 						=> '%s Hangmans where deleted successful!',
	'ACP_DELETED_ALL_HANGMANS' 					=> 'Deleted all Hangmans!',
	'ACP_RULES_ENABLE'							=> 'Rules for creating Hangmans',
	'ACP_RULES_ENABLE_EXP'						=> 'You can enable to show rules for creating Hangmans (you can edit the rules in the language file)',
	'ACP_STANDART_DAYS'							=> 'How many remaining days in creating?',
	'ACP_STANDART_TRIES'						=> 'How many max-tries in creating?',
	'ACP_STANDART_FILTER'						=> 'Standard Filter in Overview?',
	'ACP_RESET_WON'								=> 'Delete solved Hangmans',
	'ACP_RESET_TIME_UP'							=> 'Delete time ended Hangmans',
	'ACP_SCORE_WON'								=> 'Points for won Hangman',
	'ACP_SCORE_LOST'							=> 'Points subtraction for lost Hangman',
	'ACP_SCORE_CREATE'							=> 'Points for creating Hangman',
	'ACP_SCORE_LETTERS'							=> 'Points for guessing a letter',
	'ACP_HSC_LETTERS_P'							=> 'Show percent of wrong and right guessed letters?',
	'ACP_HIGHSCORE_FILTER'						=> 'Standard filter for Highscore Page',
	'ACP_AUTO_REPLACE_LETTERS'					=> 'Which letters are replaced automatically?',
	'ACP_ALLOWED_LETTERS'						=> 'Allowed Letters?',
	'ACP_MODERATOR_GROUP' 						=> 'Select Hangman Moderator group',
	'ACP_SHOW_STATS'							=> 'Mini-stats on overview',
	'ACP_SHOW_STATS_EXP'						=> 'Show mini statistics on the overview page',
	'ACP_SHOW_NUMBERS'							=> 'Show numbers of Hangmans',
	'ACP_SHOW_NUMBERS_EXP'						=> 'Show Hangman numbers on overview page',
	'ACP_CONVERT_SPECIAL' 						=> 'Convert German Umlauts',
	'ACP_CONVERT_SPECIAL_EXP'					=> 'Convert German Umlauts (Ä,Ö,Ü,ß) before saving the words to the Database',
	'ACP_GAMES_PER_DAY'							=> 'How many Hangmans can a user create per day (0 means no limit)',
	'ACP_TRIES_MINIMUM'							=> 'How much tries minimum',
	'ACP_TRIES_MAXIMUM'							=> 'How much tries maximum',
	'ACP_MIN_LETTERS'							=> 'How many letters must a hangman have?',
	'ACP_MAX_LETTERS'							=> 'How many letters can a hangman have (-1 unlimited)',
	'ACP_REQUESSING_LOSE' 						=> 'Points Subtractions',
	'ACP_REQUESSING_LOSE_EXP'					=> 'Quessing a letter again will lose a try and reduce points, guessing no letter will also lose a try and points(agains F5-pressers)',
	'ACP_ALLOW_GUEST'							=> 'Guests are allowed to visit Hangmans',
	'ACP_STANDART_TITLE'						=> 'Hangman - Subject (standard - can be edited by User on creating)',
	'ACP_MIN_HELP'								=> 'Min help length for a Hangman?',
	//ADMINISTRATION_XML
	'TITLE'										=> 'Hangman - EXPORT / IMPORT',
	'EXPLAIN'									=> 'This is the Main Page for Exporting or Importing Hangmans in XML. <br />If you want to Import a File Browse it and then choose Import. This will import the Hangmans.<br />If you want to Export some Hangmans choose the range from/to of Hangmans you like to export and then press Export,<br />then your browser will send you a file. You have to choose where to save and then the download starts. As with import, use smaller exports (max. 1000 records)!',
	'EXPORT'									=> 'Hangman - Export',
	'IMPORT'									=> 'Hangman - Import',
	'IMPORT_EXPLAIN'							=> 'If you like to change the standard import settings, you can change below values. Please mark the field behind then!<br />So the basic settings are <strong>Anonymous</strong> as username and a maximum of <strong>1000</strong> of Hangmans to import (you shouldn\'t even try more at once to avoid errors - exceeding time limit or memory).',
	'CHOOSEFILE'								=> 'Choose a file',
	'EXPORT_START_AT'							=> 'Begin at which ID',
	'EXPORT_END_AT'								=> 'End at which ID',
	'EXPORT_ALL'								=> 'Export all',
	'EXPORT_LETTERS'							=> 'Only Export hangmans with this letters inside',
	'EXPORT_MAX'								=> 'Maximum Export count',
	'IGNORE_DOUBLES'							=> 'Ignore Hangmans already contained in DB (will not ignore doubles inside the XML)',
	'IMPORT_MAXIMUM'							=> 'Importmaximumcount',
	'IMPORT_USERNAME'							=> 'Username assigned to the imported hangmans (will be checked - if not found Anonymous)',
	'IMPORT_MIN_LETTERS'						=> 'Just Import Hangmans with at least xxx letters',
	'IMPORT_IGNORE_DL'							=> 'Ignore time limitation in hangmans',
	'IMPORT_IGNORE_DL_'							=> '(will set it to unlimited)',
	// Error messages
	'ACP_ERROR_GAMES_PER_PAGE'					=> 'You cannot enter a value smaller that than 1 for Hangmans per page',
	'ACP_ERROR_TIME_PLAY'						=> 'You cannot enter a value smaller than 0 for the time to play again',
	'ACP_ERROR_STD_TRIES'						=> 'You cannot enter a value smaller than 1 standard tries',
	'ACP_ERROR_MIN_HELP'						=> 'You cannot enter a value smaller than 0 for minimum help length',
	'ACP_ERROR_MIN_TRIES'						=> 'You cannot enter a value smaller than 1 or bigger than 20 for the minimum tries',
	'ACP_ERROR_MAX_TRIES'						=> 'You cannot enter a value smaller than 1 or bigger than 20 for the maximum tries',
	'ACP_ERROR_MIN_MAX'							=> 'The value for minimum tries cannot have a higher value than the maximum tries',
	'ACP_ERROR_MIN_LETTERS'						=> 'You cannot enter a value smaller than 1 for the minimum letters',
	'ACP_ERROR_MAX_LETTERS'						=> 'You cannot enter a value smaller than -1 for the maximum letters',
	'ACP_ERROR_MIN_MAX_LET'						=> 'The minimum value cannot be higher than the maximum value - only exception is -1 for unlimited',
));
