<?php
    
    class Factorial{
        public function calculateFactorial($n) {
            if (is_int($n) && $n >= 0) {
                $factorial = 1;
                for ($i = 2; $i <= $n; $i++) {
                    $factorial *= $i;
                }

            }else {
                $factorial = null;   
            }
            return $factorial;
        }    
    }
