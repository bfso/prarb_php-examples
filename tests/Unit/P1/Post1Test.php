<?php
declare(strict_types=1);
include('app/P1/Post1.php');

use PHPUnit\Framework\TestCase;
use App\P1\Post1;


final class Post1Test extends TestCase {

    /**
     * @test
     */
    public function handle() {
        $this->assertEquals("th# ##rdv#rk", Post1::handle("the aardvark", "#"));
        $this->assertEquals("m?nn?? m??s?", Post1::handle("minnie mouse", "?"));
        $this->assertEquals("sh*k*sp**r*", Post1::handle("shakespeare", "*"));
    }
}