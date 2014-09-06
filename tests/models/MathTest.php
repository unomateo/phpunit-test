<?php

class Model_MathTest extends PHPUnit_Framework_TestCase {

    /**
     * @expectedException InvalidArgumentException
     */
    public function testAddInvalidArgumentException(){
            $this->assertEquals(5, Model_Math::add("a",3));
    }

    public function testAddSuccess(){

            $this->assertEquals(5, Model_Math::add(2,3));
    }
    
    public function this_method($param) {
        
    }

}
