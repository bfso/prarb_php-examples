<?php

namespace App\J3;

class LootManager {
    public function generateLoot(string $name, Map $map) {

    }

    public static function getAllLoot() : array {
        $items = [];
        $db = new Db();
        $loot = $db->query("SELECT * FROM items;")->all();
        foreach ($loot as $row) {
            $items[$row["id"]] = $row;
        }
        return $items;
    }

    public static function removeItem($i, $j) {
        $db = new Db();
        $db->query("DELETE FROM items WHERE x = " . $i . " AND y = " . $j . ";");
    }
}