<?php
   class Point
   {
       private $x;
       private $y;

       public function __construct($x, $y)
       {
           $this->x = $x;
           $this->y = $y;
       }

       public function getX()
       {
           return $this->x;
       }

       public function getY()
       {
           return $this->y;
       }

       public function setX($x)
       {
           $this->x = $x;
       }

       public function setY($y)
       {
           $this->y = $y;
       }
   }
   $p1=new Point(-5,4);
 $p1->setX(-5);
 $p1->setY(4);
?>