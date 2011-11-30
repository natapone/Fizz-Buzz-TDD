<?php
    function fizz_buzz($input) {
        # init
        $fizz_int = 3;
        $buzz_int = 5;
        
        # find Greatest common divisor
        $gcd = $fizz_int;
        
        # set of operations
        $operations = array(
                $fizz_int   => 'Fizz',
                $buzz_int   => 'Buzz',
        );
        
        # calculate
        foreach ($operations as $operation => $ans_str) {
            if($input%$operation == 0 and $input != 0) {
                $ans = $ans_str;
                break;
            }
        }
        
        return $ans;
    }
?>
