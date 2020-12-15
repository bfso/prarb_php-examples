<?php
declare(strict_types=1);
include('app/P1/Post6.php');

use PHPUnit\Framework\TestCase;
use App\P1\Post6;


final class Post6Test extends TestCase {

    /**
     * @test
     */
    public function handle() {
        $yesterday = date('d.m.Y',strtotime("-1 days"));
        $this->assertEquals($yesterday, Post6::handle());
    }
}