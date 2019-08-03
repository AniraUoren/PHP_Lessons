<?php

$dbConnect = mysqli_connect("localhost", "root", "", "GB");

$gallery = mysqli_query($dbConnect,"SELECT * FROM gallery");

$galleryArray = [];

while ($row = mysqli_fetch_assoc($gallery)){
    $galleryArray[] = $row;
}

mysqli_close($dbConnect);

