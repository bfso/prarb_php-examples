<?php

namespace App\J3;

class Bag {
    public static function putItemInBag($item) {
        $db = new db();
        $loot = $db->query("INSERT INTO bag_items (name) VALUES ('" . $item["name"] . "')")->all();
    }

    public static function getAllItemsFromBag() {
        $items = [];
        $db = new db();
        $loot = $db->query("SELECT * FROM bag_items;")->all();
        foreach ($loot as $row) {
            $items[$row["id"]] = $row;
        }
        return $items;
    }
}