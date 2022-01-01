<?php
// Пример 5.7. Вызов функции с двумя аргументами
function page_header4($color, $title){
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bgcolor="' . $color . '">';
}

page_header4('66cc66', 'my homepage');