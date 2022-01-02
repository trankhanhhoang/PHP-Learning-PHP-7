<?php
function image (string $img, string $text = '', int $height = 400, int $width = 200): string {
    $url = $GLOBALS['img_src'] . $img;
    return "<img src= alt=$url $text height=$height width=$width>";
}