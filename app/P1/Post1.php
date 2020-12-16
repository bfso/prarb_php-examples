<?php

namespace App\P1;
include('app/J3/Db.php');

class Post1 {
    public static function handle($sentence, $replaceBy) {
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        return str_replace($vowels, $replaceBy, $sentence);
    }
}