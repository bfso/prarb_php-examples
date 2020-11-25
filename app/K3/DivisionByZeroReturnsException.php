<?php
namespace App\K3;

use App\Exceptions\NotAllowedException;

class DivisionByZeroReturnsException {
    /**
     * @param $value1
     * @param $value2
     * @return float|int
     * @throws NotAllowedException
     */
    public static function divide($value1, $value2) {
        // Return a NotAllowedException when $value 2 is 0
        // Otherwise divide

    }
}