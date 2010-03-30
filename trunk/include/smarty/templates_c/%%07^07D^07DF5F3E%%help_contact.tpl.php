<?php /* Smarty version 2.6.14, created on 2010-03-29 21:17:49
         compiled from help_contact.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'help_contact.tpl', 66, false),)), $this);
?><?php
SELanguage::_preload_multi(754,1035,258,37,520,521,975,691,839);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<img src='./images/icons/help48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo SELanguage::_get(754); ?></div>
<div><?php echo SELanguage::_get(1035); ?></div>
<br />

<?php if ($this->_tpl_vars['result'] != 0): ?>
  <br />
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='success'><img src='./images/success.gif' border='0' class='icon'><?php echo SELanguage::_get($this->_tpl_vars['result']); ?></td>
  </tr>
  </table>
<?php endif; 
 if ($this->_tpl_vars['is_error'] != 0): ?>
  <br />
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='error'><img src='./images/error.gif' border='0' class='icon'><?php echo SELanguage::_get($this->_tpl_vars['is_error']); ?></td>
  </tr>
  </table>
<?php endif; ?>

<br>

<?php if ($this->_tpl_vars['success'] == 0): ?>
  <form action='help_contact.php' method='POST'>
  <table cellpadding='0' cellspacing='0' class='form'>
  <tr>
  <td class='form1'><?php echo SELanguage::_get(258); ?>:</td>
  <td class='form2'><input type='text' class='text' name='contact_name' maxlength='50' size='30' value='<?php echo $this->_tpl_vars['contact_name']; ?>
'></td>
  </tr>
  <tr>
  <td class='form1'><?php echo SELanguage::_get(37); ?></td>
  <td class='form2'><input type='text' class='text' name='contact_email' maxlength='70' size='30' value='<?php echo $this->_tpl_vars['contact_email']; ?>
'></td>
  </tr>
  <tr>
  <td class='form1'><?php echo SELanguage::_get(520); ?>:</td>
  <td class='form2'><input type='text' class='text' name='contact_subject' maxlength='50' size='30' value='<?php echo $this->_tpl_vars['contact_subject']; ?>
'></td>
  </tr>
  <tr>
  <td class='form1'><?php echo SELanguage::_get(521); ?></td>
  <td class='form2'><textarea name='contact_message' rows='7' cols='60'><?php echo $this->_tpl_vars['contact_message']; ?>
</textarea></td>
  </tr>
  <?php if (! empty ( $this->_tpl_vars['setting']['setting_contact_code'] )): ?>
  <tr>
  <td class='form1'>&nbsp;</td>
  <td class='form2'>
  <table cellpadding='0' cellspacing='0'>
    <tr>
      <td><input type='text' name='contact_secure' class='text' size='6' maxlength='10'>&nbsp;</td>
      <td>
        <table cellpadding='0' cellspacing='0'>
          <tr>
            <td align='center'>
              <img src='./images/secure.php' id='secure_image' border='0' height='20' width='67' class='signup_code' /><br />
              <a href="javascript:void(0);" onClick="$('secure_image').src = './images/secure.php?' + (new Date()).getTime();"><?php echo SELanguage::_get(975); ?></a>
            </td>
            <td><?php $this->_tpl_vars['tip'] = SELanguage::_get(691); ?><img src='./images/icons/tip.gif' border='0' class='Tips1' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['tip'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
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
  <td class='form2'><input type='submit' class='button' value='<?php echo SELanguage::_get(839); ?>'></td>
  </tr>
  </table>
  
  
  <input type='hidden' name='task' value='dosend' />
  </form>
<?php endif; 
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>