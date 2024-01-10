<?php
$a=0;
$b=1;

$num=0;
echo"fibonacci series<br>";
echo$a,"<br>",$b,"<br>";
while($num<10)
{
  $c=$a+$b;
  echo$c,"<br>";
  $a=$b;
  $b=$c;
    $num=$num+1;
}
?>