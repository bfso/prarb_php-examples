<?php

namespace App\J3;

abstract class FieldContent
{
    public $i;
    public $j;
    public function __construct($i,$j) {
        $this->i = $i;
        $this->j = $j;
    }

    public abstract function getKey();
    public abstract function isClickable();
}