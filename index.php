<?php
include_once("_config.php");
MyAutoload::start();

if(isset($_GET["r"])){
    $request = $_GET["r"];
}else{
    $request = 'index.html';
}


//include_once(CLASSES.'Router.php');
$router = new Router($request);
$router->renderController();
