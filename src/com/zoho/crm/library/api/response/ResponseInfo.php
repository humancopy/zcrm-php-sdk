<?php
namespace ZCRM;
require_once realpath(dirname(__FILE__)."/../../common/APIConstants.php");

class ResponseInfo
{
	private $moreRecords=null;
	private $recordCount=null;
	private $pageNo=null;
	private $perPage=null;
    private $tagAllowedCount=null;
    
	public function __construct($reponseInfoJSON)
	{
        if(array_key_exists(APIConstants::MORE_RECORDS,$reponseInfoJSON))
		{
		    $this->moreRecords=(bool)$reponseInfoJSON[APIConstants::MORE_RECORDS];
        }
        if(array_key_exists(APIConstants::COUNT,$reponseInfoJSON))
		{
		    $this->recordCount=$reponseInfoJSON[APIConstants::COUNT]+0;
        }
        if(array_key_exists(APIConstants::PAGE,$reponseInfoJSON))
		{
		    $this->pageNo=$reponseInfoJSON[APIConstants::PAGE]+0;
        }
        if(array_key_exists(APIConstants::PER_PAGE,$reponseInfoJSON))
		{
		    $this->perPage=$reponseInfoJSON[APIConstants::PER_PAGE]+0;
        }
        if(array_key_exists(APIConstants::ALLOWED_COUNT,$reponseInfoJSON))
		{
		    $this->tagAllowedCount=$reponseInfoJSON[APIConstants::ALLOWED_COUNT]+0;
		}
	}

    /**
     * moreRecords
     * @return Boolean
     */
    public function getMoreRecords(){
        return $this->moreRecords;
    }

    /**
     * moreRecords
     * @param Boolean $moreRecords
     */
    public function setMoreRecords($moreRecords){
        $this->moreRecords = $moreRecords;
    }

    /**
     * recordCount
     * @return int
     */
    public function getRecordCount(){
        return $this->recordCount;
    }

    /**
     * recordCount
     * @param int $recordCount
     */
    public function setRecordCount($recordCount){
        $this->recordCount = $recordCount;
    }

    /**
     * pageNo
     * @return int
     */
    public function getPageNo(){
        return $this->pageNo;
    }

    /**
     * pageNo
     * @param int $pageNo
     */
    public function setPageNo($pageNo){
        $this->pageNo = $pageNo;
    }

    /**
     * perPage
     * @return int
     */
    public function getPerPage(){
        return $this->perPage;
    }

    /**
     * perPage
     * @param int $perPage
     */
    public function setPerPage($perPage){
        $this->perPage = $perPage;
    }

    /**
     * allowedCount
     * @return int
     */
    public function getAllowedCount(){
        return $this->allowedCount;
    }
    
    /**
     * $allowedCount
     * @param int $allowedCount
     */
    public function setAllowedCount($allowedCount){
        $this->allowedCount = $allowedCount;
    }

}
?>