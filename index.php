<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Shirish</title>
</head>
<body>

<?php
     include "hi.html"
?>
<form action="index.php" method="post">
Name:<input type="text" name="name">
<br>
 Password:<input type="password" name="password">
<br>
<h3>Favourite fruits</h3>
<br>
Apple:<input type="checkbox" name="fruits[]" value="apple"><br>
Banana:<input type="checkbox" name="fruits[]" value="banana"><br>
Orange:<input type="checkbox" name="fruits[]" value="oranges">
<br>
<h2>Basic Calculator</h2>
<input type="text" name="first">
<br>
<input type=" text" name="operator"><br>
<input type="text" name="second">
<input type="submit">
</form>
<?php 
echo $_POST["name"];
echo "<br>";
echo $_POST["password"];
echo "<br>";
$ar=$_POST["fruits"];
for($x=0;$x<3;$x++)
{
    echo $ar[$x];
    echo "<br>";
}
echo "<br>";
echo "Input operator and operand";
echo "<br>";
$num1=$_POST["first"];
$opr=$_POST["operator"];
$num2=$_POST["second"];
if($opr=="+")
echo $num1+$num2;
else if($opr=="-")
echo $num1-$num2;
else if($opr=="/")
echo $num1/$num2;
else if($opr=="*")
echo $num1*$num2;
else echo "wrong operator";
include "end.html";
?>
    
</body>
</html>