<?php
declare(strict_types=1);
include('app/K2/ExtractPartOfStringBasic.php');
include('app/Exceptions/UndefinedOffsetException.php');
require_once 'vendor/autoload.php';

use App\Exceptions\UndefinedOffsetException;
use PHPUnit\Framework\TestCase;
use App\K2\ExtractPartOfStringBasic;


final class ExtractPartOfStringBasicTest extends TestCase {
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
     *
     */
    public function extract_term() {
        $random = $this->faker->word;
        $result = ExtractPartOfStringBasic::handle("ARB-C-AO001.ARB1.BE1.PVA.".$random);
        $this->assertEquals($random,$result);
    }

    /**
     * @test
     */
    public function extract_term_with_wrong_title() {
        $this->expectException(UndefinedOffsetException::class);
        ExtractPartOfStringBasic::handle("ARB-C-AO001.ARB1.BE1.HS20/21");
    }
}