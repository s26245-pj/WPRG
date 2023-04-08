<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];
        $result = 0;
        $err = false;

        switch ($operation) {
            case "+":
                $result = $number1 + $number2;
                break;
            case "-":
                $result = $number1 - $number2;
                break;
            case "*":
                $result = $number1 * $number2;
                break;
            case "/":
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    echo "You can't divide by 0!";
                    $err = true;
                }
                break;
            default:
                echo " Something went wrong...";
                $err = true;
        }
        if (!$err) {
            echo "Result of $number1 $operation $number2 = $result";
        } else {
            echo "something went wrong...";
        }
    }