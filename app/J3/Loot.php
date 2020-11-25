<?php


namespace App\J3;

class Loot extends FieldContent
{
    protected $key = '';
    protected $clickable = false;

    public function setKey($key){
        $this->key = $key;
    }

    public function getKey()
    {
       return $this->key;
    }

    public function isClickable()
    {
        return $this->clickable;
    }

    public function setClickable($clickable){
        $this->clickable = $clickable;
    }
}