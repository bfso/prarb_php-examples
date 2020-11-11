<?php

namespace App\K1;

class Generate1x1 {
    public static function handle() {
        // Here you need to generate an array which contains
        // an 1x1 from 1 to 10
        $result = [];
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                $result[$i][$j] = $i * $j;
            }
        }
        return $result;
    }
}