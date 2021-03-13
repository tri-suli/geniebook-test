<?php declare(strict_types=1);

namespace Tests;

use Geniebook\Geniebook;
use PHPUnit\Framework\TestCase;

class MergedListTest extends TestCase
{
    /** @test */
    public function merged_arrays_that_have_equal_length(): void
    {
        $test = new Geniebook();

        $result = $test->printMergeList(
            [3, 4, 6, 10, 11, 15],
            [1, 5, 8, 12, 14, 19],
        );

        $this->assertEquals(
            [1, 3, 4, 5, 6, 8, 10, 11, 12, 14, 15, 19],
            $result
        );
    }

    /** @test */
    public function merged_arrays_that_have_different_length(): void
    {
        $test = new Geniebook();

        $result = $test->printMergeList(
            [6, 10, 11, 15],
            [1, 5, 12, 14, 19],
        );

        $this->assertEquals(
            [1, 5, 6, 10, 11, 12, 14, 15, 19],
            $result
        );
    }
}