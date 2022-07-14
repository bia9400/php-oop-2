<?php
require_once __DIR__ . "Users.php";
 class PaymentMethods extends User{
    private $cardId;
    private $pin;


    /**
     * Get the value of cardId
     */ 
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * Set the value of cardId
     *
     * @return  self
     */ 
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * Get the value of pin
     */ 
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Set the value of pin
     *
     * @return  self
     */ 
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }
 }