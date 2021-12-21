<?php

if ( ! defined( 'sugarEntry' ) ) {
    define( 'sugarEntry', true );
}

if ( is_file( 'config.php' ) ) {
    require_once 'config.php'; // provides $sugar_config
}

// load up the config_override.php file.  This is used to provide default user settings
if ( is_file( 'config_override.php' ) ) {
    require_once 'config_override.php';
}

require_once( 'include/utils.php' );
require_once( 'include/MVC/SugarApplication.php' );
require_once( 'include/database/DBManagerFactory.php' );
require_once( 'data/SugarBean.php' );
require_once( 'modules/Users/User.php' );
require_once( 'modules/Accounts/Account.php' );
require_once( 'include/database/DBManager.php' );
//require_once('modules/PDS_Sucursal/PDS_Sucursal.php');
require_once( 'include/utils/sugar_file_utils.php' );
require_once( 'include/SugarObjects/LanguageManager.php' );
require 'include/SugarObjects/VardefManager.php';
require_once( 'include/utils/file_utils.php' );
require_once( 'include/SugarCache/SugarCache.php' );
require_once( 'include/SugarLogger/LoggerManager.php' );
require_once( 'include/TimeDate.php' );
require_once( 'modules/Users/User.php' );
$GLOBALS[ 'log' ] = LoggerManager::getLogger();
require_once( 'include/SugarEmailAddress/SugarEmailAddress.php' );
require_once( 'include/utils/LogicHook.php' );
require_once( 'include/Localization/Localization.php' );
require_once( 'include/clean.php' );
require_once( 'include/HtmlSanitizer.php' );
require_once( 'modules/Configurator/Configurator.php' );
require_once( 'modules/SugarFeed/SugarFeed.php' );
require_once( 'modules/Trackers/TrackerManager.php' );
require_once('modules/Administration/Administration.php');
require_once('data/BeanFactory.php');
require_once('modules/AOD_Index/AOD_Index.php');
require_once('modules/AOD_IndexEvent/AOD_IndexEvent.php');
require_once ('modules/AOD_IndexEvent/AOD_IndexEvent.php');
require_once ('include/modules.php');
require_once('modules/Currencies/Currency.php');
require_once ('modules/jjwg_Maps/jjwg_Maps.php');
require_once ('modules/ACL/ACLController.php');
require_once ('modules/ACLActions/ACLAction.php');

global $timedate, $locale;
if ( empty( $timedate ) ) {
    $timedate = TimeDate::getInstance();
}

if ( ! isset( $locale ) ) {
    $locale = new Localization();
}

$GLOBALS[ 'sugar_config' ] = $sugar_config;

require_once( 'modules/UserPreferences/UserPreference.php' );

$current_user              = new User();
$GLOBALS[ 'current_user' ] = $current_user;
