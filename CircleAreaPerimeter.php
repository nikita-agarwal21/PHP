        //Circle.php
<html>
<head></head>
<body>
<form name="circleform" method='post' action='CircleOutput1.php'>
<br>
<br>
enter the radius:
<input type='text' name='radius' size='4'/>cm
<br>
<br>
<input type='submit' value='submit'/>

</form>
</body>

</html>


       //CircleOutput.php
<?php
$radius=$_POST['radius'];
 
            $perimeter=(2 * 3.14 * $radius); 
      
            $area= ( 3.14 * $radius * $radius );
     

echo '<h1 >area = '.$area. " cm^2 <br><br><br> </h1>";

echo '<h1>perimeter = '.$perimeter." cm <br> </h1>";
         ?>


       //CircleOutput1.php
<?php
$radius=$_POST['radius'];
 
$perimeter=(2 * 3.14 * $radius); 
      
            $area= ( 3.14 * $radius * $radius );
?>
        
<html>
<head></head>
<body>

<br>
<br>
enter the radius:
<input type='text' name='radius' size='4' value="<?php echo $radius?>"/>cm
<br>
<br>

</body>

</html>
<?php

echo '<h1 >area = '.$area. " cm^2 <br><br><br> </h1>";

echo '<h1>perimeter = '.$perimeter." cm <br> </h1>";

?>
