<?php
declare(strict_types=1);
include('app/K1/DivisionByZeroReturnsStringError.php');

use PHPUnit\Framework\TestCase;
use App\K1\DivisionByZeroReturnsStringError;


final class DivisionByZeroReturnsStringErrorTest extends TestCase {
    /**
     * @test
     */
    public function division_of_two_numbers() {
        $values = [
                [12, 6, 2],
                [4, 4, 1],
                [5, 0, 'Not Allowed'],
        ];
        foreach ($values as $value) {
            $result = DivisionByZeroReturnsStringError::divide($value[0], $value[1]);
            $this->assertEquals($value[2], $result);
        }
    }
}
