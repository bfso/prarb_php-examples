<?php

namespace App\P1;

class Post4 {
    public static function handle($numbers) {
        sort($numbers);
        return $numbers[sizeof($numbers)-2];
    }
}