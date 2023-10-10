<!doctype html>



<h3>enter your details</h3>

<form action="form.php" method="GET">
    <label>enter firt number</label>
    <input type="digit" name="digit">
    <br>
    <br>
    <label>enter second number</label>
    <input type="digit" name="digit">

    <br><br>
   <input type = "submit" name ="op" value=>"sum"> sum</input>
   <input type = "submit" name ="op" value=>"sub"> sub</input>
   <input type = "submit" name ="op" value=>"mul"> mul</input>
   <input type = "submit" name ="op" value=>"div"> div</input>
</form>

<?php

$a== $_POST['op']
if($a=="sum")
   echo $n1+$n2;
else if ($a== "sub")
   echo $n1-$n2;
else if ($a== "mul")
   echo $n1*$n2;
else if ($a== "div")
   echo $n1/$n2;