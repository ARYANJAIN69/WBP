<?php
echo"aryan<br>";
$arr=array("naman"=>18,"harsh"=>17,"bro"=>3);
arsort($arr);
foreach($arr as $x=>$x_value)
{
    echo "key=".$x.",value=".$x_value;
    echo"<br>";
}
?>

