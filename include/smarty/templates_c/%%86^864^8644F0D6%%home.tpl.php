<?php /* Smarty version 2.6.14, created on 2010-03-29 20:46:41
         compiled from home.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'home.tpl', 45, false),array('modifier', 'count', 'home.tpl', 102, false),array('modifier', 'truncate', 'home.tpl', 125, false),array('modifier', 'replace', 'home.tpl', 204, false),array('modifier', 'choptext', 'home.tpl', 204, false),array('function', 'math', 'home.tpl', 102, false),array('function', 'cycle', 'home.tpl', 122, false),)), $this);
?><?php
SELanguage::_preload_multi(659,89,29,975,691,30,660,509,510,26,1115,511,665,977,976,671,672,850009,657,664,737,666,667,668,669,670);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>








<div style='float: left; width: 200px;'>

    <?php if (! $this->_tpl_vars['user']->user_exists): ?>
    <div class='header'><?php echo SELanguage::_get(659); ?></div>
    <div class='portal_content'>
      <form action='login.php' method='post'>
      <table cellpadding='0' cellspacing='0' align='center'>
      <tr>
        <td>
          <?php echo SELanguage::_get(89); ?>:<br />
          <input type='text' class='text' name='email' size='25' maxlength='100' value='<?php echo $this->_tpl_vars['prev_email']; ?>
' />
        </td>
      </tr>
      <tr>
        <td style='padding-top: 6px;'>
          <?php echo SELanguage::_get(29); ?>:<br />
          <input type='password' class='text' name='password' size='25' maxlength='100' />
        </td>
      </tr>
      <?php if (! empty ( $this->_tpl_vars['setting']['setting_login_code'] )): ?>
      <tr>
        <td style='padding-top: 6px;'>
          <table cellpadding='0' cellspacing='0'>
            <tr>
              <td><input type='text' name='login_secure' class='text' size='6' maxlength='10' />&nbsp;</td>
              <td>
                <table cellpadding='0' cellspacing='0'>
                  <tr>
                    <td align='center'>
                      <img src='./images/secure.php' id='secure_image' border='0' height='20' width='67' class='signup_code' alt='' /><br />
                      <a href="javascript:void(0);" onClick="$('secure_image').src = './images/secure.php?' + (new Date()).getTime();"><?php echo SELanguage::_get(975); ?></a>
                    </td>
                    <td><?php ob_start(); 
 echo SELanguage::_get(691); 
 $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('tip', ob_get_contents());ob_end_clean(); ?><img src='./images/icons/tip.gif' border='0' class='Tips1' title='<?php echo ((is_array($_tmp=$this->_tpl_vars['tip'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
' alt='' /></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <?php endif; ?>
      <tr>
        <td style='padding-top: 10px;'>
          <input type='submit' class='button' value='<?php echo SELanguage::_get(30); ?>' />&nbsp;
          <input type='checkbox' class='checkbox' name='persistent' value='1' id='rememberme' />
          <label for='rememberme'><?php echo SELanguage::_get(660); ?></label>
        </td>
      </tr>
      </table>
      
      <noscript><input type='hidden' name='javascript_disabled' value='1' /></noscript>
      <input type='hidden' name='task' value='dologin' />
      <input type='hidden' name='ip' value='<?php echo $this->_tpl_vars['ip']; ?>
' />
      </form>
    </div>
    <div class='portal_spacer'></div>

    <?php else: ?>
    <div class='portal_login'>
      <div style='padding-bottom: 5px;'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['user']->user_photo("./images/nophoto.gif"); ?>
' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['user']->user_photo("./images/nophoto.gif"),'90','90','w'); ?>
' border='0' class='photo' alt="<?php echo sprintf(SELanguage::_get(509), $this->_tpl_vars['user']->user_info['user_username']); ?>" /></a></div>
      <div><?php echo sprintf(SELanguage::_get(510), $this->_tpl_vars['user']->user_displayname_short); ?></div>
      <div>[ <a href='user_logout.php'><?php echo SELanguage::_get(26); ?></a> ]</div>
    </div>
    <div class='portal_spacer'></div>
  <?php endif; ?>

    <?php if (! $this->_tpl_vars['user']->user_exists): ?>
    <div class='portal_signup_container1'>
      <div class='portal_signup'>
        <a href='signup.php' class='portal_signup'><span style='font-size: 11pt;'><img src='./images/portal_join.gif' border='0' style='margin-right: 3px; vertical-align: middle;' alt='' /></span><?php echo SELanguage::_get(1115); ?></a>
      </div>
    </div>
    <div class='portal_spacer'></div>
  <?php endif; ?>

    <?php if (! empty ( $this->_tpl_vars['site_statistics'] )): ?>
    <div class='header'><?php echo SELanguage::_get(511); ?></div>
    <div class='portal_content'>
      <?php $_from = $this->_tpl_vars['site_statistics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stat_name'] => $this->_tpl_vars['stat_array']):
?>
        &#149; <?php echo sprintf(SELanguage::_get($this->_tpl_vars['stat_array']['title']), $this->_tpl_vars['stat_array']['stat']); ?><br />
      <?php endforeach; endif; unset($_from); ?>
    </div>
    <div class='portal_spacer'></div>
  <?php endif; ?>
  
    <?php echo smarty_function_math(array('assign' => 'total_online_users','equation' => "x+y",'x' => count($this->_tpl_vars['online_users'][0]),'y' => $this->_tpl_vars['online_users'][1]), $this);?>

  <?php if ($this->_tpl_vars['total_online_users'] > 0): ?>
    <div class='header'><?php echo SELanguage::_get(665); ?> (<?php echo $this->_tpl_vars['total_online_users']; ?>
)</div>
    <div class='portal_content'>
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
'><?php echo $this->_tpl_vars['online_users'][0][$this->_sections['online_loop']['index']]->user_displayname; ?>
</a><?php endfor; endif; 
 $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('online_users_registered', ob_get_contents());ob_end_clean(); ?>
        <?php echo sprintf(SELanguage::_get(976), $this->_tpl_vars['online_users_registered'], $this->_tpl_vars['online_users'][1]); ?>
      <?php endif; ?>
    </div>
    <div class='portal_spacer'></div>
  <?php endif; ?>

    <div class='header'><?php echo SELanguage::_get(671); ?></div>
  <div class='portal_content'>
    <?php if (! empty ( $this->_tpl_vars['logins'] )): ?>
    <table cellpadding='0' cellspacing='0' align='center'>
      <?php unset($this->_sections['login_loop']);
$this->_sections['login_loop']['name'] = 'login_loop';
$this->_sections['login_loop']['loop'] = is_array($_loop=$this->_tpl_vars['logins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['login_loop']['max'] = (int)4;
$this->_sections['login_loop']['show'] = true;
if ($this->_sections['login_loop']['max'] < 0)
    $this->_sections['login_loop']['max'] = $this->_sections['login_loop']['loop'];
$this->_sections['login_loop']['step'] = 1;
$this->_sections['login_loop']['start'] = $this->_sections['login_loop']['step'] > 0 ? 0 : $this->_sections['login_loop']['loop']-1;
if ($this->_sections['login_loop']['show']) {
    $this->_sections['login_loop']['total'] = min(ceil(($this->_sections['login_loop']['step'] > 0 ? $this->_sections['login_loop']['loop'] - $this->_sections['login_loop']['start'] : $this->_sections['login_loop']['start']+1)/abs($this->_sections['login_loop']['step'])), $this->_sections['login_loop']['max']);
    if ($this->_sections['login_loop']['total'] == 0)
        $this->_sections['login_loop']['show'] = false;
} else
    $this->_sections['login_loop']['total'] = 0;
if ($this->_sections['login_loop']['show']):

            for ($this->_sections['login_loop']['index'] = $this->_sections['login_loop']['start'], $this->_sections['login_loop']['iteration'] = 1;
                 $this->_sections['login_loop']['iteration'] <= $this->_sections['login_loop']['total'];
                 $this->_sections['login_loop']['index'] += $this->_sections['login_loop']['step'], $this->_sections['login_loop']['iteration']++):
$this->_sections['login_loop']['rownum'] = $this->_sections['login_loop']['iteration'];
$this->_sections['login_loop']['index_prev'] = $this->_sections['login_loop']['index'] - $this->_sections['login_loop']['step'];
$this->_sections['login_loop']['index_next'] = $this->_sections['login_loop']['index'] + $this->_sections['login_loop']['step'];
$this->_sections['login_loop']['first']      = ($this->_sections['login_loop']['iteration'] == 1);
$this->_sections['login_loop']['last']       = ($this->_sections['login_loop']['iteration'] == $this->_sections['login_loop']['total']);
?>
      <?php echo smarty_function_cycle(array('name' => 'startrow3','values' => "<tr>,"), $this);?>

      <td class='portal_member' valign="bottom"<?php if (( ~ $this->_sections['login_loop']['index'] & 1 ) && $this->_sections['login_loop']['last']): ?> colspan="2" style="width:100%;"<?php else: ?> style="width:50%;"<?php endif; ?>>
        <?php if (! empty ( $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']] )): ?>
        <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]->user_info['user_username']); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]->user_displayname)) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
</a><br />
        <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]->user_photo("./images/nophoto.gif",'TRUE'); ?>
' class='photo' width='60' height='60' border='0' alt='' /></a>
        <?php endif; ?>
      </td>
      <?php echo smarty_function_cycle(array('name' => 'endrow3','values' => ",</tr>"), $this);?>

      <?php if (( ~ $this->_sections['login_loop']['index'] & 1 ) && $this->_sections['login_loop']['last']): ?></tr><?php endif; ?>
      <?php endfor; endif; ?>
      </table>
    <?php else: ?>
      <?php echo SELanguage::_get(672); ?>
    <?php endif; ?>
  </div>
  <div class='portal_spacer'></div>

</div>




















<div style='float: left; width: 480px; padding: 0px 10px 0px 10px;'>

    <div style='padding: 5px 10px 0px 0px;'>
    <div class='page_header'><?php echo SELanguage::_get(850009); ?></div>
    <?php echo SELanguage::_get(657); ?>
  </div>
  <div class='portal_spacer'></div>

    
  <?php if (count($this->_tpl_vars['news']) > 0): ?>
    <div style='padding: 0px 10px 0px 0px;'>
      <div class='page_header'><?php echo SELanguage::_get(664); ?></div>
      <?php unset($this->_sections['news_loop']);
$this->_sections['news_loop']['name'] = 'news_loop';
$this->_sections['news_loop']['loop'] = is_array($_loop=$this->_tpl_vars['news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news_loop']['max'] = (int)3;
$this->_sections['news_loop']['show'] = true;
if ($this->_sections['news_loop']['max'] < 0)
    $this->_sections['news_loop']['max'] = $this->_sections['news_loop']['loop'];
$this->_sections['news_loop']['step'] = 1;
$this->_sections['news_loop']['start'] = $this->_sections['news_loop']['step'] > 0 ? 0 : $this->_sections['news_loop']['loop']-1;
if ($this->_sections['news_loop']['show']) {
    $this->_sections['news_loop']['total'] = min(ceil(($this->_sections['news_loop']['step'] > 0 ? $this->_sections['news_loop']['loop'] - $this->_sections['news_loop']['start'] : $this->_sections['news_loop']['start']+1)/abs($this->_sections['news_loop']['step'])), $this->_sections['news_loop']['max']);
    if ($this->_sections['news_loop']['total'] == 0)
        $this->_sections['news_loop']['show'] = false;
} else
    $this->_sections['news_loop']['total'] = 0;
if ($this->_sections['news_loop']['show']):

            for ($this->_sections['news_loop']['index'] = $this->_sections['news_loop']['start'], $this->_sections['news_loop']['iteration'] = 1;
                 $this->_sections['news_loop']['iteration'] <= $this->_sections['news_loop']['total'];
                 $this->_sections['news_loop']['index'] += $this->_sections['news_loop']['step'], $this->_sections['news_loop']['iteration']++):
$this->_sections['news_loop']['rownum'] = $this->_sections['news_loop']['iteration'];
$this->_sections['news_loop']['index_prev'] = $this->_sections['news_loop']['index'] - $this->_sections['news_loop']['step'];
$this->_sections['news_loop']['index_next'] = $this->_sections['news_loop']['index'] + $this->_sections['news_loop']['step'];
$this->_sections['news_loop']['first']      = ($this->_sections['news_loop']['iteration'] == 1);
$this->_sections['news_loop']['last']       = ($this->_sections['news_loop']['iteration'] == $this->_sections['news_loop']['total']);
?>
        <div style='margin-top: 3px;'><img src='./images/icons/news16.gif' border='0' class='icon' alt='' /><b><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['announcement_subject']; ?>
</b> - <?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['announcement_date']; ?>
</div>
        <div style='margin-top: 3px;'><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['announcement_body']; ?>
</div>
      <?php endfor; endif; ?>
    </div>
    <div class='portal_spacer'></div>
  <?php endif; ?>

    
  <?php if (count($this->_tpl_vars['actions']) > 0): ?>
    <div class='page_header'><?php echo SELanguage::_get(737); ?></div>
    <div class='portal_whatsnew'>

            <?php if ($this->_tpl_vars['ads']->ad_feed != ""): ?>
        <div class='portal_action' style='display: block; visibility: visible; padding-bottom: 10px;'><?php echo $this->_tpl_vars['ads']->ad_feed; ?>
</div>
      <?php endif; ?>

            <?php unset($this->_sections['actions_loop']);
$this->_sections['actions_loop']['name'] = 'actions_loop';
$this->_sections['actions_loop']['loop'] = is_array($_loop=$this->_tpl_vars['actions']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['actions_loop']['max'] = (int)10;
$this->_sections['actions_loop']['show'] = true;
if ($this->_sections['actions_loop']['max'] < 0)
    $this->_sections['actions_loop']['max'] = $this->_sections['actions_loop']['loop'];
$this->_sections['actions_loop']['step'] = 1;
$this->_sections['actions_loop']['start'] = $this->_sections['actions_loop']['step'] > 0 ? 0 : $this->_sections['actions_loop']['loop']-1;
if ($this->_sections['actions_loop']['show']) {
    $this->_sections['actions_loop']['total'] = min(ceil(($this->_sections['actions_loop']['step'] > 0 ? $this->_sections['actions_loop']['loop'] - $this->_sections['actions_loop']['start'] : $this->_sections['actions_loop']['start']+1)/abs($this->_sections['actions_loop']['step'])), $this->_sections['actions_loop']['max']);
    if ($this->_sections['actions_loop']['total'] == 0)
        $this->_sections['actions_loop']['show'] = false;
} else
    $this->_sections['actions_loop']['total'] = 0;
if ($this->_sections['actions_loop']['show']):

            for ($this->_sections['actions_loop']['index'] = $this->_sections['actions_loop']['start'], $this->_sections['actions_loop']['iteration'] = 1;
                 $this->_sections['actions_loop']['iteration'] <= $this->_sections['actions_loop']['total'];
                 $this->_sections['actions_loop']['index'] += $this->_sections['actions_loop']['step'], $this->_sections['actions_loop']['iteration']++):
$this->_sections['actions_loop']['rownum'] = $this->_sections['actions_loop']['iteration'];
$this->_sections['actions_loop']['index_prev'] = $this->_sections['actions_loop']['index'] - $this->_sections['actions_loop']['step'];
$this->_sections['actions_loop']['index_next'] = $this->_sections['actions_loop']['index'] + $this->_sections['actions_loop']['step'];
$this->_sections['actions_loop']['first']      = ($this->_sections['actions_loop']['iteration'] == 1);
$this->_sections['actions_loop']['last']       = ($this->_sections['actions_loop']['iteration'] == $this->_sections['actions_loop']['total']);
?>
        <div id='action_<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_id']; ?>
' class='portal_action<?php if ($this->_sections['actions_loop']['first']): ?>_top<?php endif; ?>'>
          <table cellpadding='0' cellspacing='0'>
          <tr>
          <td valign='top'><img src='./images/icons/<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_icon']; ?>
' border='0' class='icon' alt='' /></td>
          <td valign='top' width='100%'>
            <?php $this->assign('action_date', $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_date'])); ?>
            <div class='portal_action_date'><?php echo sprintf(SELanguage::_get($this->_tpl_vars['action_date'][0]), $this->_tpl_vars['action_date'][1]); ?></div>
            <?php $this->assign('action_media', ''); ?>
            <?php if ($this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_media'] !== FALSE): 
 ob_start(); 
 unset($this->_sections['action_media_loop']);
$this->_sections['action_media_loop']['name'] = 'action_media_loop';
$this->_sections['action_media_loop']['loop'] = is_array($_loop=$this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_media']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['action_media_loop']['show'] = true;
$this->_sections['action_media_loop']['max'] = $this->_sections['action_media_loop']['loop'];
$this->_sections['action_media_loop']['step'] = 1;
$this->_sections['action_media_loop']['start'] = $this->_sections['action_media_loop']['step'] > 0 ? 0 : $this->_sections['action_media_loop']['loop']-1;
if ($this->_sections['action_media_loop']['show']) {
    $this->_sections['action_media_loop']['total'] = $this->_sections['action_media_loop']['loop'];
    if ($this->_sections['action_media_loop']['total'] == 0)
        $this->_sections['action_media_loop']['show'] = false;
} else
    $this->_sections['action_media_loop']['total'] = 0;
if ($this->_sections['action_media_loop']['show']):

            for ($this->_sections['action_media_loop']['index'] = $this->_sections['action_media_loop']['start'], $this->_sections['action_media_loop']['iteration'] = 1;
                 $this->_sections['action_media_loop']['iteration'] <= $this->_sections['action_media_loop']['total'];
                 $this->_sections['action_media_loop']['index'] += $this->_sections['action_media_loop']['step'], $this->_sections['action_media_loop']['iteration']++):
$this->_sections['action_media_loop']['rownum'] = $this->_sections['action_media_loop']['iteration'];
$this->_sections['action_media_loop']['index_prev'] = $this->_sections['action_media_loop']['index'] - $this->_sections['action_media_loop']['step'];
$this->_sections['action_media_loop']['index_next'] = $this->_sections['action_media_loop']['index'] + $this->_sections['action_media_loop']['step'];
$this->_sections['action_media_loop']['first']      = ($this->_sections['action_media_loop']['iteration'] == 1);
$this->_sections['action_media_loop']['last']       = ($this->_sections['action_media_loop']['iteration'] == $this->_sections['action_media_loop']['total']);
?><a href='<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_media'][$this->_sections['action_media_loop']['index']]['actionmedia_link']; ?>
'><img src='<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_media'][$this->_sections['action_media_loop']['index']]['actionmedia_path']; ?>
' border='0' width='<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_media'][$this->_sections['action_media_loop']['index']]['actionmedia_width']; ?>
' class='recentaction_media' alt='' /></a><?php endfor; endif; 
 $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('action_media', ob_get_contents());ob_end_clean(); 
 endif; ?>
            <?php $this->_tpl_vars['action_text'] = vsprintf(SELanguage::_get($this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_text']), $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_vars']);; ?>
            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action_text'])) ? $this->_run_mod_handler('replace', true, $_tmp, "[media]", $this->_tpl_vars['action_media']) : smarty_modifier_replace($_tmp, "[media]", $this->_tpl_vars['action_media'])))) ? $this->_run_mod_handler('choptext', true, $_tmp, 50, "<br>") : smarty_modifier_choptext($_tmp, 50, "<br>")); ?>

                </td>
          </tr>
          </table>
        </div>
      <?php endfor; endif; ?>
    </div>
    <div class='portal_spacer'></div>
  <?php endif; ?>

</div>










<div style='float: left; width: 200px;'>

    <div class='header'><?php echo SELanguage::_get(666); ?></div>
  <div class='portal_content'>
    <?php if (! empty ( $this->_tpl_vars['signups'] )): ?>
    <table cellpadding='0' cellspacing='0' align='center'>
      <?php unset($this->_sections['signups_loop']);
$this->_sections['signups_loop']['name'] = 'signups_loop';
$this->_sections['signups_loop']['loop'] = is_array($_loop=$this->_tpl_vars['signups']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['signups_loop']['max'] = (int)4;
$this->_sections['signups_loop']['show'] = true;
if ($this->_sections['signups_loop']['max'] < 0)
    $this->_sections['signups_loop']['max'] = $this->_sections['signups_loop']['loop'];
$this->_sections['signups_loop']['step'] = 1;
$this->_sections['signups_loop']['start'] = $this->_sections['signups_loop']['step'] > 0 ? 0 : $this->_sections['signups_loop']['loop']-1;
if ($this->_sections['signups_loop']['show']) {
    $this->_sections['signups_loop']['total'] = min(ceil(($this->_sections['signups_loop']['step'] > 0 ? $this->_sections['signups_loop']['loop'] - $this->_sections['signups_loop']['start'] : $this->_sections['signups_loop']['start']+1)/abs($this->_sections['signups_loop']['step'])), $this->_sections['signups_loop']['max']);
    if ($this->_sections['signups_loop']['total'] == 0)
        $this->_sections['signups_loop']['show'] = false;
} else
    $this->_sections['signups_loop']['total'] = 0;
if ($this->_sections['signups_loop']['show']):

            for ($this->_sections['signups_loop']['index'] = $this->_sections['signups_loop']['start'], $this->_sections['signups_loop']['iteration'] = 1;
                 $this->_sections['signups_loop']['iteration'] <= $this->_sections['signups_loop']['total'];
                 $this->_sections['signups_loop']['index'] += $this->_sections['signups_loop']['step'], $this->_sections['signups_loop']['iteration']++):
$this->_sections['signups_loop']['rownum'] = $this->_sections['signups_loop']['iteration'];
$this->_sections['signups_loop']['index_prev'] = $this->_sections['signups_loop']['index'] - $this->_sections['signups_loop']['step'];
$this->_sections['signups_loop']['index_next'] = $this->_sections['signups_loop']['index'] + $this->_sections['signups_loop']['step'];
$this->_sections['signups_loop']['first']      = ($this->_sections['signups_loop']['iteration'] == 1);
$this->_sections['signups_loop']['last']       = ($this->_sections['signups_loop']['iteration'] == $this->_sections['signups_loop']['total']);
?>
      <?php echo smarty_function_cycle(array('name' => 'startrow','values' => "<tr>,"), $this);?>

      <td class='portal_member' valign="bottom"<?php if (( ~ $this->_sections['signups_loop']['index'] & 1 ) && $this->_sections['signups_loop']['last']): ?> colspan="2" style="width:100%;"<?php else: ?> style="width:50%;"<?php endif; ?>>
        <?php if (! empty ( $this->_tpl_vars['signups'][$this->_sections['signups_loop']['index']] )): ?>
          <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['signups'][$this->_sections['signups_loop']['index']]->user_info['user_username']); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['signups'][$this->_sections['signups_loop']['index']]->user_displayname)) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
</a><br />
          <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['signups'][$this->_sections['signups_loop']['index']]->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['signups'][$this->_sections['signups_loop']['index']]->user_photo("./images/nophoto.gif",'TRUE'); ?>
' class='photo' width='60' height='60' border='0' alt='' /></a>
        <?php endif; ?>
      </td>
      <?php echo smarty_function_cycle(array('name' => 'endrow','values' => ",</tr>"), $this);?>

      <?php endfor; endif; ?>
      </table>
    <?php else: ?>
      <?php echo SELanguage::_get(667); ?>
    <?php endif; ?>
  </div>
  <div class='portal_spacer'></div>

    <?php if ($this->_tpl_vars['setting']['setting_connection_allow'] != 0): ?>
    <div class='header'><?php echo SELanguage::_get(668); ?></div>
    <div class='portal_content'>
    <?php if (! empty ( $this->_tpl_vars['friends'] )): ?>
    <table cellpadding='0' cellspacing='0' align='center'>
      <?php unset($this->_sections['friends_loop']);
$this->_sections['friends_loop']['name'] = 'friends_loop';
$this->_sections['friends_loop']['loop'] = is_array($_loop=$this->_tpl_vars['friends']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['friends_loop']['max'] = (int)4;
$this->_sections['friends_loop']['show'] = true;
if ($this->_sections['friends_loop']['max'] < 0)
    $this->_sections['friends_loop']['max'] = $this->_sections['friends_loop']['loop'];
$this->_sections['friends_loop']['step'] = 1;
$this->_sections['friends_loop']['start'] = $this->_sections['friends_loop']['step'] > 0 ? 0 : $this->_sections['friends_loop']['loop']-1;
if ($this->_sections['friends_loop']['show']) {
    $this->_sections['friends_loop']['total'] = min(ceil(($this->_sections['friends_loop']['step'] > 0 ? $this->_sections['friends_loop']['loop'] - $this->_sections['friends_loop']['start'] : $this->_sections['friends_loop']['start']+1)/abs($this->_sections['friends_loop']['step'])), $this->_sections['friends_loop']['max']);
    if ($this->_sections['friends_loop']['total'] == 0)
        $this->_sections['friends_loop']['show'] = false;
} else
    $this->_sections['friends_loop']['total'] = 0;
if ($this->_sections['friends_loop']['show']):

            for ($this->_sections['friends_loop']['index'] = $this->_sections['friends_loop']['start'], $this->_sections['friends_loop']['iteration'] = 1;
                 $this->_sections['friends_loop']['iteration'] <= $this->_sections['friends_loop']['total'];
                 $this->_sections['friends_loop']['index'] += $this->_sections['friends_loop']['step'], $this->_sections['friends_loop']['iteration']++):
$this->_sections['friends_loop']['rownum'] = $this->_sections['friends_loop']['iteration'];
$this->_sections['friends_loop']['index_prev'] = $this->_sections['friends_loop']['index'] - $this->_sections['friends_loop']['step'];
$this->_sections['friends_loop']['index_next'] = $this->_sections['friends_loop']['index'] + $this->_sections['friends_loop']['step'];
$this->_sections['friends_loop']['first']      = ($this->_sections['friends_loop']['iteration'] == 1);
$this->_sections['friends_loop']['last']       = ($this->_sections['friends_loop']['iteration'] == $this->_sections['friends_loop']['total']);
?>
      <?php echo smarty_function_cycle(array('name' => 'startrow2','values' => "<tr>,"), $this);?>

      <td class='portal_member' valign="bottom"<?php if (( ~ $this->_sections['friends_loop']['index'] & 1 ) && $this->_sections['friends_loop']['last']): ?> colspan="2" style="width:100%;"<?php else: ?> style="width:50%;"<?php endif; ?>>
        <?php if (! empty ( $this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']] )): ?>
        <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']]['friend']->user_info['user_username']); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']]['friend']->user_displayname)) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
</a><br />
        <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']]['friend']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']]['friend']->user_photo("./images/nophoto.gif",'TRUE'); ?>
' class='photo' width='60' height='60' border='0' alt='' /></a><br />
        <?php echo sprintf(SELanguage::_get(669), $this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']]['total_friends']); ?>
        <?php endif; ?>
      </td>
      <?php echo smarty_function_cycle(array('name' => 'endrow2','values' => ",</tr>"), $this);?>

      <?php endfor; endif; ?>
      </table>
    <?php else: ?>
      <?php echo SELanguage::_get(670); ?>
    <?php endif; ?>
    </div>
    <div class='portal_spacer'></div>
  <?php endif; ?>

</div>











<div style='clear: both;'></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>