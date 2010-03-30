<?php

/* $Id: storage.php 8 2009-01-11 06:02:53Z nico-izo $ */


defined('SE_PAGE') or exit();


class SESessionStorage
{
	function SESessionStorage( $options = array() )
	{
    $this->register($options);
	}
  
  
  
  
	function &getInstance($type = 'none', $options = array())
	{
		static $instance;
    
		if( is_null($instance) )
    {
      $type = strtolower(preg_replace('/[^A-Z0-9_\.-]/i', '', $type));
      $class = 'SESessionStorage'.ucfirst($type);
      
      if( !class_exists($class) )
      {
        $path = dirname(__FILE__).DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.$type.'.php';
        if( file_exists($path) )
        {
          require_once($path);
        }
        else
        {
          die('Unable to load session storage class: '.$type);
        }
      }
      
      $instance = new $class($options);
		}
    
		return $instance;
	}
  
  
  
  
	function register($options=array())
	{
		// use this object as the session handler
		session_set_save_handler(
			array(&$this, 'open'),
			array(&$this, 'close'),
			array(&$this, 'read'),
			array(&$this, 'write'),
			array(&$this, 'destroy'),
			array(&$this, 'gc')
		);
	}
  
  
  
  
	function open($save_path, $session_name)
	{
		return true;
	}
  
  
  
  
	function close()
	{
		return true;
	}
  
  
  
  
	function read($id)
	{
		return;
	}
  
  
  
  
	function write($id, $session_data)
	{
		return true;
	}
  
  
  
  
	function destroy($id)
	{
		return true;
	}
  
  
  
  
	function gc($maxlifetime)
	{
		return true;
	}
  
  
  
  
	function test()
	{
		return true;
	}
}
