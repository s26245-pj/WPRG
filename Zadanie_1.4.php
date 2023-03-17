<?php

    function return_dateOfBirth($pesel) {

        return substr($pesel,4,2)."-".substr($pesel,2,2)."-".substr($pesel,0,2);
    }
    $pesel = "96031510022";
    echo return_dateOfBirth($pesel);