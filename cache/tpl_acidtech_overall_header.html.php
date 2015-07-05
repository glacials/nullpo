<?php if (!defined('IN_PHPBB')) exit; ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>" lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>" xml:lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>">
<head>
<?php $this->_tpl_include('ca_config.html'); ?>

<meta http-equiv="content-type" content="text/html; charset=<?php echo (isset($this->_rootref['S_CONTENT_ENCODING'])) ? $this->_rootref['S_CONTENT_ENCODING'] : ''; ?>" />
<meta http-equiv="content-language" content="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="copyright" content="2002-2006 phpBB Group" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<?php echo (isset($this->_rootref['META'])) ? $this->_rootref['META'] : ''; ?>

<title><?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?> - <?php if ($this->_rootref['S_IN_MCP']) {  echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?> - <?php } else if ($this->_rootref['S_IN_UCP']) {  echo ((isset($this->_rootref['L_UCP'])) ? $this->_rootref['L_UCP'] : ((isset($user->lang['UCP'])) ? $user->lang['UCP'] : '{ UCP }')); ?> - <?php } echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></title>

<?php if ($this->_rootref['T_STYLESHEET_LINK']) {  ?>

<link rel="stylesheet" href="<?php echo (isset($this->_rootref['T_STYLESHEET_LINK'])) ? $this->_rootref['T_STYLESHEET_LINK'] : ''; ?>" type="text/css" />
<?php } else { ?>

<style type="text/css">
<?php echo (isset($this->_rootref['T_THEME_DATA'])) ? $this->_rootref['T_THEME_DATA'] : ''; ?>

</style>
<?php } ?>

<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/ie7.css" />
<![endif]-->

<script type="text/javascript">
// <![CDATA[

<?php if ($this->_rootref['S_USER_PM_POPUP']) {  ?>

	if (<?php echo (isset($this->_rootref['S_NEW_PM'])) ? $this->_rootref['S_NEW_PM'] : ''; ?>)
	{
		popup('<?php echo (isset($this->_rootref['UA_POPUP_PM'])) ? $this->_rootref['UA_POPUP_PM'] : ''; ?>', 400, 225, '_phpbbprivmsg');
	}
<?php } ?>


function popup(url, width, height, name)
{
	if (!name)
	{
		name = '_popup';
	}

	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes,width=' + width);
	return false;
}

function jumpto()
{
	var page = prompt('<?php echo ((isset($this->_rootref['LA_JUMP_PAGE'])) ? $this->_rootref['LA_JUMP_PAGE'] : ((isset($this->_rootref['L_JUMP_PAGE'])) ? addslashes($this->_rootref['L_JUMP_PAGE']) : ((isset($user->lang['JUMP_PAGE'])) ? addslashes($user->lang['JUMP_PAGE']) : '{ JUMP_PAGE }'))); ?>:', '<?php echo (isset($this->_rootref['ON_PAGE'])) ? $this->_rootref['ON_PAGE'] : ''; ?>');
	var perpage = '<?php echo (isset($this->_rootref['PER_PAGE'])) ? $this->_rootref['PER_PAGE'] : ''; ?>';
	var base_url = '<?php echo (isset($this->_rootref['A_BASE_URL'])) ? $this->_rootref['A_BASE_URL'] : ''; ?>';

	if (page !== null && !isNaN(page) && page > 0)
	{
		document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * perpage);
	}
}

/**
* Find a member
*/
function find_username(url)
{
	popup(url, 760, 570, '_usersearch');
	return false;
}

/**
* Mark/unmark checklist
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
	var parent = document.getElementById(id);
	if (!parent)
	{
		eval('parent = document.' + id);
	}

	if (!parent)
	{
		return;
	}

	var rb = parent.getElementsByTagName('input');
	
	for (var r = 0; r < rb.length; r++)
	{
		if (rb[r].name.substr(0, name.length) == name)
		{
			rb[r].checked = state;
		}
	}
}

<?php if (sizeof($this->_tpldata['_file'])) {  ?>


	/**
	* Play quicktime file by determining it's width/height
	* from the displayed rectangle area
	*
	* Only defined if there is a file block present.
	*/
	function play_qt_file(obj)
	{
		var rectangle = obj.GetRectangle();

		if (rectangle)
		{
			rectangle = rectangle.split(',')
			var x1 = parseInt(rectangle[0]);
			var x2 = parseInt(rectangle[2]);
			var y1 = parseInt(rectangle[1]);
			var y2 = parseInt(rectangle[3]);

			var width = (x1 < 0) ? (x1 * -1) + x2 : x2 - x1;
			var height = (y1 < 0) ? (y1 * -1) + y2 : y2 - y1;
		}
		else
		{
			var width = 200;
			var height = 0;
		}

		obj.width = width;
		obj.height = height + 16;

		obj.SetControllerVisible(true);

		obj.Play();
	}
<?php } ?>


if(navigator.userAgent && navigator.userAgent.indexOf('Mac OS X') > 0)
{
	document.write('<link rel="stylesheet" href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/mac.css" type="text/css" />');
}

// ]]>
</script>
</head>
<body class="<?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>">

<a name="top"></a>

