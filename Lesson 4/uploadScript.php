<?php

for ($i = 0; $i < count($_FILES["files"]["name"]); $i++){
    //массив типов файлов, которые разрешено добавить
    $correctFilesMass = ["image/jpeg", "image/png", "image/jpg"];

    if (in_array($_FILES["files"]["type"][$i], $correctFilesMass)){
        $path = "img/".$_FILES["files"]["name"][$i];
        print_r($path);

        if (move_uploaded_file($_FILES["files"]["tmp_name"][$i], $path)){
            echo "<p>" . $_FILES["files"]["name"][$i] . " загружен</p>";
        } else {
            echo "<p>Файл не был загружен!</p>";
        }
    } else {
        echo "<p>Файл не является изображением!</p>";
    }
}
