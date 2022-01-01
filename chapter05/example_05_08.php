<?php
// Пример 5.8. Объявление функций с несколькими необязательными аргументами

// Объявление функции с одним не обязательным аргументом,
// который должен быть указан последним
function page_header5($color, $title, $header = 'Welcome'){
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
    print "<h1>$header</h1>\n";
}
// Допустимые способы вызова данной функции
page_header5('66cc99', 'my wonderful page');
    // В этом вызове используется значение аргумента $header
    // устанавливаемое по умолчанию
page_header5('66cc99', 'my wonderful page', 'This page is great!');
    // В этом вызове значение по умолчанию не используется

// Объявление функции с двумя не обязательными аргументами,
// которые должны быть указаны последними
function page_header6($color, $title = 'the page', $header = 'Welcome'){
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
    print "<h1>$header</h1>\n";
}
// Допустимые способы вызова данной функции
page_header6('66cc99'); // В этом вызове используются значения
    // аргументов $title и $header, устанавливаемые по умолчанию
page_header6('66cc99', 'my wonderful page'); // В этом вызове используются значения
    // аргумента $header, устанавливаемое по умолчанию
page_header6('66cc99', 'my wonderful page', 'This page is great!');
    // В этом вызове значение по умолчанию не используется

// В примере еще есть функция с 3 необязательными параметрами - поленился набирать