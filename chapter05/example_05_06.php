<?php
// Пример 5.6. Объявление функции с двумя аргументами
function page_header4($color, $title){
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bgcolor="' . $color . '">';
}