<?php
   class Factorial
   {
      public static function fact($n)
      {
          $fact = 1;
          for ( $i = 1; $i <= $n; $i++ )
              $fact *= $i;
          return $fact;
      }
   }
   echo Factorial::fact(3);
?>