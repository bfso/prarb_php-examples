<?php

namespace App\Traits;
use App\Contracts\Handleable;

require_once('app/Contracts/Handleable.php');

trait HandleableTrait {
    public static function handle() : string {
        return Handleable::HANDLED;
    }
}