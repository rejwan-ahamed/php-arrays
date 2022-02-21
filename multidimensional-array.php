<?php

$emp = [
    [1, "Krishana", "Manager", 50000],
    [2, "Salman", "Salesman", 20000],
    [3, "Mohan", "Computer Operator", 12000],
    [4, "Amir", "Driver", 5000]
];

echo "<pre>";
print_r($emp);
echo "</pre>";

echo "<br>";
echo "if we want to print single value of multidimensional array  <br>";
echo "<br>";


echo $emp[0][0] . "<br>";
echo $emp[0][1] . "<br>";
echo $emp[0][2] . "<br>";
echo $emp[0][3] . "<br>";


echo "<br>";
echo "using nasted loop to print multidimensional array  <br>";
echo "<br>";

for ($r = 0; $r < 4; $r++) {
    for ($p = 0; $p < 4; $p++) {
        echo $emp[$r][$p] . " ";
    }
    echo "<br>";
}


echo "<br>";

for ($r = 0; $r < 4; $r++) {
    echo $emp[$r][$r];
}
echo "<br>";


echo "<br>";
echo "using for each loop to print multidimensional array  <br>";
echo "<br>";


foreach ($emp as $v1) {
    foreach ($v1 as $v2) {
        echo $v2 . " ";
    }
    echo "<br>";
}
