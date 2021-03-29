<?php
    require_once 'point.php';

    class Quadrant
    {
        public static function findQuadrant(Point $p)
        {
            $x = $p->getX();
            $y = $p->getY();

            if ( $x > 0 && $y > 0 )
             { echo "1st quadrant"."<br>";
            return 1;
             }else if ( $x < 0 && $y > 0 )
            {echo "2nd quadrant"."<br>";
            return 2;
            }else if ( $x < 0 && $y < 0 )
            {echo "third quadrant"."<br>";
            return 3;
            }
            echo "fourth quadrant"."<br>";
            return 4;
        }
    }
   echo Quadrant::findQuadrant($p1);
?>