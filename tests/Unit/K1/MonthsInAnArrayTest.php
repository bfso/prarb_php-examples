<?php
declare(strict_types=1);
include('app/K1/MonthsInAnArray.php');

use PHPUnit\Framework\TestCase;
use App\K1\MonthsInAnArray;


final class MonthsInAnArrayTest extends TestCase {
    /**
     * @test
     */
    public function get_month_name_by_its_number() {
        $this->assertEquals("January", MonthsInAnArray::handle(1));
        $this->assertEquals("March", MonthsInAnArray::handle(3));
        $this->assertEquals("December", MonthsInAnArray::handle(12));
    }
}