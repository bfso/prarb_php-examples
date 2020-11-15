<?php
declare(strict_types=1);
include('app/K2/WriteYourOwnFunction.php');

use PHPUnit\Framework\TestCase;
use App\K2\WriteYourOwnFunction;

final class WriteYourOwnFunctionTest extends TestCase {
    /**
     * @test
     */
    public function check_if_handle_function_exist() {
        $this->assertEquals("handled", WriteYourOwnFunction::handle());
    }
}