<?php /* Smarty version 2.6.14, created on 2010-03-29 20:46:42
         compiled from header.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'hook_foreach', 'header.tpl', 76, false),)), $this);
?><?php
SELanguage::_preload_multi(643,644,926,645,647,1316,1019,649,26,650,30,1198,1199,1161,1162,652,1163,1164,1165,1166,654,784,1167,1168,1169,653,1170,1171,1172,655,1173,1174);
SELanguage::load();
?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_global.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
 if (@SE_DEBUG && $this->_tpl_vars['admin']->admin_exists): 
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header_debug.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
 endif; ?>

<div id="smoothbox_container"></div>



<table cellpadding='0' cellspacing='0' class='body' align='center'>
<tr>
<td>



<div>

    <?php if ($this->_tpl_vars['ads']->ad_top != ""): ?>
    <div class='ad_top' style='display: block; visibility: visible;'><?php echo $this->_tpl_vars['ads']->ad_top; ?>
</div>
  <?php endif; ?>

    <table cellpadding='0' cellspacing='0' style='width: 100%; padding-top: 20px;' align='center'>
  <tr>
  <td align='left' valign='bottom'>
    <a href='./'><img src='./images/logo.gif' border='0' alt='' /></a>
  </td>
  <td align='right' valign='bottom' style='padding-bottom: 10px;'>
    <form action='search.php' method='post'>
    <?php echo SELanguage::_get(643); ?>
    <input type='text' name='search_text' class='text' size='25' />
    <input type='submit' class='button' value='<?php echo SELanguage::_get(644); ?>' />
    <input type='hidden' name='task' value='dosearch' />
    <input type='hidden' name='t' value='0' />
    </form>
    <a href='search_advanced.php'><?php echo SELanguage::_get(926); ?></a>
  </td>
  </tr>
  </table>

</div>






<table cellpadding='0' cellspacing='0' style='width: 100%;' align='center'>
<tr>
<td nowrap='nowrap' class='top_menu'>
  <div class='top_menu_link_container'>
    <div class='top_menu_link'>
      <a href='home.php' class='top_menu_item'>
        <?php echo SELanguage::_get(645); ?>
      </a>
    </div>
  </div>
  
  <div class='top_menu_link_container'>
    <div class='top_menu_link'>
      <a href='invite.php' class='top_menu_item'>
        <?php echo SELanguage::_get(647); ?>
      </a>
    </div>
  </div>

    <?php $this->_tag_stack[] = array('hook_foreach', array('name' => 'menu_main','var' => 'menu_main_args','complete' => 'menu_main_complete','max' => 9)); $_block_repeat=true;smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <div class='top_menu_link_container'>
      <div class='top_menu_link'>
        <a href='<?php echo $this->_tpl_vars['menu_main_args']['file']; ?>
' class='top_menu_item'>
          <?php echo SELanguage::_get($this->_tpl_vars['menu_main_args']['title']); ?>
        </a>
      </div>
    </div>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  
  <?php if (! $this->_tpl_vars['menu_main_complete']): ?>
    <div class='top_menu_link_container top_menu_main_link_container'>
      <div class='top_menu_link top_menu_main_link'>
        <a href="javascript:void(0);" onclick="$('menu_main_dropdown').style.display = ( $('menu_main_dropdown').style.display=='none' ? 'inline' : 'none' ); this.blur(); return false;" class='top_menu_item'>
          <?php echo SELanguage::_get(1316); ?>
        </a>
      </div>
      <div class='menu_main_dropdown' id='menu_main_dropdown' style='display: none;'>
        <div>
                    <?php $this->_tag_stack[] = array('hook_foreach', array('name' => 'menu_main','var' => 'menu_main_args','start' => 9)); $_block_repeat=true;smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <div class='menu_main_item_dropdown'>
            <a href='<?php echo $this->_tpl_vars['menu_main_args']['file']; ?>
' class='menu_main_item' style="text-align: left;">
              <?php echo SELanguage::_get($this->_tpl_vars['menu_main_args']['title']); ?>
            </a>
          </div>
          <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  
  <div class='top_menu_link_container_end'>
    <div class='top_menu_link'>
      &nbsp;
    </div>
  </div>

</td>
<td nowrap='nowrap' align='right' class='top_menu2'>

    <?php if ($this->_tpl_vars['user']->user_exists != 0): ?>
    <div class='top_menu_link_loggedin' style='padding-right: 10px;'>
      
            <div class='newupdates' id='newupdates' style='display: none;'>
        <div class='newupdates_content'>
            <a href='javascript:void(0);' class='newupdates' onClick="SocialEngine.Viewer.userNotifyPopup(); return false;">
            <?php $this->assign('notify_total', $this->_tpl_vars['notifys']['total_grouped']); ?>
            <?php echo sprintf(SELanguage::_get(1019), "<span id='notify_total'>".($this->_tpl_vars['notify_total'])."</span>"); ?>
            </a>
            &nbsp;&nbsp; 
            <a href='javascript:void(0);' class='newupdates' onClick="SocialEngine.Viewer.userNotifyHide(); return false;">X</a>
          </div>
      </div>
      
      <?php echo sprintf(SELanguage::_get(649), "<a href='user_home.php' class='top_menu_item'>".($this->_tpl_vars['user']->user_displayname_short)."</a>"); ?>
      &nbsp;&nbsp;
      <a href='user_logout.php' class='top_menu_item'><?php echo SELanguage::_get(26); ?></a>
    </div>

    <?php else: ?>
    <div class='top_menu_link_container_end' style='float: right;'><div class='top_menu_link'><a href='signup.php' class='top_menu_item'><?php echo SELanguage::_get(650); ?></a></div></div>
    <div class='top_menu_link_container' style='float: right;'><div class='top_menu_link'><a href='login.php' class='top_menu_item'><?php echo SELanguage::_get(30); ?></a></div></div>
  <?php endif; ?>

</td>
</tr>
</table>



<?php if ($this->_tpl_vars['user']->user_exists): 
 
$javascript_lang_import_list = SELanguage::_javascript_redundancy_filter(array(1198,1199));
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
<script type='text/javascript'>
<!--
var notify_update_interval;
window.addEvent('domready', function() {
  SocialEngine.Viewer.userNotifyGenerate(<?php echo $this->_tpl_vars['se_javascript']->generateNotifys($this->_tpl_vars['notifys']); ?>
);
  SocialEngine.Viewer.userNotifyShow();
  notify_update_interval = (function() {
    if( notify_update_interval ) SocialEngine.Viewer.userNotifyUpdate();
  }).periodical(60 * 1000);
});
//-->
</script>
<div style='display: none;' id='newupdates_popup'></div>
<?php endif; ?>
 

<?php echo '
<script type=\'text/javascript\'>
<!--
var open_menu;
var current_timeout = new Array();

function showMenu(id1)
{
  if($(id1))
  {
    if($(id1).style.display == \'none\')
    {
      if($(open_menu)) { hideMenu($(open_menu)); }
      $(id1).style.display=\'inline\';
      startMenuTimeout($(id1));
      $(id1).addEvent(\'mouseover\', function(e) { killMenuTimeout(this); });
      $(id1).addEvent(\'mouseout\', function(e) { startMenuTimeout(this); });
      open_menu = id1;
    }
  }
}

function killMenuTimeout(divEl)
{
  clearTimeout(current_timeout[divEl.id]);
  current_timeout[divEl.id] = \'\';
}

function startMenuTimeout(divEl)
{
  if(current_timeout[divEl.id] == \'\') {
    current_timeout[divEl.id] = setTimeout(function() { hideMenu(divEl); }, 1000);
  }
}

function hideMenu(divEl)
{
  divEl.style.display = \'none\'; 
  current_timeout[divEl.id] = \'\';
  divEl.removeEvent(\'mouseover\', function(e) { killMenuTimeout(this); });
  divEl.removeEvent(\'mouseout\', function(e) { startMenuTimeout(this); });
}

function SwapOut(id1) {
  $(id1).src = Rollarrow1.src;
  return true;
}

function SwapBack(id1) {
  $(id1).src = Rollarrow0.src;
  return true;
}
//-->
</script>
'; 
 if ($this->_tpl_vars['user']->user_exists != 0): ?>
  <table cellpadding='0' cellspacing='0' style='width: 100%;' align='center'>
  <tr>
  <td class='menu_user'>
  
        <div class='menu_item'>
      <div style='float: left;'>
        <a href='user_home.php' class='menu_item'><img src='./images/icons/menu_home.gif' border='0' class='menu_icon' alt='' /><?php echo SELanguage::_get(1161); ?></a>
        <img src='./images/icons/menu_arrow.gif' border='0' style='vertical-align: middle; cursor: pointer;' onMouseOver="showMenu('menu_dropdown_whatsnew');" alt='' />
        <div>
          <div class='menu_dropdown' id='menu_dropdown_whatsnew' style='display: none;'>
            <div>
              <div class='menu_item_dropdown'><a href='network.php' class='menu_item'><img src='./images/icons/mynetwork16.gif' border='0' class='menu_icon2' alt='' /><?php echo SELanguage::_get(1162); ?></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class='menu_sep'><img src='./images/icons/menu_sep.gif' border='0'></div>
    </div>
    
        <div class='menu_item'>
      <div style='float: left; background: none;'>
        <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
' class='menu_item'>
          <img src='./images/icons/profile16.gif' border='0' class='menu_icon' alt='' />
          <?php echo SELanguage::_get(652); ?>
        </a>
        <img src='./images/icons/menu_arrow.gif' border='0' style='vertical-align: middle; cursor: pointer;' onMouseOver="showMenu('menu_dropdown_profile');" alt='' />
        <div>
        <div class='menu_dropdown' id='menu_dropdown_profile' style='display: none;'>
          <div>
            <div class='menu_item_dropdown'><a href='user_editprofile.php' class='menu_item'><img src='./images/icons/profile_edit16.gif' border='0' class='menu_icon2'><?php echo SELanguage::_get(1163); ?></a></div>
              <div class='menu_item_dropdown'><a href='user_editprofile_photo.php' class='menu_item'><img src='./images/icons/profile_editphoto16.gif' border='0' class='menu_icon2' alt='' /><?php echo SELanguage::_get(1164); ?></a></div>
              <?php if ($this->_tpl_vars['user']->level_info['level_profile_style'] != 0 || $this->_tpl_vars['user']->level_info['level_profile_style_sample'] != 0): ?>
              <div class='menu_item_dropdown'><a href='user_editprofile_style.php' class='menu_item'><img src='./images/icons/profile_editstyle16.gif' border='0' class='menu_icon2' alt='' /><?php echo SELanguage::_get(1165); ?></a></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class='menu_sep'><img src='./images/icons/menu_sep.gif' border='0' alt='' /></div>
    </div>

        <?php if ($this->_tpl_vars['global_plugins']['plugin_controls']['show_menu_user']): ?>
      <div class='menu_item'>
        <div style='float: left; background: none;'>
          <a href="javascript:showMenu('menu_dropdown_apps');" onMouseUp="this.blur()" class='menu_item'>
            <img src='./images/icons/menu_apps.gif' border='0' class='menu_icon' alt='' />
            <?php echo SELanguage::_get(1166); ?>
          </a>
          <img src='./images/icons/menu_arrow.gif' border='0' style='vertical-align: middle; cursor: pointer;' onMouseOver="showMenu('menu_dropdown_apps');" alt='' />
          <div>
            <div class='menu_dropdown' id='menu_dropdown_apps' style='display: none;'>
              <div>
                                <?php $this->_tag_stack[] = array('hook_foreach', array('name' => 'menu_user_apps','var' => 'user_apps_args')); $_block_repeat=true;smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <div class='menu_item_dropdown'>
                  <a href='<?php echo $this->_tpl_vars['user_apps_args']['file']; ?>
' class='menu_item'>
                    <img src='./images/icons/<?php echo $this->_tpl_vars['user_apps_args']['icon']; ?>
' border='0' class='menu_icon2' alt='' />
                    <?php echo SELanguage::_get($this->_tpl_vars['user_apps_args']['title']); ?>
                  </a>
                </div>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              </div>
            </div>
          </div>
        </div>
        <div class='menu_sep'><img src='./images/icons/menu_sep.gif' border='0' alt='' /></div>
      </div>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['user']->level_info['level_message_allow'] != 0): ?>
      <div class='menu_item'>
        <div style='float: left; background: none;'>
          <a href='user_messages.php' class='menu_item'><img src='./images/icons/message_inbox16.gif' border='0' class='menu_icon' alt='' /><?php echo SELanguage::_get(654); 
 if ($this->_tpl_vars['user_unread_pms'] != 0): ?> (<?php echo $this->_tpl_vars['user_unread_pms']; ?>
)<?php endif; ?></a>
          <img src='./images/icons/menu_arrow.gif' border='0' style='vertical-align: middle; cursor: pointer;' onMouseOver="showMenu('menu_dropdown_messages');" />
          <div>
            <div class='menu_dropdown' id='menu_dropdown_messages' style='display: none;'>
              <div>
                <div class='menu_item_dropdown'><a href="javascript:TB_show('<?php echo SELanguage::_get(784); ?>', 'user_messages_new.php?TB_iframe=true&height=400&width=450', '', './images/trans.gif');" class='menu_item'><img src='./images/icons/message_new16.gif' border='0' class='menu_icon2' alt='' /><?php echo SELanguage::_get(1167); ?></a></div>
                <div class='menu_item_dropdown'><a href='user_messages.php' class='menu_item'><img src='./images/icons/message_inbox16.gif' border='0' class='menu_icon2' alt='' /><?php echo SELanguage::_get(1168); ?></a></div>
                <div class='menu_item_dropdown'><a href='user_messages_outbox.php' class='menu_item'><img src='./images/icons/message_outbox16.gif' border='0' class='menu_icon2' alt='' /><?php echo SELanguage::_get(1169); ?></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class='menu_sep'><img src='./images/icons/menu_sep.gif' border='0' /></div>
      </div>
    <?php endif; ?>
    
        <?php if ($this->_tpl_vars['setting']['setting_connection_allow'] != 0): ?>
      <div class='menu_item'>
        <div style='float: left; background: none;'>
          <a href='user_friends.php' class='menu_item'><img src='./images/icons/friends16.gif' border='0' class='menu_icon' alt='' /><?php echo SELanguage::_get(653); ?></a>
          <img src='./images/icons/menu_arrow.gif' border='0' style='vertical-align: middle; cursor: pointer;' onMouseOver="showMenu('menu_dropdown_friends');" alt='' />
          <div>
            <div class='menu_dropdown' id='menu_dropdown_friends' style='display: none;'>
              <div>
                <div class='menu_item_dropdown'><a href='user_friends.php' class='menu_item'><img src='./images/icons/friends16.gif' border='0' class='menu_icon2' alt='' /><?php echo SELanguage::_get(1170); ?></a></div>
                <div class='menu_item_dropdown'><a href='user_friends_requests.php' class='menu_item'><img src='./images/icons/friends_incoming16.gif' border='0' class='menu_icon2' alt='' /><?php echo SELanguage::_get(1171); ?></a></div>
                <div class='menu_item_dropdown'><a href='user_friends_requests_outgoing.php' class='menu_item'><img src='./images/icons/friends_outgoing16.gif' border='0' class='menu_icon2' alt='' /><?php echo SELanguage::_get(1172); ?></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class='menu_sep'><img src='./images/icons/menu_sep.gif' border='0' alt='' /></div>
      </div>
    <?php endif; ?>
    
        <div class='menu_item'>
      <div style='float: left; background: none;'>
        <a href='user_account.php' class='menu_item'><img src='./images/icons/settings16.gif' border='0' class='menu_icon' alt='' /><?php echo SELanguage::_get(655); ?></a>
        <img src='./images/icons/menu_arrow.gif' border='0' style='vertical-align: middle; cursor: pointer;' onMouseOver="showMenu('menu_dropdown_settings');" alt='' />
        <div>
          <div class='menu_dropdown' id='menu_dropdown_settings' style='display: none;'>
            <div>
              <div class='menu_item_dropdown'><a href='user_account.php' class='menu_item'><img src='./images/icons/settings16.gif' border='0' class='menu_icon2' alt='' /><?php echo SELanguage::_get(1173); ?></a></div>
              <div class='menu_item_dropdown'><a href='user_account_privacy.php' class='menu_item'><img src='./images/icons/settings_privacy16.gif' border='0' class='menu_icon2' alt='' /><?php echo SELanguage::_get(1174); ?></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div style='clear: both; background: none; height: 0px;'></div>
    
  </td>
  </tr>
  </table>
<?php endif; ?>








<table cellpadding='0' cellspacing='0' align='center' style='width: 100%;'>
<tr>

<?php if ($this->_tpl_vars['ads']->ad_left != ""): ?>
  <td valign='top'><div class='ad_left' style='display: block; visibility: visible;'><?php echo $this->_tpl_vars['ads']->ad_left; ?>
</div></td>
<?php endif; ?>

<td valign='top'>

<div class='content'>

    <?php if ($this->_tpl_vars['ads']->ad_belowmenu != ""): ?><div class='ad_belowmenu' style='display: block; visibility: visible;'><?php echo $this->_tpl_vars['ads']->ad_belowmenu; ?>
</div><?php endif; ?>