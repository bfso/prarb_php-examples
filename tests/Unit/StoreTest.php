<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include('helpers/StoreHelper.php');

final class StoreTestTest extends TestCase{
//	public function test_func(){
//		$this->assertTrue(true);
//	}

    public function test_read_from_file(){
        $result = read();
        $this->assertEquals('asdf',$result);
    }
}