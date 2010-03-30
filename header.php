<?php

/* $Id: header.php 125 2009-03-19 04:12:30Z nico-izo $ */

// PREVENT MULTIPLE INCLUSION
if( defined('SE_HEADER') ) return;

// SET ERROR REPORTING
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
ini_set('display_errors', TRUE);

// ATTEMPT TO OVERLOAD STRING FUNCTIONS
if( @extension_loaded('mbstring') )
{
  @ini_set('mbstring.func_overload', 2); // 6 or 7?
  @mb_internal_encoding("UTF-8");
}

// CHECK FOR PAGE VARIABLE
if( !isset($page) ) $page = "";

// DEFINE SE CONSTANTS
define('SE_DEBUG', FALSE);
define('SE_PAGE', TRUE);
define('SE_ROOT', realpath(dirname(__FILE__)));
define('SE_HEADER', TRUE);

// SET INCLUDE PATH TO ROOT OF SE
set_include_path(get_include_path() . PATH_SEPARATOR . realpath("./"));



// BENCHMARK
include "include/class_benchmark.php";
$_benchmark = SEBenchmark::getInstance('default');
SE_DEBUG ? $_benchmark->start('total') : NULL;
SE_DEBUG ? $_benchmark->start('include') : NULL;



// INITIATE SMARTY
include "include/class_smarty.php";
$smarty =& SESmarty::getInstance();
//$smarty->debugging = TRUE;

// INCLUDE DATABASE INFORMATION
include "include/database_config.php";

// INCLUDE CLASS/FUNCTION FILES
include "include/functions_file.php";
include "include/cache/cache.php";
include "include/cache/storage.php";
include "include/session/session.php";
include "include/session/storage.php";

include "include/class_core.php";

include "include/class_admin.php";
include "include/class_database.php";
include "include/class_datetime.php";
include "include/class_comment.php";
include "include/class_field.php";
include "include/class_hook.php";
include "include/class_language.php";
include "include/class_notify.php";
include "include/class_upload.php";
include "include/class_user.php";
include "include/class_url.php";
include "include/class_misc.php";
include "include/class_ads.php";
include "include/class_actions.php";
include "include/functions_general.php";
include "include/functions_email.php";
include "include/functions_stats.php";

// JS API MOD JSON FUNCTIONS
include "include/class_javascript.php";
if(!function_exists('json_encode'))
{
  include_once "include/xmlrpc/xmlrpc.inc";
  include_once "include/xmlrpc/xmlrpcs.inc";
  include_once "include/xmlrpc/xmlrpc_wrappers.inc";
  include_once "include/jsonrpc/jsonrpc.inc";
  include_once "include/jsonrpc/jsonrpcs.inc";
  include_once "include/jsonrpc/json_extension_api.inc";
}



SE_DEBUG ? $_benchmark->end('include') : NULL;
SE_DEBUG ? $_benchmark->start('initialization') : NULL;



// INITIATE DATABASE CONNECTION
$database =& SEDatabase::getInstance();
// Use this line if you changed the way database connection is loaded
//$database = new SEDatabase($database_host, $database_username, $database_password, $database_name);

// SET DATABASE CONSTANTS
$database->database_query("SET @SE_PRIVACY_SELF = 1, @SE_PRIVACY_FRIEND = 2, @SE_PRIVACY_FRIEND2 = 4, @SE_PRIVACY_SUBNET = 8, @SE_PRIVACY_REGISTERED = 16, @SE_PRIVACY_ANONYMOUS = 32");

// SET LANGUAGE CHARSET
$database->database_set_charset(SE_Language::info('charset'));

// GET SETTINGS
$setting =& SECore::getSettings();

// CREATE URL CLASS
$url = new SEUrl();

// CREATE DATETIME CLASS
$datetime = new se_datetime();

// CREATE MISC CLASS
$misc = new se_misc();

