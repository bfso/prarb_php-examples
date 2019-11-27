<?php

class StoreHelper
{
    public function store($value)
    {
        file_put_contents("numbers.txt", $value, FILE_APPEND);
    }

    public function read()
    {
        return file_get_contents("numbers.txt");
    }

    public function clear()
    {
        file_put_contents("numbers.txt", "");
    }

}