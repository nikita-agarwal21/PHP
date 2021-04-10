      //Triangle.php

<html>
<head></head>
<body style="text-align:center">

<form name='Triangleform' method='post' action='TriangleOutput1.php'>
<br>
<br>


enter side 1:
<input type='text' name='side1' size='4' />cm
<br><br><br>
<br>
enter side 2:
<input type='text' name='side2' size='4'/>cm
<br><br><br>
<br>
enter side 3:
<input type='text' name='side3' size='4'/>cm
<br>
<br>
<input type='submit' value='submit'/>
<br>



</form>


</body>
</html>


           //TriangleOutput.php
<?php


$a1=$_POST['side1'];
$b1=$_POST['side2'];
$c1=$_POST['side3'];

$perimeter=$a1+$b1+$c1;

$s = ($a1+$b1+$c1) / 2.0;
$area = sqrt($s * ($s - $a1) * ($s - $b1) * ($s - $c1));

//area($a1,$b1,$c1);
echo '<h1 >area = '.$area. " cm^2 <br><br><br><br> </h1>";
//perimeter($a1,$b1,$c1);
echo '<h1>perimeter = '.$perimeter." cm <br> </h1>";


?>   


          //TriangleOutput1.php
<?php


$a1=$_POST['side1'];
$b1=$_POST['side2'];
$c1=$_POST['side3'];

        $perimeter=$a1+$b1+$c1;

       $s = ($a1+$b1+$c1) / 2.0;
      $area = sqrt($s * ($s - $a1) * ($s - $b1) * ($s - $c1));



?>   
 
 
<html>
<head></head>
<body style='text-align:center' >
<br><br>
enter side 1:
<input type='text' name='side1' size='4' value='<?php echo $a1; ?>'/>cm
<br><br><br>

enter side 2:
<input type='text' name='side2' size='4'value='<?php echo $b1; ?>'/>cm
<br><br>
<br>
enter side 3:
<input type='text' name='side3' size='4' value='<?php echo $c1; ?>'/>cm


<br><br><br>
<br>

<?php

//area($a1,$b1,$c1);
echo '<h1 >area = '.$area. " cm^2 <br><br><br><br> </h1>";
//perimeter($a1,$b1,$c1);
echo '<h1>perimeter = '.$perimeter." cm <br> </h1>";

?>
</body>
</html>
