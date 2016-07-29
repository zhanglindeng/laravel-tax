<?php

return [
    'name'  => 'laravel-tax',
    'range' => [
        [0, 1500, 3, 0],
        [1500, 4500, 10, 105],
        [4500, 9000, 20, 555],
        [9000, 35000, 25, 1005],
        [35000, 55000, 30, 2755],
        [55000, 80000, 35, 5505],
        [80000, PHP_INT_MAX, 45, 13505],
    ],
];