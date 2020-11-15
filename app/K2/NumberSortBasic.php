<?php

namespace App\K2;

class NumberSortBasic {
    public static function sort($numbers) {
        // Given you have an array with some numbers
        // return the numbers as an array in an ascending order
        // e.g. [12,17,5] → [5,12,17]
        sort($numbers);
        return $numbers;
    }
}