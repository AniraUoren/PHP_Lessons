<?php

//print_r($_POST);

$firstNumber = (double)$_POST["firstNumber"];
$secondNumber = (double)$_POST["secondNumber"];
$act = htmlspecialchars($_POST["calc"]);
$buffer = 0;

switch ($act){
    case "addition":
    {
        $buffer = $firstNumber + $secondNumber;
        $fo = fopen("result.txt", "w+");
        file_put_contents("result.txt", $buffer);
        fclose($fo);
        break;
    }
    case "subtraction":{
        $buffer = $firstNumber - $secondNumber;
        $fo = fopen("result.txt", "w+");
            fwrite($fo, $buffer);
        fclose($fo);
        break;
    }
    case "multiplication":{
        $buffer = $firstNumber * $secondNumber;
        $fo = fopen("result.txt", "w+");
            fwrite($fo, $buffer);
        fclose($fo);
        break;
    }
    case "division":{
        $buffer = $firstNumber / $secondNumber;
        $fo = fopen("result.txt", "w+");
            fwrite($fo, $buffer);
        fclose($fo);
        break;
    }
}