// ENSURE NO SQL INJECTIONS THROUGH POST OR GET ARRAYS
$_POST = security($_POST);
$_GET = security($_GET);
$_COOKIE = security($_COOKIE);

// CREATE SESSION OBJECT
$session_options = ( defined('SE_SESSION_RESUME') && !empty($session_id) ? array('id' => $session_id, 'security' => array()) : array() );
$session =& SESession::getInstance($session_options);
if( $session->getState() == 'expired' )
{
  $session->restart();
}

// CHECK FOR PAGE OWNER
if(isset($_POST['user'])) { $user_username = $_POST['user']; } elseif(isset($_GET['user'])) { $user_username = $_GET['user']; } else { $user_username = ""; }
if(isset($_POST['user_id'])) { $user_id = $_POST['user_id']; } elseif(isset($_GET['user_id'])) { $user_id = $_GET['user_id']; } else { $user_id = ""; }
$owner = new SEUser(Array($user_id, $user_username));

// CREATE USER OBJECT AND ATTEMPT TO LOG USER IN
$user = new SEUser();
$user->user_checkCookies();

// INSTANTIATE JAVASCRIPT OBJECT
$se_javascript = new SE_Javascript();


// CREATE ADMIN OBJECT AND ATTEMPT TO LOG ADMIN IN
$admin = new se_admin();
$admin->admin_checkCookies();


// CANNOT ACCESS USER-ONLY AREA IF NOT LOGGED IN
if( !$user->user_exists && substr($page, 0, 5) == "user_" )
{
  header("Location: login.php?return_url=".$url->url_current());
  exit();
}

// SET GLOBAL TIMEZONE
$global_timezone = ( $user->user_exists ? $user->user_info['user_timezone'] : $setting['setting_timezone'] );

// SET UP LANGUAGE VARIABLES
if( !empty($_GET['lang_id']) )
{
  $lang_id = NULL;
  if( $user->user_exists && $setting['setting_lang_allow'] )
  {
    $lang_id = $user->user_info['user_language_id'] = (int)$_GET['lang_id'];
    $database->database_query("UPDATE se_users SET user_language_id='{$user->user_info['user_language_id']}' WHERE user_id='{$user->user_info['user_id']}' LIMIT 1");
  }
  
  if( !$user->user_exists && $setting['setting_lang_anonymous'] )
  {
    $lang_id = (int)$_GET['lang_id'];
  }
  
  if( $lang_id )
  {
    setcookie('se_language_anonymous', $lang_id, time()+99999999, "/");
    $_COOKIE['se_language_anonymous'] = $lang_id;
  }
}

SE_Language::select($user);

if( SE_Language::info('language_setlocale') )
{
  $multi_language = 1;
  setlocale(LC_TIME, SE_Language::info('language_setlocale'));
}

header("Content-Language: ".SE_Language::info('language_code'));


// CREATE ACTIONS CLASS
$actions = new se_actions();

// CREATE NOTIFICATION CLASS
$notify = new se_notify();

// CREATE ADS CLASS
$ads = new se_ads();

// Define SE_PAGE_AJAX in your page before the header include to not load ads or update page views
if( !defined('SE_PAGE_AJAX') && ($page=="chat_frame" || $page=="chat_ajax" || $page=="misc_js" || $page=="ad") )
  define('SE_PAGE_AJAX', TRUE);

if( !defined('SE_PAGE_AJAX') )
{
  // UPDATE STATS TABLE
  update_stats("views");
  
  // LOAD ADS
  $ads->load();
}


// CREATE GLOBAL CSS STYLES VAR (USED FOR CUSTOM USER-DEFINED PROFILE/PLUGIN STYLES)
$global_css = "";


SE_DEBUG ? $_benchmark->end('initialization') : NULL;

SE_DEBUG ? $_benchmark->start('plugins') : NULL;



// INCLUDE RELEVANT PLUGIN FILES
// AND SET PLUGIN HEADER TEMPLATES
$show_menu_user = FALSE;

