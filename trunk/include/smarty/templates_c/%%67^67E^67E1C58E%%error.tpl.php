<?php /* Smarty version 2.6.14, created on 2010-03-29 20:53:36
         compiled from error.tpl */
?><?php
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<img src='./images/icons/error48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo SELanguage::_get($this->_tpl_vars['error_header']); ?></div>
<?php echo SELanguage::_get($this->_tpl_vars['error_message']); ?>

<br />
<br />
<br />

<input type='button' class='button' value='<?php echo SELanguage::_get($this->_tpl_vars['error_submit']); ?>' onClick='history.go(-1)'>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>