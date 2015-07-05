<?php

/**
 * Relative Date (EN)
 *
 * @package phpBB3
 * @version 1.0.5
 * @copyright (c) 2008 MLWN
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
* @ignore
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
	'SECOND'	=> '%d second ago',
	'SECONDS'	=> '%d seconds ago',
	'MINUTE'	=> '%d minute ago',
	'MINUTES'	=> '%d minutes ago',
	'HOUR'	=> '%d hour ago',
	'HOURS'	=> '%d hours ago',
	'DAY'	=> 'Yesterday',
	'DAYS'	=> '%d days ago',
	'WEEK'	=> '%d week ago',
	'WEEKS'	=> '%d weeks ago',
));

?>