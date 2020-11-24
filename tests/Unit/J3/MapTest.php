<?php
declare(strict_types=1);

require_once('app/J3/Map.php');

use App\J3\Map;
use PHPUnit\Framework\TestCase;

class MapTest extends TestCase {
    /**
     * @test
     */
    public function has_vision() {
        $map = new Map();
    }
}