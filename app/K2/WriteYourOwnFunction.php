<?php

namespace App\K2;
require_once('app/Contracts/Handleable.php');

use App\Contracts\Handleable;

class WriteYourOwnFunction implements Handleable {
    // Implement a function that returns the string "handled".
    // @todo remove this complete function
    public static function handle() {
        return "handled";
    }
}