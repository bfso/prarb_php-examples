<?php

namespace App\K2;

class ImplodeWords {
    public static function implodeWithCommaAtTheEnd(array $words) : string {
        // You receive an array with words, e.g: ["banana","kiwi"]
        // Create a string which looks like that: "Banana,Kiwi,"
        // Note:
        //          - There should be a comma at the end
        //          - Every first letter of a word should be uppercase!
    }

    public static function implodeWithoutCommaAtTheEnd(array $words) : string {
        // Do the same as in the first function, but remove the last comma
    }

    public static function implodeWithPhpFunction(array $words) : string {
        // Do the same as in the second function, but in one line
        // Use a native php function
    }
}