<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_BLOCK_START'])) ? $this->_tpldata['DEFINE']['.']['CA_BLOCK_START'] : ''; ?>

<table class="tablebg" width="100%" cellspacing="<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_SPACING'])) ? $this->_tpldata['DEFINE']['.']['CA_SPACING'] : ''; ?>">
<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_CAP_START'])) ? $this->_tpldata['DEFINE']['.']['CA_CAP_START'] : ''; echo ((isset($this->_rootref['L_UCP_INVITE'])) ? $this->_rootref['L_UCP_INVITE'] : ((isset($user->lang['UCP_INVITE'])) ? $user->lang['UCP_INVITE'] : '{ UCP_INVITE }')); echo (isset($this->_tpldata['DEFINE']['.']['CA_CAP_END'])) ? $this->_tpldata['DEFINE']['.']['CA_CAP_END'] : ''; ?>

<tr> 
	<td class="row1" colspan="2"><span class="gensmall"><?php echo ((isset($this->_rootref['L_UCP_INVITE_DESCRIPTION'])) ? $this->_rootref['L_UCP_INVITE_DESCRIPTION'] : ((isset($user->lang['UCP_INVITE_DESCRIPTION'])) ? $user->lang['UCP_INVITE_DESCRIPTION'] : '{ UCP_INVITE_DESCRIPTION }')); ?></span></td>
</tr>

