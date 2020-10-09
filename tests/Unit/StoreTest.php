<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include('app/helpers/StoreHelper.php');

final class StoreTestTest extends TestCase{
//	public function test_func(){
//		$this->assertTrue(true);
//	}



    public function test_read_from_file(){
        $storeHelper = new StoreHelper();
        $randomString = $this->generateRandomString();

        $storeHelper->clear();
        $storeHelper->store($randomString);
        $result = $storeHelper->read();
        $this->assertEquals($randomString,$result);
    }

    public function test_write_many_lines_to_file(){
        $this->assertTrue(true);
    }

    public function test_get_file_as_array(){
        $this->assertTrue(true);
    }

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}