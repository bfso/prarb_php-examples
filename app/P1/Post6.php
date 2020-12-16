<?php

namespace App\P1;

class Post6 {
    public static function handle() {
        return date('d.m.Y',strtotime("-1 days"));
    }
}