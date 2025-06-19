<?php
namespace App\K3;

use App\Exceptions\NotAllowedException;

class DivisionByZeroReturnsException {
    /**
     * @param float $value1
     * @param float $value2
     * @return float
     * @throws NotAllowedException
     */
    public static function divide(float $value1, float $value2) : float {
        // Throw a NotAllowedException when $value 2 is 0
        // Otherwise divide

    }
}