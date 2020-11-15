<?php
namespace App\K1;

class ArrayAccessItem {
    public static function getFirstItem(array $items) {
        // Complete this function to return the first item of an given
        // array, use the keyword "return" to give back the value.
        return $items[0];
    }

    public static function getSecondItem(array $items) {
        // Complete this function to give back
        // the second item of an given array.
        return $items[1];
    }

    public static function getLastItem(array $items){
        // Complete this function and return the
        // last item of an one-dimensional array.
        $itemsCount = count($items)-1;
        return $items[$itemsCount];
    }

    public static function getItemOnPosition($item, $index){
        // Return the correct item
        return $item[$index];
    }

    public static function getSecondItemOfSecondItem(array $twoDimensionalArray) {
        // In this function a two dimensional array is passed as parameter,
        // complete the function to return the second item of the second item
        return $twoDimensionalArray[1][1];
    }
}