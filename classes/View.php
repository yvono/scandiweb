<?php

class View{

    private $template;

    public function __construct($template){
        $this->template = $template;
    }

    public function render($products){
        $template = $this->template;
        include_once(VIEW.$template.'.php');
        //return $products;
    }
}