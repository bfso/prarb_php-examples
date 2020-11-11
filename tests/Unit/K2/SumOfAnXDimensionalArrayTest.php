<?php
declare(strict_types=1);
include('app/K2/SumOfAnXDimensionalArray.php');

use PHPUnit\Framework\TestCase;
use App\K2\SumOfAnXDimensionalArray;


final class SumOfAnXDimensionalArrayTest extends TestCase {
    /**
     * @test
     */
    public function sum_of_an_array_of_numbers() {
        $this->assertEquals(15, SumOfAnXDimensionalArray::sum([[1,2],[9,3]]));
        $this->assertEquals(6, SumOfAnXDimensionalArray::sum([[1,1,1],[[1,1],1]]));
        $this->assertEquals(1, SumOfAnXDimensionalArray::sum([1]));
    }
}