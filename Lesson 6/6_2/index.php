<h1>Калькулятор!</h1>

<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="number" name="firstNumber">
    <input type="number" name="secondNumber">
    <input type="submit" name="act[]" value="+"></input>
    <input type="submit" name="act[]" value="-"></input>
    <input type="submit" name="act[]" value="*"></input>
    <input type="submit" name="act[]" value="/"></input>
</form>

<?php

$firstNumber = (double)$_POST["firstNumber"];
$secondNumber = (double)$_POST["secondNumber"];
$act = $_POST["act"];
$result = 0;

switch ($act[0]){
    case ("+"): {
        if (is_numeric($firstNumber) && is_numeric($secondNumber)){
            $result = $firstNumber + $secondNumber;
        } else {
            print_r("Некорректные данные на входе"); //чего не должна допустить форма, но на всякий случай
        };
        break;
    }
    case ("-"): {
        if (is_numeric($firstNumber) && is_numeric($secondNumber)){
            $result = $firstNumber - $secondNumber;
        } else {
            print_r("Некорректные данные на входе"); //чего не должна допустить форма, но на всякий случай
        };
        break;
    }
    case ("*"): {
        if (is_numeric($firstNumber) && is_numeric($secondNumber)){
            $result = $firstNumber * $secondNumber;
        } else {
            print_r("Некорректные данные на входе"); //чего не должна допустить форма, но на всякий случай
        };
        break;
    }
    case ("/"): {
        if (is_numeric($firstNumber) && is_numeric($secondNumber) && $secondNumber != 0){
            $result = $firstNumber / $secondNumber;
        } else {
            print_r("Некорректные данные на входе");
        };
        break;
    }
};

?>

<p>Результат</p>
<p><?=$result?></p>
