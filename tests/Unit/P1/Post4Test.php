<?php
declare(strict_types=1);
include('app/P1/Post4.php');

use PHPUnit\Framework\TestCase;
use App\P1\Post4;


final class Post4Test extends TestCase {

    /**
     * @test
     */
    public function handle() {
        $numbers1 = [
            5,
            10,
            15,
            3,
        ];

        $numbers2 = [
            55,
            30,
            15,
            4,
        ];

        $this->assertEquals(10, Post4::handle($numbers1));
        $this->assertEquals(30, Post4::handle($numbers2));
    }
}