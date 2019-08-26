<?php
$arr = [ 1=>'Зима', 2=>'Лето', 3=>'Осень', 4=>'Весна' ];

print_r($_GET);
if ($_GET['num'] ==  1){
    $result = $arr[1];
    var_dump($result);
} elseif ($_GET['num'] ==  2) {
    $result = $arr[4];
    var_dump($result);
} elseif ($_GET['num'] ==  3) {
    $result = $arr[3];
    var_dump($result);
} elseif ($_GET['num'] ==  4) {
    $result = $arr[4];
    var_dump ($result);
}
