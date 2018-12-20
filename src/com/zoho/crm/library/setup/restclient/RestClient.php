<?php
namespace ZCRM;
require_once realpath(dirname(__FILE__).'/../../api/handler/MetaDataAPIHandler.php');
require_once realpath(dirname(__FILE__).'/../../common/ConfigUtil.php');
require_once realpath(dirname(__FILE__).'/../../setup/metadata/Organization.php');

class RestClient
{
	
	private function __construct()
	{
		
	}
	
	public static function getInstance()
	{
		return new RestClient();
	}
	
	public static function initialize($configuration=null)
	{
	    ConfigUtil::initialize(true,$configuration);
	}
	
	public function getAllModules()
	{
		return MetaDataAPIHandler::getInstance()->getAllModules();
	}
	
	public function getModule($moduleName)
	{
		return MetaDataAPIHandler::getInstance()->getModule($moduleName);
	}
	
	public function getOrganizationInstance()
	{
		return Organization::getInstance();
	}
	
	public function getModuleInstance($moduleAPIName)
	{
		return Module::getInstance($moduleAPIName);
	}
	
	public function getRecordInstance($moduleAPIName,$entityId)
	{
		return Record::getInstance($moduleAPIName, $entityId);
	}
	
	public function getCurrentUser()
	{
		return OrganizationAPIHandler::getInstance()->getCurrentUser();
	}
	
	public static function getCurrentUserEmailID()
	{
		return isset($_SERVER[APIConstants::USER_EMAIL_ID])?$_SERVER[APIConstants::USER_EMAIL_ID]:null;
	}
	
	public static function getOrganizationDetails()
	{
		return OrganizationAPIHandler::getInstance()->getOrganizationDetails(); 
	}
}
?>