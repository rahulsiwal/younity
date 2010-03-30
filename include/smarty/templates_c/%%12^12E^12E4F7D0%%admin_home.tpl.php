<?php /* Smarty version 2.6.14, created on 2010-03-27 23:15:50
         compiled from admin_home.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'admin_home.tpl', 74, false),array('modifier', 'count', 'admin_home.tpl', 74, false),array('modifier', 'strpos', 'admin_home.tpl', 141, false),array('modifier', 'strstr', 'admin_home.tpl', 141, false),array('modifier', 'replace', 'admin_home.tpl', 141, false),)), $this);
?><?php
SELanguage::_preload_multi(55,56,1318,1319,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,977,976,984,985,1010,1011,986,987,1312,1313,74,75,76,77,78,81,82,79,80,83,84);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<h2><?php echo SELanguage::_get(55); ?></h2>
<div><?php echo SELanguage::_get(56); ?></div>
<br />

<?php if (! empty ( $this->_tpl_vars['admin_notifications'] )): ?>
<a class="admin_notification_activator admin_notification_hover" id="admin_notification_activator" href="javascript:void(0);" onclick="$(this).removeClass('admin_notification_hover'); $('admin_notification_container').style.display=''; $(this).blur(); return false;">
  <table width='100%' cellpadding='0' cellspacing='0'>
    <tr>
      <td id="admin_notification_message">
        <?php echo SELanguage::_get(1318); ?> <span id="admin_notification_expand"><?php echo SELanguage::_get(1319); ?></span>
      </td>
    </tr>
    <tr style="display:none;" id="admin_notification_container">
      <td class="error">
        <?php $_from = $this->_tpl_vars['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admin_notifications_index'] => $this->_tpl_vars['admin_notifications_item']):
?>
          -<?php if (is_numeric ( $this->_tpl_vars['admin_notifications_item'] )): 
 echo SELanguage::_get($this->_tpl_vars['admin_notifications_item']); 
 else: 
 echo $this->_tpl_vars['admin_notifications_item']; 
 endif; ?><br />
        <?php endforeach; endif; unset($_from); ?>
        </div>
      </td>
    </tr>
  </table>
</a>
<?php endif; ?>


<table width='100%' cellpadding='0' cellspacing='0' class='stats'>
<tr>
<td class='stat0'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><b><?php echo SELanguage::_get(58); ?></b> <?php echo $this->_tpl_vars['setting']['setting_key']; ?>
</td>
  <td style='padding-left: 20px;'><b><?php echo SELanguage::_get(59); ?></b> <?php echo $this->_tpl_vars['version_num']; ?>
<br></td>
  <?php if ($this->_tpl_vars['version_num'] < $this->_tpl_vars['versions']['license']): ?>
    <td style='padding-left: 20px;'><a href='http://www.socialengine.net/login.php' target='_blank'><img src='../images/icons/admin_upgrade16.gif' border='0' class='icon2'><?php echo SELanguage::_get(60); ?></a><br></td>
  <?php endif; ?>
  </tr>
  </table>
</td>
</tr>
</table>

<table width='100%' cellpadding='0' cellspacing='0' class='stats' style='margin-top: 10px;'>
<tr>
<td class='stat0'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><b><?php echo SELanguage::_get(61); ?></b> <?php echo $this->_tpl_vars['total_users_num']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo SELanguage::_get(62); ?></b> <?php echo $this->_tpl_vars['total_comments_num']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo SELanguage::_get(63); ?></b> <?php echo $this->_tpl_vars['total_messages_num']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo SELanguage::_get(64); ?></b> <?php echo $this->_tpl_vars['total_user_levels']; ?>
</td>
  </tr>
  <tr>
  <td><b><?php echo SELanguage::_get(65); ?></b> <?php echo $this->_tpl_vars['total_subnetworks']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo SELanguage::_get(66); ?></b> <?php echo $this->_tpl_vars['total_reports']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo SELanguage::_get(67); ?></b> <?php echo $this->_tpl_vars['total_friendships']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo SELanguage::_get(68); ?></b> <?php echo $this->_tpl_vars['total_announcements']; ?>
</td>
  </tr>
  <tr>
  <td><b><?php echo SELanguage::_get(69); ?></b> <?php echo $this->_tpl_vars['views_today']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo SELanguage::_get(70); ?></b> <?php echo $this->_tpl_vars['signups_today']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo SELanguage::_get(71); ?></b> <?php echo $this->_tpl_vars['logins_today']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo SELanguage::_get(72); ?></b> <?php echo $this->_tpl_vars['total_admins']; ?>
</td>
  </tr>
  </table>

    <?php echo smarty_function_math(array('assign' => 'total_online_users','equation' => "x+y",'x' => count($this->_tpl_vars['online_users'][0]),'y' => $this->_tpl_vars['online_users'][1]), $this);?>

  <?php if ($this->_tpl_vars['total_online_users'] > 0): ?>
    <br><b><?php echo $this->_tpl_vars['total_online_users']; ?>
 <?php echo SELanguage::_get(73); ?></b> 
    <?php if (count($this->_tpl_vars['online_users'][0]) == 0): ?>
      <?php echo sprintf(SELanguage::_get(977), $this->_tpl_vars['online_users'][1]); ?>
    <?php else: ?>
      <?php ob_start(); 
 unset($this->_sections['online_loop']);
$this->_sections['online_loop']['name'] = 'online_loop';
$this->_sections['online_loop']['loop'] = is_array($_loop=$this->_tpl_vars['online_users'][0]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['online_loop']['show'] = true;
$this->_sections['online_loop']['max'] = $this->_sections['online_loop']['loop'];
$this->_sections['online_loop']['step'] = 1;
$this->_sections['online_loop']['start'] = $this->_sections['online_loop']['step'] > 0 ? 0 : $this->_sections['online_loop']['loop']-1;
if ($this->_sections['online_loop']['show']) {
    $this->_sections['online_loop']['total'] = $this->_sections['online_loop']['loop'];
    if ($this->_sections['online_loop']['total'] == 0)
        $this->_sections['online_loop']['show'] = false;
} else
    $this->_sections['online_loop']['total'] = 0;
if ($this->_sections['online_loop']['show']):

            for ($this->_sections['online_loop']['index'] = $this->_sections['online_loop']['start'], $this->_sections['online_loop']['iteration'] = 1;
                 $this->_sections['online_loop']['iteration'] <= $this->_sections['online_loop']['total'];
                 $this->_sections['online_loop']['index'] += $this->_sections['online_loop']['step'], $this->_sections['online_loop']['iteration']++):
$this->_sections['online_loop']['rownum'] = $this->_sections['online_loop']['iteration'];
$this->_sections['online_loop']['index_prev'] = $this->_sections['online_loop']['index'] - $this->_sections['online_loop']['step'];
$this->_sections['online_loop']['index_next'] = $this->_sections['online_loop']['index'] + $this->_sections['online_loop']['step'];
$this->_sections['online_loop']['first']      = ($this->_sections['online_loop']['iteration'] == 1);
$this->_sections['online_loop']['last']       = ($this->_sections['online_loop']['iteration'] == $this->_sections['online_loop']['total']);

 if ($this->_sections['online_loop']['rownum'] != 1): ?>, <?php endif; ?><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['online_users'][0][$this->_sections['online_loop']['index']]->user_info['user_username']); ?>
' target='_blank'><?php echo $this->_tpl_vars['online_users'][0][$this->_sections['online_loop']['index']]->user_displayname; ?>
</a><?php endfor; endif; 
 $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('online_users_registered', ob_get_contents());ob_end_clean(); ?>
      <?php echo sprintf(SELanguage::_get(976), $this->_tpl_vars['online_users_registered'], $this->_tpl_vars['online_users'][1]); ?>
    <?php endif; ?>
  <?php endif; ?>

</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0' width='600'>
  <tr>
    <td class='header'><?php echo SELanguage::_get(984); ?></td>
  </tr>
  <tr>
    <td class='setting1'>
      <?php echo SELanguage::_get(985); ?>
      <?php if ($this->_tpl_vars['task'] == 'site_status'): ?>
        <br />
        <br />
        <div>
          <img src='../images/icons/bulb16.gif' border='0' class='icon'>
          <b><?php if ($this->_tpl_vars['setting']['setting_online'] == 1): 
 echo SELanguage::_get(1010); 
 else: 
 echo SELanguage::_get(1011); 
 endif; ?></b>
        </div>
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class='setting2'>
      <form action='admin_home.php' method='post' id='setting_online_form'>
      <table cellpadding='0' cellspacing='0'>
      <tr>
      <td><input type='radio' onChange="$('setting_online_form').submit()" name='setting_online' id='setting_online_1' value='1'<?php if ($this->_tpl_vars['setting']['setting_online'] == 1): ?> checked='checked'<?php endif; ?>></td>
      <td><label for='setting_online_1'><?php echo SELanguage::_get(986); ?></label></td>
      </tr>
      <tr>
      <td><input type='radio' onChange="$('setting_online_form').submit()" name='setting_online' id='setting_online_0' value='0'<?php if ($this->_tpl_vars['setting']['setting_online'] == 0): ?> checked='checked'<?php endif; ?>></td>
      <td><label for='setting_online_0'><?php echo SELanguage::_get(987); ?></label></td>
      </tr>
      </table>
      <input type='hidden' name='task' value='site_status'>
    </form>
    </td>
  </tr>
</table>
<br />


<?php if (count($this->_tpl_vars['lang_packlist']) != 0): ?>
<table cellpadding='0' cellspacing='0' width='600'>
  <tr>
    <td class='header'><?php echo SELanguage::_get(1312); ?></td>
  </tr>
  <tr>
    <td class='setting1'><?php echo SELanguage::_get(1313); ?></td>
  </tr>
  <tr>
    <td class='setting2'>
      <?php if (((is_array($_tmp=$_SERVER['QUERY_STRING'])) ? $this->_run_mod_handler('strpos', true, $_tmp, "&lang_id=") : strpos($_tmp, "&lang_id=")) !== FALSE): 
 $this->assign('pos', ((is_array($_tmp=$_SERVER['QUERY_STRING'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "&lang_id=") : strstr($_tmp, "&lang_id="))); 
 $this->assign('query_string', ((is_array($_tmp=$_SERVER['QUERY_STRING'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['pos'], "") : smarty_modifier_replace($_tmp, $this->_tpl_vars['pos'], ""))); 
 else: 
 $this->assign('query_string', $_SERVER['QUERY_STRING']); 
 endif; ?>
      <select style='width: 168px;' class='small' name='admin_language_id' onchange="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['query_string']; ?>
&lang_id='+this.options[this.selectedIndex].value;">
        <?php unset($this->_sections['lang_loop']);
$this->_sections['lang_loop']['name'] = 'lang_loop';
$this->_sections['lang_loop']['loop'] = is_array($_loop=$this->_tpl_vars['lang_packlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['lang_loop']['show'] = true;
$this->_sections['lang_loop']['max'] = $this->_sections['lang_loop']['loop'];
$this->_sections['lang_loop']['step'] = 1;
$this->_sections['lang_loop']['start'] = $this->_sections['lang_loop']['step'] > 0 ? 0 : $this->_sections['lang_loop']['loop']-1;
if ($this->_sections['lang_loop']['show']) {
    $this->_sections['lang_loop']['total'] = $this->_sections['lang_loop']['loop'];
    if ($this->_sections['lang_loop']['total'] == 0)
        $this->_sections['lang_loop']['show'] = false;
} else
    $this->_sections['lang_loop']['total'] = 0;
if ($this->_sections['lang_loop']['show']):

            for ($this->_sections['lang_loop']['index'] = $this->_sections['lang_loop']['start'], $this->_sections['lang_loop']['iteration'] = 1;
                 $this->_sections['lang_loop']['iteration'] <= $this->_sections['lang_loop']['total'];
                 $this->_sections['lang_loop']['index'] += $this->_sections['lang_loop']['step'], $this->_sections['lang_loop']['iteration']++):
$this->_sections['lang_loop']['rownum'] = $this->_sections['lang_loop']['iteration'];
$this->_sections['lang_loop']['index_prev'] = $this->_sections['lang_loop']['index'] - $this->_sections['lang_loop']['step'];
$this->_sections['lang_loop']['index_next'] = $this->_sections['lang_loop']['index'] + $this->_sections['lang_loop']['step'];
$this->_sections['lang_loop']['first']      = ($this->_sections['lang_loop']['iteration'] == 1);
$this->_sections['lang_loop']['last']       = ($this->_sections['lang_loop']['iteration'] == $this->_sections['lang_loop']['total']);
?>
          <option value='<?php echo $this->_tpl_vars['lang_packlist'][$this->_sections['lang_loop']['index']]['language_id']; ?>
'<?php if ($this->_tpl_vars['lang_packlist'][$this->_sections['lang_loop']['index']]['language_id'] == $this->_tpl_vars['global_language']): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['lang_packlist'][$this->_sections['lang_loop']['index']]['language_name']; ?>
</option>
         <?php endfor; endif; ?>
      </select>
    </td>
  </tr>
</table>
<br />
<?php endif; 
 echo SELanguage::_get(74); ?>
<br />

<table cellpadding='0' cellspacing='0' style='margin-top: 5px;'>
  <tr>
    <td class='step'>1</td>
    <td><b><a href='admin_profile.php'><?php echo SELanguage::_get(75); ?></a></b><br><?php echo SELanguage::_get(76); ?></td>
  </tr>
  <tr>
    <td class='step'>2</td>
    <td><b><a href='admin_signup.php'><?php echo SELanguage::_get(77); ?></a></b><br><?php echo SELanguage::_get(78); ?></td>
  </tr>
  <tr>
    <td class='step'>3</td>
    <td><b><a href='admin_viewplugins.php'><?php echo SELanguage::_get(81); ?></a></b><br><?php echo SELanguage::_get(82); ?></td>
  </tr>
  <tr>
    <td class='step'>4</td>
    <td><b><a href='admin_levels.php'><?php echo SELanguage::_get(79); ?></a></b><br><?php echo SELanguage::_get(80); ?></td>
  </tr>
  <tr>
    <td class='step'>5</td>
    <td><b><a href='admin_templates.php'><?php echo SELanguage::_get(83); ?></a></b><br><?php echo SELanguage::_get(84); ?></td>
  </tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>