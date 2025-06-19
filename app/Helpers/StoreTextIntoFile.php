<?php

namespace App\Helpers;

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
    protected string $filename = "numbers.txt";

    /**
     * @param $value
     * Insert a value at the end of the file.
     */
    public function write($value) : void {
        file_put_contents($this->filename, $value, FILE_APPEND);
    }

    /**
     * @return false|string
     * Reads the file content.
     */
    public function read() : false|string {
        return file_get_contents($this->filename);
    }

    /**
     * Empties the file
     */
    public function clear() : void {
        file_put_contents($this->filename, "");
    }

    /**
     * Deletes the file
     */
    public function delete() : void {
        unlink($this->filename);
    }

    /**
     * @param $value
     * Writes a value to a file and then switches to the next line
     */
    public function writeLine(string $value) : void {
        file_put_contents($this->filename, $value . PHP_EOL, FILE_APPEND);
    }

    /**
     * @return false|string[]
     * Returns the content of the file as an array
     * Every line is an $item in the array
     * @todo Teacher: do not remove this functions content
     */
    public function readAsArray() : false|array {
        $result = explode(PHP_EOL, $this->read());
        unset($result[count($result) - 1]);
        return $result;
    }
}