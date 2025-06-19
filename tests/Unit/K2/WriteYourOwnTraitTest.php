<?php

declare(strict_types=1);

namespace K2;

include('app/K2/WriteYourOwnTrait.php');

use App;
use App\Contracts\Handleable;
use PHPUnit\Framework\TestCase;
use App\K2\WriteYourOwnTrait;

final class WriteYourOwnTraitTest extends TestCase
{
    /**
     * @test
     */
    public function check_if_handle_function_exist(): void
    {
        $this->assertEquals(App\Contracts\Handleable::HANDLED, WriteYourOwnTrait::handle());
    }

    /**
     * @test
     */
    public function check_if_handleable_interface_is_implemented()
    {
        $this->assertContains(Handleable::class, class_implements(WriteYourOwnTrait::class));
    }
}