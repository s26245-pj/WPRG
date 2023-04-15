<?php
function recursiveFactorial($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * recursiveFactorial($n - 1);
    }
}

function nonRecursiveFactorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

$n = 2253535;

$recursiveStart = microtime(true);
$recursiveResult = recursiveFactorial($n);
$recursiveEnd = microtime(true);

$recursiveTime = $recursiveEnd - $recursiveStart;

echo "Time for recursiveFactorial function: $recursiveTime \n";

$nonRecursiveStart = microtime(true);
$nonRecursiveResult = nonRecursiveFactorial($n);
$nonRecursiveEnd = microtime(true);

$nonRecursiveTime = $nonRecursiveEnd - $nonRecursiveStart;

echo "Time for nonRecursiveFactorial function: $nonRecursiveTime";



if ($recursiveTime < $nonRecursiveTime) {
    $timeDifference = $nonRecursiveTime - $recursiveTime;
    $fasterFunction = "Recursive function";
} else  {
    $timeDifference = $recursiveTime - $nonRecursiveTime ;
    $fasterFunction = "Non Recursive function";
    }

echo "\n$fasterFunction was $timeDifference faster";










