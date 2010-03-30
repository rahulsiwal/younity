<?php

/* $Id: serial.php 8 2009-01-11 06:02:53Z nico-izo $ */


defined('SE_PAGE') or die();


class SECacheHandlerSerial extends SECache
{
	function get( $id, $group=NULL )
	{
    $data = parent::get($id, $group);
    
    if( !is_string($data) ) return NULL;
    
    //$data_original = $data;
    $data = unserialize($data);
    
    //if( $data===FALSE ) var_dump($data_original);
    if( $data===FALSE ) return NULL;
    
    return $data;
	}
  
  
  
  
	function store($data, $id, $group=NULL)
	{
    $serial_data = serialize($data);
    
    parent::store($serial_data, $id, $group);
	}
}
