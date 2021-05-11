<?php
 class Product {

 private $product = [];

 function __construct($product){ 
     $this->product = $product;
 }

 public function getProduct(){ 
     echo $this->product; 
  }
 }

 $instance = new Product('test'); 

 $instance->getProduct(); 
 echo '<br>';

?>