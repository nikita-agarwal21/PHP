          //SimpleInterest1.php
<html>
<head></head>
<body>

<form name='simpleinterestform' method ='post' action="SimpleInterestOutput.php">
enter the price:
<input type="text" name='price' size='4'/>
<br><br>
enter the time:
<input type="text" name='time' size='4'/>
<br><br>
enter the rate:
<input type="text" name='rate' size='4'/>
<br><br>
<input type='submit' value='submit'>

</form>
</body>

</html>


          //SimpleInterestOutput.php

<?php
$principle=$_POST['price'];
$term=$_POST['time'];
$rateOfInterest=$_POST['rate'];

          $si = ($principle * $term * $rateOfInterest) / 100.0;
<?php
echo "<h1> simple interest is : ".$si."</h1>"
?>        
?>


          //SimpleInterestOutput1.php

<?php
$principle=$_POST['price'];
$term=$_POST['time'];
$rateOfInterest=$_POST['rate'];

          $si = ($principle * $term * $rateOfInterest) / 100.0;
        
?>
<html>
<head></head>
<body>


enter the price:
<input type="text" name='price' size='4' value='<?php echo $principle;?> '/>
<br><br>
enter the time:
<input type="text" name='time' size='4'value='<?php echo $rateOfInterest;?>'/>
<br><br>
enter the rate:
<input type="text" name='rate' size='4'value='<?php echo $term;?>'/>

</body>

</html>
<?php
echo "<h1> simple interest is : ".$si."</h1>"
?>
