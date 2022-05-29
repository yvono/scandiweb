<?php

class Homepage{


    public function showHomepage(){

        $manager = new ProductManager();
        $products = $manager ->findProducts();

        
        $myView = new View('homepage');
        $myView->render($products); 

        //include(VIEW."homepage.php");

    }

    
}

