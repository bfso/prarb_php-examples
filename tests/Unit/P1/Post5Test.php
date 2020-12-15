<?php
declare(strict_types=1);
include('app/P1/Post5.php');

use PHPUnit\Framework\TestCase;
use App\P1\Post5;


final class Post5Test extends TestCase {

    /**
     * @test
     */
    public function handle() {
        $this->assertTrue(Post5::handle());
    }
}