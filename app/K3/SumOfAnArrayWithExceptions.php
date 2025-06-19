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
     * @return float|int|NotANumberException
     * @throws NotANumberException
     * @throws NotAnArrayException
     *
     * Return the sum of all numbers in the $values array
     * → Throw a NotAnArrayException when $values isn't an array
     * → Throw a NotANumberException every time you encounter a value that's not a number
     *
     */
    public static function sum($values) : float|int|NotANumberException {

    }
}