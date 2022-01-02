<?php
require_once 'task_05_02.php';

$img_src = '/images/';
print image('index.jpg') . "\n";
print image('index.jpg', 'alt text') . "\n";
print image('index.jpg', 'alt text', 800, 600) . "\n";