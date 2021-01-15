<?php
$colors_array=[];
if (!file_exists('php-test-color.jpg.txt')) {
    require_once 'colors-array-create.php';
}
$colors_array = json_decode(file_get_contents('php-test-color.jpg.txt'));
$array = array_count_values($colors_array);
$count = max($array);
$rgb = array_search($count, $array);
$r = ($rgb >> 16) & 0xFF;
$g = ($rgb >> 8) & 0xFF;
$b = $rgb & 0xFF;
$hexCodeOfImage = '#' . dechex($r) . dechex($g) . dechex($b);
echo '<center> Цвет <strong>', $hexCodeOfImage, '</strong> встречается', $count, ' раз и является самым распространенным цветом на этом изображении</center>';