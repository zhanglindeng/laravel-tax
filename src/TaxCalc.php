<?php

namespace Dzlin\Tax;


class TaxCalc
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    // todo doCalc
    public function doCalc($money)
    {
        if (!is_numeric($money)) {
            throw new \InvalidArgumentException('invalid money');
        }

        if ($money <= 0) {
            return 0;
        }

        return $money - 100;
    }
}