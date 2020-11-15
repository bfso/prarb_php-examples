<?php

namespace App\K2;
require_once('app/Contracts/Handleable.php');

use App\Contracts\Handleable;

// @todo remove this complete class file
class WriteYourOwnClass implements Handleable {
    public static function handle() {
        return "handled";
    }
}