<table style="min-width: 800px" border="0" cellspacing="0" cellpadding="0" width="<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_WIDTH'])) ? $this->_tpldata['DEFINE']['.']['CA_WIDTH'] : ''; ?>" id="maintable" align="center">
<tr>
	<td id="logorow" align="center"><div id="logo-left"><div id="logo-right">
		<a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><?php echo (isset($this->_rootref['SITE_LOGO_IMG'])) ? $this->_rootref['SITE_LOGO_IMG'] : ''; ?></a>
	</div></div></td>
</tr>
<tr>
	<td class="navrow">
		<?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_USER_LOGGED_IN']) {  ?><a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></a> &#8226; <?php } if ($this->_rootref['S_USER_LOGGED_IN']) {  if ($this->_rootref['S_DISPLAY_PM']) {  ?><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></a> &#8226; <?php } } else { ?><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a><?php } } if ($this->_rootref['U_RESTORE_PERMISSIONS']) {  ?><a href="<?php echo (isset($this->_rootref['U_RESTORE_PERMISSIONS'])) ? $this->_rootref['U_RESTORE_PERMISSIONS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RESTORE_PERMISSIONS'])) ? $this->_rootref['L_RESTORE_PERMISSIONS'] : ((isset($user->lang['RESTORE_PERMISSIONS'])) ? $user->lang['RESTORE_PERMISSIONS'] : '{ RESTORE_PERMISSIONS }')); ?></a> &#8226; <?php } if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?><a href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></a><?php } if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_DISPLAY_MEMBERLIST']) {  ?> &#8226; <a href="<?php echo (isset($this->_rootref['U_MEMBERLIST'])) ? $this->_rootref['U_MEMBERLIST'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MEMBERLIST'])) ? $this->_rootref['L_MEMBERLIST'] : ((isset($user->lang['MEMBERLIST'])) ? $user->lang['MEMBERLIST'] : '{ MEMBERLIST }')); ?></a><?php } } if ($this->_rootref['S_USER_LOGGED_IN']) {  if ($this->_rootref['S_DISPLAY_INVITE']) {  ?> &#8226; <a href="<?php echo (isset($this->_rootref['U_INVITE_A_FRIEND'])) ? $this->_rootref['U_INVITE_A_FRIEND'] : ''; ?>" style="color: #F0E80A; font-weight: bold;">Invite a Friend!</a> <?php } } if (! $this->_rootref['S_IS_BOT']) {  ?> &#8226; <a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a><?php } ?>

	</td>
</tr>
<tr>
	<td id="contentrow">

<?php if (! $this->_rootref['S_IS_BOT'] && ! $this->_tpldata['DEFINE']['.']['CA_SKIP_PM_NOTIFY'] && $this->_rootref['S_USER_LOGGED_IN'] && $this->_rootref['S_DISPLAY_PM']) {  if ($this->_rootref['S_USER_NEW_PRIVMSG']) {  ?>

		<div class="pm-notify-new"><div class="pm-notify-header"><?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGES'])) ? $this->_rootref['L_PRIVATE_MESSAGES'] : ((isset($user->lang['PRIVATE_MESSAGES'])) ? $user->lang['PRIVATE_MESSAGES'] : '{ PRIVATE_MESSAGES }')); ?></div><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; if ($this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD']) {  ?>, <?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD'] : ''; } ?></a></div>
	<?php } else if ($this->_rootref['S_USER_UNREAD_PRIVMSG']) {  ?>

		<div class="pm-notify-unread"><div class="pm-notify-header"><?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGES'])) ? $this->_rootref['L_PRIVATE_MESSAGES'] : ((isset($user->lang['PRIVATE_MESSAGES'])) ? $user->lang['PRIVATE_MESSAGES'] : '{ PRIVATE_MESSAGES }')); ?></div><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; if ($this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD']) {  ?>, <?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO_UNREAD'] : ''; } ?></a></div>
	<?php } } if ($this->_rootref['S_BOARD_DISABLED'] && $this->_rootref['S_USER_LOGGED_IN'] && ( $this->_rootref['U_MCP'] || $this->_rootref['U_ACP'] )) {  ?>

	<div class="pm-notify-new"><div class="pm-notify-header"><?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?></div><?php echo ((isset($this->_rootref['L_BOARD_DISABLED'])) ? $this->_rootref['L_BOARD_DISABLED'] : ((isset($user->lang['BOARD_DISABLED'])) ? $user->lang['BOARD_DISABLED'] : '{ BOARD_DISABLED }')); ?></div>
<?php } if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>

<p class="searchbar">
  <span style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;">posts: <a href="<?php echo (isset($this->_rootref['U_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['U_SEARCH_ACTIVE_TOPICS'] : ''; ?>">active</a>, <a href="<?php echo (isset($this->_rootref['U_SEARCH_NEW'])) ? $this->_rootref['U_SEARCH_NEW'] : ''; ?>">new</a><?php if ($this->_rootref['S_USER_LOGGED_IN']) {  ?>, <a href="<?php echo (isset($this->_rootref['U_SEARCH_UNANSWERED'])) ? $this->_rootref['U_SEARCH_UNANSWERED'] : ''; ?>">unanswered</a>, <a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>">yours</a><?php } ?></span>
</p>
<?php } ?>


<br style="clear: both;" />

<?php $this->_tpl_include('breadcrumbs.html'); ?>


<br />