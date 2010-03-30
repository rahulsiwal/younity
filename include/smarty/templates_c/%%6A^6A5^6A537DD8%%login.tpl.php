<?php /* Smarty version 2.6.14, created on 2010-03-29 20:48:40
         compiled from login.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'login.tpl', 43, false),)), $this);
?><?php
SELanguage::_preload_multi(658,673,674,89,29,975,691,30,660,675);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div class='page_header'><?php echo SELanguage::_get(658); ?></div>

<?php echo SELanguage::_get(673); 
 if ($this->_tpl_vars['setting']['setting_signup_verify'] == 1): 
 echo SELanguage::_get(674); 
 endif; ?>
<br />
<br />

<?php if ($this->_tpl_vars['is_error'] != 0): ?>
  <table cellpadding='0' cellspacing='0'>
  <tr><td class='error'><img src='./images/error.gif' border='0' class='icon'><?php echo SELanguage::_get($this->_tpl_vars['is_error']); ?></td></tr></table>
<br>
<?php endif; ?>

<form action='login.php' method='POST' name='login'>
<table cellpadding='0' cellspacing='0' style='margin-left: 20px;'>
  <tr>
    <td class='form1'><?php echo SELanguage::_get(89); ?>:</td>
    <td class='form2'><input type='text' class='text' name='email' id='email' value='<?php echo $this->_tpl_vars['email']; ?>
' size='30' maxlength='70'></td>
  </tr>
  <tr>
    <td class='form1'><?php echo SELanguage::_get(29); ?>:</td>
    <td class='form2'><input type='password' class='text' name='password' id='password' size='30' maxlength='50'></td>
  </tr>
  <?php if (! empty ( $this->_tpl_vars['setting']['setting_login_code'] ) || ( ! empty ( $this->_tpl_vars['setting']['setting_login_code_failedcount'] ) && $this->_tpl_vars['failed_login_count'] >= $this->_tpl_vars['setting']['setting_login_code_failedcount'] )): ?>
  <tr>
    <td class='form1'>&nbsp;</td>
    <td class='form2'>
      <table cellpadding='0' cellspacing='0'>
        <tr>
          <td><input type='text' name='login_secure' class='text' size='6' maxlength='10' />&nbsp;</td>
          <td>
            <table cellpadding='0' cellspacing='0'>
              <tr>
                <td align='center'>
                  <img src='./images/secure.php' id='secure_image' border='0' height='20' width='67' class='signup_code' /><br />
                  <a href="javascript:void(0);" onClick="$('secure_image').src = './images/secure.php?' + (new Date()).getTime();"><?php echo SELanguage::_get(975); ?></a>
                </td>
                <td><?php ob_start(); 
 echo SELanguage::_get(691); 
 $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('tip', ob_get_contents());ob_end_clean(); ?><img src='./images/icons/tip.gif' border='0' class='Tips1' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['tip'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <?php endif; ?>
  <tr>
    <td class='form1'>&nbsp;</td>
    <td class='form2'>
      <input type='submit' class='button' value='<?php echo SELanguage::_get(30); ?>' />&nbsp; 
      <input type='checkbox' class='checkbox' name='persistent' id='persistent' value='1'>
      <label for='persistent'><?php echo SELanguage::_get(660); ?></label>
      <br />
      <br />
      <img src='./images/icons/help16.gif' border='0' class='icon' />
      <a href='lostpass.php'><?php echo SELanguage::_get(675); ?></a>
      <noscript><input type='hidden' name='javascript_disabled' value='1' /></noscript>
      <input type='hidden' name='task' value='dologin' />
      <input type='hidden' name='return_url' value='<?php echo $this->_tpl_vars['return_url']; ?>
' />
    </td>
  </tr>
</table>
</form>

<?php echo '
<script language="JavaScript">
<!--
window.addEvent(\'domready\', function() {
	if($(\'email\').value == "") {
	  $(\'email\').focus();
	} else {
	  $(\'password\').focus();
	}
});
// -->
</script>
'; 
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>