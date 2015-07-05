<?php
/**
* @author Bycoja bycoja@web.de
* info_acp_invite [British English]
*
* @package language
* @version $Id: info_acp_invite.php 054 2009-11-28 14:41:59GMT Bycoja $
* @copyright (c) 2008 Bycoja
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Englische Übersetzung durch den Autor:
* Bycoja
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Permissions
$lang = array_merge($lang, array(
    'acl_u_send_invite'	=> array('lang' => 'Can send invitations to friends', 'cat' => 'misc'),
));

$lang = array_merge($lang, array(
	'ACP_INVITE_INSTALLED'				=> '»Invite A Friend« has been successfully installed and can be accessed in "General".<br/><br/>%sGo to »Invite A Friend«%s',
	'ACP_INVITE'						=> 'Invite a friend',
	'ACP_INVITE_EXPLAIN'				=> 'Here you can set all default settings for the e-mails which users can send to their friends.',
	'ACP_INVITE_LOG'					=> 'Invitation log',
	'ACP_INVITE_LOG_EXPLAIN'			=> 'This lists all actions relating to the invitations which users can send to their friends.',
	'JAVASCRIPT_NOTICE'					=> 'If you don’t activate <b>JavaScript</b>, you won’t be able to use all settings.',

	'ACC_TRANSFER'						=> 'Transfer',
	'OPTIONAL'							=> 'Optional',
	'INVITE_INVITE'						=> 'Invitation',
	'INVITE_CONFIRM'					=> 'Confirmation',
	'VIEWTOPIC'							=> 'Topic',
	'MEMBERLIST_VIEW'					=> 'Profile',
	'INVITE_INFO'						=> 'Details',

	'SETTINGS_ENABLE'							=> 'Enable »Invite A Friend«',
	'SETTINGS_ENABLE_KEY'						=> 'Enable registration keys',
	'SETTINGS_ENABLE_KEY_EXPLAIN'				=> 'A registration key, which is obtained by a user of this board, is required in order to register.',
	'SETTINGS_KEY_GROUP_EXPLAIN'				=> 'Users, who enter a registration key, will be added to the selected group automatically.',
	'SETTINGS_KEY_GROUP_DEFAULT'				=> 'Set selected group to default',
	'SETTINGS_KEY_GROUP_DEFAULT_EXPLAIN'		=> 'If set to yes, users, who enter a valid registration key, will be not only put into the selected group, but this group also being their default one.',
	'SETTINGS_REMOVE_NEWLY_REGISTERED'			=> 'Remove from Newly Registered Users',
	'SETTINGS_REMOVE_NEWLY_REGISTERED_EXPLAIN'	=> 'Users, who enter a valid registration key, will be removed from Newly Registered Users group.',
	'SETTINGS_SET_COOKIE'						=> 'Set cookie',
	'SETTINGS_SET_COOKIE_EXPLAIN'				=> 'If set to yes, a cookie containing the registration key will be set up, so the invited user can explore your board before registering.',
	'SETTINGS_CONFIRM'							=> 'Confirmation',
	'SETTINGS_CONFIRM_EXPLAIN'					=> 'This determines whether a confirmation will be send to the user whose invited friend registers.',
	'SETTINGS_ZEBRA'							=> 'Add friend',
	'SETTINGS_ZEBRA_EXPLAIN'					=> 'If an invited friend registers, he will be added to the friendlist of the user who sent the invitation.',
	'SETTINGS_INVITE_ACC_ACTIVATION_EXPLAIN'	=> 'This determines whether users, who enter a registration key, have immediate access to the board or if confirmation is required. You can also transfer this setting from »User registration settings«.',
	'SETTINGS_INVITE_CONFIRM_CODE'				=> 'Use CAPTCHA',
	'SETTINGS_INVITE_CONFIRM_CODE_EXPLAIN'		=> 'In order to prohibit sending invitations automatically a confirmation code has to be entered.',
	'SETTINGS_INVITE_MULTIPLE'					=> 'Allow multiple invitations',
	'SETTINGS_INVITE_MULTIPLE_EXPLAIN'			=> 'Multiple invitations can be send to the same e-mail address.',
	'SETTINGS_INVITE_YOURSELF'					=> 'Allow inviting yourself',
	'SETTINGS_INVITE_YOURSELF_EXPLAIN'			=> 'Users can register with registration keys they sent to themselves.',
	'SETTINGS_INVITE_LANGUAGE_SELECT'			=> 'Select language',
	'SETTINGS_INVITE_LANGUAGE_SELECT_EXPLAIN'	=> 'The sender can select the invitation’s language.',

	'SETTINGS_QUEUE_TIME'						=> 'Queue',
	'SETTINGS_QUEUE_TIME_EXPLAIN'				=> 'Users have to wait the here entered period of time in order to send another invitation.',
	'SETTINGS_MESSAGE_CHARS'					=> 'Message length',
	'SETTINGS_MESSAGE_CHARS_EXPLAIN'			=> 'Minimum and maximum number of characters in messages.',
	'SETTINGS_SUBJECT_CHARS'					=> 'Subject length',
	'SETTINGS_SUBJECT_CHARS_EXPLAIN'			=> 'Minimum and maximum number of characters in subjects.',
	'SETTINGS_MESSAGE_INVITE_EXPLAIN'			=> 'The invitations users send to their friends will be embed into the following message.',
	'SETTINGS_MESSAGE_CONFIRM_EXPLAIN'			=> 'The following message will be send to the user if an invited friend registers.',

	'SETTINGS_LIMIT_INVITE'						=> 'Limit invitations',
	'SETTINGS_LIMIT_INVITE_EXPLAIN'				=> '1st: The max. number of invitations is entered here (basic value).<br/>2nd: 1st value increases every x posts by 1 invitation.<br/>3rd: 1st value increases every x topics by 1 invitation.<br/>(0 = no limitation)',
	'INVITE_DAILY'								=> 'Daily',
	'INVITE_TOTAL'								=> 'Total',
	'INVITATIONS'								=> 'Invitations',

	'DISPLAY_OPTIONS'							=> 'Display options',
	'SETTINGS_AUTOHIDE_VALID_KEY'				=> 'Autohide registration key input field',
	'SETTINGS_AUTOHIDE_VALID_KEY_EXPLAIN'		=> 'If the passed registration key is valid, the input field for registration keys will be hidden automatically.',
	'SETTINGS_DISPLAY_NAVIGATION'				=> 'Display link in navigation',
	'SETTINGS_DISPLAY_NAVIGATION_EXPLAIN'		=> 'A link to the User Control Panel (Compose invitation) is displayed in the navigation.',
	'SETTINGS_DISPLAY_REGISTRATION'				=> 'Display registration keys',
	'SETTINGS_DISPLAY_REGISTRATION_EXPLAIN'		=> 'The input field for registration keys is displayed while registering.',
	'SETTINGS_PROFILE_FIELDS'					=> 'Display profile information',
	'SETTINGS_PROFILE_FIELDS_EXPLAIN'			=> 'The profile information is displayed at the here chosen locations.',	
	'DISPLAY_INVITER'							=> 'Invited by',
	'DISPLAY_INVITE'							=> 'Invitations sent',
	'DISPLAY_REGISTER'							=> 'Registered friends',
	'DISPLAY_NAME'								=> 'Registered friends (names)',

	'ERROR_EMAIL_DISABLED'						=> 'E-mails have been disabled, so you cannot send any invitations.<br /><br /><a href="%s">» Activate E-mail-functionality</a>',
	'ERROR_INVITE_SETTINGS'						=> 'You have to fill in all fields correctly.',
	'ERROR_MESSAGE_INVITE'						=> 'You have to fill in all invitations.',
	'ERROR_MESSAGE_CONFIRM'						=> 'You have to fill in all confirmations.',

	'LOG_INVITE_SETTINGS_UPDATED'				=> '<strong>Altered ’Invite a friend’ settings</strong>',
	'LOG_INVITE_INVITE'							=> '<strong>Invitation sent</strong><br/>» to „%1$s“',
	'LOG_INVITE_CONFIRM'						=> '<strong>Confirmation sent</strong><br/>» to „%1$s“ in order to confirm the registration of „%2$s“',
	'LOG_INVITE_REGISTER'						=> '<strong>Registration key used</strong><br/>» to register user „%1$s“',
	'LOG_INVITE_ZEBRA'							=> '<strong>User „%2$s“ added as friend</strong><br/>» of „%1$s“',

	//Plugins
	'ULTIMATE_POINTS_SETTINGS'			=> 'Ultimate Points settings',
	'ULTIMATE_POINTS_ENABLE'			=> 'Enable Ultimate Points',
	'ULTIMATE_POINTS_INVITE'			=> 'Ultimate points per invitation',
	'ULTIMATE_POINTS_INVITE_EXPLAIN'	=> 'The amount of ultimate points allocated per invitation.',
	'ULTIMATE_POINTS_REGISTER'			=> 'Ultimate points per registration',
	'ULTIMATE_POINTS_REGISTER_EXPLAIN'	=> 'The amount of ultimate points allocated per invited friend, who registers a new account.',

	'CASH_SETTINGS'						=> 'Cash settings',
	'CASH_ENABLE'						=> 'Enable cash',
	'CASH_INVITE'						=> 'Cash per invitation',
	'CASH_INVITE_EXPLAIN'				=> 'The amount of cash allocated per invitation.',
	'CASH_REGISTER'						=> 'Cash per registration',
	'CASH_REGISTER_EXPLAIN'				=> 'The amount of cash allocated per invited friend, who registers a new account.',
));
?>