<?php

namespace App\J3;

class Config {
    const CONFIG = [
            'map-size' => 12
    ];
    public static function get($key) {
        return self::CONFIG[$key];
    }
}