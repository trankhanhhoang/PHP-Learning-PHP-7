<?php
$file = fopen("cities.csv", "a+t");

$cities = array();

while (!feof($file)){
    $str = fgetcsv($file, 1000, ";");
    $cities += array ($str[0] => array ($str[1], $str[2]));
}
fclose($file);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Население США</title>
    <meta charset="utf-8">
</head>
<body>
    <h4>В 2010 году население США составило:</h4>
    <table>
        <tr>
            <th>Город</th>
            <th>Штат</th>
            <th>Численность</th>
        </tr>
<?php 
    $size = 0;
    $state = array();
    foreach($cities as $k => $v){
        echo "<tr><td>$k</td><td>$v[0]</td><td>$v[1]</td></tr>\n";
        
        if ($v[0] !== ""){
            $state[$v[0]] += $v[1];
        }
        
        $size += $v[1];
    }

    foreach($state as $k => $v){
        echo "<tr><td>Штат</td><td>$k</td><td>$v</td></tr>\n";
    }

echo "<tr><th></th><th>Общая численность</th><th>$size</th></tr>";

?>
</table>
</body>    
</html>