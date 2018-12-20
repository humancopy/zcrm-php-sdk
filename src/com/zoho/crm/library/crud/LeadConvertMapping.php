<?php
namespace ZCRM;

class LeadConvertMapping
{
	private $name;
	private $id;
	private $fields=array();
	
	private function __construct($name,$id)
	{
		$this->name=$name;
		$this->id=$id;
	}
	
	public static function getInstance($name,$id)
	{
		return new LeadConvertMapping($name,$id);
	}
	
    /**
     * name
     * @return String
     */
    public function getName(){
        return $this->name;
    }

    /**
     * name
     * @param String $name
     */
    public function setName($name){
        $this->name = $name;
    }

    /**
     * id
     * @return Long
     */
    public function getId(){
        return $this->id;
    }

    /**
     * id
     * @param Long $id
     */
    public function setId($id){
        $this->id = $id;
    }

    /**
     * fields
     * @return array of LeadConvertMappingField instances
     */
    public function getFields(){
        return $this->fields;
    }

    /**
     * fields
     * @param LeadConvertMappingField_Instance
     */
    public function addFields($fieldIns){
        array_push($this->fields ,$fieldIns);
    }

}
?>