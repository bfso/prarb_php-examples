<?php
declare(strict_types=1);
include('app/K2/ExtractPartOfStringAdvanced.php');
require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\K2\ExtractPartOfStringAdvanced;


final class ExtractPartOfStringAdvancedTest extends TestCase {
    /**
     * @var \Faker\Generator
     */
    private $faker;

    public function setUp(): void {
        parent::setUp();
        $this->faker = Faker\Factory::create();
    }

    /**
     * @test
     */
    public function extract_term() {
        // BE1 needs to be converted to BERN
        $result = ExtractPartOfStringAdvanced::handle("XO001.ARB1.BE1.HS20/21");
        $this->assertEquals("BERN",$result);

        // When there is a "-" between the city "BE" and a number "1". The minus must be removed first
        $result = ExtractPartOfStringAdvanced::handle("XO001.ARB1.BE-1.HS20/21");
        $this->assertEquals("BERN",$result);

        // Mo must be converted to "Montag"
        $result = ExtractPartOfStringAdvanced::handle("XO001.ARB1.BE-1-Mo.HS20/21");
        $this->assertEquals("BERN-Montag",$result);

        // When the number is higher than 1, the number must stay there
        $result = ExtractPartOfStringAdvanced::handle("XO001.ARB1.ZH2-Mo.HS20/21");
        $this->assertEquals("ZÜRICH2-Montag",$result);

        // Just for making a point :)
        $result = ExtractPartOfStringAdvanced::handle("XO001.ARB1.ZH5.HS20/21");
        $this->assertEquals("ZÜRICH5",$result);
    }
}