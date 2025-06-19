<?php

declare(strict_types=1);
include('app/K1/ArrayAccessItem.php');

use PHPUnit\Framework\TestCase;
use App\K1\ArrayAccessItem;


final class ArrayAccessItemTest extends TestCase {

    protected array $numbers = [
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
        $this->assertEquals(3, ArrayAccessItem::getFirstItem([3,4]));

        // Return the second item of an array
        $this->assertEquals([1,[2,3]], ArrayAccessItem::getSecondItem($this->numbers));
        $this->assertEquals(5, ArrayAccessItem::getSecondItem([3,5,9]));

        // Return the last item
        $this->assertEquals([3,1], ArrayAccessItem::getLastItem($this->numbers));
        $this->assertEquals(9, ArrayAccessItem::getLastItem([3,5,9]));

        // Return the item on a specific position
        $this->assertEquals([3,1], ArrayAccessItem::getItemOnPosition($this->numbers, 2));
        $this->assertEquals([1,2], ArrayAccessItem::getItemOnPosition($this->numbers, 0));

        // Return the second item of the second item
        $this->assertEquals([2,3], ArrayAccessItem::getSecondItemOfSecondItem($this->numbers));
    }
}