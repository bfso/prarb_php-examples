<?php
declare(strict_types=1);
include('app/K2/SumOfAnArrayWithExceptions.php');
include('app/Exceptions/NotANumberException.php');
include('app/Exceptions/NotAnArrayException.php');

use App\Exceptions\NotAnArrayException;
use App\Exceptions\NotANumberException;
use App\K2\SumOfAnArrayWithExceptions;
use PHPUnit\Framework\TestCase;


final class SumOfAnArrayWithExceptionsTest extends TestCase {
    /**
     * @test
     */
    public function sum_of_an_array_false_as_parameter() {
        $this->expectException(NotAnArrayException::class);
        $this->assertEquals(2, SumOfAnArrayWithExceptions::sum(false));
    }

    /**
     * @test
     */
    public function sum_of_an_array_not_a_number_as_parameter() {
        $this->expectException(NotANumberException::class);
        $this->assertEquals(2, SumOfAnArrayWithExceptions::sum([1,'not-a-number']));
    }

    /**
     * @test
     */
    public function sum_of_an_array() {
        $this->assertEquals(2, SumOfAnArrayWithExceptions::sum([1,1]));
        $this->assertEquals(4, SumOfAnArrayWithExceptions::sum([2,2]));
    }

}