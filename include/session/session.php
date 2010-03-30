<?php

/* $Id: session.php 160 2009-04-16 02:52:36Z nico-izo $ */


defined('SE_PAGE') or exit();


// Architecture of the class contained in this file was inspired by
// Joomla's session framework, which is licensed under the GPL



class SESession
{
  var $_state = 'active';
  
  var $_expire = 900;
  
  var $_store = NULL;
  
  var $_security = array('browser'); // address, browser
  
  var $_autoresume = TRUE;
  
  
  
  
  function SESession($storage="none", $options=array())
  {
		// Must close session connector, emulate destructor
		if( version_compare(PHP_VERSION, '5', '<') )
    {
			register_shutdown_function(array(&$this, '__destruct'));
		}
    
		// Destroy sessions started with session.auto_start
		if( session_id() )
    {
			session_unset();
			session_destroy();
		}
    
    // Force preferred ini settings
		ini_set('session.save_handler', 'files');
		ini_set('session.use_trans_sid', '0');
    
    // Create storage object
		$this->_store =& SESessionStorage::getInstance($storage, $options);
    
    // Set options
		$this->_setOptions( $options );
    
		$this->_start();
    
    // Init stat tracking and security
		$this->_setCounter();
		$this->_setTimers();
    
		$this->_state =	'active';
    
		$this->_resume();
		$this->_validate();
  }
  
  
  
  
	function __destruct()
  {
    // OSX might have problems with firing multiple destructors, try removing this next line
    // if you have problems with not being able to log in.
    $this->close();
  }
  
  
  
  
	function &getInstance($options=array())
  {
    global $setting;
		static $instance;
    
		if( !is_object($instance) )
    {
      $params = ( is_string($setting['setting_session_options']) ? @unserialize($setting['setting_session_options']) : $setting['setting_session_options'] );
      if( is_array($params) ) $options = array_merge($params, $options);
      
      $storage = ( !empty($options['storage']) ? $options['storage'] : 'none' );
      
      $instance = new SESession($storage, $options);
		}
    
		return $instance;
  }
  
  
  
  
	function getState()
  {
		return $this->_state;
	}
  
  
  
  
	function getExpire()
  {
		return $this->_expire;
  }
  
  
  
  
	function getToken($force=FALSE)
	{
		$token = $this->get( 'session.token' );
    
		// Create a token
		if( !$token || $force )
    {
			$token	=	$this->_createToken( 12 );
			$this->set( 'session.token', $token );
		}
    
		return $token;
	}
  
  
  
  
	function hasToken($tokenCheck, $forceExpire=TRUE)
	{
		// Check if a token exists in the session
		$tokenStored = $this->get( 'session.token' );
    
		// Check token
		if( $tokenStored !== $tokenCheck )
		{
			if( $forceExpire )
      {
				$this->_state = 'expired';
			}
			return FALSE;
		}
    
		return TRUE;
  }
  
  
  
  
	function getName()
	{
		if( $this->_state === 'destroyed' )
    {
			return FALSE;
		}
    
		return session_name();
	}
  
  
  
  
	function getId()
	{
		if( $this->_state === 'destroyed' )
    {
			return FALSE;
		}
    
		return session_id();
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
      
			$name = strtolower(substr($file, 0, strrpos($file, '.')));
			$class = 'SESessionStorage'.ucfirst($name);
      
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
  
  
  
	function isNew()
	{
		$counter = $this->get( 'session.counter' );
    return ( $counter === 1 );
	}
  
  
  
	function &get($key, $default = null, $group='default')
	{
    $group = '__' . $group;
    
    if( $this->_state !== 'active' && $this->_state !== 'expired' )
    {
      return NULL;
    }
    
    if( isset($_SESSION[$group][$key]) )
    {
      return $_SESSION[$group][$key];
    }
    
    return $default;
  }
  
  
  
	function set($key, $value, $group='default')
	{
    $group = '__' . $group;
    
    if( $this->_state !== 'active' )
    {
      return NULL;
    }
    
    $old = ( isset($_SESSION[$group][$key]) ? $_SESSION[$group][$key] : NULL );
    
    if( is_null($value) )
    {
      unset($_SESSION[$group][$key]);
    }
    else
    {
      $_SESSION[$group][$key] = $value;
    }
    
    return $old;
  }
  
  
  
	function has($key, $group='default')
	{
    $group = '__' . $group;
    
    if( $this->_state !== 'active' )
    {
      return NULL;
    }
    
    return ( isset($_SESSION[$group][$key]) );
  }
  
  
  
	function clear($key, $group='default')
	{
    $group = '__' . $group;
    
    if( $this->_state !== 'active' )
    {
      return NULL;
    }
    
		$value = NULL;
		if( isset( $_SESSION[$group][$key] ) )
    {
			$value = $_SESSION[$group][$key];
			unset( $_SESSION[$group][$key] );
		}
    
		return $value;
  }
  
  
  
	function _start()
	{
		if( $this->_state == 'restart' )
    {
			session_id( $this->_createId() );
		}
    
		session_cache_limiter('none');
		session_start();
    
    return TRUE;
  }
  
  
  
	function destroy()
	{
    // Already done
		if( $this->_state === 'destroyed' )
    {
			return TRUE;
		}
    
    // Make sure session can't be resumed
		if( isset($_COOKIE[session_name()]) )
    {
			setcookie(session_name(), '', time()-86400, '/');
		}
    
		session_unset();
		session_destroy();
    
		$this->_state = 'destroyed';
		return TRUE;
  }
  
  
  
	function restart()
	{
		$this->destroy();
		if( $this->_state !== 'destroyed' )
    {
			return FALSE;
    }
    
    $this->_store->register();
    
		$this->_state = 'restart';
    
		$id	=	$this->_createId( strlen( $this->getId() ) );
		session_id($id);
		$this->_start();
    
		$this->_state	=	'active';
    
		$this->_validate();
		$this->_setCounter();
    
    return TRUE;
  }
  
  
  
	function copy()
	{
		// save values
		$values	= $_SESSION;
    
		// Keep config
		$trans	=	ini_get( 'session.use_trans_sid' );
		if( $trans ) ini_set( 'session.use_trans_sid', 0 );
		$cookie	=	session_get_cookie_params();
    
		// Create new session id
		$id	=	$this->_createId( strlen( $this->getId() ) );
    
		// Kill session
		//session_destroy();
		$this->destroy();
		if( $this->_state !== 'destroyed' )
    {
			return FALSE;
    }
    
		// Re-register the session store
		$this->_store->register();
    
		// restore config
		ini_set( 'session.use_trans_sid', $trans );
		session_set_cookie_params( $cookie['lifetime'], $cookie['path'], $cookie['domain'], $cookie['secure'] );
    
		// restart session with new id
		session_id( $id );
		session_start();
    
    // Restore data
    $_SESSION = $values;
    
    // Re activate and validate
		$this->_state	=	'active';
    
		$this->_validate();
    
		return TRUE;
  }
  
  
  
	function close()
  {
		session_write_close();
	}
  
  
  
	function _createId()
	{
		$id = '';
		while( strlen($id) < 32 )
    {
			$id .= (string) mt_rand(0, mt_getrandmax());
		}
    
		$id	= md5( uniqid($id, TRUE) );
		return $id;
  }
  
  
  
	function _createToken($length = 32)
	{
		static $chars	=	'0123456789abcdef';
    
		$max      =	strlen( $chars ) - 1;
		$token    =	'';
		$name     =  session_name();
    
		for( $i = 0; $i < $length; ++$i )
    {
			$token .=	$chars[ rand( 0, $max ) ];
		}
    
		return md5($token.$name);
  }
  
  
  
	function _setCounter()
	{
		$counter = $this->get( 'session.counter', 0 );
		$counter++;
    
		$this->set( 'session.counter', $counter );
		return TRUE;
	}
  
  
  
	function _setTimers()
	{
		if( !$this->has( 'session.timer.start' ) )
		{
			$start	=	time();
      
			$this->set( 'session.timer.start' , $start );
			$this->set( 'session.timer.last'  , $start );
			$this->set( 'session.timer.now'   , $start );
		}
    
		$this->set( 'session.timer.last', $this->get( 'session.timer.now' ) );
		$this->set( 'session.timer.now', time() );
    
		return TRUE;
	}
  
  
  
	function _setOptions( &$options )
	{
		// set name
		if( isset( $options['name'] ) )
    {
			session_name( md5($options['name']) );
		}
    
		// set id
		if( isset( $options['id'] ) )
    {
			session_id( $options['id'] );
		}
    
		// set expire time
		if( isset( $options['expire'] ) )
    {
			$this->_expire = $options['expire'];
		}
    
		// set security options
		if( isset( $options['security'] ) && is_array( $options['security'] ) )
    {
			$this->_security = $options['security'];
		}
    
    // set cookie params
    //$cookie	=	session_get_cookie_params();
    $cookie	=	array();
    $cookie['lifetime'] = ( isset($options['cookie']['lifetime']) ? $options['cookie']['lifetime']  : 0                     );
    //$cookie['path']     = ( isset($options['cookie']['path'])     ? $options['cookie']['path']      : '/'                   );
    //$cookie['domain']   = ( isset($options['cookie']['domain'])   ? $options['cookie']['domain']    : $_SERVER["HTTP_HOST"] );
    //$cookie['secure']   = ( isset($options['cookie']['secure'])   ? $options['cookie']['secure']    : FALSE                 );
    
    session_set_cookie_params($cookie['lifetime']);
    //session_set_cookie_params($cookie['lifetime'], $cookie['path'], $cookie['domain'], $cookie['secure']);
    
		//sync the session maxlifetime
		ini_set('session.gc_maxlifetime', $this->_expire);
    
		return TRUE;
	}
  
  
  
	function _validate( $restart = false )
	{
		// allow restart
		if( $restart )
		{
			$this->_state	=	'active';
      
			$this->set( 'session.client.address'	  , NULL );
			$this->set( 'session.client.forwarded'	, NULL );
			$this->set( 'session.client.browser'	  , NULL );
			$this->set( 'session.token'				      , NULL );
		}
    
		// check if session has expired
		if( $this->_expire )
		{
			$curTime =	$this->get( 'session.timer.now' , 0  );
			$maxTime =	$this->get( 'session.timer.last', 0 ) + $this->_expire;
      
			// empty session variables
			if( $maxTime < $curTime )
      {
				$this->_state	=	'expired';
				return FALSE;
			}
		}
    
		// Record proxy
		if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) )
    {
			$this->set( 'session.client.forwarded', $_SERVER['HTTP_X_FORWARDED_FOR']);
		}
    
