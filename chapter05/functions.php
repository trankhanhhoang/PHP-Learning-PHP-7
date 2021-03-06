<?php
$path = "/images/";
function img ($src, $alt = "", $height = "", $width = ""){
    return "<img src=\"{$GLOBALS['path']}$src\" alt=\"$alt\" height=\"$height\" width=\"$width\"/>";
}
?>