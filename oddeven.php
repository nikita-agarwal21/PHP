<?php
 class  Oddzeven
 {
    
     public static function isOdd($n)
     {
         if($n %2 ==1)
         return true;
         else {
             return false;
         }
     }
     public static function isEven($n)
     {
         if($n %2==0)
         return true;
         else {
             return false;
         }
     }
 }
 echo Oddzeven::isOdd(9);
?>