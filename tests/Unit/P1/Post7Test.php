<?php
declare(strict_types=1);
include('app/P1/Post7.php');

use PHPUnit\Framework\TestCase;
use App\P1\Post7;


final class Post7Test extends TestCase {

    /**
     * @test
     */
    public function handle() {
        $items = [1,2];
        $this->assertEquals($items, Post7::handle());
    }
}