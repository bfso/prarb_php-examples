<?php
namespace App\K2;

use App\Exceptions\NotAllowedException;

class DivisionByZeroReturnsException {
    /**
     * @param $value1
     * @param $value2
     * @return float|int
     * @throws NotAllowedException
     */
    public static function divide($value1, $value2) {
        if ($value2 == 0) {
            throw new NotAllowedException('Division by 0 is not allowed');
        }
        return $value1 / $value2;
    }
}