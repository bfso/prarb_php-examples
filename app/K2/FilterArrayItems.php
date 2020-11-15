<?php

namespace App\K2;

class FilterArrayItems {
    public static function handle($fruitsNames) {
        // $values is containing some fruit-names
        // - Create a new array called $filteredValues
        // - The $filteredValues have to contain only some values of the original array
        // - Only fruits starting with the letter B are allowed
        // - In addition, replace all occurrences of "Bananana" with "Banana"
        // Here is an example:
        // $fruitNames = ["Apple", "Kiwi", "Bananana", "Banana"]
        // Then we expect the following:
        // $filteredValues containing ["Banana", "Banana"]
        $filteredValues = [];
        foreach ($fruitsNames as $fruitName) {
            if ($fruitName == "Bananana") {
                $filteredValues[] = "Banana";
            } else if ($fruitName[0] == "B") {
                $filteredValues[] = $fruitName;
            }
        }
        return $filteredValues;
    }
}