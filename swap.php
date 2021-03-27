<?php
    $a = 10;
    $b = 20;

    swap($a, $b);

    echo 'a = '.$a.'<br>';
    echo 'b = '.$b.'<br>';

    function swap(&$a, &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
?>
