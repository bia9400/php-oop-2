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
    public function checkout($indexPagamento){
        $cartTotal=$this->getTotal();
        $totalDiscount=$this->getSconto()* $cartTotal;
        if($cartTotal!=$totalDiscount){
            echo "Hai ottenuto uno sconto grazie alla tua registrazione.Il saldo è: ".$totalDiscount."$ <br><br>";
        }
        else{
            echo "Non sei registrato, prezzo pieno per te: ".$totalDiscount."$ <br><br>";
        }
        if($indexPagamento->getExpiration()<=2022){
            echo "La carta che hai selezionato: ".$indexPagamento->getType()." numero: ".$indexPagamento->getNumber()." scade il: ".$indexPagamento->getExpiration()." cambia metodo di pagamento";
        }
        else{
            echo "Acquisto effettuato";
        }
        
        
    }
}