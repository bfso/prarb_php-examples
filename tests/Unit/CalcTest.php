<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include('helpers/CalcHelper.php');

final class CalcTest extends TestCase{
//	public function test_func(){
//		$this->assertTrue(true);
//	}

	public function test_division_of_two_numbers(){
	    $values = [
	        [12,6,2],
	        [4,4,1],
	        [5,0,'Not Allowed'],
        ];
	    foreach ($values as $value){
            $result = division($value[0],$value[1]);
            $this->assertEquals($value[2],$result);
        }
    }

    public function test_sum_of_two_numbers(){
        $this->assertEquals(2,sum(1,1));
    }
}