<?php
// Пример 5.2. Вызов функции
function page_header()
{
    print '<html><head><title>Welcome to my site</title></head>';
    print '<body bgcolor="#ffffff">';
}

page_header();
print "Welcome, $user";
print '</body></html>';