<?php

    function isPrime($number) {
        $count = 0;
        if($number < 2) {
            return false;
        }

        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
            $count++;
        }
        return true;
    }

    $n1 =3;
    $n2 = 32856;

    if (isPrime($n1)){
        echo "Prime number";
    } else {
       echo "Not a prime number";
    }
    echo "\n";
    if (isPrime($n2)){
        echo "Prime number";
    } else {
        echo "Not a prime number";
    }