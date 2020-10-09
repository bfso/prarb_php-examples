<?php

namespace App\K1;

class Generate1x1 {
    public static function handle() {
        $result = [];
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                $result[$i][$j] = $i * $j;
            }
        }
        return $result;
    }
}