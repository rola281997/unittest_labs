<?php
   // require 'lib/Factorial.php';

    class FactorialTest extends \PHPUnit\Framework\TestCase
    {
        public function setup() : void {
            $this->fact = new Factorial();
        }
        
        public function test_factorial_of_0(){
            $this->assertEquals(1, $this->fact->calculateFactorial(0));  
        }
        
        public function test_factorial_of_1(){
            $this->assertEquals(1, $this->fact->calculateFactorial(1));  
        }
        
        
        public function test_factorial_of_5(){
            $this->assertEquals(120, $this->fact->calculateFactorial(5));  
        }
        
        public function test_factorial_of_random_number_n_greater_than_3(){
            $this->assertEquals(24, $this->fact->calculateFactorial(4));  
        }
        
        public function test_factorial_of_negative_3(){
            $this->assertEquals(null, $this->fact->calculateFactorial(-3));  
        }
        
        public function test_factorial_of_one_and_half(){
            $this->assertEquals(null, $this->fact->calculateFactorial(1.5));  
        }
        
        public function test_factorial_of_false(){
            $this->assertEquals(null, $this->fact->calculateFactorial(false));  
        }
        
        public function test_factorial_of_Alphaptic_ABC(){
            $this->assertEquals(null, $this->fact->calculateFactorial('ABC'));  
        }
        
    }
