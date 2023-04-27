<?php

$filename = 'Counter.txt';

if (file_exists($filename)) {
    $count = (int)file_get_contents($filename);
} else {
    $count = 1;
}


$count++;

file_put_contents($filename, (string)$count);


echo "Number of visits: " . $count;