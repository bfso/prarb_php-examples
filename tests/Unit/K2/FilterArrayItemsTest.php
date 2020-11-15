<?php
declare(strict_types=1);
include('app/K2/FilterArrayItems.php');

use PHPUnit\Framework\TestCase;
use App\K2\FilterArrayItems;

final class FilterArrayItemsTest extends TestCase {
    /**
     * @test
     */
    public function run_banana_filter() {
        $this->assertSame(["Banana", "Banana"], FilterArrayItems::handle(['Pinapple', 'Bananana', 'Banana']));
        $this->assertSame([], FilterArrayItems::handle([]));
        $this->assertSame(["Banana"], FilterArrayItems::handle(['Kiwi', 'Banana']));
        $this->assertSame(["Babaco", "Bacuri", "Banana"], FilterArrayItems::handle(['Babaco', 'Bacuri', 'Banana']));
    }
}