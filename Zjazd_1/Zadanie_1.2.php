<?php

function calculateCircleField($radius) {
$field = pi() * pow($radius, 2);
return $field;
}

$radius = 3;

$field = calculateCircleField($radius);

echo "Circle field: $field";