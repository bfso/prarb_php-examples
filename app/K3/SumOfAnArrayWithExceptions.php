<?php

namespace App\K3;

use App\Exceptions\NotAnArrayException;
use App\Exceptions\NotANumberException;

/**
 * Class SumOfAnArrayWithExceptions
 *
 * @package App\K3
 */
class SumOfAnArrayWithExceptions {
    /**
     * @param $values
     * @return int|NotANumberException
     * @throws NotANumberException
     * @throws NotAnArrayException
     *
     * Return the sum of all numbers in the $values array
     * → Throw a NotAnArrayException when $values isn't an array
     * → Throw a NotANumberException every time you encounter a value that's not a number
     *
     */
    public static function sum($values) {
        $total = 0;
        if (!is_array($values)) {
            throw new NotAnArrayException();
        }
        foreach ($values as $value) {
            if (!is_numeric($value)) {
                throw new NotANumberException();
            }
            $total += $value;
        }
        return $total;
    }
}