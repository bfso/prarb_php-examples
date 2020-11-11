<?php
declare(strict_types=1);
include('app/K2/MonthsInAnArrayWithAConstantErrorMessage.php');

use PHPUnit\Framework\TestCase;
use App\K2\MonthsInAnArrayWithAConstantErrorMessage as MonthsInAnArray;


final class MonthsInAnArrayWithAConstantErrorMessageTest extends TestCase {
    /**
     * @test
     */
    public function get_month_name_by_its_number() {
        $this->assertEquals("January", MonthsInAnArray::handle(1));
        $this->assertEquals("March", MonthsInAnArray::handle(3));
        $this->assertEquals("December", MonthsInAnArray::handle(12));
        $this->assertEquals(MonthsInAnArray::ERROR_MESSAGE, MonthsInAnArray::handle('two'));
        $this->assertEquals(MonthsInAnArray::ERROR_MESSAGE, MonthsInAnArray::handle(13));
    }
}