<?php

namespace App\J3;
require_once('Db.php');
require_once('Config.php');
require_once('Request.php');
require_once('FieldContent.php');
require_once('Vision.php');
require_once('FieldContentNoVision.php');
require_once('FieldContentVision.php');
require_once('Player.php');
require_once('SimpleMap.php');
require_once('Map.php');
require_once('LootManager.php');
require_once('FieldRenderer.php');

class Game {
    /**
     * @var int
     */
    private int $mapSize;
    /**
     * @var SimpleMap
     */
    private SimpleMap $map;

    public function __construct() {
        $this->mapSize = Config::get('map-size');
        $request = new Request();
        $player = new Player($request->x, $request->y);
        $this->map = new Map($player, $this->mapSize);
    }

    public function table() {
        echo "<table>";
        $this->rows();
        echo "</table>";
    }

    private function rows() {
        for ($i = 0; $i <= $this->mapSize; $i++) {
            echo "<tr>";
            $this->cols($i);
            echo "</tr>";
        }
    }

    private function cols($i) {
        for ($j = 0; $j <= $this->mapSize; $j++) {
            echo "<td>";
            $this->printFieldContent($i, $j);
            echo "</td>";
        }
    }

    private function printFieldContent($i, $j) {
        echo FieldRenderer::fieldHtml(
                $this->map->getFieldContent($i, $j)
        );
    }
}