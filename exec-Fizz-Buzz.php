<?php
    require 'Fizz-Buzz.php';
    
    echo "Test 'Fizz-Buzz' from 1 to 100: \n";
    for ($input = 1;$input<=100;$input++) {
        $ans = fizz_buzz($input);
        echo "$input ==> $ans \n";
    }
?>
