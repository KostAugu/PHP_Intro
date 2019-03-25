<?php declare(strict_types=1);
namespace Nfq\Akademija\Strict {
    function calculateHomeWorkSum (...$numbers) {
        function calculate(int...$numbers) : int {
            $sum = 0;
            foreach ($numbers as $n) {
                $sum += $n;
            }
            return $sum;
        }
        return calculate(...$numbers);
    }
}
