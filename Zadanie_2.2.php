<?php

    function what_is_my_nationality($country) {
        $nationalities = array (
            "Poland" => "Polish",
            "England" => "English",
            "China" => "Chinese",
            "Greece" => "Greek",
            "France" => "French",
            "Hungary" => "Hungarian",
            "Iran" => "Iranian"
        );
        if (array_key_exists($country, $nationalities)) {
            return $nationalities[$country];
        } else {
            return "Don't have Your nationality on my list.";
        }
    }

    $country = "Iran";
    $country1 = "China";
    $nationality1 = what_is_my_nationality($country);
    $nationality2 = what_is_my_nationality($country1);

    echo "Your nationality is $nationality1 and his nationality is $nationality2";

