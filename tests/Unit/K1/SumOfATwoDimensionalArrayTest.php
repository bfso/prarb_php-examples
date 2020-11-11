<?php
declare(strict_types=1);
include('app/K1/SumOfATwoDimensionalArray.php');

use PHPUnit\Framework\TestCase;
use App\K1\SumOfATwoDimensionalArray;


final class SumOfATwoDimensionalArrayTest extends TestCase {
    /**
     * @test
     */
    public function sum_of_an_array_of_numbers() {
        $this->assertEquals(15, SumOfATwoDimensionalArray::sum([[1,2],[9,3]]));
        $this->assertEquals(5, SumOfATwoDimensionalArray::sum([[1,1,1],[1,1]]));
    }
}