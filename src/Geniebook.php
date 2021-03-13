<?php declare(strict_types=1);

namespace Geniebook;

class Geniebook
{
	public function pattern (int $range = 0): string
	{
        $result = '';
        
        if ($range > 0) {
            for ($i = 1; $i <= $range; $i++) { 
                for ($j = 0; $j <= ($range + 2); $j++) {
                    if ($i > $j || $j >= ($i + 2)) {
                        $result .= $j + 1;
                    } else {
                        $result .= '*';
                    }
                }

                if ($i < $range) {
                    $result .= "\n";
                }
            }

            return $result;
        }

		return $result;
	}

    public function printMergeList (array $list, array $otherList): array
    {
        $mergedList = [...$otherList, ...$list];

        for ($i = 0; $i < count($mergedList); $i++) {
            for ($j = $i; $j > 0; $j--) {
                if($mergedList[$j] < $mergedList[$j-1]) {
                    $target = $mergedList[$j];
                    $mergedList[$j] = $mergedList[$j-1];
                    $mergedList[$j-1] = $target;
                  }
            }
        }

        return $mergedList;
    }

    public function findProductOfIntegers(array $numbers): string
    {
        $result = [];
        
        foreach ($numbers as $key => $number) {
            $integers = array_filter($numbers, function ($item, $index) use ($key) {
                return $index !== $key;
            }, ARRAY_FILTER_USE_BOTH);

            $result[] = array_reduce($integers, function ($item, $current) {
                return $item * $current;
            }, 1);
        }

        return '[' . implode(', ', $result) . ']';
    }

    public function flightLengthMovies(int $flightDuration, array $moviesDuration)
    {
        if (count($moviesDuration) !== 2) {
            return 'You should choose 2 movies';
        }

        if ($moviesDuration[0] === $moviesDuration[1]) {
            return 'You are not allowed to watch the same movies twice';
        }

        $moviesDuration  = array_reduce($moviesDuration, function ($item, $current) {
            return $item + $current;
        }, 0);

        return $flightDuration === $moviesDuration ? true : false;
    }
}