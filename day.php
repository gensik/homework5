<?php

$a = $_GET['day'];
if ($a >0 & $a <= 10) {
    printf('Число %s - это 1 декада'. '<br>', $a);
} elseif ($a >= 11 &  $a <= 20) {
    printf('Число %s - это 2 декада'. '<br>', $a);
} elseif ($a >= 21 &  $a <= 31) {
    printf('Число %s - это 3 декада'. '<br>', $a);
} else {
    echo 'Введите число от 1 до 31'. '<br>';
};



$month = $_GET['month'];

if ($month >= 3 & $month <= 5 ) {
    echo 'Vesna';
} elseif ($month >= 6 & $month <= 8) {
    echo 'Lito';
} elseif ($month >= 9 & $month <= 11) {
    echo 'Osen';
} else {
    echo 'ZIMA';
}