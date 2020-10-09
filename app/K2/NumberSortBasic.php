<?php
namespace App\K2;

class NumberSortBasic {
    /**
     * @param $numbers
     * @return bool
     */
    public static function sort($numbers) {
         sort($numbers);
         return $numbers;
    }
}