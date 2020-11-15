<?php

namespace App\K1;

class SumOfAnArray {
    public static function sum($values) {
        // Calculate the sum of an given array
        // Here is an example:
        // Given the Variable $values contains [1,4,2]
        // The result have to be 7
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        }
        return $total;
    }
}