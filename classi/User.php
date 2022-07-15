<?php
require_once __DIR__ ."/../classi/traits/Cart.php";
require_once __DIR__ ."/../classi/traits/PaymentMethods.php";

class User{
    use Cart, PaymentMethods;
    protected $userName;
    protected $userPassword;
    public $status;
    
    private function isRegistered(){
        if($this->userName=="" || $this->userPassword==""){
            $this->status=false;
        }
        else{
            $this->status=true;
        }
    }

    function __construct($name="",$password="")
    {
        $this->setUserName($name);
        $this->setUserPassword($password);
        $this->isRegistered();
       
    }

    /**
     * Get the value of userName
     */ 
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * @return  self
     */ 
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of userPassword
     */ 
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set the value of userPassword
     *
     * @return  self
     */ 
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }
}