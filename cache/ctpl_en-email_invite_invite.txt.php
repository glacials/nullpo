<?php if (!defined('IN_PHPBB')) exit; ?>Hello <?php echo (isset($this->_rootref['RECIPIENT'])) ? $this->_rootref['RECIPIENT'] : ''; ?>,
this message has been sent by a friend of yours known as &quot;<?php echo (isset($this->_rootref['INVITE_USERNAME'])) ? $this->_rootref['INVITE_USERNAME'] : ''; ?>&quot;,
because you might be interested in the following website:
<?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>


You can use the following URL to register: <?php echo (isset($this->_rootref['URL_REGISTER_KEY'])) ? $this->_rootref['URL_REGISTER_KEY'] : ''; ?>


Your friend wrote:
-------------------------------------------
<?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?>