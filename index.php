<?php

    declare(strict_types = 1);
    function policz(float $price, float $shipping): float {

        return $price + $shipping;

    }

    $caltTotal= policz(1.23,  4.56);
    var_dump($caltTotal);
 ?>
