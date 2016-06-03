<?php
// Zapisuje do tablicy $items wszystkie podane argumenty
    function addItemsToBasket(...$items) {

        var_dump($items);
    }


    addItemsToBasket("Hello0", 12, 2.3,"Hi");


// Zapisuje $item=1 , $item2=3,$item3=5
    function addItemsToBasket2($item,$item2,$item3) {


    }


    addItemsToBasket2(...[1,3,5]);

 ?>
