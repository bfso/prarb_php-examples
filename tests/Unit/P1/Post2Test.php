<?php
declare(strict_types=1);
include('app/P1/Post2.php');

use PHPUnit\Framework\TestCase;
use App\P1\Post2;


final class Post2Test extends TestCase {

    /**
     * @test
     */
    public function handle() {
        $numbers1 = [
            12,-950,19,50,5000
        ];
        $numbers1Result = [
            5000,50,19,12,-950
        ];
        $numbers2 = [
            55,3,9
        ];
        $numbers2Result = [
            55,9,3
        ];
        $this->assertEquals($numbers1Result, Post2::handle($numbers1));
        $this->assertEquals($numbers2Result, Post2::handle($numbers2));
    }
}