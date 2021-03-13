<?php declare(strict_types=1);

namespace Tests;

use Geniebook\Geniebook;
use PHPUnit\Framework\TestCase;

class ProductOfIntegersTest extends TestCase
{
    public function test_print_value_of_products(): void
    {
        $test = new Geniebook();

        $result = $test->findProductOfIntegers([1, 7, 3, 4]);

        $this->assertEquals(
            "[84, 12, 28, 21]",
            $result
        );
    }
}