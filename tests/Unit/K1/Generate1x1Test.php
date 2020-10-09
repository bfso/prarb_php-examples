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
        $result = Generate1x1::handle();
        $this->assertEquals(1, $result[1][1]);
        $this->assertEquals(5, $result[1][5]);
        $this->assertEquals(5, $result[5][1]);
        $this->assertEquals(30, $result[3][10]);
        $this->assertEquals(36, $result[6][6]);
        $this->assertEquals(100, $result[10][10]);

        if(isset($result[10][11])){
            $this->assertTrue('false');
        }
    }
}