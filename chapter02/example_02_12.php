<?php
$comments = 'This string for extracting text: Ya-Ya-Ya';

// Извлечь первые 30 байтов из строкового значения
// переменной $comments
print substr($comments, 0, 30);
// Добавить многоточие
print '...';