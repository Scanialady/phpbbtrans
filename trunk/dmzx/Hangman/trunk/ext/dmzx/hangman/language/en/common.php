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

$lang = array_merge($lang, array(
	'HANGMAN_NO_HANGMANWORDS'		=> 'No Hangman words',
	'HANGMAN_TOP'					=> 'TOP - ',
	'HANGMAN_RETURN_BACK_OVERVIEW'	=> 'Click %shere%s to return to Hangman overview page',
	'DELETE_MARKED_HANGMEN_SUCCESS' => '%d Hangman(s) have been deleted successfully',
	'DELETE_MARKED_HANGMEN'			=> 'Are you sure that you want to delete all marked Hangmans?',
	'HANGMAN_NO_HIGHSCORES'			=> 'No Hangman Highscores',
	'HANGMAN_DELETE'				=> 'Hangman delete',
	'CLOSE_WINDOW'					=> 'Close window',
	'HANGMAN_WINDOW_MODE'			=> 'Click to play in window mode',
	'HANGMAN_BOARD_DISABLE'			=> 'Sorry, Board Hangman is disabled, please, try later.',
	'HANGMAN_VIEW_ONLINE'			=> 'Playing Hangman',
	'HANGMAN_TITLE'					=> 'Hangman',
	'HANGMAN_OVERALL_HEADLINE'		=> 'Hangman Version',
	'HANGMAN_DOT'					=> '&#8226;',
	'HANGMAN'						=> 'Hangman',
	'STATUS_GREEN'					=> 'Not guessed yet!',
	'STATUS_TIME'					=> '%s Time is up!',
	'STATUS_WON'					=> '%s won by: %s',
	'STATUS_UNLIMITED'				=> 'Unlimited!',
	// NAVIGATION
	'HIGHSCORE_PAGE' 				=> 'Highscore',
	'PREV_PAGE' 					=> 'Previous Page',
	'HELP_PAGE' 					=> 'Help',
	'NEXT_PAGE' 					=> 'Next Page',
	'CREATION_PAGE'					=> 'Create a Hangman',
	'OVERVIEW_PAGE'					=> 'Overview',
	'CREATION_DONE_PAGE' 			=> 'Hangman Done',
	'TOTAL_HANGMAN_PLAYERS'	=> array(
		1 => '%d player',
		2 => '%d players',
	),
	'TOTAL_HANGMANS'	=> array(
		1 => '%d hangmen',
		2 => '%d hangmens',
	),
	// OVERVIEW
	'HANGMAN_CREATOR' 				=> 'Creator',
	'HANGMAN_DATE' 					=> 'Creation Date',
	'HANGMAN_LEASE_DATE'			=> 'Days left',
	'HANGMAN_SUBJECT'				=> 'Subject',
	'HANGMAN_MAX_TRIES'				=> 'Tries',
	'HANGMAN_STATUS'				=> 'State',
	'HANGMAN_QUESS_TABLE'			=> 'Hangman Guess Table',
	// FILTER
	'FILTER_HEADLINE'				=> 'Filter:&nbsp;',
	'FILTER_UNQUESSED'				=> 'Unguessed',
	'FILTER_WON'					=> 'Won',
	'FILTER_TIME_UP'				=> 'Time up',
	'FILTER_SUBMIT'					=> 'Go',
	'FILTER_OWN'					=> 'Own',
	'FILTER_OTHERS'					=> 'From Others',
	'FILTER_NOFILTER'				=> 'No Filter',
	// STATS
	'HANGMANSTATS_ONLINE'			=> 'Unguessed Hangmans: %s',
	'HANGMANSTATS_TODAY'			=> 'Today created Hangmans: %s',
	'HANGMANSTATS_WON'				=> 'Solved Hangmans: %s',
	'HANGMANSTATS_BEST'				=> 'Best Player: %s',
	'HANGMANSTATS_TOTAL'			=> 'Total Hangmans: %s',
	//NEW(done)
	'NEW_TITLE'						=> 'Create a new Hangman',
	'NEW_SUCESS'					=> 'Hangman created successful',
	'ERROR_HANGMAN_WORD' 			=> 'Can not create Hangmans without a word!',
	'ERROR_HANGMAN_SUBJECT'			=> 'Can not create Hangmans without given subject!',
	'ERROR_HANGMAN_HELP'			=> 'Can not create Hangmans without given help!',
	'ERROR_HANGMAN_TRIES'			=> 'Unknown option given at tries!',
	'ERROR_HANGMAN_LEASE'			=> 'Unknown option at days left',
	'ERROR_HANGMAN_TOLONG'			=> 'Your input was to long!',
	'ERROR_HANGMAN_FORBIDDEN_LETTERS'	=> 'Just use (%s) in your hangmans!<br />Following letters are wrong: %s',
	'ERROR_IS_SHORT'				=> 'Word is to short, it must contain at least %d letters!',
	'TRY_AGAIN'						=> 'Back',
	'ERROR_TO_MUCH'					=> 'You have created to much Hangmans. Try it later again!',
	// CREATE
	'CREATE_SUBJECT'				=> 'Hangman subject',
	'CREATE_HELP'					=> 'Hangman help',
	'CREATE_HELP_HELP'				=> 'At least %s letters!',
	'CREATE_TRIES'					=> 'Hangman guesses',
	'CREATE_DAYS'					=> 'Days Left',
	'CREATE_NEW'					=> 'Hangman creation',
	'CREATE_DAY_HELP'				=> '0 means unlimited',
	'CREATE_HANGMAN'				=> 'Hangman Word',
	'CREATE_HELP_HANGMAN'			=> '(at least %s letters, maximum %s letters)',
	'CREATE_HELP_HANGMAN_UNLIMITED'	=> '(at least %1$s letters, but no limit in length)',
	'CREATE_YES'					=> 'Create',
	'CREATE_NO'						=> 'Cancel',
	'CREATE_RULES_HEADER'			=> 'Rules for creating a Hangman',
	'CREATE_RULES_TEXT'				=> '<br />* Enter a useful title (i.e. Geography, Pop Star)<br />
		* Enter a common word<br />
		* Take care you spell it right<br />
		* Enter a small help text (i.e. Capital in Europe)<br /><br />',
	// QUESS
	'HANGMAN_NO_PLAY_PERMISSION'	=> 'Sorry, you have no permissions to play Hangman',
	'HANGMAN_QUESS'					=> 'Hangman guessing',
	'QUESS_LETTERS'					=> 'Letters:',
	'QUESS_WON_OTHER_WIN'			=> '<strong>Game was already won by %s!</strong>',
	'QUESS_WON_SELF_WIN'			=> '<strong>Good luck you have won the Game!</strong>',
	'QUESS_LOST_WIN'				=> '<strong>Sorry, you have lost the Game ...</strong>',
	'QUESS_WON_OTHER'				=> 'Game already won by %s<br /><br />Click %shere%s to retun to the previous page',
	'QUESS_WON_SELF'				=> 'Good luck you have won the Game!<br /><br />Click %shere%s to retun to the previous page',
	'QUESS_LOST'					=> 'Sorry, you have lost the Game<br /><br />Click %shere%s to retun to the previous page',
	'QUESS_WORD'					=> 'The word you need to find',
	'HOURS'							=> 'Hour(s)',
	'MINUTES'						=> 'Minute(s)',
	'SECONDS'						=> 'Second(s)',
	'QUESS_LOST_RETRY'				=> 'You have lost the Game, in %d %s you can retry!',
	'QUESS_LOST_RETRY_OVERVIEW' 	=> 'You can replay in %d %s!',
	'HANGMAN_SELF'					=> 'You have created the Game by yourself!',
	'QUESS_TIME_UP'					=> 'The Time is up for this hangman!',
	'QUESS_REMAINING_TRIES'			=> 'You have still %s tries.',
	'QUESS_QUESSORS'				=> 'Users already tried:&nbsp;&nbsp;',
	'QUESS_NOBODY'					=> 'Nobody tried to solve this Hangman yet!',
	'TRY_A_WORD'					=> 'Try a word',
	'TRY'							=> 'Try',
	// HIGHSCORE
	'HIGHSCORE_USER'				=> 'Username',
	'HIGHSCORE_WON'					=> 'Won Games',
	'HIGHSCORE_LOST'				=> 'Lost Games',
	'HIGHSCORE_CREATED'				=> 'Created',
	'HIGHSCORE_POINTS'				=> 'Points',
	'HIGHSCORE_R_LETTERS'			=> 'Right Letters',
	'HIGHSCORE_W_LETTERS'			=> 'Wrong Letters',
	'HIGHSCORE_ASC'					=> 'Ascending',
	'HIGHSCORE_DESC'				=> 'Descending',
	'HIGHSCORE_FILTER_WON'			=> 'Highscore filter by won',
	'HIGHSCORE_FILTER_LOST'			=> 'Highscore filter by lost',
	'HIGHSCORE_FILTER_SCORE'		=> 'Highscore filter by score',
	'HIGHSCORE_FILTER_CREATED'		=> 'Highscore filter by created',
	'HIGHSCORE_FILTER_R_LETTERS'	=> 'Highscore filter right letters',
	'HIGHSCORE_FILTER_W_LETTERS'	=> 'Highscore filter wrong letters',
	'ORDER_BY_WON'					=> 'won',
	'ORDER_BY_LOST'					=> 'lost',
	'ORDER_BY_CREATED'				=> 'created',
	'ORDER_BY_POINTS'				=> 'points',
	'ORDER_BY'						=> 'Order by',
	'ORDER_BY_R_LETTERS'			=> 'right letters',
	'ORDER_BY_W_LETTERS'			=> 'wrong letters',
	// HELP
	'ADD_POINTS_PAGE'				=> 'Additional Points',
	'HELP_ADD_POINTS'				=> 'As the admin activate it, you can gain additional points, if you create Hangmans! So every time someone loose to guess your Hangman, you will receive additionally %1$s points',
	'HELP_TITLE'					=> 'Help at Hangman',
	'HELP_OVERVIEW'					=> 'This is the Main page for Navigation. Here you can see the hangmans when they are created there status and anything else.<br />
		If you want to play a hangman, just click on the subject of it. Notice that you can not play games you have created by your own, are out of time or already lost by you.',
	'HELP_CREATION'					=> 'This is the Main page for Creation, please notice <strong> all </strong> fields have to be filled!<br />
		The Subject will be the link to the hangman and if you want is a little help for other players to guess the game. More help you have to give at Hangmanhelp, bbcode and smilies you now from your board are activated!<br />
		Hangman word is the word the others have to guess and Days left means a time limit for all players to get the word.<br />
		At least there is a Max-Tries -> means how many wrong letters a user can guess till he lose.<br />',
	'HELP_HIGHSCORE'				=> 'This is the page where you can see who are the best players - ordered by your will, see the links in the lower left.<br />',
	'HELP_POINTS'					=> 'Your admins set the game in a way, where you can lose/gain	<strong>%5$s</strong> from your %5$s account: <br />
		<strong>Loose a Hangman</strong> -> you will loose <strong>[ %1$s ]</strong> %5$s<br />
		<strong>Win a Hangman</strong> -> you receive <strong>[ %2$s]</strong> %5$s<br />
		<strong>Guess character</strong> -> you receive <strong>[ %3$s ]</strong> %5$s<br />
		<strong>Create a Hangman</strong> -> you receive <strong>[ %4$s ]</strong> %5$s.<br />',
	'HELP_HIGHSCORE_SYSTEM'			=> 'The internal Hangman points system is set as follows:<br />
		<strong>Loose a Hangman</strong> -> you loose <strong>[ %4$s ]</strong> Points<br />
		<strong>Win a Hangman</strong> -> you receive <strong>[ %2$s ]</strong> Points<br />
		<strong>Guess character</strong> -> you receive <strong>[ %3$s ]</strong> Points<br />
		<strong>Create a Hangman</strong> -> you receive <strong>[ %1$s ]</strong> Points<br /><br />',
	'UPS_HIGHSCORE_PAGE'			=> 'Ultimate Points System',
	// ERRORS
	'ERROR_UPDATE_SCORE'			=> 'Error by updating score!',
	'ERROR_DELETE_HANGMAN'			=> 'Error by deleting!',
	'ERROR_GET_HANGMAN'				=> 'Error by getting hangman-data!',
	'ERROR_GET_WINNER'				=> 'Error by getting a winner!',
	'ERROR_SET_HANGMAN'				=> 'Error by setting hangman-data!',
	'ERROR_GET_HIGHSCORE'			=> 'Error by getting highscore!',
	'ERROR_ADMINISTRATION'			=> 'Error by administration!',
	'ERROR_GET_CONFIG'				=> 'Unable to read the config!',
	'ERROR_SET_CONFIG'				=> 'Unable to set new config!',
	'ERROR_ONLY_ADMIN_CREATE'		=> 'Sorry, you have no rights to create a Hangman',
	'ERROR_GET_USERNAME'			=> 'Could not get username!',
	'ACP_RESET'						=> 'Cancel',
	'ACP_MULTIDELETE_GO'			=> 'Delete Marked',
));
