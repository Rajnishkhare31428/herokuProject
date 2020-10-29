<?php
    trait myTrait {
        static function sayHello(string $str) {
            echo "Hello $str";
        }

    }
    class myClass {
        use myTrait;
        function __construct() {
            echo 'myClass object created';
            myTrait::sayHello('Rajnish');
        }
    }
    $var = new myClass();
?>