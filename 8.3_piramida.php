<pre><?php

    $number = 25;
    $x = '';

    for ($q=0; $q<$number; $q++)
        {
            $x = $x . 'x'  ;
        }

    while ($q--)
        {
            echo substr($x, 0, $q).'<br>';
        }
