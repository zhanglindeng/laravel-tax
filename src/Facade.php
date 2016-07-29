<?php

namespace Dzlin\Tax;


class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'tax';
    }
}