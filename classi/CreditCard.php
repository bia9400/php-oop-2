<?php

class CreditCard {
    private $type;
    private $number;
    private $cvv;
    private $expiration;
    function __construct($_type, $_number, $_cvv, $_expiration)
  {
    $this->setType($_type);
    $this->setNumber($_number);
    $this->setCvv($_cvv);
    $this->setExpiration($_expiration);
  }


    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expiration
     */ 
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set the value of expiration
     *
     * @return  self
     */ 
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }
}