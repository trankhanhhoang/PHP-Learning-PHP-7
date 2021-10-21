<!doctype html>
<html>
<head>
    <title>Enter email</title>
    <meta charset="utf-8">
</head>
<body>
<?php
if ($_POST['email']){
    if (strcasecmp($_POST['email'], 'boss@ya.ru') == 0){
    print "Welcome back, OS President";
    } else {
       print "Unknown email";
    }
} else {
    print <<<HTMLBLOCK
        <form method="post" action="$_SERVER[PHP_SELF]">
            Enter your email: <input type="text" name="email"> <br />
            <button type="submit">Send e-mail</button>
        </form>
HTMLBLOCK;
}
i
?>
</body>
</html>