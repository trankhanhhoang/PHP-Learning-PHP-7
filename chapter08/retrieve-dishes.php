<?php
// Пример 8.53. Программа для поиска записей в таблице dishes
// загрузить вспомогательный класс для составления форм
require 'FormHelper.php';

// подключиться к базе данных
try {
    $db = new PDO('mysql:host=localhost:33060;dbname=test'
                    , 'root', '12345');
} catch (PDOException $e){
    print "Can't connect: " . $e->getMessage();
    exit;
}
// установить исключения при ошибках в базе данных
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// установить режим извлечения строк таблицы в виде объектов
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// задатьварианты выбора из списка формы, определяющие наличие специй в блюде
$spicy_choices = array('Нет', 'Да', 'Любой');

// Основная логика фукционирования страницы:
// - Если форма передана на обработку, проверить достоверность данных,
//   обработать их и снова отобразить форму.
// - Если форма не передана на обработку, отобразить ее снова
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Если функция validate_form() возвращает ошибки,
    // передать их функции show_form()
    list($errors, $input) = validate_form();
    if ($errors){
        show_form($errors);
    } else {
        // Переданные данные из формы достоверны, обработать их
        process_form($input);
    }
} else {
    // Данные из формы не переданы, отобразить ее снова
    show_form();
}

function show_form($errors = array()){
    // установить свои значения по умолчанию:
    // цена состовляет 5 долларов США
    $defaults = array('min_price' => '5.00'
                        ,'max_price' => '25.00');

    // создать объект $form с надлежащими свойствами по умолчанию
    $form = new FormHelper($defaults);

    // Ради ясности весь код HTML-разметки
    // и отображения формы вынесен в отдельный файл
    include 'retrieve-form.php';
}

function validate_form(){
    $input = array();
    $errors = array();

    // обязательное наименование блюда
    // удалить любые начальные и конечные пробелы
    // из переданного на обработку наименования блюда
    $input['dish_name'] = trim($_POST['dish_name'] ?? '');
    if (! strlen($input['dish_name'])) {
        $errors[] = 'Введите название блюда';
    }

    // минимальная цена на блюдо должна быть
    // достоверным положительным числом с плавающей точкой
    $input['min_price'] = filter_input(INPUT_POST, 'min_price'
                                        , FILTER_VALIDATE_FLOAT);
    if ($input['min_price'] === null
                || $input['min_price'] === false
                //||$input['min_price'] >= 0
                ){
        $errors[] = 'Минимальная цена на блюдо должна быть положительным числом с плавающей точкой.';
    }

    // максимальная цена на блюдо должна быть
    // достоверным положительным числом с плавающей точкой
    $input['max_price'] = filter_input(INPUT_POST, 'max_price'
                                        , FILTER_VALIDATE_FLOAT);
    if ($input['max_price'] === null
            || $input['max_price'] === false
            // || $input['max_price'] >= 0*/
            ){
        $errors[] = 'Максимальная цена на блюдо должна быть положительным числом с плавающей точкой.';
    }

    // минимальная цена на блюдо должна быть
    // меньше максимальной цены
    if ($input['min_price'] >= $input['max_price']) {
        $errors[] = 'Минимальная цена на блюдо должна быть меньше максимальной цены.';
    }

    // по умолчанию в элементе ввода is_spicy устанавливается значение 'no'
    $input['is_spicy'] = $_POST['is_spicy'] ?? 'no';
    if (! array_key_exists($input['is_spicy'],
                            $GLOBALS['spicy_choices'])){
        $errors[] = 'Выберите опцию "spicy".';
    }

    return array($errors, $input);
}

function process_form($input){
    // получить в этой функции доступ к глобальной переменной $db
    global $db;

    // составить запрос к базе данных
    $sql = 'SELECT dish_name, price, is_spicy FROM dishes
                WHERE price>= ? AND price <= ?';

    // если наименование блюда передано, ввести его в
    // предложение where. С помощью метода quote() и
    // функции strtr() предотвращается действие вводимых
    // пользователем подстановочных символов
    if (strlen($input['dish_name'])) {
        $dish = $db->quote($input['dish_name']);
        $dish = strtr($dish, array('_' => '\_', '%' => '\%'));
        $sql .= " AND dish_name LIKE $dish";
    }

    // если в элементе ввода is_spicy установлено значение
    // 'yes' или 'no', ввести в запрос SQL соответствующее
    // логическое условие. (Если же установлено значение "either",
    // вводить логическое условие в предложение where не нужно.)
    $spicy_choice = $GLOBALS['spicy_choices'][$input['is_spicy']];
    if ($spicy_choice == 'yes') {
        $sql .= ' AND is_spicy = 1';
    } elseif ($spicy_choice == 'no') {
        $sql .= ' AND is_spicy = 0';
    }

    // отправить запрос программе базы данных и получить
    // в ответ все нужные строки из таблицы
    $stmt = $db->prepare($sql);
    $stmt->execute(array($input['min_price'], $input['max_price']));
    $dishes = $stmt->fetchAll();
    if (count ($dishes) === 0) {
        print 'No dishes matched.';
    } else {
        print '<table>';
        print '<tr><th>Блюдо</th><th>Цена</th><th>Острое?</th></tr>';
        foreach ($dishes as $dish) {
            if ($dish->is_spicy == 1){
                $spicy = 'Yes';
            } else {
                $spicy = 'No';
            }
            printf('<tr><td>%s</td><td>$%.02f</td><td>%s</td></tr>',
                            htmlentities($dish->dish_name),
                            $dish->price, $spicy);
        }
    }
}