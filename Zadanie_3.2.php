<?php
    function multipleRollDice($rolls) {
        $results_arr = array();
        for ($i = 0; $i < $rolls; $i++) {
            $results_arr[] = rand(1, 6);
        }
        return $results_arr;
    }

    print_r(multipleRollDice(5));

