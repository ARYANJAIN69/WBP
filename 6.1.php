<?php
$arr=array(9,23,63,48,67);
a
ksort($arr);
$x=count($arr);
for($i=0;$i<$x;$i++)
{
    echo$arr[$i];
    echo"<br>";
}
?>