<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include('helpers/StoreHelper.php');

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

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    // @todo test write to file

}