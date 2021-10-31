<?php
$logged_in = false;
$new_message = true;
$emergency = true;

if ($logged_in) {
    // Следующая строка кода выполняется, если проверочное
    // условие $logged_in истинно
    print "Welcome aboard, trusted user.";
} elseif ($new_message) {
    // Следующая строка кода выполняется, если проверочное
    // условие $logged_in ложно, но проверочное условие
    // $new_message истинно
    print "Dear stranger, there are new messages.";
} elseif ($emergency) {
    // Следующая строка кода выполняется, если оба
    // проверочных условия  $logged_in и $new_message, ложны,
    // но проверочное условие $emergency истинно
    print "Stranger, there are no new message,
            but there is an emergency.";
}
