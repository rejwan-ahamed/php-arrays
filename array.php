<?php

echo "first way to wright array <br>";
echo "<br>";

$t = array("test1", "test2", "test3");

echo $t[0] . "<br>";
echo $t[1] . "<br>";
echo $t[2] . "<br>";

echo "<br>";
echo "second way to wright array <br>";
echo "<br>";

$r = ["test10", "test20", "test30"];

echo $r[0] . "<br>";
echo $r[1] . "<br>";
echo $r[2] . "<br>";

echo "<br>";
echo "for loop in array <br>";
echo "<br>";

for ($i = 0; $i < 3; $i++) {
    echo $r[$i] . "<br>";
}


echo "<br>";
echo "print_r function use for print whole array <br>";
echo "<br>";

print_r($r);
echo "<br>";

echo "<pre>";
print_r($r);
echo "</pre>";





// Associative Array

echo "first way to wright associative array <br>";
echo "<br>";

$name = array("huck" => "20", "jack" => "50", "man" => "30");

echo $name["huck"] . "<br>";
echo $name["jack"] . "<br>";
echo $name["man"] . "<br>";



echo "<br>";
echo "second way to wright associative array <br>";
echo "<br>";

$name1 = ["huck1" => "120", "jack1" => 2.3, "man1" => 301];

echo $name1["huck1"] . "<br>";
echo $name1["jack1"] . "<br>";
echo $name1["man1"] . "<br>";


echo "<br>";
echo "using print_r function in associative array  <br>";
echo "<br>";


echo "<pre>";
print_r($name1);
echo "</pre>";


echo "<br>";
echo "if we wan to see the key amd value type in associative array we use var_dump function  <br>";
echo "<br>";

echo "<pre>";
var_dump($name1);
echo "</pre>";



echo "<br>";
echo "changing key value in associative array  <br>";



$age = ["huck" => "20", "jack" => 40, "man" => 30];

echo "<pre>";
print_r($age);
echo "</pre>";

echo "<br>";

$age["jack"] = 51;


echo "<pre>";
print_r($age);
echo "</pre>";


// for each loop

echo "<br>";
echo "using for each loop in array  <br>";
echo "<br>";

$name = array("test1", "test2", "test3");


foreach ($name as $name2) {
    echo $name2 . "<br>";
}


$name3 = array("huck" => "20", "jack" => "50", "man" => "30");


echo "<br>";

foreach ($name3 as $name4) {
    echo $name4 . "<br>";
}


echo "<br>";

foreach ($name3 as $key => $name4) {
    echo $key ." = " .$name4 . "<br>";
}





