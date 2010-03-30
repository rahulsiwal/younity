<?php /* Smarty version 2.6.14, created on 2010-03-29 21:16:13
         compiled from user_friends.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'user_friends.tpl', 113, false),array('function', 'cycle', 'user_friends.tpl', 150, false),array('modifier', 'truncate', 'user_friends.tpl', 131, false),array('modifier', 'chunk_split', 'user_friends.tpl', 131, false),)), $this);
?><?php
SELanguage::_preload_multi(894,895,896,897,898,899,646,900,901,902,903,905,904,182,184,185,183,509,849,906,882,907,908,837,889,784,839,836);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_friends.php'><?php echo SELanguage::_get(894); ?></a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_friends_requests.php'><?php echo SELanguage::_get(895); ?></a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_friends_requests_outgoing.php'><?php echo SELanguage::_get(896); ?></a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<img src='./images/icons/friends48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo SELanguage::_get(897); ?></div>
<div><?php echo SELanguage::_get(898); ?></div>
<br />
<br />

<?php echo '
<script type="text/javascript">
<!-- 
  window.addEvent(\'domready\', function(){
	var options = {
		script:"misc_js.php?task=suggest_friend&limit=5&",
		varname:"input",
		json:true,
		shownoresults:false,
		maxresults:5,
		multisuggest:false,
		callback: function (obj) { }
	};
	var as_json = new bsn.AutoSuggest(\'search\', options);
  });
//-->
</script>
'; ?>


<div class='friends_search'>
  <table cellpadding='0' cellspacing='0' align='center'>
  <tr>
  <td align='right'><?php echo SELanguage::_get(899); ?> &nbsp;</td>
  <td>
    <form action='user_friends.php' method='post' name='searchform'>
    <input type='text' maxlength='100' size='30' class='text' id='search' name='search' value='<?php echo $this->_tpl_vars['search']; ?>
'>&nbsp;
    <br><div id='suggest' class='suggest'></div>
  </td>
  <td>
    <input type='submit' class='button' value='<?php echo SELanguage::_get(646); ?>'>
    <input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'>
    <input type='hidden' name='p' value='<?php echo $this->_tpl_vars['p']; ?>
'>
  </td>
  </tr>
  <tr>
  <td class='friends_sort' align='right'><?php echo SELanguage::_get(900); ?> &nbsp;</td>
  <td class='friends_sort'>
    <select name='s' class='small'>
    <option value='<?php echo $this->_tpl_vars['u']; ?>
'<?php if ($this->_tpl_vars['s'] == 'ud'): ?> SELECTED<?php endif; ?>><?php echo SELanguage::_get(901); ?></option>
    <option value='<?php echo $this->_tpl_vars['l']; ?>
'<?php if ($this->_tpl_vars['s'] == 'ld'): ?> SELECTED<?php endif; ?>><?php echo SELanguage::_get(902); ?></option>
    <option value='<?php echo $this->_tpl_vars['t']; ?>
'<?php if ($this->_tpl_vars['s'] == 't'): ?> SELECTED<?php endif; ?>><?php echo SELanguage::_get(903); ?></option>
    </select>
    </form>
  </td>
  </tr>
  </table>
</div>

<?php if ($this->_tpl_vars['total_friends'] == 0): ?>

    <?php if ($this->_tpl_vars['search'] != ""): ?>
    <br>
    <table cellpadding='0' cellspacing='0' align='center'>
    <tr><td class='result'>
      <img src='./images/icons/bulb16.gif' border='0' class='icon'><?php echo SELanguage::_get(905); ?>
    </td></tr>
    </table>

    <?php else: ?>
    <br>
    <table cellpadding='0' cellspacing='0' align='center'>
    <tr><td class='result'>
      <img src='./images/icons/bulb16.gif' border='0' class='icon'><?php echo SELanguage::_get(904); ?>
    </td></tr>
    </table>
  <?php endif; 
 else: ?>

    <?php echo '
  <script type="text/javascript">
  <!-- 
  function friend_update(status) {
    '; ?>

    window.location = 'user_friends.php?s=<?php echo $this->_tpl_vars['s']; ?>
&search=<?php echo $this->_tpl_vars['search']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
';
    <?php echo '
  }
  //-->
  </script>
  '; ?>


    <?php if ($this->_tpl_vars['maxpage'] > 1): ?>
    <div class='center' style='margin-top: 10px;'>
      <?php if ($this->_tpl_vars['p'] != 1): ?><a href='user_friends.php?s=<?php echo $this->_tpl_vars['s']; ?>
&search=<?php echo $this->_tpl_vars['search']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo SELanguage::_get(182); ?></a><?php else: ?><font class='disabled'>&#171; <?php echo SELanguage::_get(182); ?></font><?php endif; ?>
      <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
        &nbsp;|&nbsp; <?php echo sprintf(SELanguage::_get(184), $this->_tpl_vars['p_start'], $this->_tpl_vars['total_friends']); ?> &nbsp;|&nbsp; 
      <?php else: ?>
        &nbsp;|&nbsp; <?php echo sprintf(SELanguage::_get(185), $this->_tpl_vars['p_start'], $this->_tpl_vars['p_end'], $this->_tpl_vars['total_friends']); ?> &nbsp;|&nbsp; 
      <?php endif; ?>
      <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?><a href='user_friends.php?s=<?php echo $this->_tpl_vars['s']; ?>
&search=<?php echo $this->_tpl_vars['search']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo SELanguage::_get(183); ?> &#187;</a><?php else: ?><font class='disabled'><?php echo SELanguage::_get(183); ?> &#187;</font><?php endif; ?>
    </div>
  <?php endif; ?>

  <div style='margin-left: auto; margin-right: auto; width: 850px;'> 
    <?php unset($this->_sections['friend_loop']);
$this->_sections['friend_loop']['name'] = 'friend_loop';
$this->_sections['friend_loop']['loop'] = is_array($_loop=$this->_tpl_vars['friends']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['friend_loop']['show'] = true;
$this->_sections['friend_loop']['max'] = $this->_sections['friend_loop']['loop'];
$this->_sections['friend_loop']['step'] = 1;
$this->_sections['friend_loop']['start'] = $this->_sections['friend_loop']['step'] > 0 ? 0 : $this->_sections['friend_loop']['loop']-1;
if ($this->_sections['friend_loop']['show']) {
    $this->_sections['friend_loop']['total'] = $this->_sections['friend_loop']['loop'];
    if ($this->_sections['friend_loop']['total'] == 0)
        $this->_sections['friend_loop']['show'] = false;
} else
    $this->_sections['friend_loop']['total'] = 0;
if ($this->_sections['friend_loop']['show']):

            for ($this->_sections['friend_loop']['index'] = $this->_sections['friend_loop']['start'], $this->_sections['friend_loop']['iteration'] = 1;
                 $this->_sections['friend_loop']['iteration'] <= $this->_sections['friend_loop']['total'];
                 $this->_sections['friend_loop']['index'] += $this->_sections['friend_loop']['step'], $this->_sections['friend_loop']['iteration']++):
$this->_sections['friend_loop']['rownum'] = $this->_sections['friend_loop']['iteration'];
$this->_sections['friend_loop']['index_prev'] = $this->_sections['friend_loop']['index'] - $this->_sections['friend_loop']['step'];
$this->_sections['friend_loop']['index_next'] = $this->_sections['friend_loop']['index'] + $this->_sections['friend_loop']['step'];
$this->_sections['friend_loop']['first']      = ($this->_sections['friend_loop']['iteration'] == 1);
$this->_sections['friend_loop']['last']       = ($this->_sections['friend_loop']['iteration'] == $this->_sections['friend_loop']['total']);
?>
          <div class='friends_result' style='width: 398px; height: 100px; float: left; margin-left: 10px;'>
        <table cellpadding='0' cellspacing='0'>
        <tr>
        <td class='friends_result0' style='width: 90px; text-align: center;'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_photo('./images/nophoto.gif'); ?>
' class='photo' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_photo('./images/nophoto.gif'),'90','90','w'); ?>
' border='0' alt="<?php echo sprintf(SELanguage::_get(509), $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_displayname_short); ?>"></a></td>
        <td class='friends_result1' width='100%' valign='top'>
          <div class='friends_name'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
'></a><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
'><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_displayname)) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)))) ? $this->_run_mod_handler('chunk_split', true, $_tmp, 12, "<wbr>&shy;") : chunk_split($_tmp, 12, "<wbr>&shy;")); ?>
</a></div>
	  <div class='friends_stats'>
            <?php if ($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_dateupdated'] != 0): ?><div><?php echo SELanguage::_get(849); ?> <?php $this->assign('last_updated', $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_dateupdated'])); 
 echo sprintf(SELanguage::_get($this->_tpl_vars['last_updated'][0]), $this->_tpl_vars['last_updated'][1]); ?></div><?php endif; ?>
            <?php if ($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_lastlogindate'] != 0): ?><div><?php echo SELanguage::_get(906); ?> <?php $this->assign('last_login', $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_lastlogindate'])); 
 echo sprintf(SELanguage::_get($this->_tpl_vars['last_login'][0]), $this->_tpl_vars['last_login'][1]); ?></div><?php endif; ?>
            <?php if ($this->_tpl_vars['show_details'] != 0): ?>
              <?php if ($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_type != ""): ?><div><?php echo SELanguage::_get(882); ?> &nbsp;<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_type; ?>
</div><?php endif; ?>
              <?php if ($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_explain != ""): ?><div><?php echo SELanguage::_get(907); ?> &nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_explain)) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
</div><?php endif; ?>
            <?php endif; ?>
	  </div>
        </td>
        <td class='friends_result2' valign='top' nowrap='nowrap'>
          <div><?php if ($this->_tpl_vars['show_details'] != 0): ?><a href="javascript:TB_show('<?php echo SELanguage::_get(908); ?>', 'user_friends_manage.php?user=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
&TB_iframe=true&height=300&width=450', '', './images/trans.gif');"><?php echo SELanguage::_get(908); ?></a></div><?php endif; ?>
          <div><a href="javascript:TB_show('<?php echo SELanguage::_get(837); ?>', 'user_friends_manage.php?task=remove&user=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
&TB_iframe=true&height=300&width=450', '', './images/trans.gif');"><?php echo SELanguage::_get(889); ?></a></div>
          <div><a href="javascript:TB_show('<?php echo SELanguage::_get(784); ?>', 'user_messages_new.php?to_user=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_displayname; ?>
&to_id=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
&TB_iframe=true&height=400&width=450', '', './images/trans.gif');"><?php echo SELanguage::_get(839); ?></a></div>
          <div><a href='profile.php?user=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
&v=friends'><?php $this->assign('user_displayname_short', ((is_array($_tmp=$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_displayname_short)) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true))); 
 echo sprintf(SELanguage::_get(836), $this->_tpl_vars['user_displayname_short']); ?></a></div>
        </td>
        </tr>
        </table>
      </div>
      <?php echo smarty_function_cycle(array('values' => ",<div style='clear: both;'></div>"), $this);?>
 
    <?php endfor; endif; ?>
    <div style='clear: both;'></div>
  </div>

    <?php if ($this->_tpl_vars['maxpage'] > 1): ?>
    <div class='center' style='margin-top: 10px;'>
      <?php if ($this->_tpl_vars['p'] != 1): ?><a href='user_friends.php?s=<?php echo $this->_tpl_vars['s']; ?>
&search=<?php echo $this->_tpl_vars['search']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo SELanguage::_get(182); ?></a><?php else: ?><font class='disabled'>&#171; <?php echo SELanguage::_get(182); ?></font><?php endif; ?>
      <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
        &nbsp;|&nbsp; <?php echo sprintf(SELanguage::_get(184), $this->_tpl_vars['p_start'], $this->_tpl_vars['total_friends']); ?> &nbsp;|&nbsp; 
      <?php else: ?>
        &nbsp;|&nbsp; <?php echo sprintf(SELanguage::_get(185), $this->_tpl_vars['p_start'], $this->_tpl_vars['p_end'], $this->_tpl_vars['total_friends']); ?> &nbsp;|&nbsp; 
      <?php endif; ?>
      <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?><a href='user_friends.php?s=<?php echo $this->_tpl_vars['s']; ?>
&search=<?php echo $this->_tpl_vars['search']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo SELanguage::_get(183); ?> &#187;</a><?php else: ?><font class='disabled'><?php echo SELanguage::_get(183); ?> &#187;</font><?php endif; ?>
    </div>
  <?php endif; 
 endif; 
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>