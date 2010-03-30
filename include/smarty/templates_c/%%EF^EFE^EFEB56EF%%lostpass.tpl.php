<?php /* Smarty version 2.6.14, created on 2010-03-29 21:10:39
         compiled from lostpass.tpl */
?><?php
SELanguage::_preload_multi(33,34,35,37,749,39);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div class='page_header'><?php echo SELanguage::_get(33); ?></div>

<?php echo SELanguage::_get(34); ?>
<br />
<br />

<?php if ($this->_tpl_vars['submitted'] == 1 && $this->_tpl_vars['is_error'] == 0): ?>

  <table cellpadding='0' cellspacing='0'>
    <tr>
      <td class='result'>
        <div class='success'>
          <img src='./images/success.gif' border='0' class='icon' />
          <?php echo SELanguage::_get(35); ?>
        </div>
      </td>
    </tr>
  </table>

<?php else: ?>

  <?php if ($this->_tpl_vars['is_error'] != 0): 
 echo SELanguage::_get($this->_tpl_vars['is_error']); 
 endif; ?>
 
  <form action='lostpass.php' method='post'>
  <table cellpadding='0' cellspacing='0' class='form'>
    <tr>
      <td class='form1'><?php echo SELanguage::_get(37); ?></td>
      <td class='form2'><input type='text' class='text' name='user_email' maxlength='70' size='40' /></td>
    </tr>
    <tr>
      <td class='form1'>&nbsp;</td>
      <td class='form2'>
        <table cellpadding='0' cellspacing='0'>
          <tr>
            <td>
              <input type='submit' class='button' value='<?php echo SELanguage::_get(749); ?>' />&nbsp;
              <input type='hidden' name='task' value='send_email' />
              </form>
            </td>
            <td>
              <form action='login.php' method='POST'>
              <input type='submit' class='button' value='<?php echo SELanguage::_get(39); ?>' />
              </form>
            </td>
          </tr>
        </table>
        </form>
      </td>
    </tr>
  </table>

<?php endif; 
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>