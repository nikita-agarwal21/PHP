                           //ProgLang1.php

<html>
<head>


</head>
<body>
<form name='progLang' method='POST' action='Proglang1Output.php'>
program lang:
<input type='checkbox' name='progLang[]' value='c'/>C
<input type='checkbox' name='progLang[]' value='c++'/>C++
<input type='checkbox' name='progLang[]' value='php'/>php
<input type='checkbox' name='progLang[]' value='java'/>java

<br><br>
<input type='submit' value='submit'/>

</form>

</body>


</html>

                          //Proglang1Output.php

<?php
if(isset($_POST['progLang']))

{
    $progLangs=$_POST['progLang'];
    $result='lang selected:';
    foreach($progLangs as $lang)
       $result=$result.$lang.' ';
}
?>


<html>
<head>


</head>
<body>

program lang:
<input type='checkbox' name='progLang[]' value='c' <?php if(strstr($result,"c")!="") echo "checked";?>/>C
<input type='checkbox' name='progLang[]' value='c++'<?php if(strstr($result,"c++")!="") echo "checked";?>/>C++
<input type='checkbox' name='progLang[]' value='php'<?php if(strstr($result,"php")!="") echo "checked";?>/>php
<input type='checkbox' name='progLang[]' value='java'<?php if(strstr($result,"java")!="") echo "checked";?>/>java

<br><br>




</body>


</html>
<?php

echo '<h1>'.$result.'</h1>';
?>
