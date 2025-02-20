<?php
class Calculadora {
    public static function multiplicar($a, $b) {
        return $a * $b;
    }
}

echo Calculadora::multiplicar(4, 5);
?>