<?php
    function fizz_buzz($input) {
        # init
        $fizz_int = 3;
        $buzz_int = 5;
        
        # find Greatest common divisor
        $gcd = $fizz_int * $buzz_int;
        
        # set of operations
        $operations = array(
                $gcd        => 'Fizz-Buzz',
                $buzz_int   => 'Buzz',
                $fizz_int   => 'Fizz',
        );
        
        # default answer is = input
        $ans = $input;
        
        # calculate
        foreach ($operations as $operation => $ans_str) {
            if($input%$operation == 0) {
                $ans = $ans_str;
                break;
            }
        }
        
        return $ans;
    }
?>
