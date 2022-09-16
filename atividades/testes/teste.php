<?php
    $num = 1 + "10.4";
    $b = 1 + "-1.3e3";
    echo $num;
    echo '<br>';
    echo $b;
    echo '<br>';

    $a = [
        12,
        45,
        "nome" => "Eduardo",
        "tam" => "45.65"
    ];

    $matriz = [
        [12, 1, 4],
        [18, 45, 5],
        [2, 4, 6]
    ];

    for ($i=0; $i < count($matriz); $i++) { 
        for ($j=0; $j < count($matriz[$i]); $j++) { 
            echo $matriz[$i][$j] . ' ';
        }
        echo '<br>';
    }
   
    echo '<br>';
    
    foreach ($a as $key => $value) {
        echo "$key: $value<br>";
    }

    echo '<br>';

    foreach($a as $value) {
        echo "$value<br>";
    }
?>