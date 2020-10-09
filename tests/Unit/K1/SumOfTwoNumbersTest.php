<?php
declare(strict_types=1);
include('app/K1/SumOfTwoNumbers.php');

use PHPUnit\Framework\TestCase;
use App\K1\SumOfTwoNumbers;


final class SumOfTwoNumbersTest extends TestCase {
    /**
     * @test
     */
    public function sum_of_two_numbers() {
        $this->assertEquals(2, SumOfTwoNumbers::sum(1, 1));
        $this->assertEquals(0, SumOfTwoNumbers::sum(0, 0));
    }
}