<form id="iaf" action="<?php echo (isset($this->_rootref['S_INVITE_ACTION'])) ? $this->_rootref['S_INVITE_ACTION'] : ''; ?>" method="post">
		<?php if ($this->_rootref['ERROR']) {  ?><p class="error"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></p><?php } ?>

		<tr>
			<td class="row1" width="35%"><b class="genmed"><?php echo ((isset($this->_rootref['L_RECIPIENT_EMAIL'])) ? $this->_rootref['L_RECIPIENT_EMAIL'] : ((isset($user->lang['RECIPIENT_EMAIL'])) ? $user->lang['RECIPIENT_EMAIL'] : '{ RECIPIENT_EMAIL }')); ?>:</b></td>
			<td class="row2"><input type="text" name="form_register_email" id="form_register_email" value="<?php echo (isset($this->_rootref['FORM_REGISTER_EMAIL'])) ? $this->_rootref['FORM_REGISTER_EMAIL'] : ''; ?>" size="45" maxlength="60" class="inputbox autowidth" /></td>
		</tr>
		<tr>
			<td class="row1" width="35%"><b class="genmed"><?php echo ((isset($this->_rootref['L_RECIPIENT_NAME'])) ? $this->_rootref['L_RECIPIENT_NAME'] : ((isset($user->lang['RECIPIENT_NAME'])) ? $user->lang['RECIPIENT_NAME'] : '{ RECIPIENT_NAME }')); ?>:</b></td>
			<td class="row2"><input type="text" name="form_register_real_name" id="form_register_real_name" value="<?php echo (isset($this->_rootref['FORM_REGISTER_REAL_NAME'])) ? $this->_rootref['FORM_REGISTER_REAL_NAME'] : ''; ?>" size="45" maxlength="60" class="inputbox autowidth" /></td>
		</tr>
		<tr>
			<td class="row1" width="35%"><b class="genmed"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</b></td>
			<td class="row2"><input type="text" name="form_subject" id="form_subject" value="<?php echo (isset($this->_rootref['FORM_SUBJECT'])) ? $this->_rootref['FORM_SUBJECT'] : ''; ?>" size="45" maxlength="60" class="inputbox autowidth" />
				<?php if ($this->_rootref['S_DISPLAY_LANGUAGE']) {  ?><select style="margin-left: 10px;" id="form_invite_language_select" name="form_invite_language_select"><?php echo (isset($this->_rootref['FORM_LANGUAGE_SELECT'])) ? $this->_rootref['FORM_LANGUAGE_SELECT'] : ''; ?></select><?php } ?>

			</td>
		</tr>
		<tr>
			<td class="row1" width="35%"><b class="genmed"><?php echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); ?>:</b></td>
			<td class="row2">
				<textarea style="max-width: 700px;" name="form_message" id="form_message" rows="12" cols="60" class="inputbox"><?php echo (isset($this->_rootref['FORM_MESSAGE'])) ? $this->_rootref['FORM_MESSAGE'] : ''; ?></textarea><br /><br />
				<?php if ($this->_rootref['S_DISPLAY_CONFIRM'] || $this->_rootref['S_DISPLAY_CONFIRM_METHOD'] || $this->_rootref['S_DISPLAY_ZEBRA']) {  ?>

					<fieldset class="fields1">
						<table>
						<tbody>
							<?php if ($this->_rootref['S_DISPLAY_CONFIRM'] || $this->_rootref['S_DISPLAY_CONFIRM_METHOD']) {  ?><tr><?php } if ($this->_rootref['S_DISPLAY_CONFIRM']) {  ?><td><label for="form_invite_confirm"><input type="checkbox" name="form_invite_confirm" id="form_invite_confirm" value="1" checked="checked" /> <?php echo ((isset($this->_rootref['L_SEND_CONFIRM'])) ? $this->_rootref['L_SEND_CONFIRM'] : ((isset($user->lang['SEND_CONFIRM'])) ? $user->lang['SEND_CONFIRM'] : '{ SEND_CONFIRM }')); ?></label></td><?php } if ($this->_rootref['S_DISPLAY_CONFIRM_METHOD']) {  ?><td><?php if (! $this->_rootref['S_DISPLAY_CONFIRM']) {  ?><label for="form_invite_confirm_method"><?php echo ((isset($this->_rootref['L_SEND_CONFIRM_METHOD'])) ? $this->_rootref['L_SEND_CONFIRM_METHOD'] : ((isset($user->lang['SEND_CONFIRM_METHOD'])) ? $user->lang['SEND_CONFIRM_METHOD'] : '{ SEND_CONFIRM_METHOD }')); ?></td><td><?php } ?>&nbsp;<select style="margin-left: 8px;" id="form_invite_confirm_method" name="form_invite_confirm_method"><option value="<?php echo (isset($this->_rootref['S_VALUE_EMAIL'])) ? $this->_rootref['S_VALUE_EMAIL'] : ''; ?>"><?php echo ((isset($this->_rootref['L_EMAIL'])) ? $this->_rootref['L_EMAIL'] : ((isset($user->lang['EMAIL'])) ? $user->lang['EMAIL'] : '{ EMAIL }')); ?></option><option value="<?php echo (isset($this->_rootref['S_VALUE_PM'])) ? $this->_rootref['S_VALUE_PM'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PM'])) ? $this->_rootref['L_PM'] : ((isset($user->lang['PM'])) ? $user->lang['PM'] : '{ PM }')); ?></option></select></td><?php if (! $this->_rootref['S_DISPLAY_CONFIRM']) {  ?></label><?php } } if ($this->_rootref['S_DISPLAY_CONFIRM'] || $this->_rootref['S_DISPLAY_CONFIRM_METHOD']) {  ?></tr><?php } if ($this->_rootref['S_DISPLAY_ZEBRA']) {  ?><tr><td><label for="form_invite_zebra"><input type="checkbox" name="form_invite_zebra" id="form_invite_zebra" value="1" tabindex="5" checked="checked" /> <?php echo ((isset($this->_rootref['L_INVITE_ZEBRA'])) ? $this->_rootref['L_INVITE_ZEBRA'] : ((isset($user->lang['INVITE_ZEBRA'])) ? $user->lang['INVITE_ZEBRA'] : '{ INVITE_ZEBRA }')); ?></label></td></tr><?php } ?>

						</tbody>
						</table>
					</fieldset>
				<?php } ?>

			</td>
		</tr><br />
		<tr>
			<td class="row1" colspan="2" width="100%"><b class="genmed">
				<?php if ($this->_rootref['CAPTCHA_TEMPLATE']) {  $this->_tpldata['DEFINE']['.']['CAPTCHA_TAB_INDEX'] = 8; if (isset($this->_rootref['CAPTCHA_TEMPLATE'])) { $this->_tpl_include($this->_rootref['CAPTCHA_TEMPLATE']); } } ?>

			</td>
		</tr>

	<span class="corners-bottom"><span></span></span></div>
</div>

		<tr>
			<td class="row1" colspan="2" width="100%"><b class="genmed">
	<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" tabindex="6" class="<?php if ($this->_rootref['S_DISABLE']) {  ?>disabled button1<?php } else { ?>btnmain<?php } ?>" <?php if ($this->_rootref['S_DISABLE']) {  ?>disabled="disabled"<?php } ?> />&nbsp;
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</td></tr></table>

</form>

<?php $this->_tpl_include('ucp_footer.html'); ?>