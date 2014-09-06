<?php

class Model_Math {
    
    public static function add($a, $b){

        if( ! is_numeric($a) || ! is_numeric($b) ){
            throw new InvalidArgumentException("Arguments must be numeric", 10);
        }

        return $a + $b;
    } 

    private function verify_arguments($argument) {

    } 

}
