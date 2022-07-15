<?php

trait Cart{

    private $products=[];
    
    public function setProducts($_product){
        $this->products[]=$_product;
    }
    /**
     * Get the value of products
     */ 
    public function getProducts()
    {
        return $this->products;
    }
    public function getTotal(){
        $total=0;
        foreach($this->products as $product){
            $total+=$product->getPrice();
        }
        return $total;
    }
    public function getSconto()
    {
        if ($this->status) {
            return 0.8;
        }
        else {
            return 1;
        }
    }
    public function checkout(){
        $cartTotal=$this->getTotal();
        $totalDiscount=$this->getSconto()* $cartTotal;
        
    }
}