<?php
   class Maximum
   {
      public static function max2($a,$b)
      {
           if ( $a > $b )
               return $a;
           else
               return $b;
      }

      public static function max3($a,$b,$c)
      {
           if ( $a > $b && $a > $c )
               return $a;
           else if ( $b > $a && $b > $c )
               return $b;
           else
               return $c;
      }
   }
?>