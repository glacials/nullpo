<?php
/** 
* @author Bycoja bycoja@web.de
*
* @package ucp
* @version $Id: ucp_invite.php 054 2009-11-28 14:41:59GMT Bycoja $
* @copyright (c) 2008 Bycoja
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

/**
* @package module_install
*/
class ucp_invite_info
{
	function module()
	{
		return array(
			'filename'	=> 'ucp_invite',
			'title'    	=> 'UCP_INVITE',
			'version' 	=> '0.5.4',
			'modes'    	=> array(
				'invite'	=> array('title' => 'UCP_INVITE_INVITE', 'auth' => '', 'cat' => array('UCP_INVITE')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
} 

?>