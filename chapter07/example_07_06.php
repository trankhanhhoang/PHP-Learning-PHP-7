<?php
// Пример 7.6. Отображение приветствия "Hello" на странице с применением функций
// Логика выполнения верных действий на основании метода запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    process_form();
} else {
    show_form();
}

// Сделать что-нибудь, когда форма передана на обработку
function process_form(){
    print "Hello, " . $_POST['my_name'];
}

// Отобразить форму
function show_form(){
    print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="my_name"><br />
<input type="submit" name="Say Hello">
</form>
_HTML_;

}