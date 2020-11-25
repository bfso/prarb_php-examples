<?php

namespace App\K2;

class ImplodeWords {
    public static function implodeWithCommaAtTheEnd($words) {
        // You receive an array with words, e.g: ["banana","kiwi"]
        // Create a string which looks like that: "Banana,Kiwi,"
        // Note:
        //          - There should be a comma at the end
        //          - Every first letter of an word should be uppercase!


    }

    public static function implodeWithoutCommaAtTheEnd($words) {
        // Do the same as in the first function, but remove the last comma
        $result = "";
        for ($i = 0; $i < count($words); $i++) {
            $result .= ucfirst($words[$i]);
            if ($i != count($words) - 1) {
                $result .= ",";
            }
        }
        return $result;
    }

    public static function implodeWithPhpFunction($words) {
        // Do the same as in the second function, but in one line
        // Use a native php function
    }
}