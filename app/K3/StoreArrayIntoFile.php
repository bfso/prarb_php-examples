<?php

namespace App\K3;

/**
 * Class StoreArrayIntoFile
 *
 * @package App\K3
 *
 *          Here we have a new concept: "extends"
 *          In this class all the methods of the class StoreTextIntoFile
 *          are ready to use
 *
 *          In methods that are not static, its possible to use
 *          $this to access other methods in the same, or the parent class
 *
 */
class StoreArrayIntoFile extends StoreTextIntoFile {

    /**
     * @param $values
     * Inserts an array to the file
     * A new line is used for every value
     */
    public function writeArray($values) {
        foreach ($values as $value) {
            $this->writeLine($value);
        }
    }

    /**
     * @return false|string[]
     * Returns the content of the file as an array
     * Every line is an $item in the array
     * @todo Teacher: do not remove this functions content
     */
    public function readAsArray() {
        $result = explode(PHP_EOL, $this->read());
        unset($result[count($result) - 1]);
        return $result;
    }

    /**
     * This function reads all lines of the file
     * once this is done, all lines are reverted
     * and than stored again
     */
    public function inverseLines() {
        // Read all lines as an array
        $lines = $this->readAsArray();
        // Reverse the array
        $lines = array_reverse($lines);
        // Clear the content of the file
        $this->clear();
        // Write the array back to the file
        $this->writeArray($lines);
    }
}