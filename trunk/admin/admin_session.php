<?php

/* $Id: admin_session.php 8 2009-01-11 06:02:53Z nico-izo $ */

$page = "admin_session";
include "admin_header.php";

$task = ( isset($_POST['task']) ? $_POST['task'] : ( isset($_GET['task']) ? $_GET['task'] : NULL ) );


if( $task=="dosave" )
{
  $setting_session_options  = (array)   $_POST['setting_session_options'];
  
  if( empty($setting_session_options['expire']) )
    $setting_session_options['expire'] = 0;
    
  if( empty($setting_session_options['name']) || !preg_match('/^[a-zA-Z0-9]$/', $setting_session_options['name']) )
    $setting_session_options['name'] = 'PHPSESSID';
  
  // Process servers
  if( is_array($setting_session_options) && is_array($setting_session_options['server_hosts']) )
  {
    $setting_session_options['servers'] = array();
    for( $i=0, $l=count($setting_session_options['server_hosts']); $i<$l; $i++ )
    {
      $setting_session_options['servers'][] = array(
        'host' => $setting_session_options['server_hosts'][$i],
        'port' => $setting_session_options['server_ports'][$i]
      );
    }
    
    unset($setting_session_options['server_hosts']);
    unset($setting_session_options['server_ports']);
  }
  
  // Test options
  $filesession_test_root = preg_replace('/^[.]/', SE_ROOT, $setting_session_options['root']);
  $memcache_test_servers = $setting_session_options['servers'];
  $available_storage = SESession::getStorageHandlers();
  if( !is_array($available_storage) ) $available_storage = array();
  
  if( !in_array($setting_session_options['storage'], $available_storage) )
    $setting_session_options['storage'] = 'none';
  
  // Serialize
  $setting_session_options = serialize($setting_session_options);
  
  // Assign
  $setting['setting_session_options'] = $setting_session_options;
  $smarty->assign_by_ref('setting', $setting);
  
  $sql = "UPDATE se_settings SET setting_session_options='{$setting_session_options}'";
  $database->database_query($sql) or die($database->database_error());
}


// Unserialize options for template/config generation
if( $setting['setting_session_options'] && is_string($setting['setting_session_options']) )
  $session_options = @unserialize($setting['setting_session_options']);


if( $task!="dosave" )
{
  $filesession_test_root = preg_replace('/^[.]/', SE_ROOT, $session_options['root']);
  $memcache_test_servers = $session_options['servers'];
  $available_storage = SESession::getStorageHandlers();
  if( !is_array($available_storage) ) $available_storage = array();
}

// ASSIGN VARIABLES AND SHOW PAGE
$smarty->assign('result', $result);
$smarty->assign('is_error', $is_error);
$smarty->assign('task', $task);
$smarty->assign('available_storage', $available_storage);
$smarty->assign('session_options', $session_options);
include "admin_footer.php";
?>