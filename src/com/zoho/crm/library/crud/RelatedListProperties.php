<?php
namespace ZCRM;

class RelatedListProperties
{
	private $sortBy=null;
	private $sortOrder=null;
	private $fields=null;
	
	private function __construct()
	{
		
	}
	
	public static function getInstance()
	{
		return new RelatedListProperties();
	}

    /**
     * sortBy
     * @return unkown
     */
    public function getSortBy(){
        return $this->sortBy;
    }

    /**
     * sortBy
     * @param unkown $sortBy
     * @return RelatedListProperties
     */
    public function setSortBy($sortBy){
        $this->sortBy = $sortBy;
    }

    /**
     * sortOrder
     * @return unkown
     */
    public function getSortOrder(){
        return $this->sortOrder;
    }

    /**
     * sortOrder
     * @param unkown $sortOrder
     * @return RelatedListProperties
     */
    public function setSortOrder($sortOrder){
        $this->sortOrder = $sortOrder;
    }

    /**
     * fields
     * @return unkown
     */
    public function getFields(){
        return $this->fields;
    }

    /**
     * fields
     * @param unkown $fields
     * @return RelatedListProperties
     */
    public function setFields($fields){
        $this->fields = $fields;
    }

}
?>