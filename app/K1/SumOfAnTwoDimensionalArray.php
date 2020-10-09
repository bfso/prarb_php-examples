<?php
namespace App\K1;

class SumOfAnTwoDimensionalArray {
    public static function sum($values){
        $total = 0;
        foreach ($values as $subValues){
            foreach ($subValues as $subValue) {
                $total += $subValue;
            }
        }
        return $total;
    }
}