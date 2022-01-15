<?php
// Пример 7.30. Полноценная форма с отображением устанавливаемых по умолчанию значений,
// проверкой достоверности и обработкой переданных данных
require_once 'FormHelper.php';

// Установить массивы с вариантами выбора из списка, размечаемого дескриптором <select>.
// Следующие массивы требуются в фуекциях display_form(), validate_form() и process_form(),
// и поэтому они объявляются в глобальной области действия

$sweet = array('puff' => 'Sesame Seed Puff',
                'square' => 'Coconut Milk Gelatin Square',
                'cake' => 'Brown Sugar Cake',
                'ricemeat' => 'Sweet Rice and Meat');

$main_dishes = array('cuke' => 'Braised Sea Cucumber',
                    'stomach' => "Sauteed Pig's Stomach",
                    'tripe' => 'Sauteed Tripe with Wine Sauce',
                    'taro' => 'Stewed Pork with Taro',
                    'giblets' => 'Baked Giblets with Salt',
                    'abalone' => 'Abalone with Marrow and Duck Feet');
// Основная логика функуионирования страницы:
// - Если форма передана на обработку, проверить достоверность данных,
//   обработать их и снова отобразить форму.
// - Если форма не передана на обработку, отобразить ее снова
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Если функция validate_form() возвратит ошибки, передать их функции show_form()
    list($errors, $input) = validate_form();
    if ($errors) {
        show_form($errors);
    } else {
        // Переданные данные из формы достоверны, обработать их
        process_form($input);
    }
} else {
    // Данные из формы не переданы, отобразить ее снова
    show_form();
}

function show_form($errors = array()) {
    $defaults = array('delivery' => 'yes',
                    'size' => 'medium');
    // Создать объект $form с надлежащими свойствами по умолчанию
    $form = new FormHelper($defaults);

    // Ради ясности весь код HTML-разметки и отображения формы вынесен в отдельный файл
    include 'complete-form.php';
}

function validate_form(){

}

function process_form($input) {

}