<?php

class Food extends Products{

    protected $scadenza;
    protected $ingredients;
    public function getTimeScadenza(){
        
    }



    /**
     * Get the value of scadenza
     */ 
    public function getScadenza()
    {
        return $this->scadenza;
    }

    /**
     * Set the value of scadenza
     *
     * @return  self
     */ 
    public function setScadenza($scadenza)
    {
        $this->scadenza = $scadenza;

        return $this;
    }

    /**
     * Get the value of ngredients
     */ 
    public function getIngredients()
    {
        return $this->ngredients;
    }

    /**
     * Set the value of ngredients
     *
     * @return  self
     */ 
    public function setIngredients($ngredients)
    {
        $this->ngredients = $ngredients;

        return $this;
    }
}