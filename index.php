<!DOCTYPE html>
<html>
<head>
<title>My first php project</title>
<style>
body
{
background-color:#60AEC6;	
}
h3
{
color:#D33554;
}
</style>
</head>
<body>
<form method="get">
<input type="text" name="person">
<input type="submit" value="Submit">
</form>
<?php
echo "<h1>Welcome to the project</h1>";
echo "<h3>Echo and print</h3>";
echo "Hi there ";
print "Sooriya<br> ";
echo 10+5;
echo "<br>";
print 10+5;
print "<br>";
echo 10;
print "<br>";
print 10;
echo "<h3>Variables in php</h3>";
$name="Sooriya";
echo $name;	 
echo "<br>";
echo "My name is ".$name;
echo "<h4>Getting name from user and displaying</h4>";
$nam=$_GET['person'];
echo "My name is ".$nam;
echo "<h3>Predetermined or internal functions</h3>";
echo strlen("Hi Sooriya")."<br>";
echo str_word_count("Hi Sooriya")."<br>";
echo strrev("Hi Sooriya")."<br>";
echo strpos("Hi Sooriya","o")."<br>";
echo str_replace("Sooriya","Meenu","Hi Sooriya")."<br>";
$test="Sooriya";
echo strlen($test)."<br>";
echo str_word_count($test)."<br>";
echo strrev($test)."<br>";
echo strpos($test,"o")."<br>";
echo str_replace("oo","u",$test)."<br>";
echo "<h3>Datatypes in php</h3>";
echo "<h4>String</h4>";
$str="My name is 'Sooriya'";
echo $str;
echo "<h4>Integer</h4>";
$num=10;
echo $num;
echo "<h4>Float</h4>";
$flo=10.1234;
echo $flo;
echo "<h4>boolean</h4>";
$boo=true;
echo $boo;
echo "<h4>Array</h4>";
$arr=array("Sooriya","meenu","sriram");
echo $arr['0'];
echo "<h3>Arithmetic Operators</h3>";
echo "<h4>Addition</h4>";
echo 5+5;
echo "<h4>Subtraction</h4>";
echo 5-5;
echo "<h4>Multiplication</h4>";
echo 5*5;
echo "<h4>Division</h4>";
echo 5/5;
echo "<h4>Mod</h4>";
echo 5%5;
echo "<br>";
echo 8%5;
echo "<h4>Power</h4>";
echo 5**2;
echo "<h3>Assignment Operator</h3>";
$sum=10;
$sum +=10;  //$sum(10)+10=20
echo $sum;
echo "<br>";
$sum -=5;   //$sum(20)-5=15
echo $sum;
echo "<br>";
$sum *= 10; //$sum(15)*10=150
echo $sum;
echo "<br>";
$sum/=10; //$sum(150)/10=15
echo $sum;
echo "<br>";
$sum**=2; //$sum(15)**2=225
echo $sum;
echo "<br>";
$sum%=200; //$sum(225)%200=25
echo $sum;
echo "<h3>Comparison operators in PHP</h3>";
echo "<h4>checking for equality in value and not datatype</h4>";
$x=5;
$y="5";
if($x==$y)
echo "true";
else
echo "false";
echo "<h4>checking for equality in value and datatype</h4>";
if($x===$y)
echo "true";
else
echo "false";
echo "<h4>checking for inequality in value and not in datatype</h4>";
if($x!=$y) 
echo "true";
else
echo "false";
echo "<h4>checking for inequality in both value and in datatype</h4>";
if($x!==$y)
echo "true";
else
echo "false";
echo "<h4>checking for greater than</h4>";
if($x>=$y)
echo "true";
else
echo "false";
echo "<h4>checking for lesser than</h4>";
if($x<=$y)
echo "true";
else
echo "false";
echo "<h3>Increment and Decrement operator in PHP</h3>";
echo "<h4>Pre increment operator</h4>";
echo ++$x;
echo "<h4>Post increment operator</h4>";
echo $x++;
echo "<br>";
echo $x;
echo "<h4>Pre decrement operator</h4>";
echo --$x;
echo "<h4>Post decrement operator</h4>";
echo $x--;
echo "<br>";
echo $x;
?>

</body>
</html>