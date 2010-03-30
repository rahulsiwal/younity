<?php /* Smarty version 2.6.14, created on 2010-03-29 21:15:45
         compiled from user_home.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'user_home.tpl', 79, false),array('modifier', 'choptext', 'user_home.tpl', 79, false),array('modifier', 'count', 'user_home.tpl', 109, false),array('function', 'math', 'user_home.tpl', 205, false),array('block', 'hook_foreach', 'user_home.tpl', 245, false),)), $this);
?><?php
SELanguage::_preload_multi(737,1070,1069,173,39,1068,738,739,740,741,1064,1182,1063,773,1113,743,744,745,746,747,742,664,665,977,976,1176,1180);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<table cellpadding='0' cellspacing='0' width='100%'>
  <tr>
    
        <td class='home_left'>
      
      
            <div style='margin-bottom: 7px;'>
        <div class='page_header' style='width: 50%; float: left;'><?php echo SELanguage::_get(737); ?></div>
        <div style='width: 50%; float: right; text-align: right; padding-top: 13px;'><?php if ($this->_tpl_vars['setting']['setting_actions_preference'] == 1): ?> <a href='javascript:actionprefs();'><?php echo SELanguage::_get(1070); ?></a><?php endif; ?></div>
        <div style='clear: both;'></div>
      </div>
      
      <?php if ($this->_tpl_vars['setting']['setting_actions_preference'] == 1): ?>
                <div style='display: none;' id='actionprefs'>
          <div style='margin-top: 10px;'><?php echo SELanguage::_get(1069); ?></div>
          <br />
          <form action='misc_js.php' method='post' target='ajaxframe'>
            <table cellpadding='0' cellspacing='0'>
              <?php unset($this->_sections['actiontypes_loop']);
$this->_sections['actiontypes_loop']['name'] = 'actiontypes_loop';
$this->_sections['actiontypes_loop']['loop'] = is_array($_loop=$this->_tpl_vars['actiontypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['actiontypes_loop']['show'] = true;
$this->_sections['actiontypes_loop']['max'] = $this->_sections['actiontypes_loop']['loop'];
$this->_sections['actiontypes_loop']['step'] = 1;
$this->_sections['actiontypes_loop']['start'] = $this->_sections['actiontypes_loop']['step'] > 0 ? 0 : $this->_sections['actiontypes_loop']['loop']-1;
if ($this->_sections['actiontypes_loop']['show']) {
    $this->_sections['actiontypes_loop']['total'] = $this->_sections['actiontypes_loop']['loop'];
    if ($this->_sections['actiontypes_loop']['total'] == 0)
        $this->_sections['actiontypes_loop']['show'] = false;
} else
    $this->_sections['actiontypes_loop']['total'] = 0;
if ($this->_sections['actiontypes_loop']['show']):

            for ($this->_sections['actiontypes_loop']['index'] = $this->_sections['actiontypes_loop']['start'], $this->_sections['actiontypes_loop']['iteration'] = 1;
                 $this->_sections['actiontypes_loop']['iteration'] <= $this->_sections['actiontypes_loop']['total'];
                 $this->_sections['actiontypes_loop']['index'] += $this->_sections['actiontypes_loop']['step'], $this->_sections['actiontypes_loop']['iteration']++):
$this->_sections['actiontypes_loop']['rownum'] = $this->_sections['actiontypes_loop']['iteration'];
$this->_sections['actiontypes_loop']['index_prev'] = $this->_sections['actiontypes_loop']['index'] - $this->_sections['actiontypes_loop']['step'];
$this->_sections['actiontypes_loop']['index_next'] = $this->_sections['actiontypes_loop']['index'] + $this->_sections['actiontypes_loop']['step'];
$this->_sections['actiontypes_loop']['first']      = ($this->_sections['actiontypes_loop']['iteration'] == 1);
$this->_sections['actiontypes_loop']['last']       = ($this->_sections['actiontypes_loop']['iteration'] == $this->_sections['actiontypes_loop']['total']);
?>
              <tr>
                <td>
                  <input type='checkbox' name='actiontype[]' id='actiontype_id_<?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontypes_loop']['index']]['actiontype_id']; ?>
' value='<?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontypes_loop']['index']]['actiontype_id']; ?>
'<?php if ($this->_tpl_vars['actiontypes'][$this->_sections['actiontypes_loop']['index']]['actiontype_selected'] == 1): ?> checked='checked'<?php endif; ?> />
                  <label for='actiontype_id_<?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontypes_loop']['index']]['actiontype_id']; ?>
'><?php echo SELanguage::_get($this->_tpl_vars['actiontypes'][$this->_sections['actiontypes_loop']['index']]['actiontype_desc']); ?></label>
                </td>
              </tr>
              <?php endfor; endif; ?>
            </table>
            <br />
            <input type='submit' class='button' value='<?php echo SELanguage::_get(173); ?>' />
            <input type='button' class='button' value='<?php echo SELanguage::_get(39); ?>' onClick='parent.TB_remove();' />
            <input type='hidden' name='task' value='save_actionprefs' />
          </form>
        </div>
        
                <?php echo '
        <script type="text/javascript">
        <!-- 
        function actionprefs()
        {
          TB_show(\''; 
 echo SELanguage::_get(1068); 
 echo '\', \'#TB_inline?height=250&width=300&inlineId=actionprefs\', \'\', \'../images/trans.gif\');
        }
        //-->
        </script>
        '; ?>

        
      <?php endif; ?>
      
      
            <div class='home_whatsnew'>
      
                <?php if ($this->_tpl_vars['ads']->ad_feed != ""): ?>
          <div class='home_action' style='display: block; visibility: visible; padding-bottom: 10px;'><?php echo $this->_tpl_vars['ads']->ad_feed; ?>
</div>
        <?php endif; ?>
        
                <?php unset($this->_sections['actions_loop']);
$this->_sections['actions_loop']['name'] = 'actions_loop';
$this->_sections['actions_loop']['loop'] = is_array($_loop=$this->_tpl_vars['actions']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['actions_loop']['show'] = true;
$this->_sections['actions_loop']['max'] = $this->_sections['actions_loop']['loop'];
$this->_sections['actions_loop']['step'] = 1;
$this->_sections['actions_loop']['start'] = $this->_sections['actions_loop']['step'] > 0 ? 0 : $this->_sections['actions_loop']['loop']-1;
if ($this->_sections['actions_loop']['show']) {
    $this->_sections['actions_loop']['total'] = $this->_sections['actions_loop']['loop'];
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
' class='home_action<?php if ($this->_sections['actions_loop']['first']): ?>_top<?php endif; ?>'>
            <table cellpadding='0' cellspacing='0'>
              <tr>
                <td valign='top'>
                  <img src='./images/icons/<?php echo $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_icon']; ?>
' border='0' class='icon' />
                </td>
                <td valign='top' width='100%'>
                  <?php $this->assign('action_date', $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_date'])); ?>
                  <div class='home_action_date'><?php echo sprintf(SELanguage::_get($this->_tpl_vars['action_date'][0]), $this->_tpl_vars['action_date'][1]); ?></div>
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
' class='recentaction_media'></a><?php endfor; endif; 
 $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('action_media', ob_get_contents());ob_end_clean(); 
 endif; ?>
                  <?php $this->_tpl_vars['action_text'] = vsprintf(SELanguage::_get($this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_text']), $this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_vars']);; ?>
                  <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action_text'])) ? $this->_run_mod_handler('replace', true, $_tmp, "[media]", $this->_tpl_vars['action_media']) : smarty_modifier_replace($_tmp, "[media]", $this->_tpl_vars['action_media'])))) ? $this->_run_mod_handler('choptext', true, $_tmp, 50, "<br>") : smarty_modifier_choptext($_tmp, 50, "<br>")); ?>

                </td>
              </tr>
            </table>
          </div>
        <?php endfor; else: ?>
          <?php echo SELanguage::_get(738); ?>
        <?php endif; ?>
      </div>
    </td>
    
        <td class='home_right' width='220'>
      
        
      <table cellpadding='0' cellspacing='0' width='100%'>
        <tr>
          <td class='header'><?php echo SELanguage::_get(739); ?></td>
        </tr>
        <tr>
          <td class='home_box'>
                        <div>
              <img src='./images/icons/newviews16.gif' border='0' class='icon' />
              <?php echo sprintf(SELanguage::_get(740), $this->_tpl_vars['profile_views']); ?>
              <?php if ($this->_tpl_vars['profile_viewers'] != 0): ?>[ <a href='user_home.php?task=resetviews'><?php echo SELanguage::_get(741); ?></a> ]<?php endif; ?>
              <br />
              
                            <?php if ($this->_tpl_vars['user']->user_info['user_saveviews'] == 1): ?>
              <?php if (count($this->_tpl_vars['profile_viewers']) != 0): ?>
                <div style='margin-top: 10px;'>
                  <a href='javascript:void(0);' onClick="$('profile_viewers').style.display='block';this.style.display='none';"><?php echo SELanguage::_get(1064); ?></a>
                  <div id='profile_viewers' style='display: none; max-height: 400px; overflow: auto;'>
                    <?php echo SELanguage::_get(1182); ?><br />
                    <?php unset($this->_sections['viewer_loop']);
$this->_sections['viewer_loop']['name'] = 'viewer_loop';
$this->_sections['viewer_loop']['loop'] = is_array($_loop=$this->_tpl_vars['profile_viewers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['viewer_loop']['show'] = true;
$this->_sections['viewer_loop']['max'] = $this->_sections['viewer_loop']['loop'];
$this->_sections['viewer_loop']['step'] = 1;
$this->_sections['viewer_loop']['start'] = $this->_sections['viewer_loop']['step'] > 0 ? 0 : $this->_sections['viewer_loop']['loop']-1;
if ($this->_sections['viewer_loop']['show']) {
    $this->_sections['viewer_loop']['total'] = $this->_sections['viewer_loop']['loop'];
    if ($this->_sections['viewer_loop']['total'] == 0)
        $this->_sections['viewer_loop']['show'] = false;
} else
    $this->_sections['viewer_loop']['total'] = 0;
if ($this->_sections['viewer_loop']['show']):

            for ($this->_sections['viewer_loop']['index'] = $this->_sections['viewer_loop']['start'], $this->_sections['viewer_loop']['iteration'] = 1;
                 $this->_sections['viewer_loop']['iteration'] <= $this->_sections['viewer_loop']['total'];
                 $this->_sections['viewer_loop']['index'] += $this->_sections['viewer_loop']['step'], $this->_sections['viewer_loop']['iteration']++):
$this->_sections['viewer_loop']['rownum'] = $this->_sections['viewer_loop']['iteration'];
$this->_sections['viewer_loop']['index_prev'] = $this->_sections['viewer_loop']['index'] - $this->_sections['viewer_loop']['step'];
$this->_sections['viewer_loop']['index_next'] = $this->_sections['viewer_loop']['index'] + $this->_sections['viewer_loop']['step'];
$this->_sections['viewer_loop']['first']      = ($this->_sections['viewer_loop']['iteration'] == 1);
$this->_sections['viewer_loop']['last']       = ($this->_sections['viewer_loop']['iteration'] == $this->_sections['viewer_loop']['total']);
?>
                    <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['profile_viewers'][$this->_sections['viewer_loop']['index']]->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['profile_viewers'][$this->_sections['viewer_loop']['index']]->user_displayname; ?>
</a>
                    <?php if ($this->_sections['viewer_loop']['last'] !== TRUE): ?>, <?php endif; 
 endfor; endif; ?>
                  </div>
                </div>
              <?php else: ?>
                <?php echo SELanguage::_get(1063); ?>
              <?php endif; ?>
              <?php endif; ?>
            </div>
          </td>
        </tr>
      </table>
      <div class='spacer10'></div>
      
            <?php if ($this->_tpl_vars['user']->level_info['level_profile_status'] != 0): ?>
      
        <?php 
$javascript_lang_import_list = SELanguage::_javascript_redundancy_filter(array(773,1113,743,744,745,746,747));
$javascript_lang_import_first = TRUE;
if( is_array($javascript_lang_import_list) && !empty($javascript_lang_import_list) )
{
  echo "\n<script type='text/javascript'>\n<!--\n";
  echo "SocialEngine.Language.Import({\n";
  foreach( $javascript_lang_import_list as $javascript_import_id )
  {
    if( !$javascript_lang_import_first ) echo ",\n";
    echo "  ".$javascript_import_id." : '".addslashes(SE_Language::_get($javascript_import_id))."'";
    $javascript_lang_import_first = FALSE;
  }
  echo "\n});\n//-->\n</script>\n";
}
 ?>
        <?php echo '
        <script type="text/javascript">
        <!-- 
        SocialEngine.Viewer.user_status = \''; 
 echo $this->_tpl_vars['user']->user_info['user_status']; 
 echo '\';
        //-->
        </script>
        '; ?>

        
        <table cellpadding='0' cellspacing='0' width='100%'>
          <tr>
            <td class='header'><?php echo SELanguage::_get(742); ?></td>
          </tr>
          <tr>
            <td class='home_box'>
              <table cellpadding='0' cellspacing='0'>
              <tr>
                <td valign='top'><img src='./images/icons/status16.gif' border='0' class='icon2' />&nbsp;&nbsp;</td>
                <td>
                  <div id='ajax_status'>
                    <?php if ($this->_tpl_vars['user']->user_info['user_status'] != ""): ?>
                      <?php $this->assign('status_date', $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['user']->user_info['user_status_date'])); ?>
                      <?php echo $this->_tpl_vars['user']->user_displayname_short; ?>
 <span id='ajax_currentstatus_value'><?php echo $this->_tpl_vars['user']->user_info['user_status']; ?>
</span>
                      <div style='padding-top: 5px;'>
                        <div style='float: left; padding-right: 5px;'>[ <a href="javascript:void(0);" onClick="SocialEngine.Viewer.userStatusChange(); return false;"><?php echo SELanguage::_get(745); ?></a> ]</div>
                        <div class='home_updated'>
                          <?php echo SELanguage::_get(1113); ?>
                          <span id='ajax_currentstatus_date'><?php echo sprintf(SELanguage::_get($this->_tpl_vars['status_date'][0]), $this->_tpl_vars['status_date'][1]); ?></span>
                        </div>
                        <div style='clear: both; height: 0px;'></div>
                      </div>
                    <?php else: ?>
                      <div><a href="javascript:void(0);" onclick="SocialEngine.Viewer.userStatusChange(); return false;"><?php echo SELanguage::_get(743); ?></a></div>
                    <?php endif; ?>
                  </div>
                </td>
              </tr>
              </table>
            </td>
          </tr>
        </table>
        <div class='spacer10'></div>
      <?php endif; ?>
      
      
            <?php if (count($this->_tpl_vars['news']) > 0): ?>
        <table cellpadding='0' cellspacing='0' width='100%'>
          <tr>
            <td class='header'><?php echo SELanguage::_get(664); ?></td>
          </tr>
          <tr>
            <td class='home_box'>
              <?php unset($this->_sections['news_loop']);
$this->_sections['news_loop']['name'] = 'news_loop';
$this->_sections['news_loop']['loop'] = is_array($_loop=$this->_tpl_vars['news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news_loop']['show'] = true;
$this->_sections['news_loop']['max'] = $this->_sections['news_loop']['loop'];
$this->_sections['news_loop']['step'] = 1;
$this->_sections['news_loop']['start'] = $this->_sections['news_loop']['step'] > 0 ? 0 : $this->_sections['news_loop']['loop']-1;
if ($this->_sections['news_loop']['show']) {
    $this->_sections['news_loop']['total'] = $this->_sections['news_loop']['loop'];
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
              <table cellpadding='0' cellspacing='0' width='100%'>
                <tr>
                  <td valign='top'>
                    <b><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['announcement_subject']; ?>
</b><br />
                    <i><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['announcement_date']; ?>
</i><br />
                    <?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['announcement_body']; ?>

                  </td>
                </tr>
              </table>
              <?php if ($this->_sections['news_loop']['last'] == false): ?><br><?php endif; ?>
              <?php endfor; endif; ?>
            </td>
          </tr>
        </table>
        <div class='spacer10'></div>
      <?php endif; ?>
      
      
            <?php echo smarty_function_math(array('assign' => 'total_online_users','equation' => "x+y",'x' => count($this->_tpl_vars['online_users'][0]),'y' => $this->_tpl_vars['online_users'][1]), $this);?>

      <?php if ($this->_tpl_vars['total_online_users'] > 0): ?>
        <table cellpadding='0' cellspacing='0' class='portal_table' align='center' width='100%'>
          <tr>
            <td class='header'><?php echo SELanguage::_get(665); ?> (<?php echo $this->_tpl_vars['total_online_users']; ?>
)</td>
          </tr>
          <tr>
            <td class='home_box'>
            <?php if (count($this->_tpl_vars['online_users'][0]) == 0): ?>
              <?php echo sprintf(SELanguage::_get(977), $this->_tpl_vars['online_users'][1]); ?>
            <?php else: ?>
              <?php ob_start(); ?>
              <?php unset($this->_sections['online_loop']);
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
?>
              <?php if ($this->_sections['online_loop']['rownum'] != 1): ?>, <?php endif; ?>
              <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['online_users'][0][$this->_sections['online_loop']['index']]->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['online_users'][0][$this->_sections['online_loop']['index']]->user_displayname; ?>
</a>
              <?php endfor; endif; ?>
              <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('online_users_registered', ob_get_contents());ob_end_clean(); ?>
              <?php echo sprintf(SELanguage::_get(976), $this->_tpl_vars['online_users_registered'], $this->_tpl_vars['online_users'][1]); ?>
            <?php endif; ?>
            </td>
          </tr>
        </table>
              <?php endif; ?>
      
            <div class='header'><?php echo SELanguage::_get(1176); ?></div>
      <div class='network_content'>
        <?php unset($this->_sections['birthday_loop']);
$this->_sections['birthday_loop']['name'] = 'birthday_loop';
$this->_sections['birthday_loop']['loop'] = is_array($_loop=$this->_tpl_vars['birthdays']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['birthday_loop']['max'] = (int)20;
$this->_sections['birthday_loop']['show'] = true;
if ($this->_sections['birthday_loop']['max'] < 0)
    $this->_sections['birthday_loop']['max'] = $this->_sections['birthday_loop']['loop'];
$this->_sections['birthday_loop']['step'] = 1;
$this->_sections['birthday_loop']['start'] = $this->_sections['birthday_loop']['step'] > 0 ? 0 : $this->_sections['birthday_loop']['loop']-1;
if ($this->_sections['birthday_loop']['show']) {
    $this->_sections['birthday_loop']['total'] = min(ceil(($this->_sections['birthday_loop']['step'] > 0 ? $this->_sections['birthday_loop']['loop'] - $this->_sections['birthday_loop']['start'] : $this->_sections['birthday_loop']['start']+1)/abs($this->_sections['birthday_loop']['step'])), $this->_sections['birthday_loop']['max']);
    if ($this->_sections['birthday_loop']['total'] == 0)
        $this->_sections['birthday_loop']['show'] = false;
} else
    $this->_sections['birthday_loop']['total'] = 0;
if ($this->_sections['birthday_loop']['show']):

            for ($this->_sections['birthday_loop']['index'] = $this->_sections['birthday_loop']['start'], $this->_sections['birthday_loop']['iteration'] = 1;
                 $this->_sections['birthday_loop']['iteration'] <= $this->_sections['birthday_loop']['total'];
                 $this->_sections['birthday_loop']['index'] += $this->_sections['birthday_loop']['step'], $this->_sections['birthday_loop']['iteration']++):
$this->_sections['birthday_loop']['rownum'] = $this->_sections['birthday_loop']['iteration'];
$this->_sections['birthday_loop']['index_prev'] = $this->_sections['birthday_loop']['index'] - $this->_sections['birthday_loop']['step'];
$this->_sections['birthday_loop']['index_next'] = $this->_sections['birthday_loop']['index'] + $this->_sections['birthday_loop']['step'];
$this->_sections['birthday_loop']['first']      = ($this->_sections['birthday_loop']['iteration'] == 1);
$this->_sections['birthday_loop']['last']       = ($this->_sections['birthday_loop']['iteration'] == $this->_sections['birthday_loop']['total']);
?>
          <div>
            <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['birthdays'][$this->_sections['birthday_loop']['index']]['birthday_user_username']); ?>
'><?php echo $this->_tpl_vars['birthdays'][$this->_sections['birthday_loop']['index']]['birthday_user_displayname']; ?>
</a>
            - <?php echo $this->_tpl_vars['datetime']->cdate("M. d",$this->_tpl_vars['birthdays'][$this->_sections['birthday_loop']['index']]['birthday_date']); ?>

          </div>
        <?php endfor; else: ?>
          <?php echo SELanguage::_get(1180); ?>
        <?php endif; ?>
      </div>
      <div class='spacer10'></div>
      
            <?php $this->_tag_stack[] = array('hook_foreach', array('name' => 'user_home','var' => 'user_home_args')); $_block_repeat=true;smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['user_home_args']['file'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </td>
  </tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>