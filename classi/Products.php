<?php
include_once __DIR__ ."/productsClasses/Food.php";
include_once __DIR__ ."/productsClasses/Toys.php";

class Products {

protected $idProduct;
protected $imgProduct;
protected $price;

public function getSconto($value){
    if($value){
        $this->price= 0.8* $this->price;
    }
}

/**
 * Get the value of idProduct
 */ 
public function getIdProduct()
{
return $this->idProduct;
}

/**
 * Set the value of idProduct
 *
 * @return  self
 */ 
public function setIdProduct($idProduct)
{
$this->idProduct = $idProduct;

return $this;
}

/**
 * Get the value of imgProduct
 */ 
public function getImgProduct()
{
return $this->imgProduct;
}

/**
 * Set the value of imgProduct
 *
 * @return  self
 */ 
public function setImgProduct($imgProduct)
{
$this->imgProduct = $imgProduct;

return $this;
}

/**
 * Get the value of price
 */ 
public function getPrice()
{
return $this->price;
}

/**
 * Set the value of price
 *
 * @return  self
 */ 
public function setPrice($price)
{
$this->price = $price;

return $this;
}
}
