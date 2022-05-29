<?php

Class Product{
    protected $id;
    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    protected $attribute;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getSku(){
        return $this->sku;
    }
    public function setSku($sku){
        $this->sku = $sku;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function getType(){
        return $this->type;
    }
    public function setType($type){
        $this->type = $type;
    }
    public function getAttribute(){
        return $this->attribute;
    }
    public function setAttribute($attribute){
        $this->attribute = $attribute;
    }
    /*
    public function __construct($a, $b, $c, $d, $e)
    {
        function validData($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $this ->sku = validData($a);
        $this ->name = validData($b);
        $this ->price = validData($c);
        $this ->type = validData($d);
        $this ->attribute = validData($e);
    }
    /*
    
    public function insertValue(){
        require_once('config.php');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sth = $bdd->prepare(
            "INSERT INTO product (sku, name, price, type, attribute) 
             VALUES (:sku, :name, :price, :type, :attribute)"
             );
             $sth->bindParam(':sku', $this->sku);
             $sth->bindParam(':name', $this->name);
             $sth->bindParam(':price', $this->price);
             $sth->bindParam(':type', $this->type);
             $sth->bindParam(':attribute', $this->attribute);
             $sth->execute();
            header("Location:".ROOT."add-product.html");
    }

    */

    
}