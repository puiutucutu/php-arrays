<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__, 2)
    . DIRECTORY_SEPARATOR
    . "strings"
    . DIRECTORY_SEPARATOR
    . "padLeftWithSpace.php";

final class padLeftWithSpaceTest extends TestCase
{
    public function testReturnsExpectedValue() : void
    {
        $this->assertEquals(
            padLeftWithSpace("Hello"),
            " Hello"
        );
    }

    public function testReturnsPaddedStringWhenGivenAnEmptyString() : void
    {
        $this->assertEquals(
            padLeftWithSpace(""),
            " "
        );
    }
}