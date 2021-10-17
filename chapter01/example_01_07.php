<?php
// использовать базу данных из файла 'dinner.db'
$db = new PDO ('sqlite:dinner.db');
// определить какие блюда имеются
$meals = array ('breakfast', 'lunch', 'dinner');
// проверить, содержит ли параметр "meal" переданной
// на обработку формы одно из строковых значений
// "breakfast", "lunch" или "dinner"
if (in_array($_POST['meal'], $meals)) {
    // Если данный параметр содержир указанное значение,
    // получить все блюда для указанной трапезы
    $stmt = $db->prepare('select dish, price from meals
                                    where meal like ?');
    $stmt->execute(array($_POST['meal']));
    $rows = $stmt->fetchAll();
    // Если блюда в базе данных не обнаружены, сообщить об этом
    if (count($rows) == 0){
        print "No dishes available.";
    } else {
        // вывести на экран каждое блюдо и цену на него
        // в отдельной строке HTML-таблицы
        print '<table><tr><th>Dish</th><th>Price</th></tr>';
        foreach ($rows as $row){
            print "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
        }
        print "</table";
    }
    } else {
    // Это сообщение выводится на экран в том случае,
    // если параметр "meal" переданной на обработку формы
    // не содержит ни одно из строковых значений
    // "breakfast", "lunch" или "dinner"
    print "Unknown meal.";
}