		// Check client adress
		if( in_array( 'address', $this->_security ) && isset( $_SERVER['REMOTE_ADDR'] ) )
		{
			$ip	= $this->get( 'session.client.address' );
      
			if( $ip === null )
      {
				$this->set( 'session.client.address', $_SERVER['REMOTE_ADDR'] );
			}
			else if( $_SERVER['REMOTE_ADDR'] !== $ip )
			{
				$this->_state	=	'error';
				return FALSE;
			}
		}
    
		// Check client browser
		if( in_array( 'browser', $this->_security ) && isset( $_SERVER['HTTP_USER_AGENT'] ) )
		{
			$browser = $this->get( 'session.client.browser' );
      
			if( $browser === null )
      {
				$this->set( 'session.client.browser', $_SERVER['HTTP_USER_AGENT']);
			}
			else if( $_SERVER['HTTP_USER_AGENT'] !== $browser )
			{
				$this->_state	=	'error';
				return FALSE;
			}
		}
    
		return TRUE;
  }
  
  
  
  
  // Resume methods
  function _resume()
  {
    // Don't resume unless session is empty (re-initialized) or autoresume is disabled
    if( !$this->_autoresume || !$this->isNew() )
      return;
    
    // Check for session key
    $database =& SEDatabase::getInstance();
    
    $session_id = session_id();
    $resource = $database->database_query("SELECT * FROM se_session_keys WHERE session_key_id='{$session_id}' LIMIT 1");
    
    // No key found
    if( !$database->database_num_rows($resource) )
      return;
    
    // Resume using key (will populate user agent and ip, validate will catch forgeries)
    $session_key_info = $database->database_fetch_assoc($resource);
    
    // Remove key
    $this->removeResumeKey();
    
    // Should we restart?
    $this->restart();
    
    // Set cookie as persistent if necessary
    $cookie_lifetime = ( $session_key_info['session_key_persist'] ? 99999999 : 0 );
    setcookie(session_name(), session_id(), time() + $cookie_lifetime, '/');
    
    // Set session info
    $this->set('session.client.resumes',  $session_key_info['session_key_count']+1);
    $this->set('session.client.browser',  $session_key_info['session_key_ua']);
    $this->set('session.client.address',  long2ip($session_key_info['session_key_ip']));
    
    $this->set('user_id',                 $session_key_info['session_key_user_id']);
    $this->set('user_email',              $session_key_info['session_key_user_email']);
    $this->set('user_pass',               $session_key_info['session_key_user_password']);
    $this->set('user_persist',            $session_key_info['session_key_persist']);
    
    // Make new key
    $this->makeResumeKey();
  }
  
  
  
  function makeResumeKey()
  {
    if( !session_id() )
      return;
    
    $session_key_id             = session_id();
    $session_key_count          = $this->get('session.client.resumes', 0);
    $session_key_ua             = $this->get('session.client.browser', $_SERVER['HTTP_USER_AGENT']);
    $session_key_ip             = ip2long($this->get('session.client.address', $_SERVER['REMOTE_ADDR']));
    $session_key_user_id        = $this->get('user_id', 0);
    $session_key_user_password  = $this->get('user_pass', '');
    $session_key_user_email     = $this->get('user_email', '');
    $session_key_persist        = $this->get('user_persist', FALSE);
    $session_key_time           = time();
    
    $sql = "
      INSERT INTO se_session_keys
        (session_key_id, session_key_count, session_key_ua, session_key_ip, session_key_user_id, session_key_user_password, session_key_user_email, session_key_persist, session_key_time)
      VALUES
        ('{$session_key_id}', '{$session_key_count}', '{$session_key_ua}', '{$session_key_ip}', '{$session_key_user_id}', '{$session_key_user_password}', '{$session_key_user_email}', '{$session_key_persist}', '{$session_key_time}')
    ";
    
    $database =& SEDatabase::getInstance();
    $database->database_query($sql);
    
    
    // Cleanup (3 months)
    if( rand(1, 100)<20 )
    {
      $cleanup_time = time() - ( 60 * 60 * 24 * 31 * 3 );
      $database->database_query("DELETE FROM se_session_keys WHERE session_key_time<'{$cleanup_time}'");
    }
  }
  
  
  
  function removeResumeKey()
  {
    $database =& SEDatabase::getInstance();
    $database->database_query("DELETE FROM se_session_keys WHERE session_key_id='".session_id()."' LIMIT 1");
  }
}

?>