<?php /* Smarty version 2.6.14, created on 2010-03-29 20:46:42
         compiled from header_global.tpl */
?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'hook_foreach', 'header_global.tpl', 91, false),)), $this);
?><?php
SELanguage::_preload_multi(642,1156);
SELanguage::load();
?><!DOCTYPE html 
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title><?php echo SELanguage::_get(642); 
 if ($this->_tpl_vars['global_page_title'] != ""): ?> - <?php echo sprintf(SELanguage::_get($this->_tpl_vars['global_page_title'][0]), $this->_tpl_vars['global_page_title'][1], $this->_tpl_vars['global_page_title'][2]); 
 endif; ?></title>
<base href='<?php echo $this->_tpl_vars['url']->url_base; ?>
' />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<meta http-equiv="X-UA-Compatible" content="IE=7" /> 
<meta name='Description' content="<?php if ($this->_tpl_vars['global_page_description'] != ""): 
 echo sprintf(SELanguage::_get($this->_tpl_vars['global_page_description'][0]), $this->_tpl_vars['global_page_description'][1], $this->_tpl_vars['global_page_description'][2]); 
 else: 
 echo SELanguage::_get(1156); 
 endif; ?>" />

<link rel="stylesheet" href="./templates/styles_global.css" title="stylesheet" type="text/css" />  
<link rel="stylesheet" href="./templates/styles.css" title="stylesheet" type="text/css" />  

<script type="text/javascript" src="./include/js/mootools12-min.js"></script>

<script type="text/javascript" src="./include/js/core-min.js"></script>

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
  
  // User - Viewer
  SocialEngine.Viewer = new SocialEngineAPI.User();
  SocialEngine.Viewer.ImportUserInfo(<?php echo $this->_tpl_vars['se_javascript']->generateUserInfo($this->_tpl_vars['user']); ?>
);
  SocialEngine.RegisterModule(SocialEngine.Viewer);
  
  // User - Owner
  SocialEngine.Owner = new SocialEngineAPI.User();
  SocialEngine.Owner.ImportUserInfo(<?php echo $this->_tpl_vars['se_javascript']->generateUserInfo($this->_tpl_vars['owner']); ?>
);
  SocialEngine.RegisterModule(SocialEngine.Owner);
  
  // Back
  SELanguage = SocialEngine.Language;
//-->
</script>


<?php echo '
<script type="text/javascript">
<!--
  // ADD TIP FUNCTION
  window.addEvent(\'load\', function()
  {
    var Tips1 = new Tips($$(\'.Tips1\'));
  });
//-->
</script>
'; 
 if( isset($this->_tpl_hooks['header']) )
{
  foreach( $this->_tpl_hooks['header'] as $_tpl_hook_include )
  {
    $this->_smarty_include(array('smarty_include_tpl_file' => $_tpl_hook_include, 'smarty_include_vars' => array()));
  }
} 
 $this->_tag_stack[] = array('hook_foreach', array('name' => 'styles','var' => 'hook_stylesheet')); $_block_repeat=true;smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['hook_stylesheet']; ?>
" title="stylesheet" type="text/css" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); 
 $this->_tag_stack[] = array('hook_foreach', array('name' => 'scripts','var' => 'hook_script')); $_block_repeat=true;smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['hook_script']; ?>
"></script>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_hook_foreach($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>


<style type='text/css'><?php echo $this->_tpl_vars['global_css']; ?>
</style>

</head>
<body>

<iframe id='ajaxframe' name='ajaxframe' style='display: none;' src='javascript:false;'></iframe>