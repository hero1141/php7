<?php

//Bez dekraracji strict_types
// Przyjmuje wartości konwertuje na float , zwraca int (wow)
function policz(float $price, float $shipping): int {

    return $price + $shipping;

}

$caltTotal= policz('1,23',  4.56);
var_dump($caltTotal);



// Deklaracja strict_types
// Musi przyjąc floata i zwrocic floata nie obsluguje konwersji typow danych
    declare(strict_types = 1);
    function policz2(float $price, float $shipping): float {

        return $price + $shipping;

    }

    $caltTotal= policz2(1.23,  4.56);
    var_dump($caltTotal);
 ?>
