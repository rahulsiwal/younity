<?php

/* $Id: cache.php 66 2009-02-21 01:42:43Z nico-izo $ */


defined('SE_PAGE') or die();



// Architecture of the class contained in this file was inspired by
// Joomla's caching framework, which is licensed under the GPL



class SECache
{
  var $_options;
  
  
  var $_handler;
  
  
  
  
  function SECache($options=array())
  {
    global $setting;
    
    $this->_options = $options;
    
    if( !isset($this->_options['enabled']) )
    {
      $this->_options['enabled'] = ( isset($setting['setting_cache_enabled']) ? $setting['setting_cache_enabled'] : FALSE );
    }
    
    if( !isset($this->_options['language']) )
    {
      $this->_options['language'] = 'en';
    }
    
    if( !isset($this->_options['defaultgroup']) )
    {
      $this->_options['defaultgroup'] = 'default';
    }
    
    if( !isset($this->_options['storage']) )
    {
      $this->_options['storage'] = ( isset($setting['setting_cache_default']) ? $setting['setting_cache_default'] : 'file' );
    }
    
    // For now, do a 5% gc chance
    if( rand(1, 100)<=5 )
      $this->gc();
  }
  
  
  
  
	function &_getStorage()
	{
		if( is_a($this->_handler, 'SECacheStorage') )
    {
			return $this->_handler;
		}
    
		$this->_handler =& SECacheStorage::getInstance($this->_options['storage'], $this->_options);
		return $this->_handler;
	}
  
  
  
  
  function &getInstance($type="serial", $options=array())
  {
    $type = strtolower(preg_replace('/[^A-Z0-9_\.-]/i', '', $type));
    $class = 'SECacheHandler'.ucfirst($type);
    
    if( !class_exists($class) )
    {
      $path = dirname(__FILE__).DIRECTORY_SEPARATOR.'handler'.DIRECTORY_SEPARATOR.$type.'.php';
      
      if( file_exists($path) )
      {
        require_once($path);
      }
      else
      {
        die('Unable to load Cache Handler: '.$type);
      }
    }
    
    $instance = new $class($options);
    
		return $instance;
  }
  
  
  
	function getStorageHandlers()
	{
    $path = dirname(__FILE__).DIRECTORY_SEPARATOR.'storage';
    
    if( !($handle = opendir($path)) )
    {
      return FALSE;
    }
    
		$storageHandlers = array();
    while( ($file = readdir($handle)) !== false )
    {
      if( !preg_match('/\.php$/i', $file) ) continue;
      
			$name = substr($file, 0, strrpos($file, '.'));
			$class = 'SECacheStorage'.ucfirst($name);
      
			if( !class_exists($class) )
      {
				require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.$name.'.php');
			}
      
			if( call_user_func_array(array( trim($class), 'test'), NULL) )
      {
				$storageHandlers[] = $name;
			}
		}
    
		return $storageHandlers;
	}
  
  
  
  
	function get($id, $group=NULL)
	{
		// Get the default group
		$group = ( $group ? $group : $this->_options['defaultgroup'] );
    
		// Get the storage handler
		$handler =& $this->_getStorage();
    
		if( $handler && $this->_options['enabled'] )
    {
			return $handler->get($id, $group, ( isset($this->_options['checkTime']) ? $this->_options['checkTime'] : TRUE ));
		}
    
		return false;
	}
  
  
  
  
	function store($data, $id, $group=NULL)
	{
		// Get the default group
		$group = ( $group ? $group : $this->_options['defaultgroup'] );
    
		// Get the storage handler
		$handler =& $this->_getStorage();
    
		if( $handler && $this->_options['enabled'] )
    {
			return $handler->store($id, $group, $data);
		}
    
		return false;
	}
  
  
  
  
	function remove($id, $group=NULL)
	{
		// Get the default group
		$group = ( $group ? $group : $this->_options['defaultgroup'] );
    
		// Get the storage handler
		$handler =& $this->_getStorage();
    
		if( $handler /* && $this->_options['enabled'] */ )
    {
			return $handler->remove($id, $group);
		}
    
		return false;
	}
  
  
  
  
	function clean($group=NULL, $mode='group')
	{
		// Get the default group
		$group = ( $group ? $group : $this->_options['defaultgroup'] );
    
		// Get the storage handler
		$handler =& $this->_getStorage();
    
		if( $handler /* && $this->_options['enabled'] */ )
    {
			return $handler->clean($group, $mode);
		}
    
		return false;
	}
  
  
  
  
	function gc()
	{
		// Get the storage handler
		$handler =& $this->_getStorage();
    
		if( $handler /* && $this->_options['enabled'] */ )
    {
			return $handler->gc();
		}
    
		return false;
	}
}

?>