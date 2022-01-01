<?php
// Пример 5.5. Указание значения аргумента функции,
//              устанавливаемого по умолчанию
function page_header3($color = 'cc3399'){
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="' . $color . '">';
}