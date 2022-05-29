<?php

class ProductManager{

    private $bdd;

    public function __construct()
    {
        $this->bdd = new PDO('mysql:host=localhost;dbname=scandiweb', 'root', '');
    }


    public function findProducts(){
        $bdd= $this->bdd;
        $query = "SELECT * FROM product";
        $req = $bdd->prepare($query);
        $req ->execute();
        while($row = $req->fetch(PDO::FETCH_ASSOC)){

            $product = new Product();
            $product->setId($row['id']);
            $product->setSku($row['sku']);
            $product->setName($row['name']);
            $product->setPrice($row['price']);
            $product->setType($row['type']);
            $product->setAttribute($row['attribute']);

            $products[] = $product;
        };
        if(!empty($products)){return $products;}
    }

    public function insert(){
        $new = new Product();
                $new->setSku($_POST["sku"]);
                $new->setName($_POST["name"]);
                $new->setPrice($_POST["price"]);
                $new->setType($_POST["type"]);
                $new->setAttribute($_POST["height"].'x'.$_POST["width"].'x'.$_POST["length"]);
        $bdd = $this->bdd;
        //$bdd = $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO product (sku, name, price, type, attribute) VALUES (:sku, :name, :price, :type, :attribute)";
        $req = $bdd->prepare($query);
        $req->bindParam(':sku', $new->getSku());
        $req->bindParam(':name', $new->getName());
        $req->bindParam(':price', $new->getPrice());
        $req->bindParam(':type', $new->getType());
        $req->bindParam(':attribute', $new->getAttribute());
        $req->execute();

        header('Location: '.HOST.'add-product.html');
    }
    public function insert1(){
        $new = new Product();
        $new->setSku($_POST["sku"]);
        $new->setName($_POST["name"]);
        $new->setPrice($_POST["price"]);
        $new->setType($_POST["type"]);
        $new->setAttribute($_POST["size"]."MB");
        $bdd = $this->bdd;
        //$bdd = $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO product (sku, name, price, type, attribute) VALUES (:sku, :name, :price, :type, :attribute)";
        $req = $bdd->prepare($query);
        $req->bindParam(':sku', $new->getSku());
        $req->bindParam(':name', $new->getName());
        $req->bindParam(':price', $new->getPrice());
        $req->bindParam(':type', $new->getType());
        $req->bindParam(':attribute', $new->getAttribute());
        $req->execute();

        header('Location: '.HOST.'add-product.html');
    }
    public function insert2(){
        $new = new Product();
        $new->setSku($_POST["sku"]);
        $new->setName($_POST["name"]);
        $new->setPrice($_POST["price"]);
        $new->setType($_POST["type"]);
        $new->setAttribute($_POST["weight"]."KG");
        $bdd = $this->bdd;
        //$bdd = $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO product (sku, name, price, type, attribute) VALUES (:sku, :name, :price, :type, :attribute)";
        $req = $bdd->prepare($query);
        $req->bindParam(':sku', $new->getSku());
        $req->bindParam(':name', $new->getName());
        $req->bindParam(':price', $new->getPrice());
        $req->bindParam(':type', $new->getType());
        $req->bindParam(':attribute', $new->getAttribute());
        $req->execute();

        header('Location: '.HOST.'add-product.html');
    }
    public function delete($value){
        $bdd = $this->bdd;
        $req = $bdd->prepare("DELETE FROM product WHERE id = '". $value."'");
        //$req -> bindParam(':id', $value);
        $req -> execute();
        header('Location:'.HOST);
        

    }
    

} 