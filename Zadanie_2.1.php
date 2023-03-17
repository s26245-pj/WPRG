<?php
    function get_value_by_index($index) {

        $random_values = array();
        for ($i = 0; $i < 10; $i++) {
            $random_values[] = rand (1,50);
        }

        if ($index >= 0 && $index < count($random_values)) {
            return $random_values[$index];
        } else return "Chosen index out of array range";
    }

    $index = 5;
    $value = get_value_by_index($index);
    echo "Value of chosen index is $value";