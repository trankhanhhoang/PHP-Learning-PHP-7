<!-- Пример 2.1. Встраиваемый документ-->
<?php
echo <<<HTMLBLOCK
<html>
<head><title>Menu</title></head>
<body bgcolor="#fffed9">
<h1>Dinner</h1>
<ul>
    <li>Beef Chow-Fun</li>
    <li>Sauteed Pea Shoots</li>
    <li>Soy Sauce Noodles</li>
</ul>
</body>
</html>
HTMLBLOCK;