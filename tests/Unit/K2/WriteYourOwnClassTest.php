<?php
declare(strict_types=1);
include('app/K2/WriteYourOwnClass.php');

use PHPUnit\Framework\TestCase;
use App\K2\WriteYourOwnClass;

final class WriteYourOwnClassTest extends TestCase {
    /**
     * @test
     */
    public function check_if_the_class_exist() {
        $this->assertEquals("handled", WriteYourOwnClass::handle());
    }
}