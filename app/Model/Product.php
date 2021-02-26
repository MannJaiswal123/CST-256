<?php
namespace App\Model;


class Job implements \JsonSerializable
{
    private $id;
    private $productName;
    private $description;
    private $brand;
    private $model;
    
    
    public function __construct($id, $productName, $description, $company, $requirements, $skills)
    {
        $this->id = $id; 
        $this->productName = $productName;
        $this->description = $description;
        $this->brand = $brand; 
        $this->model = $model;
        
    }
    
    /**
     * Serializes JSON
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
    
    /**
     * @return $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $JobName
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return $company
     */
    public function getBrand()
    {
        return $this->company;
    }

    /**
     * @return $requirements
     */
    public function getModel()
    {
        return $this->model;
    }
  
    
}