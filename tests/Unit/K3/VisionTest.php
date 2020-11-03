<?php
declare(strict_types=1);

require_once('app/K3/Vision.php');

use App\K3\Vision;
use PHPUnit\Framework\TestCase;

class VisionTest extends TestCase {
    /**
     * @test
     */
    public function has_vision() {
        $vision = new Vision(1);
        $currentPosition = [2, 2];

        $maps = [
                [
                        [false, false, false, false, false,],
                        [false, false, false, false, false,],
                        [false, false, true, false, false,],
                        [false, false, false, false, false,],
                        [false, false, false, false, false,],
                ],
                [
                        [false, false, false, false, false,],
                        [false, true, true, true, false,],
                        [false, true, true, true, false,],
                        [false, true, true, true, false,],
                        [false, false, false, false, false,],
                ],


        ];

        foreach ($maps as $map) {
            foreach ($map as $i => $row) {
                foreach ($row as $j => $field) {
                    if ($field) {
                        $this->assertTrue($vision->hasVision($currentPosition[0], $currentPosition[1], $i, $j));
                    } else {
                        $this->assertFalse($vision->hasVision($currentPosition[0], $currentPosition[1], $i, $j));
                    }
                }
            }
            $vision->increase();
        }
    }
}