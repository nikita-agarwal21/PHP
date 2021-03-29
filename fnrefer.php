<?php
     $n = 10;
     change($n);
     echo 'n = '.$n;

     function change(&$n)
     {
          $n = $n + 10;
     }
?>
