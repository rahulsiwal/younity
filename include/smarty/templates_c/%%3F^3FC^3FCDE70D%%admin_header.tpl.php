<?php /* Smarty version 2.6.14, created on 2010-03-27 23:15:50
         compiled from admin_header.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'admin_header.tpl', 106, false),)), $this);
?><?php
SELanguage::_preload_multi(2,3,4,5,6,7,8,9,10,11,12,13,14,16,17,18,20,1243,1244,1211,48,15,49,19,21,935,22,23,24,25,26);
SELanguage::load();
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header_global.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div class='topbar'>
  <table cellpadding='0' cellspacing='0' width='100%'>
  <tr>
  <td valign='top'><img src='../images/admin_icon.gif' border='0'></td>
  <td valign='top' align='right'><img src='../images/admin_watermark.gif' border='0'></td>
  </tr>
  </table>
</div>

<table cellpadding='0' cellspacing='0'>
<tr>
<td class='leftside'>

  <div class='menu_section'>
  <div id='min1'><div class='menu_header' style='float:left;'><?php echo SELanguage::_get(2); ?></div><div class='menu_header' style='text-align: right;' id='min1_icon'>[ - ]</div></div>
  <div><img src='../images/admin_menu_bar.gif' border='0'></div>
  <div id='slideup1'>
  <div class='menu'><a href='admin_home.php' class='menu'><img src='../images/icons/admin_summary16.gif' border='0' class='icon2'><?php echo SELanguage::_get(3); ?></a></div>
  <div class='menu'><a href='admin_viewusers.php' class='menu'><img src='../images/icons/admin_users16.gif' border='0' class='icon2'><?php echo SELanguage::_get(4); ?></a></div>
  <div class='menu'><a href='admin_viewadmins.php' class='menu'><img src='../images/icons/admin_admins16.gif' border='0' class='icon2'><?php echo SELanguage::_get(5); ?></a></div>
  <div class='menu'><a href='admin_viewreports.php' class='menu'><img src='../images/icons/admin_reports16.gif' border='0' class='icon2'><?php echo SELanguage::_get(6); 
 if ($this->_tpl_vars['total_reports'] != 0): ?> (<?php echo $this->_tpl_vars['total_reports']; ?>
)<?php endif; ?></a></div>
  <div class='menu'><a href='admin_viewplugins.php' class='menu'><img src='../images/icons/admin_plugins16.gif' border='0' class='icon2'><?php echo SELanguage::_get(7); ?></a></div>
  <div class='menu'><a href='admin_levels.php' class='menu'><img src='../images/icons/admin_levels16.gif' border='0' class='icon2'><?php echo SELanguage::_get(8); ?></a></div>
  <div class='menu'><a href='admin_subnetworks.php' class='menu'><img src='../images/icons/admin_subnetworks16.gif' border='0' class='icon2'><?php echo SELanguage::_get(9); ?></a></div>
  <div class='menu'><a href='admin_ads.php' class='menu'><img src='../images/icons/admin_ads16.gif' border='0' class='icon2'><?php echo SELanguage::_get(10); ?></a></div>
  </div>
  </div>

  <?php echo '
  <script type="text/javascript">
  <!-- 
  window.addEvent(\'domready\', function() { 
    var Slideup1 = new Fx.Slide(\'slideup1\');
    if(menu_minimized.get(1) == 0) { $(\'min1_icon\').innerHTML = \'[ + ]\'; Slideup1.hide(); }
    $(\'min1\').addEvent(\'click\', function(e){
	e = new Event(e);
	if(menu_minimized.get(1) == 0) { 
	  menu_minimized.set(1, 1);
	  Slideup1.slideIn(); 
	  $(\'min1_icon\').innerHTML = \'[ - ]\';
	} else { 
	  menu_minimized.set(1, 0);
	  Slideup1.slideOut(); 
	  $(\'min1_icon\').innerHTML = \'[ + ]\';
	}
	e.stop();
	this.blur();
    });
  });
  //-->
  </script>
  '; ?>


  <div class='menu_section'>
  <div id='min2'><div class='menu_header' style='float:left;'><?php echo SELanguage::_get(11); ?></div><div class='menu_header' style='text-align: right;' id='min2_icon'>[ - ]</div></div>
  <div><img src='../images/admin_menu_bar.gif' border='0'></div>
  <div id='slideup2'>
  <div class='menu'><a href='admin_general.php' class='menu'><img src='../images/icons/admin_setting16.gif' border='0' class='icon2'><?php echo SELanguage::_get(12); ?></a></div>
  <div class='menu'><a href='admin_signup.php' class='menu'><img src='../images/icons/admin_signup16.gif' border='0' class='icon2'><?php echo SELanguage::_get(13); ?></a></div>
  <div class='menu'><a href='admin_activity.php' class='menu'><img src='../images/icons/admin_activity16.gif' border='0' class='icon2'><?php echo SELanguage::_get(14); ?></a></div>
  <div class='menu'><a href='admin_profile.php' class='menu'><img src='../images/icons/admin_profile16.gif' border='0' class='icon2'><?php echo SELanguage::_get(16); ?></a></div>
  <div class='menu'><a href='admin_banning.php' class='menu'><img src='../images/icons/admin_banning16.gif' border='0' class='icon2'><?php echo SELanguage::_get(17); ?></a></div>
  <div class='menu'><a href='admin_connections.php' class='menu'><img src='../images/icons/admin_connections16.gif' border='0' class='icon2'><?php echo SELanguage::_get(18); ?></a></div>
  <div class='menu'><a href='admin_emails.php' class='menu'><img src='../images/icons/admin_emails16.gif' border='0' class='icon2'><?php echo SELanguage::_get(20); ?></a></div>
  <div class='menu'><a href='admin_cache.php' class='menu'><img src='../images/icons/admin_cache16.gif' border='0' class='icon2'><?php echo SELanguage::_get(1243); ?></a></div>
  <div class='menu'><a href='admin_session.php' class='menu'><img src='../images/icons/admin_session16.gif' border='0' class='icon2'><?php echo SELanguage::_get(1244); ?></a></div>
  </div>
  </div>

  <?php echo '
  <script type="text/javascript">
  <!-- 
  window.addEvent(\'domready\', function()
  { 
    var Slideup2 = new Fx.Slide(\'slideup2\');
    if(menu_minimized.get(2) == 0) { $(\'min2_icon\').innerHTML = \'[ + ]\'; Slideup2.hide(); }
    $(\'min2\').addEvent(\'click\', function(e)
    {
      e = new Event(e);
      if(menu_minimized.get(2) == 0)
      { 
        menu_minimized.set(2, 1);
        Slideup2.slideIn(); 
        $(\'min2_icon\').innerHTML = \'[ - ]\';
      }
      else
      { 
        menu_minimized.set(2, 0);
        Slideup2.slideOut(); 
        $(\'min2_icon\').innerHTML = \'[ + ]\';
      }
      e.stop();
      this.blur();
    });
  });
  //-->
  </script>
  '; ?>



    <?php if (count($this->_tpl_vars['global_plugins']) > 0): ?>
    <div class='menu_section'>
    <div id='min5'><div class='menu_header' style='float:left;'><?php echo SELanguage::_get(1211); ?></div><div class='menu_header' style='text-align: right;' id='min5_icon'>[ - ]</div></div>
    <div><img src='../images/admin_menu_bar.gif' border='0'></div>
    <div id='slideup5'>
    <?php $_from = $this->_tpl_vars['global_plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plugin_k'] => $this->_tpl_vars['plugin_v']):
?>
      <?php if (count($this->_tpl_vars['plugin_v']['plugin_pages_main']) > 0): ?>
        <?php unset($this->_sections['page_loop']);
$this->_sections['page_loop']['name'] = 'page_loop';
$this->_sections['page_loop']['loop'] = is_array($_loop=$this->_tpl_vars['plugin_v']['plugin_pages_main']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
          <div class='menu'><a href='<?php echo $this->_tpl_vars['plugin_v']['plugin_pages_main'][$this->_sections['page_loop']['index']]['file']; ?>
' class='menu'><img src='../images/icons/<?php echo $this->_tpl_vars['plugin_v']['plugin_pages_main'][$this->_sections['page_loop']['index']]['icon']; ?>
' border='0' class='icon2'><?php echo SELanguage::_get($this->_tpl_vars['plugin_v']['plugin_pages_main'][$this->_sections['page_loop']['index']]['title']); ?></a></div>
        <?php endfor; endif; ?>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    </div>
    </div>
    <?php echo '
    <script type="text/javascript">
    <!-- 
    window.addEvent(\'domready\', function()
    { 
      var Slideup5 = new Fx.Slide(\'slideup5\');
      if(menu_minimized.get(5) == 0) { $(\'min5_icon\').innerHTML = \'[ + ]\'; Slideup5.hide(); }
      $(\'min5\').addEvent(\'click\', function(e)
      {
        e = new Event(e);
        if(menu_minimized.get(5) == 0)
        { 
          menu_minimized.set(5, 1);
          Slideup5.slideIn(); 
          $(\'min5_icon\').innerHTML = \'[ - ]\';
        }
        else
        { 
          menu_minimized.set(5, 0);
          Slideup5.slideOut(); 
          $(\'min5_icon\').innerHTML = \'[ + ]\';
        }
        e.stop();
        this.blur();
      });
    });
    //-->
    </script>
    '; ?>

  <?php endif; ?>


  <div class='menu_section'>
  <div id='min3'><div class='menu_header' style='float:left;'><?php echo SELanguage::_get(48); ?></div><div class='menu_header' style='text-align: right;' id='min3_icon'>[ - ]</div></div>
  <div><img src='../images/admin_menu_bar.gif' border='0'></div>
  <div id='slideup3'>
  <div class='menu'><a href='admin_templates.php' class='menu'><img src='../images/icons/admin_templates16.gif' border='0' class='icon2'><?php echo SELanguage::_get(15); ?></a></div>
  <div class='menu'><a href='admin_language.php' class='menu'><img src='../images/icons/admin_language16.gif' border='0' class='icon2'><?php echo SELanguage::_get(49); ?></a></div>
  <div class='menu'><a href='admin_url.php' class='menu'><img src='../images/icons/admin_url16.gif' border='0' class='icon2'><?php echo SELanguage::_get(19); ?></a></div>
  </div>
  </div>

  <?php echo '
  <script type="text/javascript">
  <!-- 
  window.addEvent(\'domready\', function()
  { 
    var Slideup3 = new Fx.Slide(\'slideup3\');
    if(menu_minimized.get(3) == 0) { $(\'min3_icon\').innerHTML = \'[ + ]\'; Slideup3.hide(); }
    $(\'min3\').addEvent(\'click\', function(e)
    {
      e = new Event(e);
      if(menu_minimized.get(3) == 0)
      { 
        menu_minimized.set(3, 1);
        Slideup3.slideIn(); 
        $(\'min3_icon\').innerHTML = \'[ - ]\';
      }
      else
      { 
        menu_minimized.set(3, 0);
        Slideup3.slideOut(); 
        $(\'min3_icon\').innerHTML = \'[ + ]\';
      }
      e.stop();
      this.blur();
    });
  });
  //-->
  </script>
  '; ?>


  <div class='menu_section'>
  <div id='min4'><div class='menu_header' style='float:left;'><?php echo SELanguage::_get(21); ?></div><div class='menu_header' style='text-align: right;' id='min4_icon'>[ - ]</div></div>
  <div><img src='../images/admin_menu_bar.gif' border='0'></div>
  <div id='slideup4'>
  <div class='menu'><a href='admin_faq.php' class='menu'><img src='../images/icons/admin_faq16.gif' border='0' class='icon2'><?php echo SELanguage::_get(935); ?></a></div>
  <div class='menu'><a href='admin_invite.php' class='menu'><img src='../images/icons/admin_invite16.gif' border='0' class='icon2'><?php echo SELanguage::_get(22); ?></a></div>
  <div class='menu'><a href='admin_announcements.php' class='menu'><img src='../images/icons/admin_announcements16.gif' border='0' class='icon2'><?php echo SELanguage::_get(23); ?></a></div>
  <div class='menu'><a href='admin_stats.php' class='menu'><img src='../images/icons/admin_stats16.gif' border='0' class='icon2'><?php echo SELanguage::_get(24); ?></a></div>
  <div class='menu'><a href='admin_log.php' class='menu'><img src='../images/icons/admin_log16.gif' border='0' class='icon2'><?php echo SELanguage::_get(25); ?></a></div>
  <div class='menu'><a href='admin_logout.php' class='menu'><img src='../images/icons/admin_logout16.gif' border='0' class='icon2'><?php echo SELanguage::_get(26); ?></a></div>
  </div>
  </div>

  <?php echo '
  <script type="text/javascript">
  <!-- 
  window.addEvent(\'domready\', function()
  { 
    var Slideup4 = new Fx.Slide(\'slideup4\');
    if(menu_minimized.get(4) == 0) { $(\'min4_icon\').innerHTML = \'[ + ]\'; Slideup4.hide(); }
    $(\'min4\').addEvent(\'click\', function(e)
    {
      e = new Event(e);
      if(menu_minimized.get(4) == 0)
      { 
        menu_minimized.set(4, 1);
        Slideup4.slideIn(); 
        $(\'min4_icon\').innerHTML = \'[ - ]\';
      }
      else
      { 
        menu_minimized.set(4, 0);
        Slideup4.slideOut(); 
        $(\'min4_icon\').innerHTML = \'[ + ]\';
      }
      e.stop();
      this.blur();
    });
  });
  //-->
  </script>
  '; ?>


</td>
<td class='rightside'>

  


