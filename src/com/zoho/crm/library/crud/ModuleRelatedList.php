<?php
namespace ZCRM;

class ModuleRelatedList
{
	private $apiName=null;
	private $module=null;
	private $displayLabel=null;
	private $visible=null;
	private $name=null;
	private $id=null;
	private $href=null;
	private $type=null;
	
	private function __construct($apiName)
	{
		$this->apiName=$apiName;
	}
	
	public static function getInstance($apiName)
	{
		return new ModuleRelatedList($apiName);
	}
	
	public function setApiName($apiName)
	{
		$this->apiName=$apiName;
	}

    /**
     * apiName
     * @return APIName
     */
    public function getApiName(){
        return $this->apiName;
    }

    /**
     * module
     * @return module
     */
    public function getModule(){
        return $this->module;
    }

    /**
     * module
     * @param $module
     * @return ModuleRelatedList
     */
    public function setModule($module){
        $this->module = $module;
    }

    /**
     * displayLabel
     * @return unkown
     */
    public function getDisplayLabel(){
        return $this->displayLabel;
    }

    /**
     * displayLabel
     * @param unkown $displayLabel
     * @return ModuleRelatedList
     */
    public function setDisplayLabel($displayLabel){
        $this->displayLabel = $displayLabel;
    }

    /**
     * visible
     * @return unkown
     */
    public function isVisible(){
        return $this->visible;
    }

    /**
     * visible
     * @param unkown $visible
     * @return ModuleRelatedList
     */
    public function setVisible($visible){
        $this->visible = $visible;
    }

    /**
     * name
     * @return unkown
     */
    public function getName(){
        return $this->name;
    }

    /**
     * name
     * @param unkown $name
     * @return ModuleRelatedList
     */
    public function setName($name){
        $this->name = $name;
    }

    /**
     * id
     * @return unkown
     */
    public function getId(){
        return $this->id;
    }

    /**
     * id
     * @param unkown $id
     * @return ModuleRelatedList
     */
    public function setId($id){
        $this->id = $id;
    }

    /**
     * href
     * @return unkown
     */
    public function getHref(){
        return $this->href;
    }

    /**
     * href
     * @param unkown $href
     * @return ModuleRelatedList
     */
    public function setHref($href){
        $this->href = $href;
    }

    /**
     * type
     * @return unkown
     */
    public function getType(){
        return $this->type;
    }

    /**
     * type
     * @param unkown $type
     * @return ModuleRelatedList
     */
    public function setType($type){
        $this->type = $type;
    }
    
    public function setRelatedListProperties($relatedListDetails)
    {
    	$this->setModule($relatedListDetails['module']);
    	$this->setDisplaylabel($relatedListDetails['display_label']);
    	$this->setId($relatedListDetails['id']);
    	$this->setName($relatedListDetails['name']);
    	$this->setType($relatedListDetails['type']);
    	$this->setHref($relatedListDetails['href']);
    	$this->setVisible(isset($relatedListDetails['visible'])?(boolean)$relatedListDetails['visible']:false);
    	return $this;
    }

}
?>