<?php

/* $Id: callback.php 8 2009-01-11 06:02:53Z nico-izo $ */


defined('SE_PAGE') or die();


class SECacheHandlerCallback extends SECache
{
	function call()
	{
		$args		= func_get_args();
		$callback	= array_shift($args);
    
		return $this->get( $callback, $args );
	}
  
  
  
  
	function get( $callback, $args, $id=FALSE )
	{
		if( !$id )
    {
			// Generate an ID
			$id = $this->_makeId($callback, $args);
		}
    
		// Get the storage handler and get callback cache data by id and group
		$data = parent::get($id);
    
		if( $data!==false )
    {
			$data = unserialize( $data );
		}
    else
    {
			$data = call_user_func_array($callback, $args);
      
			$this->store(serialize($data), $id);
		}
    
		return $data;
	}
  
  
  
  
	function _makeId($callback, $args)
	{
		return md5(serialize(array($callback, $args)));
	}
}
