<?php
namespace App\K1;

class DivisionByZeroReturnsStringError {
    public static function divide(float $value1, float $value2) : string|float {
        // In this function you have to divide the $value1 through the $value2
        // So for so simple;
        // When the $value2 is 0 we have a problem:
        //  A division through zero is not allowed!
        // In this case, return the string 'Not Allowed'
    }
}