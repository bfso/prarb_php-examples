<?php
declare(strict_types=1);
include('app/K1/SumOfAnTwoDimensionalArray.php');

use PHPUnit\Framework\TestCase;
use App\K1\SumOfAnTwoDimensionalArray;


final class SumOfAnTwoDimensionalArrayTest extends TestCase {
    /**
     * @test
     */
    public function sum_of_an_array_of_numbers() {
        $this->assertEquals(15, SumOfAnTwoDimensionalArray::sum([[1,2],[9,3]]));
        $this->assertEquals(5, SumOfAnTwoDimensionalArray::sum([[1,1,1],[1,1]]));
    }
}