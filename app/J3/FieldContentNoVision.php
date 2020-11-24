<?php

namespace App\J3;

class FieldContentNoVision extends FieldContent {
    public function getKey() {
        return "gray";
    }
    public function isClickable() {
        return false;
    }
}