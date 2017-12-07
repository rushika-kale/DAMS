<html>
<body>

<?php
$txt1="Hello World!";
$txt2='What a nice day!';
echo $txt1;
echo '$txt1';
echo "$txt2";
echo  '$txt2';
echo 'my nbname';
?>
</br>
<?php
echo strpos($txt2,"nice");
?>
</br>
<?php
$d=date("D");

echo $d;
if ($d=="Mon") echo "Have a nice weekend!";
?>
</br>
<?php
$d=date("D");
if ($d=="Fri")
{
	echo "Have a nice weekend!";
	echo "Have a nice day!";
}
	else
	echo "jana be";
  ?></br>
<?php
$x=0;
switch ($x)
{
case 1:
  echo "Number 1";
  break;
case 2:
  echo "Number 2";
  break;
case 3:
  echo "Number 3";
  break;
default:
  echo "No number between 1 and 3";
}
?>

</body>
</html>