<?php

/* $Id: storage.php 8 2009-01-11 06:02:53Z nico-izo $ */


defined('SE_PAGE') or die();



class SECacheStorage
{
  var $_hash;
  
  var $_application;
  
  var $_language;
  
  var $_lifetime;
  
  var $_now;
  
  
  
  
  
  function SECacheStorage($options=array())
  {
		$this->_hash	= 'bedb8bc490a43d1318fa8d0f486ed135'; // TODO
    
		$this->_application	= ( isset($options['application']) ? $options['application']  : NULL    );
		$this->_language	  = ( isset($options['language'])    ? $options['language']     : 'en'    );
		$this->_lifetime	  = ( isset($options['lifetime'])    ? $options['lifetime']     : 60      );
		$this->_now		      = ( isset($options['now'])         ? $options['now']          : time()  );
  }
  
  
  
  
	function &getInstance($handler='file', $options=array())
	{
		static $now;
    
		if( is_null($now) ) $now = time();
		$options['now'] = $now;
    
    // Get handler and class names
		$handler = strtolower(preg_replace('/[^A-Z0-9_\.-]/i', '', $handler));
		$class   = 'SECacheStorage'.ucfirst($handler);
    
    // Create new storage handler
		if( !class_exists($class) )
		{
			$path = dirname(__FILE__).DIRECTORY_SEPARATOR.'storage'.DIRECTORY_SEPARATOR.$handler.'.php';
			if( file_exists($path) )
      {
				require_once($path);
			}
      else
      {
				die('Unable to load cache storage: '.$handler);
			}
		}
    
		$return = new $class($options);
		return $return;
	}
  
  
  
  
	function get($id, $group, $checkTime)
	{
		return;
	}
  
  
  
  
	function store($id, $group, $data)
	{
		return;
	}
  
  
  
  
	function remove($id, $group)
	{
		return;
	}
  
  
  
  
	function clean($group, $mode)
	{
		return;
	}
  
  
  
  
	function gc()
	{
		return true;
	}
  
  
  
  
	function test()
	{
		return false;
	}
}

?>