<?php /* Smarty version 2.6.14, created on 2010-03-29 20:49:49
         compiled from invite.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'invite.tpl', 90, false),)), $this);
?><?php
SELanguage::_preload_multi(1074,1075,1078,1076,1077,1079,1080,1081,1082,856,728);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<img src='./images/icons/invite48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo SELanguage::_get(1074); ?></div>
<div><?php echo SELanguage::_get(1075); ?></div>
<?php if ($this->_tpl_vars['setting']['setting_signup_invite'] == 2): ?> <?php echo SELanguage::_get(1078); 
 endif; ?>
<br />
<br />

<?php if ($this->_tpl_vars['result'] != 0): ?>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='success'><img src='./images/success.gif' border='0' class='icon'><?php echo SELanguage::_get($this->_tpl_vars['result']); ?></td>
  </tr>
  </table>
<?php endif; 
 if ($this->_tpl_vars['setting']['setting_signup_invite'] == 2 && $this->_tpl_vars['user']->user_exists == 0): ?>

  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='error'><img src='./images/icons/error16.gif' border='0' class='icon'> <?php echo SELanguage::_get(1076); ?></td>
  </tr>
  </table>




<?php elseif ($this->_tpl_vars['setting']['setting_signup_invite'] == 2 && $this->_tpl_vars['user']->user_info['user_invitesleft'] == 0): ?>

  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='result'><img src='./images/icons/bulb16.gif' border='0' class='icon'> <?php echo sprintf(SELanguage::_get(1077), '0'); ?></td>
  </tr>
  </table>


<?php else: ?>

    <?php if ($this->_tpl_vars['setting']['setting_signup_invite'] == 2): ?>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td class='result'><img src='./images/icons/bulb16.gif' border='0' class='icon'> <?php echo sprintf(SELanguage::_get(1077), $this->_tpl_vars['user']->user_info['user_invitesleft']); ?></td>
    </tr>
    </table>
    <br>
  <?php endif; ?>

    <?php if ($this->_tpl_vars['is_error'] != 0): ?>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td class='error'><img src='./images/error.gif' border='0' class='icon'><?php echo SELanguage::_get($this->_tpl_vars['is_error']); ?></td>
    </tr>
    </table>
  <?php endif; ?>

  <form action='invite.php' method='POST'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='form1'><?php echo SELanguage::_get(1079); ?></td>
  <td class='form2'>
  <textarea name='invite_emails' rows='2' cols='60'><?php echo $this->_tpl_vars['invite_emails']; ?>
</textarea><br>
  <?php echo SELanguage::_get(1080); ?>
  </td>
  </tr>
  <tr>
  <td class='form1'><?php echo SELanguage::_get(1081); ?></td>
  <td class='form2'>
  <textarea name='invite_message' rows='5' cols='60'><?php echo $this->_tpl_vars['invite_message']; ?>
</textarea><br>
  <?php echo SELanguage::_get(1082); ?>
  </td>
  </tr>
  <?php if ($this->_tpl_vars['setting']['setting_invite_code'] == 1): ?>
    <tr>
    <td class='form1'>&nbsp;</td>
    <td class='form2'>
      <table cellpadding='0' cellspacing='0'>
      <tr>
      <td><input type='text' name='invite_secure' class='text' size='6' maxlength='10'>&nbsp;</td>
      <td align='center'><a href="javascript:void(0);" onClick="this.blur();javascript:$('secure_image').src = $('secure_image').src + '?' + (new Date()).getTime();"><img src='./images/secure.php' id='secure_image' border='0' height='20' width='67' class='signup_code'></a></td>
      <td><?php ob_start(); 
 echo SELanguage::_get(856); 
 $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('tip', ob_get_contents());ob_end_clean(); ?><img src='./images/icons/tip.gif' border='0' class='Tips1' style='vertical-align: middle;' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['tip'])) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "&#039;") : smarty_modifier_replace($_tmp, "'", "&#039;")); ?>
'></td>
      </tr>
      </table>
    </td>
    </tr>
  <?php endif; ?>
  <tr>
  <td class='form1'>&nbsp;</td>
  <td class='form2'><input type='submit' class='button' value='<?php echo SELanguage::_get(728); ?>'></td>
  </tr>
  </table>

  <input type='hidden' name='task' value='doinvite'>
  </form>
<?php endif; ?>
  
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>