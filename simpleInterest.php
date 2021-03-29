<?php
   class SimpleInterest
   {
       public static function findSimpleInterest($principle, $term, $rateOfInterest)
       {
          $si = ($principle * $term * $rateOfInterest) / 100.0;
          return $si;
       } 
   }
   echo SimpleInterest::findSimpleInterest(1000,1,10);
?>