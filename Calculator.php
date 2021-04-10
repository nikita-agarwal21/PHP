        //Calculator.php


<html>

  <head>
     </head>
    


  </head>

  <body style="background-color: cyan; text-align: center" >

     <br>
     <br>
     <form name="addForm" method='post' action='CalculatorOutput.php'>
        Operand 1 : 
        <input type="text" name="operand1" size="5" />
        <br>
        <br>
        Operand 2 : 
        <input type="text" name="operand2" size="5" />
        <br>
        <br>
        Operation :
        <input type="radio" name="operator" value="+" /> +
        <input type="radio" name="operator" value="-" /> -
        <input type="radio" name="operator" value="*" /> *
        <input type="radio" name="operator" value="/" /> /

        <br>
        <br>
        <input type="submit" value="Submit"  />
     </form>  
  </body>
</html>


          //CalculatorOutput.php
<?php

           $p=$_POST['operand1'];
           $q=$_POST['operand2'];
        $operator=$_POST['operator'];

            switch ($operator) 
            {

                case '+' :
                     $result = $p + $q;
                      break;

                case '-' :
                      $result = $p - $q;
                      break;

                case '*' :

                      $result = $p * $q;
                      break;

                case '/' :

                     $result = $p / $q;
                      break;
            
        }
       
?>

<html>

  <head>
     </head>

  <body style="background-color: cyan; text-align: center" >

     <br>
     <br>
    
        Operand 1 : 
        <input type="text" name="operand1" size="5" value='<?php echo $p ;?>'/>
        <br>
        <br>
        Operand 2 : 
        <input type="text" name="operand2" size="5" value='<?php echo $q ;?>'/>
        <br>
        <br>
        Operation :
        <input type="radio" name="operator" value="+" <?php if ($operator=='+') echo 'checked' ;?> /> +
        <input type="radio" name="operator" value="-" <?php if ($operator=='-') echo 'checked' ;?>/> -
        <input type="radio" name="operator" value="*" <?php if ($operator=='*') echo 'checked' ;?>/> *
        <input type="radio" name="operator" value="/" <?php if ($operator=='/') echo 'checked' ;?>/> /

        <br>
        <br>
      
  </body>
</html>
<?php echo "<h1> the ans is : ".$result."</h1>";
?>
