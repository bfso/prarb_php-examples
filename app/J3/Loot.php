<?php

namespace App\J3;

class Loot extends FieldContent {
    protected string $key = '';
    protected bool $clickable = false;

    public function setKey(string $key) {
        $this->key = $key;
    }

    public function getKey(): string {
        return $this->key;
    }

    public function isClickable(): bool {
        return $this->clickable;
    }

    public function setClickable(bool $clickable) {
        $this->clickable = $clickable;
    }
}