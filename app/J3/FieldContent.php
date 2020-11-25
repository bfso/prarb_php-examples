<?php

namespace App\J3;

abstract class FieldContent {
    public int $i;
    public int $j;
    public function __construct(int $i, int $j) {
        $this->i = $i;
        $this->j = $j;
    }

    public abstract function getKey();
    public abstract function isClickable();
}