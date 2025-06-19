<?php
declare(strict_types=1);
include('app/K2/WriteYourOwnClass.php');

use App\Contracts\Handleable;
use PHPUnit\Framework\TestCase;
use App\K2\WriteYourOwnClass;

final class WriteYourOwnClassTest extends TestCase {
    /**
     * @test
     */
    public function check_if_the_class_exist() {
        $this->assertEquals(App\Contracts\Handleable::HANDLED, WriteYourOwnClass::handle());
    }

    /**
     * @test
     */
    public function check_if_handleable_interface_is_implemented() {
        $this->assertContains(Handleable::class, class_implements(WriteYourOwnClass::class));
    }
}