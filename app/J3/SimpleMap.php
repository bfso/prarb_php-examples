<?php

namespace App\J3;

class SimpleMap {
    protected Player $player;
    protected $mapSize;

    public function __construct($player, $mapSize) {
        $this->player = $player;
        $this->mapSize = $mapSize;
    }

    public function getFieldContent($i, $j) {
        // You have to decide if a player is on a field
        if ($this->isPlayerOnField($i, $j)) {
            // Return the player
            return $this->player;
        }

        // When nothing is on a particular field, return just the players vision
        if ($this->player->hasVision($i, $j)) {
            return new FieldContentVision($i, $j);
        }
        return new FieldContentNoVision($i, $j);
    }

    public function isPlayerOnField($i, $j) {
        // This function returns if a player is on the position $i, $j
        // Use $this->player->getPositionX() to get the players position
        if ($i == $this->player->getPositionX() && $j == $this->player->getPositionY()) {
            return true;
        }
        return false;
    }
}