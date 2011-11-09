<?php
    require 'Fizz-Buzz.php';
    
    echo "Test 'Fizz-Buzz' type input 'integer' to continue: ";
    $handle = fopen ("php://stdin","r");
    $line = fgets($handle);
    $input = (int)trim($line);
    
    $ans = fizz_buzz($input);
    echo "$input ==> $ans \n";
?>
