<html>
<head><title>Your zip code</title></head>
<body>
<?php
if ($_POST['zipcode']) {
    // Переменная $_POST['zipcode'] содержит значение параметра
    // "zipcode" из переменной на обработку формы
    $zipcode = trim($_POST['zipcode']);
    // А теперь это значение с удаленными начальными и конечными
    // пробеллами содержит переменная $zipcode
    $zip_length = strlen($zipcode);
    // выдать предупреждение, если  указан почтовый индекс
    // длиной меньше 5 символов
    if ($zip_length != 5) {
        echo "Please enter a zip code that is 5 characters long.";
    } else {
        echo "zip code verified";
    }
} else {
    echo <<<HTMLBLOCK
        <form method="post" action="$_SERVER[PHP_SELF]">
        Your zip code: <input type="text" name="zipcode" />
        <br/>
        <button type="submit">Send zip code</button>
        </form>
    HTMLBLOCK;
}
?>
</body>
</html>