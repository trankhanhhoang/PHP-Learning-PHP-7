<?php
// Пример 6.4. Вызов статического метода
require_once 'example_06_03.php';

$sizes = Entree::getSizes();
print implode(', ', $sizes);