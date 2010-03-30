<?php

/* $Id: admin_cache.php 8 2009-01-11 06:02:53Z nico-izo $ */

$page = "admin_cache";
include "admin_header.php";

$task = ( isset($_POST['task']) ? $_POST['task'] : ( isset($_GET['task']) ? $_GET['task'] : NULL ) );

if( $task=="dosave" )
{
  $setting_cache_enabled  = (bool) $_POST['setting_cache_enabled'];
  $setting_cache_default  = ( isset($_POST['setting_cache_default']) ? $_POST['setting_cache_default'] : 'file' );
  $setting_cache_lifetime  = ( isset($_POST['setting_cache_lifetime']) ? $_POST['setting_cache_lifetime'] : 120 );
  
  $setting_cache_file_options  = ( is_array($_POST['setting_cache_file_options']) ? $_POST['setting_cache_file_options'] : array() );
  $setting_cache_memcache_options  = ( is_array($_POST['setting_cache_memcache_options']) ? $_POST['setting_cache_memcache_options'] : array() );
  
  
  // Process global options
  if( !$setting_cache_lifetime || !is_numeric($setting_cache_lifetime) || $setting_cache_lifetime<=0 )
    $setting_cache_lifetime = 120;
  
  
  // Process file options
  $setting_cache_file_options['locking'] = !empty($setting_cache_file_options['locking']);
  
  
  // Process memcache options
  $setting_cache_memcache_options['compression'] = !empty($setting_cache_memcache_options['compression']);
  
  if( is_array($setting_cache_memcache_options) && is_array($setting_cache_memcache_options['server_hosts']) )
  {
    $setting_cache_memcache_options['servers'] = array();
    for( $i=0, $l=count($setting_cache_memcache_options['server_hosts']); $i<$l; $i++ )
    {
      $setting_cache_memcache_options['servers'][] = array(
        'host' => $setting_cache_memcache_options['server_hosts'][$i],
        'port' => $setting_cache_memcache_options['server_ports'][$i]
      );
    }
    
    unset($setting_cache_memcache_options['server_hosts']);
    unset($setting_cache_memcache_options['server_ports']);
  }
  
  
  // TEST OPTIONS
  $filecache_test_root = $setting_cache_file_options['root'] = preg_replace('/^[.]/', SE_ROOT, $setting_cache_file_options['root']);
  $memcache_test_servers = $setting_cache_memcache_options['servers'];
  $available_storage = SECache::getStorageHandlers();
  if( !is_array($available_storage) ) $available_storage = array();
  
  
  // SET ENABLED
  $setting_cache_file_options['enabled']     = ( in_array('file',     $available_storage  ) );
  $setting_cache_memcache_options['enabled'] = ( in_array('memcache', $available_storage  ) );
  
  //$setting_cache_file_options['enabled']     = ( !empty($setting_cache_file_options['enabled'])     && in_array('file',     $available_storage  ) );
  //$setting_cache_memcache_options['enabled'] = ( !empty($setting_cache_memcache_options['enabled']) && in_array('memcache', $available_storage  ) );
  
  
  // Serialize
  $setting_cache_file_options  = serialize($setting_cache_file_options);
  $setting_cache_memcache_options  = serialize($setting_cache_memcache_options);
  
  
  // Assign
  $setting['setting_cache_enabled'] = $setting_cache_enabled;
  $setting['setting_cache_default'] = $setting_cache_default;
  $setting['setting_cache_lifetime'] = $setting_cache_lifetime;
  $setting['setting_cache_file_options'] = $setting_cache_file_options;
  $setting['setting_cache_memcache_options'] = $setting_cache_memcache_options;
  $smarty->assign_by_ref('setting', $setting);
  
  $setting_cache_file_options  = addslashes($setting_cache_file_options);
  $setting_cache_memcache_options  = addslashes($setting_cache_memcache_options);
  
  $sql = "
    UPDATE
      se_settings
    SET
      setting_cache_enabled='{$setting_cache_enabled}',
      setting_cache_default='{$setting_cache_default}',
      setting_cache_lifetime='{$setting_cache_lifetime}',
      setting_cache_file_options='{$setting_cache_file_options}',
      setting_cache_memcache_options='{$setting_cache_memcache_options}'
  ";
  
  $database->database_query($sql) or die($database->database_error());
}


// Unserialize options for template/config generation
if( $setting['setting_cache_file_options'] && is_string($setting['setting_cache_file_options']) )
  $cache_file_options = @unserialize($setting['setting_cache_file_options']);
  
if( $setting['setting_cache_memcache_options'] && is_string($setting['setting_cache_memcache_options']) )
  $cache_memcache_options = @unserialize($setting['setting_cache_memcache_options']);


// GET AVAILABLE STORAGE OPTIONS IF NOT SAVING
if( $task!="dosave" )
{
  //var_dump($cache_file_options);
  $filecache_test_root = preg_replace('/^[.]/', SE_ROOT, $cache_file_options['root']);
  $memcache_test_servers = $cache_memcache_options['servers'];
  $available_storage = SECache::getStorageHandlers();
  if( !is_array($available_storage) ) $available_storage = array();
}



/*
// Check if enabled and display error message
if( (!$setting['setting_cache_enabled'] || !in_array("file", $available_storage)) && $cache_options['storage']=="file" )
{
  $is_error = "Make sure the cache directory specified exists and is chmod 777";
}
elseif( (!$setting['setting_cache_enabled'] || !in_array("file", $available_storage)) && $cache_options['storage']=="memcache" )
{
  $is_error = "Make sure the memcache extension is installed and a memcache server is running.";
}
*/

// ASSIGN VARIABLES AND SHOW PAGE
$smarty->assign('result', $result);
$smarty->assign('is_error', $is_error);
$smarty->assign('task', $task);
$smarty->assign('available_storage', $available_storage);
$smarty->assign('cache_file_options', $cache_file_options);
$smarty->assign('cache_memcache_options', $cache_memcache_options);
include "admin_footer.php";
?>