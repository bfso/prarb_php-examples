<?php
namespace App\K1;

class DivisionByZeroReturnsStringError {
    public static function divide($value1, $value2) {
        if ($value2 == 0) {
            return 'Not Allowed';
        }
        return $value1 / $value2;
    }
}