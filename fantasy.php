<?php
$character="Gandalf,Aragorn,Legolas";
$array= explode(",",$character);
$result=array_map('strtolower',$array);
// var_dump($result);
$mamba=implode("*",$result);
echo $mamba;
?>