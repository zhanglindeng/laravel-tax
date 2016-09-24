<?php

namespace Dzlin\Tax;


class TaxCalc
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function doCalc($money)
    {
        if (!is_numeric($money)) {
            throw new \InvalidArgumentException('invalid money');
        }

        if ($money <= 0) {
            return 0;
        }

        $tax = 0;

        $ranges = config('tax.ranges');
        // todo 判断 ranges 是否有效
        foreach ($ranges as $index => $range) {
            if ($range[0] < $money && $money <= $range[1]) {
                $tax = $money * $range[2] * 0.01 - $range[3];
                break;
            }
        }

        $precision = (int)config('tax.precision', 2);

        return round($tax, $precision);
    }
}
