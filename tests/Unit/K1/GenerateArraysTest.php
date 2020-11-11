<?php
declare(strict_types=1);
include('app/K1/GenerateArrays.php');

use PHPUnit\Framework\TestCase;
use App\K1\GenerateArrays;

final class GenerateArraysTest extends TestCase {

    /**
     * @test
     */
    public function generate_arrays() {
        $this->assertEquals([1,2,3],GenerateArrays::generateAnArrayWithThreeNumbers());
        $this->assertEquals(["hello","salve","welcome"],GenerateArrays::generateAnArrayWithThreeStrings());
        $this->assertEquals([[1,2,3],[2,4,6],],GenerateArrays::generateATwoDimensionalArray());
        $this->assertEquals([["one","two"],["three","four"],],GenerateArrays::generateATwoDimensionalArrayWithStrings());
        $this->assertEquals(["name" => "Jean", "age" => 48,],GenerateArrays::generateAnArrayWithStringsAsIndexes());
    }
}