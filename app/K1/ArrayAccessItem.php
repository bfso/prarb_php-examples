<?php
namespace App\K1;

class ArrayAccessItem {
    public static function getFirstItem($items) {
        return $items[0];
    }

    public static function getSecondItem($items) {
        return $items[1];
    }

    public static function getSecondItemOfSecondItem($items) {
        //return self::getSecondItem(self::getSecondItem($items));
        return $items[1][1];
    }
}