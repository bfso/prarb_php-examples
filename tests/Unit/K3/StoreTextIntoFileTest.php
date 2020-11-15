<?php
declare(strict_types=1);

require_once('app/K3/StoreTextIntoFile.php');
require_once('app/K3/StoreArrayIntoFile.php');
use App\K3\StoreTextIntoFile;
use App\K3\StoreArrayIntoFile;
use PHPUnit\Framework\TestCase;


class StoreTextIntoFileTest extends TestCase{

    /**
     * @test
     */
    public function read_from_file(){
        $storeHelper = new StoreTextIntoFile();

        // First the file is cleared (so that the file is empty).
        $storeHelper->clear();

        // Than a random string is generated.
        $randomString = $this->generateRandomString();

        // The random string is written into the file.
        $storeHelper->write($randomString);

        // The read method needs to return the content of the file.
        $result = $storeHelper->read();
        $this->assertEquals($randomString,$result);

        // Remove File
        $storeHelper->delete();
    }

    /**
     * @test
     */
    public function write_many_lines_to_file(){
        $storeHelper = new StoreArrayIntoFile();
        $randomStrings = $this->writeRandomLinesIntoAFile($storeHelper);

        // Split the file-content into an array.
        // The file-content is separated by a new line.
        $result = explode(PHP_EOL,$storeHelper->read());

        // Remove the last line.
        $count = count($result);
        unset($result[$count-1]);

        // Check if the result is correct.
        $this->assertEquals($randomStrings,$result);

        // Remove File
        $storeHelper->delete();
    }

    /**
     * @test
     */
    public function get_file_as_array(){
        $storeHelper = new StoreArrayIntoFile();
        $this->assertEquals(
                $this->writeRandomLinesIntoAFile($storeHelper),
                $storeHelper->readAsArray()
        );

        // Remove File
        $storeHelper->delete();
    }

    /**
     * @test
     */
    public function inverse_file_content() {
        $inputValues = [
                'one',
                'two',
                'tree',
        ];
        $expectedResult = [
                'tree',
                'two',
                'one',
        ];
        $storeHelper = new StoreArrayIntoFile();
        $storeHelper->clear();
        $storeHelper->writeArray($inputValues);
        $storeHelper->inverseLines();

        $this->assertEquals(
                $expectedResult,
                $storeHelper->readAsArray()
        );

        // Remove File
        $storeHelper->delete();
    }

    /**
     * @param $storeHelper
     * @return string[]
     */
    protected function writeRandomLinesIntoAFile($storeHelper){
        $storeHelper->clear();
        $randomStrings = [
                $this->generateRandomString(),
                $this->generateRandomString(),
                $this->generateRandomString(),
        ];
        $storeHelper->writeArray($randomStrings);
        return $randomStrings;
    }

    /**
     * @param int $length
     * @return string
     */
    protected function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}