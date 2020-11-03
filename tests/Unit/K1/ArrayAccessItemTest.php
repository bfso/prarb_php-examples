<?php
declare(strict_types=1);
include('app/K1/ArrayAccessItem.php');

use PHPUnit\Framework\TestCase;
use App\K1\ArrayAccessItem;


final class ArrayAccessItemTest extends TestCase {

    protected $numbers = [
            [1,2],
            [1,[2,3]],
            [3,1]
        ];

    /**
     * @test
     */
    public function return_part_of_array() {
        // Return the first item of an array
        $this->assertEquals([1,2], ArrayAccessItem::getFirstItem($this->numbers));

        // Return the second item of an array
        $this->assertEquals([1,[2,3]], ArrayAccessItem::getSecondItem($this->numbers));

        // Return the second item of the second item
        $this->assertEquals([2,3], ArrayAccessItem::getSecondItemOfSecondItem($this->numbers));
    }
}