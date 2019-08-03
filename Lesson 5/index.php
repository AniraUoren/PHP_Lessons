<?php

require ("db.php");

usort($galleryArray, function ($el1, $el2){
    if ($el1["views"] == $el2["views"]){
        return 0;
    } else {
        return ($el1["views"] < $el2["views"]) ? 1 : -1;
    }
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrap">
    <header class="header"><h1>header</h1></header>
    <main class="main">
        <h1>Gallery</h1>
        <div class="gallery" id="gallery">
            <?php foreach ($galleryArray as $image):?>
                <div class="small-image">
                    <img src="<?= $image['adress'];?>" alt="<?=$image['name']?>" class="small-image_img">
                    <p>Просмотров: <?=$image['views']?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <form action="#" class="upload_form">
            <input type="file">
            <button type="submit">Upload!</button>
        </form>
    </main>
    <footer class="footer"><h3>footer</h3></footer>
</div>

<!--    modal-->
<div class="modal hidden" id="modal">
    <i class="fa fa-arrow-left btn-left" aria-hidden="true"></i>
    <i class="fa fa-arrow-right btn-right" aria-hidden="true"></i>
    <img src="img/panda3.jpg" alt="" class="big-image_img">
    <button class="btn-close"><i class="fa fa-times close" aria-hidden="true"></i></button>
</div>
<script src="js/script.js"></script>
</body>
</html>
