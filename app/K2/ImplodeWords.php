<?php

namespace App\K2;

class ImplodeWords {
    public static function implodeWithCommaAtTheEnd($words) {
        $result = "";
        foreach ($words as $word) {
            $result .= ucfirst($word) . ',';
        }
        return $result;
    }

    public static function implodeWithoutCommaAtTheEnd($words) {
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
        return implode(",", $words);
    }
}