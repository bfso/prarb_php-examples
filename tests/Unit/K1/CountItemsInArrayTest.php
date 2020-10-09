<?php
declare(strict_types=1);
include('app/K1/CountItemsInAnArray.php');

use PHPUnit\Framework\TestCase;
use App\K1\CountItemsInAnArray;


final class CountItemsInAnArrayTest extends TestCase {
    /**
     * @test
     */
    public function count_items_in_an_array() {
        $this->assertEquals(3, CountItemsInAnArray::handle([0,2,4]));
        $this->assertEquals(0, CountItemsInAnArray::handle([]));
        $this->assertEquals(2, CountItemsInAnArray::handle(['one','two']));
    }
}