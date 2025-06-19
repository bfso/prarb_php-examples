<?php
declare(strict_types=1);
include('app/K2/NumberSortBasic.php');
require_once 'vendor/autoload.php';

use App\K2\NumberSortBasic;
use PHPUnit\Framework\TestCase;


final class NumberSortBasicTest extends TestCase {
    /**
     * @test
     *
     */
    public function sort_numbers() {
        $numbers = [7,3,4,3,2];
        $this->assertEquals([2,3,3,4,7],NumberSortBasic::sort($numbers));

        $numbers = [random_int(35,100),random_int(10,1000),random_int(15,166)];
        $results = NumberSortBasic::sort($numbers);
        $temp = 0;
        foreach ($results as $number){
            $this->assertGreaterThanOrEqual($temp, $number);
            $temp = $number;
        }
    }
}