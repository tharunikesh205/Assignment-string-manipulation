<?php 

$clue = "find the hidden treasure at the golden island";
$replace = (str_replace("golden", "mystic", $clue));
$result=strtoupper($replace);
echo $result;



?>