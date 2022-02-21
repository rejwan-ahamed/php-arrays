<?php

$sutdent = ["s1", "s2", "s3", "s4", "s5",];

echo "<br>";
echo "for showing the count of array size use count or size_of function <br>";
echo "<br>";

echo count($sutdent);

echo "<br>";

echo sizeof($sutdent);


echo "<br>";
echo "using count or size_of function in assosative array <br>";
echo "<br>";

$name = array("huck" => "20", "jack" => "50", "man" => "30");
echo count($name);


$food = 
    [
        "healthy food" => ["rice", "vegetables", "fruits"],
        "unhealthy food" => ["pizza", "burger", "fastfood"]
    ];

echo "<br>";
echo "using count or size_of function in multidimensional assosative array <br>";
echo "<br>";

echo sizeof($food);


echo "<br>";
echo "if we want to know total count of multidimensional assosative array <br>";
echo "<br>";

echo sizeof($food,1);

echo "<br>";

echo "<br>";
echo "if we want to know single key count of multidimensional assosative array <br>";
echo "<br>";

echo sizeof($food["healthy food"]);
