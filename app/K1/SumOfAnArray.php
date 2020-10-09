<?php
namespace App\K1;

class SumOfAnArray {
    public static function sum($values){
        $total = 0;
        foreach ($values as $value){
            $total += $value;
        }
        return $total;
    }
}