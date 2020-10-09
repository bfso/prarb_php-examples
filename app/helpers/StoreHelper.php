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

    public function storeNewLine($value)
    {
        file_put_contents("numbers.txt", $value.PHP_EOL, FILE_APPEND);
    }

    public function linesAsArray()
    {
        $fileContent = file_get_contents("numbers.txt");
        $lines = explode(PHP_EOL,$fileContent);
        return $lines;
    }

    public function inverseLines(){
        $lines = $this->linesAsArray();
        $lines = array_reverse($lines);

        $this->clear();

        foreach ($lines as $line){
            if(!is_numeric($line)){
                continue;
            }
            $this->storeNewLine($line);
        }
    }

}