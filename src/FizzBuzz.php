<?php
/**
 * This file is part of the Kata package. 
 * 
 * User: Przemyslaw Furtak
 * Date: 2015-06-08
 * Time: 14:53
 */

namespace Kata\FizzBuzz;

class FizzBuzz 
{
    public function show($n)
    {
        $results = '';
        for ($i = 1; $i <= $n; $i++) {
            $printNumber = '';
            if ($this->isFizz($i)) {
                $printNumber.= 'Fizz';
            }

            if ($this->isBuzz($i)) {
                $printNumber .= 'Buzz';
            }

            if (empty($printNumber)) {
                $printNumber = $i;
            }

            $results .= " " . $printNumber;
        }

        return trim($results);
    }


    private function isFizz($n)
    {
        return 0 === $n % 3;
    }

    private function isBuzz($n)
    {
        return 0 === $n % 5;
    }
}