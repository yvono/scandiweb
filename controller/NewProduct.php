<?php

class NewProduct{

    public function insert(){
        if(isset($_POST["size"])){
            if(!empty($_POST["sku"]) AND !empty($_POST["name"]) AND !empty($_POST["price"])  AND !empty($_POST["size"])){
                
                $manager = new ProductManager;
                $manager->insert1();
            }
        }
        
        if(isset($_POST["weight"])){
            if(!empty($_POST["sku"]) AND !empty($_POST["name"]) AND !empty($_POST["price"]) AND !empty($_POST["type"]) AND !empty($_POST["weight"])){
                
                $manager = new ProductManager;
                $manager->insert2();
            }
        }
        
        if(isset($_POST["height"])){
            if(!empty($_POST["sku"]) AND !empty($_POST["name"]) AND !empty($_POST["price"]) AND !empty($_POST["type"]) AND !empty($_POST["height"]) AND !empty($_POST["width"]) AND !empty($_POST["length"])){
                
                $manager = new ProductManager;
                $manager->insert();
            }
        }
        

        


    }
}


