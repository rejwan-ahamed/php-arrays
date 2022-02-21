<?php

$marks = [
    "Krishna" => [
        "physics" => 85,
        "maths" => 78,
        "chemistry" => 89
    ],
    "Salman" => [
        "physics" => 68,
        "maths" => 73,
        "chemistry" => 79
    ],
    "Mohan" => [
        "physics" => 62,
        "maths" => 67,
        "chemistry" => 92
    ]
];


echo "<pre>";
print_r($marks);
echo "</pre>";

echo "<br>";


foreach ($marks as $key => $v1) {
    echo $key  ;
    foreach ($v1 as $v2) {
      echo $v2 . " ";
    }
    echo  "<br>";
}

