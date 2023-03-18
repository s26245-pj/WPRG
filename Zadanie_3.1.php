<?php

    $random_array= array();
    for ($i = 0; $i < 10; $i++) {
    $random_array[] = rand (1,50);
    }

    // FOR LOOP
    function find_max_for($random_array) {
        $max = $random_array[0];
        for ($i = 1; $i < sizeof($random_array); $i++) {
            if ($random_array[$i] > $max) {
                $max = $random_array[$i];
            }
        }
        return $max;
    }

    foreach ($random_array as $value ){
        echo $value." ";
    }
    echo "\n";
    echo find_max_for($random_array);

    //WHILE
    function find_max_while($random_array) {
        $max = $random_array[0];
        $i = 1;
        while ($i < sizeof($random_array)) {
            if ($random_array[$i] > $max) {
                $max = $random_array[$i];
            }
            $i++;
        }
        return $max;
    }

    echo "\n";
    echo find_max_while($random_array);

    // DO WHILE
    function find_max_do_while($random_array) {
        $max = $random_array[0];
        $i = 1;
        do {if ($random_array[$i] > $max) {
                $max = $random_array[$i];
            }
            $i++;
        } while ($i < sizeof($random_array));
        return $max;
    }

    echo "\n";
    echo find_max_do_while($random_array);

    // FOR EACH
    function find_max_for_each($random_array) {
        $max = $random_array[0];
        foreach ($random_array as $value) {
            if($value > $max) {
                $max = $value;
            }
        }
        return $max;
    }

    echo "\n";
    echo find_max_for_each($random_array);



