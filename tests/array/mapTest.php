<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class mapTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $mapThis = [1, 2, 3, 4, 5, 6];
        $mapClosure = function ($item, $currentIndex, array $self) {
            return $item * 2;
        };

        $result = map($mapThis, $mapClosure);

        $this->assertEquals(
            $result,
            [2, 4, 6, 8, 10, 12]
        );
    }
}
