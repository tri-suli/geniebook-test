<?php declare(strict_types=1);

namespace Tests;

use Geniebook\Geniebook;
use PHPUnit\Framework\TestCase;

class PatternTest extends TestCase
{
    /** @test */
    public function empty_pattern(): void
    {
        $test = new Geniebook();

        $result = $test->pattern();

        $this->assertEmpty($result);
    }

    /** @test */
    public function pattern_with_range_1(): void
    {
        $test = new Geniebook();

        $result = $test->pattern(1);

        $this->assertSame("1**4", $result);
    }

    /** @test */
    public function pattern_with_range_3(): void
    {
        $test = new Geniebook();

        $result = $test->pattern(3);

        $this->assertSame("1**456\n12**56\n123**6", $result);
    }

    /** @test */
    public function pattern_with_range_4(): void
    {
        $test = new Geniebook();

        $result = $test->pattern(4);

        $this->assertSame(
            "1**4567\n12**567\n123**67\n1234**7",
            $result
        );
    }

    /** @test */
    public function pattern_with_range_2(): void
    {
        $test = new Geniebook();

        $result = $test->pattern(2);

        $this->assertSame("1**45\n12**5", $result);
    }

    /** @test */
    public function pattern_with_range_5(): void
    {
        $test = new Geniebook();

        $result = $test->pattern(5);

        $this->assertSame(
            "1**45678\n12**5678\n123**678\n1234**78\n12345**8",
            $result
        );
    }
}