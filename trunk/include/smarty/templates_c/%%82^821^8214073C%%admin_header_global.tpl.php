<?php /* Smarty version 2.6.14, created on 2010-03-27 23:15:37
         compiled from admin_header_global.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'hook_foreach', 'admin_header_global.tpl', 89, false),)), $this);
?><?php
SELanguage::_preload_multi(1);
SELanguage::load();
?><!DOCTYPE html 
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title><?php echo SELanguage::_get(1); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="../templates/styles_global.css" title="stylesheet" type="text/css" />
<link rel="stylesheet" href="../templates/admin_styles.css" title="stylesheet" type="text/css" />

<script type="text/javascript" src="../include/js/mootools12-min.js"></script>

<script type="text/javascript" src="../include/js/core-min.js"></script>

<script type="text/javascript">
<!--
  var SocialEngine = new SocialEngineAPI.Base();
  
  // Core
  SocialEngine.Core = new SocialEngineAPI.Core();
  SocialEngine.Core.ImportSettings(<?php echo $this->_tpl_vars['se_javascript']->generateSettings($this->_tpl_vars['setting']); ?>
);
  SocialEngine.Core.ImportPlugins(<?php echo $this->_tpl_vars['se_javascript']->generatePlugins($this->_tpl_vars['global_plugins']); ?>
);
  SocialEngine.RegisterModule(SocialEngine.Core);
  
  // URL
  SocialEngine.URL = new SocialEngineAPI.URL();
  SocialEngine.URL.ImportURLBase(<?php echo $this->_tpl_vars['se_javascript']->generateURLBase($this->_tpl_vars['url']); ?>
);
  SocialEngine.URL.ImportURLInfo(<?php echo $this->_tpl_vars['se_javascript']->generateURLInfo($this->_tpl_vars['url']); ?>
);
  SocialEngine.RegisterModule(SocialEngine.URL);
  
  // Language
  SocialEngine.Language = new SocialEngineAPI.Language();
  SocialEngine.RegisterModule(SocialEngine.Language);
  
  // Back
  SELanguage = SocialEngine.Language;
//-->
</script>

<?php echo '
<script language=\'JavaScript\'>
<!--
// ADD TIP FUNCTION
window.addEvent(\'load\', function()
{
    var Tips1 = new Tips($$(\'.Tips1\'));
});


// ADD ABILITY TO MINIMIZE/MAXIMIZE MENU TABLES
var menu_minimized = new Hash.Cookie(\'menu_cookie\', {duration: 3600});


// ADD ADMIN MENU BACKGROUND ROLL OVER
Rollimage1 = new Array()
Rollimage1[\'1\'] = new Image(216,23);
Rollimage1[\'1\'].src = "../images/admin_menu_bg1.gif";
Rollimage1[\'2\'] = new Image(216,23);
Rollimage1[\'2\'].src = "../images/admin_menu_bg2.gif";
//-->
</script>
'; 
 if( isset($this->_tpl_hooks['admin_header']) )
{
  foreach( $this->_tpl_hooks['admin_header'] as $_tpl_hook_include )
  {
    $this->_smarty_include(array('smarty_include_tpl_file' => $_tpl_hook_include, 'smarty_include_vars' => array()));
  }
} 
 $this->_tag_stack[] = array('hook_foreach', array('name' => 'admin_styles','var' => 'hook_stylesheet')); $_block_repeat=true;smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['hook_stylesheet']; ?>
" title="stylesheet" type="text/css" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); 
 $this->_tag_stack[] = array('hook_foreach', array('name' => 'admin_scripts','var' => 'hook_script')); $_block_repeat=true;smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['hook_script']; ?>
"></script>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>


</head>
<body>

<iframe id='ajaxframe' name='ajaxframe' style='display: none;' src='javascript:false;'></iframe>

