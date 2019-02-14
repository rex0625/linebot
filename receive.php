<?php
$json_str = file_get_contents('php://input');
$json_object = json_decode($json_str);

$myfile = fopen("log.txt","w+") or die("unable open file");
fwrite($myfile,"\xEF\xBB".$json_str);
?>
