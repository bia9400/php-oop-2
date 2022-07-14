<?php
require_once __DIR__ . "/User.php";
class PaymentMethods extends User
{
    private $cardId;
    private $pin;
    private $dataScadenza;
    public $canIBuy;
    public function paymentSucsesss()
    {
        $date=date("Y");
        if($date-$this->dataScadenza <=0){
            $this->canIBuy=true;
        }
        else{
            $this->canIBuy=false;
        }
    }
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

    /**
     * Get the value of dataScadenza
     */
    public function getDataScadenza()
    {
        return $this->dataScadenza;
    }

    /**
     * Set the value of dataScadenza
     *
     * @return  self
     */
    public function setDataScadenza($dataScadenza)
    {
        $this->dataScadenza = $dataScadenza;

        return $this;
    }
}
