<?php
   class Triangle
   {
       private $a;
       private $b;
       private $c;

       public function __construct($a,$b,$c)
       {
           $this->a = $a;
           $this->b = $b;
           $this->c = $c;
       }

       public function setA($a)
       {
             $this->a = $a;
       }

       public function getA()
       {
             return $this->a;
       }

       public function setB($b)
       {
             $this->b = $b;
       }

       public function getB()
       {
             return $this->b;
       }

       public function setC($c)
       {
             $this->c = $c;
       }

       public function getC()
       {
             return $this->c;
       }

       public function perimeter()
       {
           return $this->a + $this->b + $this->c; 
       }

       public function area()
       {
           $s = ($this->a + $this->b + $this->c) / 2.0;
           $area = sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
           return $area;
       }
   }
   $t1=new Triangle(2,3,4);
   $t1->setA(2);
   $t1->setB(3);
   $t1->setC(4);
   echo "perimeter of triangle with the side"." ".$t1->getA() .",".$t1->getB().",".$t1->getC()." is ".$t1->perimeter()."<br>";
   echo "area of triangle with the side " .$t1->getA ().",".$t1->getB().",".$t1->getC()." is ".$t1->area();

?>