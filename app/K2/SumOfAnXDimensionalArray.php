<?php
namespace App\K2;

class SumOfAnXDimensionalArray {
    public static function sum($array){
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