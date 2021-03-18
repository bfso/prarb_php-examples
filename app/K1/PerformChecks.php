<?php

namespace App\K1;

class PerformChecks {
    public function checkIfSecondParamIsBigger($value1, $value2) {
        // You have to check if the $value2 is bigger number than $value1
    }

    public function checkIfParamIsANumber($value) {
        // When $value is an integer, return true
        // When $value is an string (or something other than a integer) return false
    }

    public function checkIfParamIsAnArray($value){
        // Return true when the parameter $value is an array
    }
}