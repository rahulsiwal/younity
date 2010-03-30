<?php

/* $Id: file.php 59 2009-02-13 03:25:54Z nico-izo $ */


defined('SE_PAGE') or die();



class SECacheStorageFile extends SECacheStorage
{
  var $_root;
  
  var $_locking;
  
  
  
  function SECacheStorageFile($options=array())
  {
    parent::SECacheStorage($options);
    
		$params =& SECacheStorageFile::getConfig();
    
		$this->_root		    = ( isset($params['root'])    ? $params['root']     : NULL    );
		$this->_locking		  = ( isset($params['locking']) ? $params['locking']  : TRUE    );
  }
  
  
  
  
  function &getConfig($custom=FALSE)
  {
    global $setting;
    static $params;
    
    // The custom attribute will allow for setting the params attib externally
    if( empty($params) && !$custom )
    {
      $params = $setting['setting_cache_file_options'];
      if( !is_array($params) ) $params = unserialize($params);
      if( !is_array($params) ) $params = array();
    }
    
    return $params;
  }
  
  
  
  
	function get($id, $group, $checkTime)
	{
		$data = FALSE;
    
		$path = $this->_getFilePath($id, $group);
		$this->_setExpire($id, $group);
    
		if( file_exists($path) )
    {
			$data = file_get_contents($path);
			if( $data )
      {
				// Remove the initial die() statement
				$data	= preg_replace('/^.*\n/', '', $data);
			}
		}
    
		return $data;
	}
  
  
  
  
	function store($id, $group, $data)
	{
		$written	  = FALSE;
		$path		    = $this->_getFilePath($id, $group);
		$expirePath	= $path . '_expire';
		$die		    = '<?php die("Access Denied"); ?>'."\n";
    
		// Prepend a die string
		$data		    = $die.$data;
    
		$fp = @fopen($path, "wb");
		if( $fp )
    {
			if( $this->_locking )
      {
				@flock($fp, LOCK_EX);
			}
      
			$len = strlen($data);
			@fwrite($fp, $data, $len);
      
			if( $this->_locking )
      {
				@flock($fp, LOCK_UN);
			}
      
			@fclose($fp);
      @chmod($path, 0777);
			$written = TRUE;
		}
    
		// Data integrity check
		if( $written && ($data==file_get_contents($path)) )
    {
			@file_put_contents($expirePath, ($this->_now + $this->_lifetime));
      return TRUE;
		}
    else
    {
			return FALSE;
		}
	}
  
  
  
  
	function remove($id, $group)
	{
		$path = $this->_getFilePath($id, $group);
		@unlink($path.'_expire');
		
    if ( !@unlink($path) )
    {
			return FALSE;
		}
    
		return TRUE;
	}
  
  
  
  
	function clean($group, $mode=NULL)
	{
		$return = TRUE;
		$folder	= $group;
    
    // Mode not yet implemented
    
    // Remove
    $f = $this->_root.DIRECTORY_SEPARATOR.$folder;
    if( is_dir($f) )
    {
      foreach( glob($f.'/*') as $sf )
      {
        if( is_dir($sf) && !is_link($sf) )
        {
          // Hope some genius doesn't create a subdir
          //deltree($sf);
        }
        else
        {
          @unlink($sf);
        } 
      } 
    }
    $return = @rmdir($f);
    
		return $return;
	}
  
  
  
  
	function gc()
	{
		$result = TRUE;
    
    $files = @glob($this->_root . DIRECTORY_SEPARATOR . '*' . DIRECTORY_SEPARATOR . '*_expire*');
    
    if( !empty($files) ) foreach( $files as $file )
    {
      $time = @file_get_contents($file);
			if( $time < $this->_now )
      {
				$result |= @unlink($file);
				$result |= @unlink(str_replace('_expire', '', $file));
			}
    }
    
    return $result;
	}
  
  
  
  
	function test()
	{
    global $filecache_test_root;
		$root	= ( isset($filecache_test_root) ? $filecache_test_root : SE_ROOT.DIRECTORY_SEPARATOR.'cache' );
		return is_writable($root);
	}
  
  
  
  
	function _setExpire($id, $group)
	{
		$path = $this->_getFilePath($id, $group);
    
		// set prune period
		if( file_exists($path.'_expire') )
    {
			$time = @file_get_contents($path.'_expire');
			if( $time<$this->_now || empty($time) )
      {
				$this->remove($id, $group);
			}
		}
    elseif( file_exists($path) )
    {
			// This means that for some reason there's no expire file, remove it
			$this->remove($id, $group);
		}
	}
  
  
  
  
	function _getFilePath($id, $group)
	{
		$folder	= $group;
		$name	= md5($this->_application.'-'.$id.'-'.$this->_hash.'-'.$this->_language).'.php';
		$dir	= $this->_root.DIRECTORY_SEPARATOR.$folder;

		// If the folder doesn't exist try to create it
		if( !is_dir($dir) )
    {
			// Make sure the index file is there
			$indexFile      = $dir . DIRECTORY_SEPARATOR . 'index.html';
			@ mkdir($dir) && file_put_contents($indexFile, '<html><body bgcolor="#FFFFFF"></body></html>');
		}
    
		// Make sure the folder exists
		if( !is_dir($dir) )
    {
			return FALSE;
		}
    
		return $dir.DIRECTORY_SEPARATOR.$name;
	}
}

?>