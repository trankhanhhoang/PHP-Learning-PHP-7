<?php
// Пример 6.15. Применение ключевого слова use
require_once 'example_06_14.php';
use Tiny\Fruit;

// Приведенная ниже строка кода равнозначна
// такой строке кода: \Tiny\Fruit::much();
Fruit::munch('orange');