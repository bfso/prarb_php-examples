<?php

namespace App\J3;

class Loot {
    public function generateLoot($name, $map) {

    }

    public function getAllLoot() {
        $items = [];
        $conn = new mysqli("localhost", "root", "", "test");
        $sql = "SELECT * FROM items;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $items[$row["id"]] = $row;
            }
        }
        $conn->close();
        return $items;
    }
}