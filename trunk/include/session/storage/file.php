<?php

/* $Id: file.php 8 2009-01-11 06:02:53Z nico-izo $ */


defined('SE_PAGE') or exit();


class SESessionStorageFile extends SESessionStorage
{
  var $_save_path;
  
  
  var $_session_name;
  
  
  
  
	function SESessionStorageFile( $options=array() )
	{
    if( isset($options['root']) )
    {
      $this->_save_path = realpath($options['root']);
    }
    
		if( !$this->test() )
    {
      die("Unable to initialize file-based session storage");
    }
    
		parent::SESessionStorage($options);
	}
  
  
  
  
	function open($save_path, $session_name)
	{
    if( empty($this->_save_path) ) $this->_save_path = $save_path;
    $this->_session_name = $session_name;
		return TRUE;
	}
  
  
  
  
	function close()
	{
		return TRUE;
	}
  
  
  
  
	function read($id)
	{
    $sess_file = $this->_getFilePath($id);
    return (string) @file_get_contents($sess_file);
	}
  
  
  
  
	function write($id, $session_data)
	{
    $sess_file = $this->_getFilePath($id);
		return (bool) @file_put_contents($sess_file, $session_data);
	}
  
  
  
  
	function destroy($id)
	{
    $sess_file = $this->_getFilePath($id);
    
		return @unlink($sess_file);
	}
  
  
  
  
	function gc($maxlifetime)
	{
    $sess_files = glob($this->_save_path . DIRECTORY_SEPARATOR . 'sess_*');
    foreach( $sess_files as $filename)
    {
      if( filemtime($filename) + $maxlifetime < time() )
      {
        @unlink($filename);
      }
    }
    
    return TRUE;
	}
  
  
  
  
	function test()
	{
    global $filesession_test_root;
    if( empty($filesession_test_root) ) return TRUE;
		return is_writable($filesession_test_root);
	}
  
  
  
  
	function _getFilePath($id)
	{
		$sess_id = 'sess_'.$id;
    return $this->_save_path . DIRECTORY_SEPARATOR . $sess_id . '.php';
    //return $this->_save_path . DIRECTORY_SEPARATOR . $sess_id . '_' . $this->_session_name . '.php';
  }
}
