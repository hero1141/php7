<?php


    // PHP 5.x

    if(isset($_GET['name'])) {

        $name = $_GET['name'];
    }
    else {

        $name = '(unknown)';
    }

echo htmlspecialchars($name);


    //PHP 5.x Error Undefined index name

    $name = $_GET['name'] ?: '(unknown)';
    echo htmlspecialchars($name);


    //New PHP 7.x Without Error - Good Job - "Null coalesce"
    $name = $_GET['name'] ?? '(unknown)';
    echo htmlspecialchars($name).'<br>';


    //spaceshift (Sprawdza ktora z wartosci jest wieksza)

    $x = 3;
    $y = 2;

    echo $x<=>$y;

    //Returns 1



    $x = 3;
    $y = 4;

    echo $x<=>$y;

    //Returns -1


    $x = 3;
    $y = 3;

    echo $x<=>$y;

    //Returns 0

    echo '<br>';


    //Sortowanie Liczb za pomocą usort i spaceshift
    $orderNumbers = [3,6,9,23,5,2];

    usort($orderNumbers, function($p1,$p2)  {
        return $p1 <=> $p2;

    });

    var_dump($orderNumbers);



 ?>
