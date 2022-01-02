<?php
function color_hex(int $color1, int $color2, int $color3): string {
    return '#' .  dechex($color1) . dechex($color2) . dechex($color3);
}

print color_hex(100, 1, 55);