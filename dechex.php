<?php
function toHexColor($red, $green, $blue){
    return '#' . dechex($red) . dechex($green) . dechex($blue);
}

echo toHexColor(255,255,255);