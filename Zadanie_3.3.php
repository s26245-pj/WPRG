<?php
    function generate_multiplicationTable($size){
        for ($i = 1; $i <= $size; $i++) {
            for ($j = 1; $j <= $size; $j++){
                $result = $i *$j;
                $space = str_repeat(' ', 5 - strlen($result));
                echo $result.$space;
            }
            echo "\n";
        }
    }

generate_multiplicationTable(10);
