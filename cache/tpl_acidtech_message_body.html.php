<?php if (!defined('IN_PHPBB')) exit; $this->_tpldata['DEFINE']['.']['CA_SKIP_PM_NOTIFY'] = '1'; $this->_tpl_include('overall_header.html'); ?>


<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_BLOCK_START'])) ? $this->_tpldata['DEFINE']['.']['CA_BLOCK_START'] : ''; ?>

<table class="tablebg" width="100%" cellspacing="<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_SPACING'])) ? $this->_tpldata['DEFINE']['.']['CA_SPACING'] : ''; ?>">
<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_CAP_START'])) ? $this->_tpldata['DEFINE']['.']['CA_CAP_START'] : ''; echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['CA_CAP_END'])) ? $this->_tpldata['DEFINE']['.']['CA_CAP_END'] : ''; ?>

<tr> 
	<td class="row1" align="center"><br /><p class="gen"><?php echo (isset($this->_rootref['MESSAGE_TEXT'])) ? $this->_rootref['MESSAGE_TEXT'] : ''; ?></p><br /></td>
</tr>
</table>
<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_BLOCK_END'])) ? $this->_tpldata['DEFINE']['.']['CA_BLOCK_END'] : ''; ?>


<br clear="all" />

<?php $this->_tpl_include('breadcrumbs.html'); $this->_tpl_include('overall_footer.html'); ?>