<?php declare(strict_types=1);

namespace Tests;

use Geniebook\Geniebook;
use PHPUnit\Framework\TestCase;

class FlightMoviesTest extends TestCase
{
    /** @test */
    public function test_flight_duration_is_equal_with_movies_duration(): void
    {
        $test = new Geniebook();

        $result = $test->flightLengthMovies(60, [21, 39]);

        $this->assertTrue($result);
    }

    /** @test */
    public function flight_duration_is_not_equal_with_movies_duration(): void
    {
        $test = new Geniebook();

        $result = $test->flightLengthMovies(60, [22, 39]);

        $this->assertFalse($result);
    }

    /** @test */
    public function should_choose_2_movies(): void
    {
        $test = new Geniebook();

        $result = $test->flightLengthMovies(60, [22]);

        $this->assertSame('You should choose 2 movies', $result);
    }

    /** @test */
    public function cannot_play_the_same_movies_2_times(): void
    {
        $test = new Geniebook();

        $result = $test->flightLengthMovies(60, [30, 30]);

        $this->assertSame('You are not allowed to watch the same movies twice', $result);
    }
}