<?php
//all handler classes

require_once 'com/zoho/crm/library/api/APIRequest.php';
require_once 'com/zoho/crm/library/api/handler/APIHandler.php';
require_once 'com/zoho/crm/library/api/handler/APIHandlerInterface.php';
require_once 'com/zoho/crm/library/api/handler/EntityAPIHandler.php';
require_once 'com/zoho/crm/library/api/handler/MassEntityAPIHandler.php';
require_once 'com/zoho/crm/library/api/handler/MetaDataAPIHandler.php';
require_once 'com/zoho/crm/library/api/handler/ModuleAPIHandler.php';
require_once 'com/zoho/crm/library/api/handler/RelatedListAPIHandler.php';
require_once 'com/zoho/crm/library/api/handler/OrganizationAPIHandler.php';
require_once 'com/zoho/crm/library/api/handler/TagAPIHandler.php';


//crud operation related
require_once 'com/zoho/crm/library/crud/Attachment.php';
require_once 'com/zoho/crm/library/crud/CustomView.php';
require_once 'com/zoho/crm/library/crud/CustomViewCategory.php';
require_once 'com/zoho/crm/library/crud/CustomViewCriteria.php';
require_once 'com/zoho/crm/library/crud/EventParticipant.php';
require_once 'com/zoho/crm/library/crud/Field.php';
require_once 'com/zoho/crm/library/crud/InventoryLineItem.php';
require_once 'com/zoho/crm/library/crud/Layout.php';
require_once 'com/zoho/crm/library/crud/LookupField.php';
require_once 'com/zoho/crm/library/crud/Module.php';
require_once 'com/zoho/crm/library/crud/ModuleRelatedList.php';
require_once 'com/zoho/crm/library/crud/ModuleRelation.php';
require_once 'com/zoho/crm/library/crud/Note.php';
require_once 'com/zoho/crm/library/crud/PickListValue.php';
require_once 'com/zoho/crm/library/crud/PriceBookPricing.php';
require_once 'com/zoho/crm/library/crud/Record.php';
require_once 'com/zoho/crm/library/crud/RelatedListProperties.php';
require_once 'com/zoho/crm/library/crud/Section.php';
require_once 'com/zoho/crm/library/crud/Tax.php';
require_once 'com/zoho/crm/library/crud/JunctionRecord.php';
require_once 'com/zoho/crm/library/crud/TrashRecord.php';
require_once 'com/zoho/crm/library/crud/Permission.php';
require_once 'com/zoho/crm/library/crud/LeadConvertMapping.php';
require_once 'com/zoho/crm/library/crud/LeadConvertMappingField.php';
require_once 'com/zoho/crm/library/crud/ProfileSection.php';
require_once 'com/zoho/crm/library/crud/ProfileCategory.php';
require_once 'com/zoho/crm/library/crud/Tag.php';

require_once 'com/zoho/crm/library/exception/Exception.php';

//setup related
require_once 'com/zoho/crm/library/setup/metadata/Organization.php';
require_once 'com/zoho/crm/library/setup/restclient/RestClient.php';

require_once 'com/zoho/crm/library/setup/users/Profile.php';
require_once 'com/zoho/crm/library/setup/users/Role.php';
require_once 'com/zoho/crm/library/setup/users/User.php';
require_once 'com/zoho/crm/library/setup/users/UserCustomizeInfo.php';
require_once 'com/zoho/crm/library/setup/users/UserTheme.php';

require_once 'com/zoho/crm/library/api/response/APIResponse.php';
require_once 'com/zoho/crm/library/api/response/BulkAPIResponse.php';
require_once 'com/zoho/crm/library/api/response/CommonAPIResponse.php';
require_once 'com/zoho/crm/library/api/response/EntityResponse.php';
require_once 'com/zoho/crm/library/api/response/FileAPIResponse.php';
require_once 'com/zoho/crm/library/api/response/ResponseInfo.php';

require_once 'com/zoho/crm/library/common/APIConstants.php';
require_once 'com/zoho/crm/library/common/CommonUtil.php';
require_once 'com/zoho/crm/library/common/ConfigUtil.php';
require_once 'com/zoho/crm/library/common/ZohoHTTPConnector.php';
?>