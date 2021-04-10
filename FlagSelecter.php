        //Flag.php
<html>
  <head>
  </head>

  <body >
    <form name="FlagsForm" method="post" action="FlagsOutput1.php" >
    <br>
    <br>
    flag : 
    <select name="flags">
      <option value='India' >india</option>
      <option value='Germany' >germany</option>
      <option value='France' >france</option>
      <option value='Italy' >italy</option>
      <option value='Japan' >japan</option>
      
    </select>
    <br>
    <br>
    <input type="submit" value="Submit" />
    <br>
    <br>
    </form>
  </body>
</html>


         //FlagsOutput.php
 <?php

     if ( isset($_POST['flags']))
     {
         $flag = $_POST['flags'];
         $fileName = "images/".$flag.".jpg";
     }
?>

<html>
   <head>
   </head>
   <body>
   <br><br>
   <center><img src="<?php echo $fileName ;?>" height="140" width="160" />
   <?php echo "<br>"."<br>".$flag;?></center>
   </body>
</html>



       //FlagsOutput1.php

<?php

if ( isset($_POST['flags']))
{
    $flag = $_POST['flags'];
    $fileName = "images/".$flag.".jpg";
}
?>
<html>
  <head>
  </head>

  <body >
    
    <br>
    <br>
    flag : 
    <select name="flags">
      <option value='India' <?php if($flag=='India') echo 'selected'?>>india</option>
      <option value='Germany'   <?php if($flag=='Germany') echo 'selected'?>>germany</option>
      <option value='France'  <?php if($flag=='France') echo 'selected'?>>france</option>
      <option value='Italy'  <?php if($flag=='Italy') echo 'selected'?>>italy</option>
      <option value='Japan'  <?php if($flag=='Japan') echo 'selected'?>>japan</option>    
    </select>
    <br>
    <br>
    
    <center><img src="<?php echo $fileName ;?>" height="140" width="160" />
<?php echo "<br>"."<br>".$flag;?></center>

  
  </body>
</html>       
