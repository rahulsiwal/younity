<?php

/* $Id: memcache.php 8 2009-01-11 06:02:53Z nico-izo $ */


defined('SE_PAGE') or exit();


class SESessionStorageMemcache extends SESessionStorage
{
	var $_db;
  
  
	var $_compress = NULL;
  
  
	var $_persistent = FALSE;
  
  
	var $_servers;
  
  
  
  
	function SESessionStorageMemcache( $options=array() )
	{
		if( !$this->test() )
    {
      die("The memcache extension isn't available");
    }
    
    // Default server connection
    if( empty($options['servers']) ) $options['servers'] = array(array('host'=>'localhost','port'=>'11211')); 
    
		parent::SESessionStorage($options);
    
		$this->_compress  	= ( isset($options['compress'])     ? $options['compress']    : FALSE   );
		$this->_persistent	= ( isset($options['persistent'])   ? $options['persistent']  : FALSE   );
		$this->_servers	    = ( isset($options['servers'])      ? $options['servers']     : array() );
	}
  
  
  
  
	function open($save_path, $session_name)
	{
		$this->_db = new Memcache;
    
		for( $i=0, $n=count($this->_servers); $i < $n; $i++ )
		{
			$server = $this->_servers[$i];
			$this->_db->addServer($server['host'], $server['port'], $this->_persistent);
		}
    
		return TRUE;
	}
  
  
  
  
	function close()
	{
		return $this->_db->close();
	}
  
  
  
  
	function read($id)
	{
		$sess_id = 'sess_'.$id;
		$this->_setExpire($sess_id);
		return $this->_db->get($sess_id);
	}
  
  
  
  
	function write($id, $session_data)
	{
		$sess_id = 'sess_'.$id;
    
		if( $this->_db->get($sess_id.'_expire') )
    {
			$this->_db->replace($sess_id.'_expire', time(), 0);
		}
    else
    {
			$this->_db->set($sess_id.'_expire', time(), 0);
		}
    
		if( $this->_db->get($sess_id) )
    {
			$this->_db->replace($sess_id, $session_data, $this->_compress);
		}
    else
    {
			$this->_db->set($sess_id, $session_data, $this->_compress);
		}
    
		return;
	}
  
  
  
  
	function destroy($id)
	{
		$sess_id = 'sess_'.$id;
		$this->_db->delete($sess_id.'_expire');
		return $this->_db->delete($sess_id);
	}
  
  
  
  
	function gc($maxlifetime)
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
  
  
  
  
	function _setExpire($key)
	{
		$lifetime	= ini_get("session.gc_maxlifetime");
		$expire		= $this->_db->get($key.'_expire');
    
		// set prune period
		if( $expire + $lifetime < time() )
    {
			$this->_db->delete($key);
			$this->_db->delete($key.'_expire');
		}
    else
    {
			$this->_db->replace($key.'_expire', time());
		}
	}
}
