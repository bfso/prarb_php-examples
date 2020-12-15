<?php

namespace App\P1;

use App\J3\Db;

class Post7 {
    public static function handle() {
        $db = new db();
        $all = $db->query("SELECT * FROM items;")->all();
        foreach ($all as $row) {
            $items[] = $row["id"];
        }
        return $items;
    }
}