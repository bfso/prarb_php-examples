<?php
namespace App\K2;

use App\Exceptions\NotAnArrayException;
use App\Exceptions\NotANumberException;

class SumOfAnArrayWithExceptions {
    /**
     * @param $values
     * @return int|mixed
     * @throws NotANumberException
     * @throws NotAnArrayException
     */
    public static function sum($values) {
        $total = 0;
        if(!is_array($values)){
            throw new NotAnArrayException();
        }
        foreach ($values as $value){
            if(!is_numeric($value)){
                throw new NotANumberException();
            }
            $total += $value;
        }
        return $total;
    }
}