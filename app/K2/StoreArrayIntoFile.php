<?php

namespace App\K2;

class StoreArrayIntoFile extends StoreTextIntoFile {

    /**
     * @param $values
     * Inserts an array to an
     */
    public function writeArray($values) {
        foreach ($values as $value) {
            $this->writeLine($value);
        }
    }

    public function readAsArray() {
        $result = explode(PHP_EOL, $this->read());
        unset($result[count($result) - 1]);
        return $result;
    }

    public function inverseLines() {
        $lines = $this->readAsArray();
        $lines = array_reverse($lines);
        $this->clear();
        $this->writeArray($lines);
    }
}