<?php

namespace App\K1;

class Generate1x1 {
    public static function handle($limit) {
        // Here you need to generate an array which contains an 1x1 from 1 to $limit
        // Here is an example (Given $limit is 3):
        // $result = [
        //      [1,2,3],
        //      [2,4,6],
        //      [3,6,9]
        // ]
        // Hint: The arrays need to start on index 0 not 1!
        $result = [];
        for ($i = 1; $i <= $limit; $i++) {
            for ($j = 1; $j <= $limit; $j++) {
                $result[$i - 1][$j - 1] = $i * $j;
            }
        }
        return $result;
    }
}