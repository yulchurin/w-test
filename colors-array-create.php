<?php
$img = imagecreatefromjpeg('php-test-colors.jpg');
if (!file_exists('php-test-color.jpg.txt')) {
    $array_file = fopen('php-test-color.jpg.txt', 'w');
    $img_x = imagesx($img);
    $img_y = imagesy($img);

    $colorsArray = [];

    $y = 0;
    while ($y < $img_y) {
        $x = 0;
        while ($x < $img_x) {
            $color = imagecolorat($img, $x, $y);
            array_push($colorsArray, $color);
            $x++;
        }
        $y++;
    }

    fwrite($array_file, json_encode($colorsArray));
    fclose($array_file);
}