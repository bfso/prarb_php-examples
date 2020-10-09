<?php
declare(strict_types=1);
include('app/K1/SumOfAnArray.php');

use PHPUnit\Framework\TestCase;
use App\K1\SumOfAnArray;


final class SumOfAnArrayTest extends TestCase {
    /**
     * @test
     */
    public function sum_of_an_array_of_numbers() {
        $this->assertEquals(2, SumOfAnArray::sum([1,1]));
        $this->assertEquals(1, SumOfAnArray::sum([1]));
        $this->assertEquals(6, SumOfAnArray::sum([1,5]));
    }
}