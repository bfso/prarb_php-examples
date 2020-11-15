<?php

namespace App\K3;

/**
 * Class StoreTextIntoFile
 *
 * @package App\K3
 *
 *
 *          The methods of this class are not static anymore
 *          you can now access its properties with $this->
 *          e.g. $this->filename
 *
 */
class StoreTextIntoFile {
    /**
     * @var string
     */
    protected $filename = "numbers.txt";

    /**
     * @param $value
     * Insert a value at the end of the file.
     */
    public function write($value) {
        file_put_contents($this->filename, $value, FILE_APPEND);
    }

    /**
     * @return false|string
     * Reads the file content.
     */
    public function read() {
        return file_get_contents($this->filename);
    }

    /**
     * Empties the file
     */
    public function clear() {
        file_put_contents($this->filename, "");
    }

    /**
     * Deletes the file
     */
    public function delete() {
        unlink($this->filename);
    }

    /**
     * @param $value
     * Writes a value to a file and then switches to the next line
     */
    public function writeLine($value) {
        file_put_contents($this->filename, $value . PHP_EOL, FILE_APPEND);
    }
}