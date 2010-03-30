<?php /* Smarty version 2.6.14, created on 2010-03-27 23:22:16
         compiled from admin_signup.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'admin_signup.tpl', 28, false),)), $this);
?><?php
SELanguage::_preload_multi(13,410,191,411,412,455,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,454,453,1210,173);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<h2><?php echo SELanguage::_get(13); ?></h2>
<?php echo SELanguage::_get(410); ?>
<br />
<br />

<?php if ($this->_tpl_vars['result'] != 0): ?>
  <div class='success'><img src='../images/success.gif' class='icon' border='0'> <?php echo SELanguage::_get(191); ?></div>
<?php endif; ?>

<form action='admin_signup.php' method='POST'>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo SELanguage::_get(411); ?></td></tr>
<tr><td class='setting1'>
<?php echo SELanguage::_get(412); ?>
</td></tr>

<?php unset($this->_sections['cat_loop']);
$this->_sections['cat_loop']['name'] = 'cat_loop';
$this->_sections['cat_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cat_loop']['show'] = true;
$this->_sections['cat_loop']['max'] = $this->_sections['cat_loop']['loop'];
$this->_sections['cat_loop']['step'] = 1;
$this->_sections['cat_loop']['start'] = $this->_sections['cat_loop']['step'] > 0 ? 0 : $this->_sections['cat_loop']['loop']-1;
if ($this->_sections['cat_loop']['show']) {
    $this->_sections['cat_loop']['total'] = $this->_sections['cat_loop']['loop'];
    if ($this->_sections['cat_loop']['total'] == 0)
        $this->_sections['cat_loop']['show'] = false;
} else
    $this->_sections['cat_loop']['total'] = 0;
if ($this->_sections['cat_loop']['show']):

            for ($this->_sections['cat_loop']['index'] = $this->_sections['cat_loop']['start'], $this->_sections['cat_loop']['iteration'] = 1;
                 $this->_sections['cat_loop']['iteration'] <= $this->_sections['cat_loop']['total'];
                 $this->_sections['cat_loop']['index'] += $this->_sections['cat_loop']['step'], $this->_sections['cat_loop']['iteration']++):
$this->_sections['cat_loop']['rownum'] = $this->_sections['cat_loop']['iteration'];
$this->_sections['cat_loop']['index_prev'] = $this->_sections['cat_loop']['index'] - $this->_sections['cat_loop']['step'];
$this->_sections['cat_loop']['index_next'] = $this->_sections['cat_loop']['index'] + $this->_sections['cat_loop']['step'];
$this->_sections['cat_loop']['first']      = ($this->_sections['cat_loop']['iteration'] == 1);
$this->_sections['cat_loop']['last']       = ($this->_sections['cat_loop']['iteration'] == $this->_sections['cat_loop']['total']);
?>
  <tr>
  <td class='setting2'>
  <input type='checkbox' name='cat_signup[]' id='cat_signup_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['cat_id']; ?>
' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['cat_id']; ?>
'<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['cat_signup'] == 1): ?> CHECKED<?php endif; ?>><b><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['cat_title']); ?></b>
  <?php $this->assign('num_fields', 0); ?>
  <?php unset($this->_sections['subcat_loop']);
$this->_sections['subcat_loop']['name'] = 'subcat_loop';
$this->_sections['subcat_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['subcat_loop']['show'] = true;
$this->_sections['subcat_loop']['max'] = $this->_sections['subcat_loop']['loop'];
$this->_sections['subcat_loop']['step'] = 1;
$this->_sections['subcat_loop']['start'] = $this->_sections['subcat_loop']['step'] > 0 ? 0 : $this->_sections['subcat_loop']['loop']-1;
if ($this->_sections['subcat_loop']['show']) {
    $this->_sections['subcat_loop']['total'] = $this->_sections['subcat_loop']['loop'];
    if ($this->_sections['subcat_loop']['total'] == 0)
        $this->_sections['subcat_loop']['show'] = false;
} else
    $this->_sections['subcat_loop']['total'] = 0;
if ($this->_sections['subcat_loop']['show']):

            for ($this->_sections['subcat_loop']['index'] = $this->_sections['subcat_loop']['start'], $this->_sections['subcat_loop']['iteration'] = 1;
                 $this->_sections['subcat_loop']['iteration'] <= $this->_sections['subcat_loop']['total'];
                 $this->_sections['subcat_loop']['index'] += $this->_sections['subcat_loop']['step'], $this->_sections['subcat_loop']['iteration']++):
$this->_sections['subcat_loop']['rownum'] = $this->_sections['subcat_loop']['iteration'];
$this->_sections['subcat_loop']['index_prev'] = $this->_sections['subcat_loop']['index'] - $this->_sections['subcat_loop']['step'];
$this->_sections['subcat_loop']['index_next'] = $this->_sections['subcat_loop']['index'] + $this->_sections['subcat_loop']['step'];
$this->_sections['subcat_loop']['first']      = ($this->_sections['subcat_loop']['iteration'] == 1);
$this->_sections['subcat_loop']['last']       = ($this->_sections['subcat_loop']['iteration'] == $this->_sections['subcat_loop']['total']);
?>
    <?php if (count($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields']) != 0): 
 $this->assign('num_fields', 1); 
 endif; ?>
    <?php unset($this->_sections['field_loop']);
$this->_sections['field_loop']['name'] = 'field_loop';
$this->_sections['field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['field_loop']['show'] = true;
$this->_sections['field_loop']['max'] = $this->_sections['field_loop']['loop'];
$this->_sections['field_loop']['step'] = 1;
$this->_sections['field_loop']['start'] = $this->_sections['field_loop']['step'] > 0 ? 0 : $this->_sections['field_loop']['loop']-1;
if ($this->_sections['field_loop']['show']) {
    $this->_sections['field_loop']['total'] = $this->_sections['field_loop']['loop'];
    if ($this->_sections['field_loop']['total'] == 0)
        $this->_sections['field_loop']['show'] = false;
} else
    $this->_sections['field_loop']['total'] = 0;
if ($this->_sections['field_loop']['show']):

            for ($this->_sections['field_loop']['index'] = $this->_sections['field_loop']['start'], $this->_sections['field_loop']['iteration'] = 1;
                 $this->_sections['field_loop']['iteration'] <= $this->_sections['field_loop']['total'];
                 $this->_sections['field_loop']['index'] += $this->_sections['field_loop']['step'], $this->_sections['field_loop']['iteration']++):
$this->_sections['field_loop']['rownum'] = $this->_sections['field_loop']['iteration'];
$this->_sections['field_loop']['index_prev'] = $this->_sections['field_loop']['index'] - $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['index_next'] = $this->_sections['field_loop']['index'] + $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['first']      = ($this->_sections['field_loop']['iteration'] == 1);
$this->_sections['field_loop']['last']       = ($this->_sections['field_loop']['iteration'] == $this->_sections['field_loop']['total']);
?>
      <table cellpadding='3' cellspacing='0' style='margin-left: 15px;'>
      <tr>
      <td><input type='checkbox' name='field_signup[]' id='field_signup_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' value='<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'<?php if ($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_signup'] == 1): ?> CHECKED<?php endif; ?>></td>
      <td><label for='field_signup_<?php echo $this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'><?php echo SELanguage::_get($this->_tpl_vars['cats'][$this->_sections['cat_loop']['index']]['subcats'][$this->_sections['subcat_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_title']); ?></label></td>
      </tr>
      </table>
    <?php endfor; endif; ?>
  <?php endfor; endif; ?>
  <?php if ($this->_tpl_vars['num_fields'] == 0): ?><br><?php echo SELanguage::_get(455); 
 endif; ?>
  </td>
  </tr>
<?php endfor; endif; ?>

</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo SELanguage::_get(413); ?></td></tr>
<tr><td class='setting1'>
<?php echo SELanguage::_get(414); ?>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='setting_signup_photo' id='photo_1' value='1'<?php if ($this->_tpl_vars['setting']['setting_signup_photo'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='photo_1'><?php echo SELanguage::_get(415); ?></label></td></tr>
  <tr><td><input type='radio' name='setting_signup_photo' id='photo_0' value='0'<?php if ($this->_tpl_vars['setting']['setting_signup_photo'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='photo_0'><?php echo SELanguage::_get(416); ?></label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo SELanguage::_get(417); ?></td></tr>
<tr><td class='setting1'>
<?php echo SELanguage::_get(418); ?>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='setting_signup_enable' id='enable_1' value='1'<?php if ($this->_tpl_vars['setting']['setting_signup_enable'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='enable_1'><?php echo SELanguage::_get(419); ?></label></td></tr>
  <tr><td><input type='radio' name='setting_signup_enable' id='enable_0' value='0'<?php if ($this->_tpl_vars['setting']['setting_signup_enable'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='enable_0'><?php echo SELanguage::_get(420); ?></label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo SELanguage::_get(421); ?></td></tr>
<tr><td class='setting1'>
<?php echo SELanguage::_get(422); ?>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='setting_signup_welcome' id='welcome_1' value='1'<?php if ($this->_tpl_vars['setting']['setting_signup_welcome'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='welcome_1'><?php echo SELanguage::_get(423); ?></label></td></tr>
  <tr><td><input type='radio' name='setting_signup_welcome' id='welcome_0' value='0'<?php if ($this->_tpl_vars['setting']['setting_signup_welcome'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='welcome_0'><?php echo SELanguage::_get(424); ?></label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo SELanguage::_get(425); ?></td></tr>
<tr><td class='setting1'>
<?php echo SELanguage::_get(426); ?>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='setting_signup_invite' id='invite_2' value='2'<?php if ($this->_tpl_vars['setting']['setting_signup_invite'] == 2): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_2'><?php echo SELanguage::_get(427); ?></label></td></tr>
  <tr><td><input type='radio' name='setting_signup_invite' id='invite_1' value='1'<?php if ($this->_tpl_vars['setting']['setting_signup_invite'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_1'><?php echo SELanguage::_get(428); ?></label></td></tr>
  <tr><td><input type='radio' name='setting_signup_invite' id='invite_0' value='0'<?php if ($this->_tpl_vars['setting']['setting_signup_invite'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_0'><?php echo SELanguage::_get(429); ?></label></td></tr>
  </table>
</td></tr>
<tr><td class='setting1'><?php echo SELanguage::_get(430); ?></td></tr>
<tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='setting_signup_invite_checkemail' id='invite_checkemail_1' value='1'<?php if ($this->_tpl_vars['setting']['setting_signup_invite_checkemail'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_checkemail_1'><?php echo SELanguage::_get(431); ?></label></td></tr>
  <tr><td><input type='radio' name='setting_signup_invite_checkemail' id='invite_checkemail_0' value='0'<?php if ($this->_tpl_vars['setting']['setting_signup_invite_checkemail'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invite_checkemail_0'><?php echo SELanguage::_get(432); ?></label></td></tr>
  </table>
</td></tr>
<tr><td class='setting1'><?php echo SELanguage::_get(433); ?></td></tr>
<tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='text' name='setting_signup_invite_numgiven' size='2' maxlength='3' class='text' value='<?php echo $this->_tpl_vars['setting']['setting_signup_invite_numgiven']; ?>
'>&nbsp;</td><td><?php echo SELanguage::_get(434); ?></td></tr>
  </table>
</td></tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo SELanguage::_get(435); ?></td></tr>
<tr><td class='setting1'>
<?php echo SELanguage::_get(436); ?>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='setting_signup_invitepage' id='invitepage_1' value='1'<?php if ($this->_tpl_vars['setting']['setting_signup_invitepage'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invitepage_1'><?php echo SELanguage::_get(437); ?></label></td></tr>
  <tr><td><input type='radio' name='setting_signup_invitepage' id='invitepage_0' value='0'<?php if ($this->_tpl_vars['setting']['setting_signup_invitepage'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='invitepage_0'><?php echo SELanguage::_get(438); ?></label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo SELanguage::_get(439); ?></td></tr>
<tr><td class='setting1'>
<?php echo SELanguage::_get(440); ?>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='setting_signup_verify' id='verify_1' value='1'<?php if ($this->_tpl_vars['setting']['setting_signup_verify'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='verify_1'><?php echo SELanguage::_get(441); ?></label></td></tr>
  <tr><td><input type='radio' name='setting_signup_verify' id='verify_0' value='0'<?php if ($this->_tpl_vars['setting']['setting_signup_verify'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='verify_0'><?php echo SELanguage::_get(442); ?></label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo SELanguage::_get(443); ?></td></tr>
<tr><td class='setting1'>
<?php echo SELanguage::_get(444); ?>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='setting_signup_code' id='code_1' value='1'<?php if ($this->_tpl_vars['setting']['setting_signup_code'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='code_1'><?php echo SELanguage::_get(445); ?></label></td></tr>
  <tr><td><input type='radio' name='setting_signup_code' id='code_0' value='0'<?php if ($this->_tpl_vars['setting']['setting_signup_code'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='code_0'><?php echo SELanguage::_get(446); ?></label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo SELanguage::_get(447); ?></td></tr>
<tr><td class='setting1'>
<?php echo SELanguage::_get(448); ?>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='setting_signup_randpass' id='randpass_1' value='1'<?php if ($this->_tpl_vars['setting']['setting_signup_randpass'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='randpass_1'><?php echo SELanguage::_get(449); ?></label></td></tr>
  <tr><td><input type='radio' name='setting_signup_randpass' id='randpass_0' value='0'<?php if ($this->_tpl_vars['setting']['setting_signup_randpass'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;</td><td><label for='randpass_0'><?php echo SELanguage::_get(450); ?></label></td></tr>
  </table>
</td></tr></table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
<tr><td class='header'><?php echo SELanguage::_get(451); ?></td></tr>
<tr><td class='setting1'>
<?php echo SELanguage::_get(452); ?>
</td></tr><tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr><td><input type='radio' name='setting_signup_tos' id='tos_0' value='0'<?php if ($this->_tpl_vars['setting']['setting_signup_tos'] == 0): ?> CHECKED<?php endif; ?> onChange="<?php echo 'if(this.checked == true){ $(\'tostext\').disabled=true; $(\'tostext\').style.backgroundColor=\'#DDDDDD\'; }'; ?>
">&nbsp;</td><td><label for='tos_0'><?php echo SELanguage::_get(454); ?></label></td></tr>
  <tr><td><input type='radio' name='setting_signup_tos' id='tos_1' value='1'<?php if ($this->_tpl_vars['setting']['setting_signup_tos'] == 1): ?> CHECKED<?php endif; ?> onChange="<?php echo 'if(this.checked == true){ $(\'tostext\').disabled=false; $(\'tostext\').style.backgroundColor=\'#FFFFFF\'; }'; ?>
">&nbsp;</td><td><label for='tos_1'><?php echo SELanguage::_get(453); ?></label></td></tr>
  </table>
<br>
<textarea class='text' name='setting_signup_tostext' id='tostext' rows='5' cols='50' <?php if ($this->_tpl_vars['setting']['setting_signup_tos'] == 0): ?>disabled='disabled' style='background: #DDDDDD; width: 100%;'<?php else: ?>style='width: 100%;'<?php endif; ?>><?php echo SELanguage::_get(1210); ?></textarea>
</td></tr></table>

<br>

<input type='submit' class='button' value='<?php echo SELanguage::_get(173); ?>'>
<input type='hidden' name='task' value='dosave'>
</form>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>