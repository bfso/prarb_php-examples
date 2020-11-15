<?php

namespace App\K1;

class PerformChecks {
    public function checkIfSecondParamIsBigger($value1, $value2) {
        // You have to check if the $value2 is bigger number than $value1
        if($value2 > $value1){
            return true;
        }
        return false;
    }

    public function checkIfParamIsANumber($value) {
        // When $value is an integer, return true
        // When $value is an string (or something other than a integer) return false
        return is_numeric($value);
    }

    public function checkIfParamIsAnArray($value){
        // Return true when the parameter $value is an array
        return is_array($value);
    }
}