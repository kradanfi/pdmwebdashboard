<?php 
// // header("Refresh:2");
header("Content-Type: text/plain");

$command = escapeshellcmd('test.py');
$output = shell_exec($command);

$obj = json_decode($output);

echo $output;
var_dump($obj);













?>
