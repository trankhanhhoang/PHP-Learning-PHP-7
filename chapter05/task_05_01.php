<?php
function image (string $url, string $text = '', int $height = 400, int $width = 200): string {
    return "<img src=$url alt=$text height=$height width=$width>";
}

print image('/src/index.jpg') . "\n";
print image('/src/index.jpg', 'alt text') . "\n";
print image('/src/index.jpg', 'alt text', 800, 600) . "\n";