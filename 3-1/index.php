<?php
    $num = 1;
    $string ="null";
    while($num <= 100){
        if($num % 3 == 0 && $num % 5 == 0){
            $string = "FizzBuzz!";
            echo $string;
            echo '<br>';
        }elseif($num % 5 == 0){
            $string = "Buzz!";
            echo $string;
            echo '<br>';
        }elseif
        ($num % 3 == 0){
            $string = "Fizz!";
            echo $string;
            echo '<br>';
        }else{
            echo $num;
            echo '<br>';
        }
        $num++;
    }
?>