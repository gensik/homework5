<?php

    $a = 20;
    $arr=[];

    for ($i=1; $i<$a; $i++){
        $b = $a % $i;
        if ($b==0) {
            $arr[]=$i;
        }
    }
    var_dump($arr);