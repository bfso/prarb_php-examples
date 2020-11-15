<?php
declare(strict_types=1);
include('app/K1/PerformChecks.php');

use PHPUnit\Framework\TestCase;
use App\K1\PerformChecks;

final class PerformChecksTest extends TestCase {

    /**
     * @test
     */
    public function checkIfSecondParamIsBigger() {
        $this->assertTrue(PerformChecks::checkIfSecondParamIsBigger(5, 6));
        $this->assertFalse(PerformChecks::checkIfSecondParamIsBigger(7, 3));
        $this->assertFalse(PerformChecks::checkIfSecondParamIsBigger(7, 7));
    }

    /**
     * @test
     */
    public function checkIfParamIsANumber() {
        $this->assertTrue(PerformChecks::checkIfParamIsANumber(5));
        $this->assertTrue(PerformChecks::checkIfParamIsANumber(9));
        $this->assertFalse(PerformChecks::checkIfParamIsANumber("one"));
        $this->assertFalse(PerformChecks::checkIfParamIsANumber("two"));
    }

    /**
     * @test
     */
    public function checkIfParamIsAnArray() {
        $this->assertTrue(PerformChecks::checkIfParamIsAnArray([1, 2]));
        $this->assertFalse(PerformChecks::checkIfParamIsAnArray(9));
        $this->assertFalse(PerformChecks::checkIfParamIsAnArray("one"));
    }
}