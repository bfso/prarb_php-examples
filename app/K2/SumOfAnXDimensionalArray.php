<?php
namespace App\K2;

class SumOfAnXDimensionalArray {
    public static function sum($array){
        // Calculate the sum of an array that has more than two dimensions
        // try to write as little code as possible
        $sum = 0;
        foreach($array as $item){
            if(is_array($item)){
                $sum += self::sum($item);
            }else{
                $sum += $item;
            }
        }
        return $sum;
    }
}