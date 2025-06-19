<?php

namespace App\K1;

class PerformChecks {
    public function checkIfSecondParamIsBigger(float $value1, float $value2) : bool {
        // You have to check if the $value2 is bigger number than $value1
    }

    public function checkIfParamIsANumber(mixed $value) : bool {
        // When $value is an integer, return true
        // When $value is a string (or something other than a integer) return false
    }

    public function checkIfParamIsAnArray(mixed $value) : bool{
        // Return true when the parameter $value is an array
    }
}