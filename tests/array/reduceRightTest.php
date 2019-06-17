<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "src/array/reduceRight.php";

final class reduceRightTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $reduceable = [1, 2, 3, 4];
        $reducer = function ($sum, $toAdd) {
            return ($sum + 1) * $toAdd;
        };

        $numsAddedByReducing = reduceRight($reduceable, $reducer, 0);

        $this->assertEquals(
            $numsAddedByReducing,
            33
        );
    }
}