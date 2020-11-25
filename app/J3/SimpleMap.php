<?php

namespace App\J3;

class SimpleMap {
    protected Player $player;
    protected int $mapSize;

    public function __construct(Player $player, int $mapSize) {
        $this->player = $player;
        $this->mapSize = $mapSize;
    }

    public function getFieldContent(int $i, int $j) {
        // You have to decide if a player is on the current field
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

    public function isPlayerOnField(int $i, int $j) {
        // This function returns if a player is on the position $i, $j
        // Use $this->player->getPositionX() to get the players position
        if ($i == $this->player->getPositionX() && $j == $this->player->getPositionY()) {
            return true;
        }
        return false;
    }
}