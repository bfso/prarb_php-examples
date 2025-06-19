<?php
declare(strict_types=1);
include('app/K2/WriteYourOwnFunction.php');

use App\Contracts\Handleable;
use PHPUnit\Framework\TestCase;
use App\K2\WriteYourOwnFunction;

final class WriteYourOwnFunctionTest extends TestCase {
    /**
     * @test
     */
    public function check_if_handle_function_exist() : void {
        $this->assertEquals(App\Contracts\Handleable::HANDLED, WriteYourOwnFunction::handle());
    }

    /**
     * @test
     */
    public function check_if_handleable_interface_is_implemented() {
        $this->assertContains(Handleable::class, class_implements(WriteYourOwnFunction::class));
    }
}