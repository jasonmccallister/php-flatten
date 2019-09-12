<?php

use McCallister\Flatten;
use PHPUnit\Framework\TestCase;

class FlattenTest extends TestCase
{
    /** @test */
    function flatten_can_handle_nested_arrays()
    {
        // Arrange
        $array = [1, 2, 4, 5, [6, 10, 8]];

        // Act
        $flatten = new Flatten;
        $flattened = $flatten($array);

        // Assert
        $this->assertCount(7, $flattened);
        $this->assertSame([1, 2, 4, 5, 6, 10, 8], $flattened);
    }

    /** @test */
    function flattens_an_array_when_passed()
    {
        // Arrange
        $array = [1, 2, 4, 5];

        // Act
        $flatten = new Flatten;
        $flattened = $flatten($array);

        // Assert
        $this->assertCount(4, $flattened);
        $this->assertSame($array, $flattened);
    }
}
