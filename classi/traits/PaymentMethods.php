<?php

trait PaymentMethods 
{
    private $cardId;
    private $pin;
    private $dataScadenza;
    public function setCreditCard($_cardId,$_pin,$_dataScadenza){
        $this->setCardId($_cardId);
        $this->setPin($_pin);
        $this->setDataScadenza($_dataScadenza);


    }
    public function paymentSucsesss()
    {
        $date=date("Y");
        if($date-$this->dataScadenza <=0){
            return true;
        }
        else{
            return false;
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
