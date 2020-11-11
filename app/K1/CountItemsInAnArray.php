<?php
namespace App\K1;

class CountItemsInAnArray {
    public static function handle(array $items) {
        // As a parameter you receive a one-dimensional array
        // Count how many items are in that array
        return count($items);
    }
}