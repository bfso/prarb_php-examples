<?php

namespace App\J3;

class Bag {
    public static function putItemInBag(FieldContent $item) {
        $db = new Db();
        $db->query("INSERT INTO bag_items (name) VALUES ('" . $item["name"] . "')");
    }

    public static function getAllItemsFromBag() : array {
        $items = [];
        $db = new Db();
        $itemsFromBag = $db->query("SELECT * FROM bag_items;")->all();
        foreach ($itemsFromBag as $row) {
            $items[$row["id"]] = $row;
        }
        return $items;
    }
}