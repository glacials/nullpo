<?php
/**
 * Relative Date
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

function plural($num)
{
	if ($num != 1) { return "s"; }
}

function get_relative_time($date)
{
	global $user;

	$user->add_lang('mods/relative_date');

	$diff = time() - $date;

	if ($diff < 60)
	{
		if ($diff == 1)
		{
			return sprintf($user->lang['SECOND'], $diff);
		}
		else
		{
			return sprintf($user->lang['SECONDS'], $diff);
		}
	}
	else
	{
		$diff = round($diff / 60);
		if ($diff < 60)
		{
			if ($diff == 1)
			{
				return sprintf($user->lang['MINUTE'], $diff);
			}
			else
			{
				return sprintf($user->lang['MINUTES'], $diff);
			}
		}
		else
		{
			$diff = round($diff / 60);
			if ($diff < 24)
			{
				if ($diff == 1)
				{
					return sprintf($user->lang['HOUR'], $diff);
				}
				else
				{
					return sprintf($user->lang['HOURS'], $diff);
				}
			}
			else
			{
				$diff = round($diff / 24);
				if ($diff < 7)
				{
					if ($diff == 1)
					{
						return sprintf($user->lang['DAY'], $diff);
					}
					else
					{
						return sprintf($user->lang['DAYS'], $diff);
					}
				}
				else
				{
					$diff = round($diff / 7);
					if ($diff < 4)
					{
						if ($diff == 1)
						{
							return sprintf($user->lang['WEEK'], $diff);
						}
						else
						{
							return sprintf($user->lang['WEEKS'], $diff);
						}
					}
					else
					{
						return false;
					}
				}
			}
		}
	}
}

?>