<?php

namespace App\J3;

class LootManager
{
    public function generateLoot($name, $map)
    {

    }

    public static function getAllLoot()
    {
        $items = [];
        $db = new db();
        $loot = $db->query("SELECT * FROM items;")->all();
        foreach ($loot as $row) {
            $items[$row["id"]] = $row;
        }
        return $items;
    }

    public static function removeItem($i,$j){
        $db = new db();
        $db->query("DELETE FROM items WHERE x = ".$i." AND y = ".$j.";");
    }
}