<?php
declare(strict_types=1);
include('app/K3/DivisionByZeroReturnsException.php');
include('app/Exceptions/NotAllowedException.php');

use App\Exceptions\NotAllowedException;
use PHPUnit\Framework\TestCase;
use App\K3\DivisionByZeroReturnsException;


final class DivisionByZeroReturnsExceptionTest extends TestCase {
    /**
     * @test
     */
    public function division_of_two_numbers() {
        $this->expectException(NotAllowedException::class);
        DivisionByZeroReturnsException::divide(1, 0);
    }
}