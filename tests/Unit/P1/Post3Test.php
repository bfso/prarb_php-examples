<?php
declare(strict_types=1);
include('app/P1/Post3.php');

use PHPUnit\Framework\TestCase;
use App\P1\Post3;


final class Post3Test extends TestCase {

    /**
     * @test
     */
    public function handle() {
        $treeThree = [
            "*#*",
            "###"
        ];

        $treeFive = [
            "**#**",
            "*###*",
            "#####"
        ];

        $treeSeven = [
            "***#***",
            "**###**",
            "*#####*",
            "#######",
        ];

        $this->assertEquals($treeThree, Post3::handle(3));
        $this->assertEquals($treeFive, Post3::handle(5));
        $this->assertEquals($treeSeven, Post3::handle(7));
    }

    /**
     * @test
     */
    public function getChar() {
        $this->assertEquals("###",Post3::getChars(3,"#"));
        $this->assertEquals("*",Post3::getChars(1,"*"));
        $this->assertEquals("&&",Post3::getChars(2,"&"));
    }
}