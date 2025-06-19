<?php

namespace App\K3;

use App\Helpers\StoreTextIntoFile;

/**
 * Class StoreArrayIntoFile
 *
 * @package App\K3
 *
 *          Here we have a new concept: "extends"
 *          In this class all the methods of the class StoreTextIntoFile
 *          are ready to use.
 *
 *          In methods that are not static, it's possible to use
 *          $this to access other methods in the same, or the parent class
 *
 */
class StoreArrayIntoFile extends StoreTextIntoFile {

    /**
     * @param $values
     * Inserts an array into the file
     * A new line is used for every value in the array
     * use the write line function
     */
    public function writeArray($values) : void {

    }

    /**
     * This function reads all lines of the file
     * once this is done, all lines are reverted
     * and then stored again
     */
    public function inverseLines() : void {
        // Read all lines as an array
        $lines = $this->readAsArray();

        // Reverse the array


        // Clear the content of the file


        // Write the array back to the file

    }
}