<?php

$fo = fopen("result.txt", "r");
$result = fgets($fo);
fclose($fo);

//var_dump($fo);
//echo $result;

echo json_encode($result);
