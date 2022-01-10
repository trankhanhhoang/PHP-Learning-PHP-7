<?php
// Пример 7.8. Отображение сообщений об ошибках вместе с формой
// Логика выполнения верных действий на основании метода запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Если функция validate_form() возвратит ошибки, передать их функции show_form()
    if ($form_errors = validate_form()){
        show_form($form_errors);
    } else {
        process_form();
    }
} else {
    show_form();
}

// Сделать что-нибудь, когда форма передана на обработку
function process_form(){
    print 'Hello, ' . $_POST['my_name'];
}

// отобразить форму
function show_form($errors = null) {
    // Если переданы ошибки, вывести их на экран
    if ($errors){
        print 'Please correct these errors: <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }

    print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="my_name">
<br />
<input type="submit" value="Say Hello">
</form>
_HTML_;

}

// Проверить данные формы
function validate_form(){
    // нечать с пустого массива ошибок
    $errors = array();

    // добавить сообщение об ошибке, если введено слишком короткое имя
    if (strlen($_POST['my_name']) < 3){
        $errors[] = 'Ваше имя должно содержать минимум 3 символа';
    }

    // возвратить (возможно, пустой) массив сообщений об ошибках
    return $errors;
}