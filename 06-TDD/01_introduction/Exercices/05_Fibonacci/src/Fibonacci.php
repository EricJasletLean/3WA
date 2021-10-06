<?php

namespace App;

class Fibonacci
{
    public function __construct (
        private int $n = 0
        )
    {
        $this->genSuite();
    }

    public function genSuite()
    {
        yield 0;
        $cur = 1;
        $prev = 0;
        for ($i = 0; $i < $this->n; $i++) {
            yield $cur;

            $temp = $cur;
            $cur = $prev + $cur;
            $prev = $temp;
        }
    }
}