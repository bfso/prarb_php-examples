<?php

namespace App\J3;

class Bag {
    public function putItemInBag($name) {
        $conn = new mysqli("localhost", "root", "", "test");
        $sql = "INSERT INTO bag_items (name) VALUES ('" . $name . "')";

        if ($conn->query($sql) === true) {

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    public function getAllItemsFromBag() {
        $items = [];
        $conn = new mysqli("localhost", "root", "", "test");
        $sql = "SELECT * FROM bag_items;";
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