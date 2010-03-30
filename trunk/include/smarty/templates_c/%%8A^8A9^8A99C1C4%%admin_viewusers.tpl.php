<?php /* Smarty version 2.6.14, created on 2010-03-27 23:24:25
         compiled from admin_viewusers.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'admin_viewusers.tpl', 106, false),array('modifier', 'truncate', 'admin_viewusers.tpl', 109, false),)), $this);
?><?php
SELanguage::_preload_multi(4,996,28,1152,89,997,998,999,1000,1001,1002,1003,1013,1012,175,39,1004,1005,87,1006,1007,153,1008,187,155,1009,788);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<h2><?php echo SELanguage::_get(4); ?></h2>
<?php echo SELanguage::_get(996); ?>
<br />
<br />

<table cellpadding='0' cellspacing='0' align='center'>
<tr>
<td align='center'>
<div class='box'>
<table cellpadding='0' cellspacing='0' align='center'>
<tr><form action='admin_viewusers.php' method='POST'>
<td><?php if ($this->_tpl_vars['setting']['setting_username']): 
 echo SELanguage::_get(28); 
 else: 
 echo SELanguage::_get(1152); 
 endif; ?><br><input type='text' class='text' name='f_user' value='<?php echo $this->_tpl_vars['f_user']; ?>
' size='15' maxlength='50'>&nbsp;</td>
<td><?php echo SELanguage::_get(89); ?><br><input type='text' class='text' name='f_email' value='<?php echo $this->_tpl_vars['f_email']; ?>
' size='15' maxlength='70'>&nbsp;</td>
<td><?php echo SELanguage::_get(997); ?><br><select class='text' name='f_level'><option></option><?php unset($this->_sections['level_loop']);
$this->_sections['level_loop']['name'] = 'level_loop';
$this->_sections['level_loop']['loop'] = is_array($_loop=$this->_tpl_vars['levels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['level_loop']['show'] = true;
$this->_sections['level_loop']['max'] = $this->_sections['level_loop']['loop'];
$this->_sections['level_loop']['step'] = 1;
$this->_sections['level_loop']['start'] = $this->_sections['level_loop']['step'] > 0 ? 0 : $this->_sections['level_loop']['loop']-1;
if ($this->_sections['level_loop']['show']) {
    $this->_sections['level_loop']['total'] = $this->_sections['level_loop']['loop'];
    if ($this->_sections['level_loop']['total'] == 0)
        $this->_sections['level_loop']['show'] = false;
} else
    $this->_sections['level_loop']['total'] = 0;
if ($this->_sections['level_loop']['show']):

            for ($this->_sections['level_loop']['index'] = $this->_sections['level_loop']['start'], $this->_sections['level_loop']['iteration'] = 1;
                 $this->_sections['level_loop']['iteration'] <= $this->_sections['level_loop']['total'];
                 $this->_sections['level_loop']['index'] += $this->_sections['level_loop']['step'], $this->_sections['level_loop']['iteration']++):
$this->_sections['level_loop']['rownum'] = $this->_sections['level_loop']['iteration'];
$this->_sections['level_loop']['index_prev'] = $this->_sections['level_loop']['index'] - $this->_sections['level_loop']['step'];
$this->_sections['level_loop']['index_next'] = $this->_sections['level_loop']['index'] + $this->_sections['level_loop']['step'];
$this->_sections['level_loop']['first']      = ($this->_sections['level_loop']['iteration'] == 1);
$this->_sections['level_loop']['last']       = ($this->_sections['level_loop']['iteration'] == $this->_sections['level_loop']['total']);
?><option value='<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'<?php if ($this->_tpl_vars['f_level'] == $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_name']; ?>
</option><?php endfor; endif; ?></select>&nbsp;</td>
<td><?php echo SELanguage::_get(998); ?><br><select class='text' name='f_subnet'><option></option><?php unset($this->_sections['subnet_loop']);
$this->_sections['subnet_loop']['name'] = 'subnet_loop';
$this->_sections['subnet_loop']['loop'] = is_array($_loop=$this->_tpl_vars['subnets']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['subnet_loop']['show'] = true;
$this->_sections['subnet_loop']['max'] = $this->_sections['subnet_loop']['loop'];
$this->_sections['subnet_loop']['step'] = 1;
$this->_sections['subnet_loop']['start'] = $this->_sections['subnet_loop']['step'] > 0 ? 0 : $this->_sections['subnet_loop']['loop']-1;
if ($this->_sections['subnet_loop']['show']) {
    $this->_sections['subnet_loop']['total'] = $this->_sections['subnet_loop']['loop'];
    if ($this->_sections['subnet_loop']['total'] == 0)
        $this->_sections['subnet_loop']['show'] = false;
} else
    $this->_sections['subnet_loop']['total'] = 0;
if ($this->_sections['subnet_loop']['show']):

            for ($this->_sections['subnet_loop']['index'] = $this->_sections['subnet_loop']['start'], $this->_sections['subnet_loop']['iteration'] = 1;
                 $this->_sections['subnet_loop']['iteration'] <= $this->_sections['subnet_loop']['total'];
                 $this->_sections['subnet_loop']['index'] += $this->_sections['subnet_loop']['step'], $this->_sections['subnet_loop']['iteration']++):
$this->_sections['subnet_loop']['rownum'] = $this->_sections['subnet_loop']['iteration'];
$this->_sections['subnet_loop']['index_prev'] = $this->_sections['subnet_loop']['index'] - $this->_sections['subnet_loop']['step'];
$this->_sections['subnet_loop']['index_next'] = $this->_sections['subnet_loop']['index'] + $this->_sections['subnet_loop']['step'];
$this->_sections['subnet_loop']['first']      = ($this->_sections['subnet_loop']['iteration'] == 1);
$this->_sections['subnet_loop']['last']       = ($this->_sections['subnet_loop']['iteration'] == $this->_sections['subnet_loop']['total']);
?><option value='<?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
'<?php if ($this->_tpl_vars['f_subnet'] === $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']): ?> SELECTED<?php endif; ?>><?php echo SELanguage::_get($this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_name']); ?></option><?php endfor; endif; ?></select>&nbsp;</td>
<td><?php echo SELanguage::_get(999); ?><br><select class='text' name='f_enabled'><option></option><option value='1'<?php if ($this->_tpl_vars['f_enabled'] == '1'): ?> SELECTED<?php endif; ?>><?php echo SELanguage::_get(1000); ?></option><option value='0'<?php if ($this->_tpl_vars['f_enabled'] == '0'): ?> SELECTED<?php endif; ?>><?php echo SELanguage::_get(1001); ?></option></select>&nbsp;&nbsp;&nbsp;</td>
<td valign='bottom'><input type='submit' class='button' value='<?php echo SELanguage::_get(1002); ?>'></td>
<input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'>
</form>
</tr>
</table>
</div>
</td></tr></table>
  
<br>

<?php if ($this->_tpl_vars['total_users'] == 0): ?>

  <table cellpadding='0' cellspacing='0' width='400' align='center'>
  <tr>
  <td align='center'>
  <div class='box'><b><?php echo SELanguage::_get(1003); ?></b></div>
  </td></tr></table>
  <br>

<?php else: ?>

    <?php echo '
  <script language=\'JavaScript\'> 
  <!---
  var checkboxcount = 1;
  function doCheckAll() {
    if(checkboxcount == 0) {
      with (document.items) {
      for (var i=0; i < elements.length; i++) {
      if (elements[i].type == \'checkbox\') {
      elements[i].checked = false;
      }}
      checkboxcount = checkboxcount + 1;
      }
    } else
      with (document.items) {
      for (var i=0; i < elements.length; i++) {
      if (elements[i].type == \'checkbox\') {
      elements[i].checked = true;
      }}
      checkboxcount = checkboxcount - 1;
      }
  }

  var user_id = 0;
  function confirmDelete(id) {
    user_id = id;
    TB_show(\''; 
 echo SELanguage::_get(1013); 
 echo '\', \'#TB_inline?height=150&width=300&inlineId=confirmdelete\', \'\', \'../images/trans.gif\');
  }

  function deleteUser() {
    window.location = \'admin_viewusers.php?task=delete&user_id=\'+user_id;
  }
  // -->
  </script>
  '; ?>


    <div style='display: none;' id='confirmdelete'>
    <div style='margin-top: 10px;'>
      <?php echo SELanguage::_get(1012); ?>
    </div>
    <br>
    <input type='button' class='button' value='<?php echo SELanguage::_get(175); ?>' onClick='parent.TB_remove();parent.deleteUser();'> <input type='button' class='button' value='<?php echo SELanguage::_get(39); ?>' onClick='parent.TB_remove();'>
  </div>

  <div class='pages'><?php echo sprintf(SELanguage::_get(1004), $this->_tpl_vars['total_users']); ?> &nbsp;|&nbsp; <?php echo SELanguage::_get(1005); ?> <?php unset($this->_sections['page_loop']);
$this->_sections['page_loop']['name'] = 'page_loop';
$this->_sections['page_loop']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['page_loop']['show'] = true;
$this->_sections['page_loop']['max'] = $this->_sections['page_loop']['loop'];
$this->_sections['page_loop']['step'] = 1;
$this->_sections['page_loop']['start'] = $this->_sections['page_loop']['step'] > 0 ? 0 : $this->_sections['page_loop']['loop']-1;
if ($this->_sections['page_loop']['show']) {
    $this->_sections['page_loop']['total'] = $this->_sections['page_loop']['loop'];
    if ($this->_sections['page_loop']['total'] == 0)
        $this->_sections['page_loop']['show'] = false;
} else
    $this->_sections['page_loop']['total'] = 0;
if ($this->_sections['page_loop']['show']):

            for ($this->_sections['page_loop']['index'] = $this->_sections['page_loop']['start'], $this->_sections['page_loop']['iteration'] = 1;
                 $this->_sections['page_loop']['iteration'] <= $this->_sections['page_loop']['total'];
                 $this->_sections['page_loop']['index'] += $this->_sections['page_loop']['step'], $this->_sections['page_loop']['iteration']++):
$this->_sections['page_loop']['rownum'] = $this->_sections['page_loop']['iteration'];
$this->_sections['page_loop']['index_prev'] = $this->_sections['page_loop']['index'] - $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['index_next'] = $this->_sections['page_loop']['index'] + $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['first']      = ($this->_sections['page_loop']['iteration'] == 1);
$this->_sections['page_loop']['last']       = ($this->_sections['page_loop']['iteration'] == $this->_sections['page_loop']['total']);

 if ($this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['link'] == '1'): 
 echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; 
 else: ?><a href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</a><?php endif; ?> <?php endfor; endif; ?></div>
  
  <form action='admin_viewusers.php' method='post' name='items'>
  <table cellpadding='0' cellspacing='0' class='list' width='100%'>
  <tr>
  <td class='header' width='10'><input type='checkbox' name='select_all' onClick='javascript:doCheckAll()'></td>
  <td class='header' width='10' style='padding-left: 0px;'><a class='header' href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['i']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo SELanguage::_get(87); ?></a></td>
  <td class='header'><?php if ($this->_tpl_vars['setting']['setting_username']): ?><a class='header' href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['u']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo SELanguage::_get(28); ?></a><?php else: 
 echo SELanguage::_get(1152); 
 endif; ?></td>
  <td class='header'><a class='header' href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['em']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo SELanguage::_get(89); ?></a><?php if ($this->_tpl_vars['setting']['setting_signup_verify'] != 0): ?> (<a class='header' href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['v']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo SELanguage::_get(1006); ?></a>)<?php endif; ?></td>
  <td class='header'><?php echo SELanguage::_get(997); ?></td>
  <td class='header'><?php echo SELanguage::_get(998); ?></td>
  <td class='header' align='center'><?php echo SELanguage::_get(999); ?></td>
  <td class='header'><a class='header' href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['sd']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo SELanguage::_get(1007); ?></a></td>
  <td class='header'><?php echo SELanguage::_get(153); ?></td>
  </tr>
  
  <!-- LOOP THROUGH USERS -->
  <?php unset($this->_sections['user_loop']);
$this->_sections['user_loop']['name'] = 'user_loop';
$this->_sections['user_loop']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['user_loop']['show'] = true;
$this->_sections['user_loop']['max'] = $this->_sections['user_loop']['loop'];
$this->_sections['user_loop']['step'] = 1;
$this->_sections['user_loop']['start'] = $this->_sections['user_loop']['step'] > 0 ? 0 : $this->_sections['user_loop']['loop']-1;
if ($this->_sections['user_loop']['show']) {
    $this->_sections['user_loop']['total'] = $this->_sections['user_loop']['loop'];
    if ($this->_sections['user_loop']['total'] == 0)
        $this->_sections['user_loop']['show'] = false;
} else
    $this->_sections['user_loop']['total'] = 0;
if ($this->_sections['user_loop']['show']):

            for ($this->_sections['user_loop']['index'] = $this->_sections['user_loop']['start'], $this->_sections['user_loop']['iteration'] = 1;
                 $this->_sections['user_loop']['iteration'] <= $this->_sections['user_loop']['total'];
                 $this->_sections['user_loop']['index'] += $this->_sections['user_loop']['step'], $this->_sections['user_loop']['iteration']++):
$this->_sections['user_loop']['rownum'] = $this->_sections['user_loop']['iteration'];
$this->_sections['user_loop']['index_prev'] = $this->_sections['user_loop']['index'] - $this->_sections['user_loop']['step'];
$this->_sections['user_loop']['index_next'] = $this->_sections['user_loop']['index'] + $this->_sections['user_loop']['step'];
$this->_sections['user_loop']['first']      = ($this->_sections['user_loop']['iteration'] == 1);
$this->_sections['user_loop']['last']       = ($this->_sections['user_loop']['iteration'] == $this->_sections['user_loop']['total']);
?>
    <tr class='<?php echo smarty_function_cycle(array('values' => "background1,background2"), $this);?>
'>
    <td class='item' style='padding-right: 0px;'><input type='checkbox' name='delete[]' value='<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
'></td>
    <td class='item' style='padding-left: 0px;'><?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
</td>
    <td class='item'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_username']); ?>
'><?php if ($this->_tpl_vars['setting']['setting_username']): 
 echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); 
 else: 
 echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_displayname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); 
 endif; ?></a></td>
    <td class='item'><a href='mailto:<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_email']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_email'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
</a><?php if ($this->_tpl_vars['setting']['setting_signup_verify'] != 0 && $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_verified'] == 0): ?> (<?php echo SELanguage::_get(1008); ?>)<?php endif; ?></td>
    <td class='item'><a href='admin_levels_edit.php?level_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_level_id']; ?>
'><?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_level']; ?>
</a></td>
    <td class='item'><a href='admin_subnetworks.php'><?php echo SELanguage::_get($this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_subnet']); ?></a></td>
    <td class='item' align='center'><?php if ($this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_enabled'] == 1): 
 echo SELanguage::_get(1000); 
 else: 
 echo SELanguage::_get(1001); 
 endif; ?></td>
    <td class='item' nowrap='nowrap'><?php echo $this->_tpl_vars['datetime']->cdate($this->_tpl_vars['setting']['setting_dateformat'],$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_signupdate'],$this->_tpl_vars['setting']['setting_timezone'])); ?>
</td>
    <td class='item' nowrap='nowrap'><a href='admin_viewusers_edit.php?user_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
&s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo SELanguage::_get(187); ?></a> | <a href="javascript: confirmDelete('<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
');"><?php echo SELanguage::_get(155); ?></a> | <a href='admin_loginasuser.php?user_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
' target='_blank'><?php echo SELanguage::_get(1009); ?></a></td>
    </tr>
  <?php endfor; endif; ?>
  </table>

  <table cellpadding='0' cellspacing='0' width='100%'>
  <tr>
  <td>
    <br>
    <input type='submit' class='button' value='<?php echo SELanguage::_get(788); ?>'>
    <input type='hidden' name='task' value='dodelete'>
    </form>
  </td>
  <td align='right' valign='top'>
    <div class='pages2'><?php echo sprintf(SELanguage::_get(1004), $this->_tpl_vars['total_users']); ?> &nbsp;|&nbsp; <?php echo SELanguage::_get(1005); ?> <?php unset($this->_sections['page_loop']);
$this->_sections['page_loop']['name'] = 'page_loop';
$this->_sections['page_loop']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['page_loop']['show'] = true;
$this->_sections['page_loop']['max'] = $this->_sections['page_loop']['loop'];
$this->_sections['page_loop']['step'] = 1;
$this->_sections['page_loop']['start'] = $this->_sections['page_loop']['step'] > 0 ? 0 : $this->_sections['page_loop']['loop']-1;
if ($this->_sections['page_loop']['show']) {
    $this->_sections['page_loop']['total'] = $this->_sections['page_loop']['loop'];
    if ($this->_sections['page_loop']['total'] == 0)
        $this->_sections['page_loop']['show'] = false;
} else
    $this->_sections['page_loop']['total'] = 0;
if ($this->_sections['page_loop']['show']):

            for ($this->_sections['page_loop']['index'] = $this->_sections['page_loop']['start'], $this->_sections['page_loop']['iteration'] = 1;
                 $this->_sections['page_loop']['iteration'] <= $this->_sections['page_loop']['total'];
                 $this->_sections['page_loop']['index'] += $this->_sections['page_loop']['step'], $this->_sections['page_loop']['iteration']++):
$this->_sections['page_loop']['rownum'] = $this->_sections['page_loop']['iteration'];
$this->_sections['page_loop']['index_prev'] = $this->_sections['page_loop']['index'] - $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['index_next'] = $this->_sections['page_loop']['index'] + $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['first']      = ($this->_sections['page_loop']['iteration'] == 1);
$this->_sections['page_loop']['last']       = ($this->_sections['page_loop']['iteration'] == $this->_sections['page_loop']['total']);

 if ($this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['link'] == '1'): 
 echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; 
 else: ?><a href='admin_viewusers.php?s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</a><?php endif; ?> <?php endfor; endif; ?></div>
  </td>
  </tr>
  </table>

<?php endif; 
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>