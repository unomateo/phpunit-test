<?php

class Controller_Home extends Controller_Base{
    
    public function index(){
        echo "Hello";
    }

    public function math(){
        $math = new Model_Math();
        echo $math->add(2,6);
    }

}