<!DOCTYPE html>
<html>
<head>
  <title>Basic Calculator</title>
  <meta charset = "UTF-8">
  <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
  <body>

    <h1>My Calculator App</h1>
    <h2>I didnt bother with CSS for this!</h2>
    <p>Other than center align...</p>


<div class = "form-container">
<form action = "calculator.php" method = "post">


Number:
<br>
<input type = "number" name = "num1">
<br>
(+), (-), (/), (*)
<br>
<input type = "textbox" name = "op">
<br>
Number:
<br>
<input type = "number" name = "num2">
<br>
<input type = "submit" >
<br>
<p>Result</p>

</div>

<div class = "php">
<?php


$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

if($op == "+"){
 echo $num1 + $num2;
} elseif($op == "-"){
 echo $num1 - $num2;
} elseif($op == "*"){
 echo  $num1 * $num2;
} else if($op == "/"){
  echo $num1 / $num2;
} else {
  echo "invalid operator";
}


?>

</div>

  </body>
</html>
