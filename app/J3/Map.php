<?php

namespace App\J3;

class Map extends SimpleMap {
    protected $items = [];

    public function __construct($player, $mapSize) {
        parent::__construct($player, $mapSize);
        $this->items = LootManager::getAllLoot();
    }

    public function getFieldContent($i, $j) {
        // Search your loot array, when there is a loot on the
        // position i,j then assign it to the variable item
        $loot = $this->getLootOnField($i, $j);

        // Than you have to decide if a player is on a field
        if ($this->isPlayerOnField($i, $j)) {
            // When a item is on that position
            // pick it up and put it in the players bag
            $this->pickUpItemAndPutItInTheBag($loot, $i, $j);
            // Return the player
            return $this->player;
        }

        // Return the loot, if there is any
        if ($loot) {
            return $loot;
        }

        // When nothing is on a particular field, return just the players vision
        if ($this->player->hasVision($i, $j)) {
            return new FieldContentVision($i, $j);
        }
        return new FieldContentNoVision($i, $j);
    }

    public function getLootOnField($i, $j) {
        foreach ($this->items as $item) {
            if ($item['x'] == $i && $item['y'] == $j) {
                $loot = new Loot($i, $j);
                $loot->setKey($item['name']);
                $loot->setClickable($this->player->hasVision($i, $j));
                return $loot;
            }
        }
        return false;
    }

    private function pickUpItemAndPutItInTheBag($loot, $i, $j) {
        if ($loot) {
            $this->removeItemFromMap($i, $j);
            $this->player->putItemInBag($loot);
        }
    }

    public function removeItemFromMap($i, $j) {
        LootManager::removeItem($i, $j);
    }
}