<?php

    $array = [2, -5, -9, 15, 11, -4, 7, 1, -10];

    $newArray = [];
    $newArraypl = [];

    foreach ($array as $key => $value)
    {
        if ($value < 0)
        {
            $newArray[] = $value;
        }
        elseif ($value > 0 )
        {
            $newArraypl [] = $value;
        }
    }

    echo 'Сумма отрицательных = ' . array_sum($newArray) . '<br>';
    echo 'Сумма положительных = ' . array_sum($newArraypl) . '<br>';


