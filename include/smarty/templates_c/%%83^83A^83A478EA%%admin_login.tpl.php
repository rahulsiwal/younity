<?php /* Smarty version 2.6.14, created on 2010-03-27 23:15:37
         compiled from admin_login.tpl */
?><?php
SELanguage::_preload_multi(28,29,30);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header_global.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
 echo '
<script type="text/javascript">
<!--
window.addEvent(\'domready\', function() { document.getElementById(\'username\').focus(); });
//-->
</script>


<style type=\'text/css\'>
html, body {
	height: 100% !important;
}
body {
	text-align: center;
	background-color: #EEEEEE;
	background-image: url(../images/admin_login.gif);
	background-repeat: no-repeat;
	background-position: center center;
}
div.box {
	border: 1px dashed #AAAAAA;
	padding: 15px;
	background: #FFFFFF;
	font-family: "Trebuchet MS", tahoma, verdana, serif;
	font-size: 9pt;
        width: 470px;
}
td.login {
	font-family: "Trebuchet MS", tahoma, verdana, serif;
	font-size: 9pt;
}
input.text {
	font-family: arial, tahoma, verdana, serif;
	font-size: 9pt; 
}
div.error {
	text-align: center;
	padding-top: 3px;
	font-weight: bold;
}
input.button {
	font-family: arial, tahoma, verdana, serif;
	font-size: 9pt;
	background: #DDDDDD;
	padding: 2px;
	font-weight: bold;
}
</style>
'; ?>




<table cellspacing='0' cellpadding='0' style='width: 100%; height: 100%;'>
<tr>
<td align='center'>
	<form action='admin_login.php' method='POST'>
	<div class='box'>
		<table cellpadding='0' cellspacing='0'>
		<tr>
		<td class='login'><?php echo SELanguage::_get(28); ?>: &nbsp;</td>
		<td class='login'><input type='text' class='text' name='username' id='username' maxlength='50'> &nbsp;</td>
		<td class='login'><?php echo SELanguage::_get(29); ?>: &nbsp;</td>
		<td class='login'><input type='password' class='text' name='password' id='password' maxlength='50'> &nbsp;</td>
		<td class='login'><input type='submit' class='button' value='<?php echo SELanguage::_get(30); ?>'></td>
		</tr>
		</table>
	        <?php if ($this->_tpl_vars['is_error'] != 0): ?><div class='error'><?php echo SELanguage::_get($this->_tpl_vars['is_error']); ?></div><?php endif; ?>
	</div>
	<input type='hidden' name='task' value='dologin'>
	<NOSCRIPT><input type='hidden' name='javascript' value='no'></NOSCRIPT>
	</form>
</td>
</tr>
</table>

</body>
</html>