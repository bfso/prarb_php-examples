<?php

namespace App\J3;

class Player extends FieldContent {
    private $positionX;
    private $positionY;

    public function __construct($positionX, $positionY) {
        $this->i = $positionX;
        $this->j = $positionY;

        $this->setPositionX($positionX);
        $this->setPositionY($positionY);
    }

    public function hasVision($i, $j) {
        // Returns if a player has vision
        return Vision::hasVision($this->getPositionX(), $this->positionY, $i, $j, 2);
    }

    public function getKey() {
        // Get the players key
        return 'player';
    }

    public function isClickable() {
        return false;
    }

    public function getPositionX() {
        return $this->positionX;
    }

    public function setPositionX($positionX) {
        $this->positionX = $positionX;
    }

    public function getPositionY() {
        return $this->positionY;
    }

    public function setPositionY($positionY) {
        $this->positionY = $positionY;
    }

    public function putItemInBag($loot)
    {
        Bag::putItemInBag($loot);
    }
}