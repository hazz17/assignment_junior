<?php

function calculatePower($voltage, $current) {
    return $voltage * $current;
}

function calculateEnergy($power, $hours) {
    return ($power * $hours) / 1000;
}

function calculateTotal($energy, $rate) {
    return $energy * ($rate / 100);
}

function validateInput($voltage, $current, $rate) {
    return ($voltage > 0 && $current > 0 && $rate > 0);
}
