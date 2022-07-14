<?php
require_once "../Products.php";

class Toys extends Products{
    protected $ageOfToy;
    protected $size;
    

    /**
     * Get the value of ageOfToy
     */ 
    public function getAgeOfToy()
    {
        return $this->ageOfToy;
    }

    /**
     * Set the value of ageOfToy
     *
     * @return  self
     */ 
    public function setAgeOfToy($ageOfToy)
    {
        $this->ageOfToy = $ageOfToy;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
}