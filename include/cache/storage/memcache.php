<?php

/* $Id: memcache.php 8 2009-01-11 06:02:53Z nico-izo $ */


defined('SE_PAGE') or die();



class SECacheStorageMemcache extends SECacheStorage
{
  var $_db;
  
  var $_compress;
  
  var $_persistent;
  
  
  
  function SECacheStorageMemcache($options=array())
  {
		if( !$this->test() )
    {
      die("The memcache extension isn't available");
    }
    
    parent::__construct($options);
    
		$params =& SECacheStorageMemcache::getConfig();
    
		$this->_compress = ( isset($params['compression']) ? $params['compression'] : FALSE );
    
		$this->_db =& SECacheStorageMemcache::getConnection();
  }
  
  
  
  
  function &getConnection($custom=FALSE)
  {
		static $db = null;
    
    if( is_null($db) || $custom )
    {
			$params =& SECacheStorageMemcache::getConfig();
      
			$persistent	= ( isset($params['persistent'])  ? $params['persistent'] : FALSE   );
			$servers	  = ( isset($params['servers'])     ? $params['servers']    : array() );
      
			// Create the memcache connection
			$db = new Memcache;
			foreach($servers as $server)
      {
				$db->addServer($server['host'], $server['port'], $persistent);
			}
		}
    
		return $db;
  }
  
  
  
  
  function &getConfig($custom=FALSE)
  {
    global $setting;
    static $params;
    
    // The custom attribute will allow for setting the params attib externally
    if( empty($params) && !$custom )
    {
      $params = $setting['setting_cache_memcache_options'];
      if( !is_array($params) ) $params = unserialize($params);
      if( !is_array($params) ) $params = array();
    }
    
    return $params;
  }
  
  
  
  
	function get($id, $group, $checkTime)
	{
		$cache_id = $this->_getCacheId($id, $group);
		return $this->_db->get($cache_id);
	}
  
  
  
  
	function store($id, $group, $data)
	{
		$cache_id = $this->_getCacheId($id, $group);
		return $this->_db->set($cache_id, $data, $this->_compress, $this->_lifetime);
	}
  
  
  
  
	function remove($id, $group)
	{
		$cache_id = $this->_getCacheId($id, $group);
		return $this->_db->delete($cache_id);
	}
  
  
  
  
	function clean($group, $mode)
	{
		return true;
	}
  
  
  
  
	function gc()
	{
		return true;
	}
  
  
  
  
	function test()
	{
    global $memcache_test_servers;
    
    if( !extension_loaded('memcache') || !class_exists('Memcache') )
      return FALSE;
    
    if( empty($memcache_test_servers) )
      return TRUE;
    
    // Note: will return true if at least one connection succeeds
    foreach( $memcache_test_servers as $memcache_server_info )
    {
      if( ($memcache_obj = memcache_connect($memcache_server_info['host'], $memcache_server_info['port'])) )
      {
        memcache_close($memcache_obj);
        return TRUE;
      }
    }
    
    return FALSE;
	}
  
  
  
  
	function _getCacheId($id, $group)
	{
		$name	= md5($this->_application.'-'.$id.'-'.$this->_hash.'-'.$this->_language);
		return 'cache_'.$group.'-'.$name;
	}
}

?>