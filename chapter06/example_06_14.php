<?php
// Пример 6.14. Определение класса в пространстве имен
namespace Tiny;

class Fruit {
    public static function munch($bite){
        print "Here is a tiny of $bite";
    }
}