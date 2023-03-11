<?php
function rollDice() {
    $result = rand(1, 6);
    return $result;
}

echo rollDice();
