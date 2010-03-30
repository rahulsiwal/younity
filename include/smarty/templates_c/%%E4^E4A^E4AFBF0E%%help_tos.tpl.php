<?php /* Smarty version 2.6.14, created on 2010-03-29 21:18:14
         compiled from help_tos.tpl */
?><?php
SELanguage::_preload_multi(753);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div class='page_header'><?php echo SELanguage::_get(753); ?></div>

<?php echo $this->_tpl_vars['terms_of_service']; 
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>