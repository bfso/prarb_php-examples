<?php
declare(strict_types=1);
include('app/K1/ImplodeWords.php');

use PHPUnit\Framework\TestCase;
use App\K1\ImplodeWords;


final class ImplodeWordsTest extends TestCase {
    /**
     * @test
     */
    public function implode_an_array_of_words() {
        $this->assertEquals('One,Two,Three,', ImplodeWords::implodeWithCommaAtTheEnd(['one','two','three']));
        $this->assertEquals('One,Two,Three', ImplodeWords::implodeWithoutCommaAtTheEnd(['one','two','three']));
        $this->assertEquals('one,two,three', ImplodeWords::implodeWithPhpFunction(['one','two','three']));
    }
}