$global_plugins =& SECore::getPlugins();

foreach( $global_plugins as $plugin_type=>$plugin_info )
{
  $plugin_vars = array();
  if( file_exists("header_{$plugin_info['plugin_type']}.php") )
  {
    include "header_{$plugin_info['plugin_type']}.php";
  }
  
  // Set the hooks for each of the plugin templates if not using the new hooked template includes (backwards compatibility)
  if( empty($plugin_vars['uses_tpl_hooks']) )
  {
    if( file_exists(SE_ROOT."/templates/header_{$plugin_info['plugin_type']}.tpl") )
      $smarty->assign_hook('header', "header_{$plugin_info['plugin_type']}.tpl");
    
    if( file_exists(SE_ROOT."/templates/footer_{$plugin_info['plugin_type']}.tpl") )
      $smarty->assign_hook('footer', "footer_{$plugin_info['plugin_type']}.tpl");
    
    if( !empty($plugin_vars['menu_main']) )
      $smarty->assign_hook('menu_main', $plugin_vars['menu_main']);
    
    if( !empty($plugin_vars['menu_user']) )
      $smarty->assign_hook('menu_user_apps', $plugin_vars['menu_user']);
    
    if( $page=="profile" && !empty($plugin_vars['menu_profile_side']) )
    {
      $plugin_vars['menu_profile_side']['name'] = $plugin_info['plugin_type'];
      $smarty->assign_hook('profile_side', $plugin_vars['menu_profile_side']);
    }
    
    if( $page=="profile" && !empty($plugin_vars['menu_profile_tab']) )
    {
      $plugin_vars['menu_profile_tab']['name'] = $plugin_info['plugin_type'];
      $smarty->assign_hook('profile_tab', $plugin_vars['menu_profile_tab']);
    }
    
    if( $page=="user_home" && !empty($plugin_vars['menu_userhome']) )
    {
      $plugin_vars['menu_userhome']['name'] = $plugin_info['plugin_type'];
      $smarty->assign_hook('user_home', $plugin_vars['menu_userhome']);
    }
  }
  
  // If using the new template hooks, the header should also hook the styles sheets
  
  $global_plugins[$plugin_info['plugin_type']] =& $plugin_vars;
  if( !empty($plugin_vars['menu_user']) ) $show_menu_user = TRUE;
  unset($plugin_vars);
}

$global_plugins['plugin_controls'] = array('show_menu_user' => $show_menu_user);



SE_DEBUG ? $_benchmark->end('plugins') : NULL;
SE_DEBUG ? $_benchmark->start('page') : NULL;



// CHECK TO SEE IF SITE IS ONLINE OR NOT, ADMIN NOT LOGGED IN, DISPLAY OFFLINE PAGE
if( !$setting['setting_online'] && !$admin->admin_exists )
{
  $page = "offline";
  include "footer.php";
}


// CALL HEADER HOOK
($hook = SE_Hook::exists('se_header')) ? SE_Hook::call($hook, array()) : NULL;


// CHECK IF LOGGED-IN USER IS ON OWNER'S BLOCKLIST
if( $user->user_exists && $owner->user_exists && $owner->user_blocked($user->user_info['user_id']) )
{
  // ASSIGN VARIABLES AND DISPLAY ERROR PAGE
  $page = "error";
  $smarty->assign('error_header', 639);
  $smarty->assign('error_message', 640);
  $smarty->assign('error_submit', 641);
  include "footer.php";
}


// CHECK TO SEE IF USER HAS BEEN BLOCKED BY IP
$banned_ips = explode(",", $setting['setting_banned_ips']);
if( in_array($_SERVER['REMOTE_ADDR'], $banned_ips) )
{
  // ASSIGN VARIABLES AND DISPLAY ERROR PAGE
  $page = "error";
  $smarty->assign('error_header', 639);
  $smarty->assign('error_message', 807);
  $smarty->assign('error_submit', 641);
  include "footer.php";
}





?>