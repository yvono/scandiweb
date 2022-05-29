<?php

class Router{
    private $request;
    private $routes = [
        'add-product.html'=>['controller'=>'AddProduct', 'method'=>'showForm'], 
        'index.html'      =>['controller'=>'Homepage', 'method'=>'showHomepage'],
        'add.html'        =>['controller'=>'NewProduct', 'method'=>'insert'],
        'delete.html'     =>['controller'=>'Delete', 'method'=>'delete']
    ];


    public function __construct($request){
        $this->request = $request;
    }
    public function renderController(){
        $request = $this->request;

        if(key_exists($request, $this->routes)){
            $controller = $this->routes["$request"]['controller'];
            $method = $this->routes["$request"]['method'];

            $currentController = new $controller();
            $currentController -> $method();
        }else{
            echo'<h3>404 Error:</h3> The requested page is not available!';
        }
    }
}