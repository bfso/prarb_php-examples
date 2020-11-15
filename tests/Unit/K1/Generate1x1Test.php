<?php
declare(strict_types=1);
include('app/K1/Generate1x1.php');

use PHPUnit\Framework\TestCase;
use App\K1\Generate1x1;

final class Generate1x1Test extends TestCase {
    /**
     * @test
     */
    public function generate_1_x_1() {
        $expectedResult = [
                [1, 2, 3],
                [2, 4, 6],
                [3, 6, 9]
        ];
        $result = Generate1x1::handle(3);
        $this->assertSame($expectedResult, $result);

        $result = Generate1x1::handle(10);
        $this->assertEquals(4, $result[1][1]);
        $this->assertEquals(12, $result[1][5]);
        $this->assertEquals(12, $result[5][1]);
        $this->assertEquals(40, $result[3][9]);
        $this->assertEquals(49, $result[6][6]);
        $this->assertEquals(100, $result[9][9]);

        if (isset($result[10][11])) {
            $this->assertTrue('false');
        }
    }
}