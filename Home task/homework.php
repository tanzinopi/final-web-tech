<?php

echo "<h2>PHP Built-in Functions</h2>";

$name = "Rakib";
echo "strlen(): " . strlen($name) . "<br>";

$text = "PHP is easy to learn";
echo "str_word_count(): " . str_word_count($text) . "<br>";

echo "str_contains(): ";
echo str_contains("I love PHP", "PHP") ? "True<br>" : "False<br>";

echo "strpos(): " . strpos("Hello PHP", "PHP") . "<br>";

echo "strtoupper(): " . strtoupper("hello world") . "<br>";

echo "strtolower(): " . strtolower("HELLO WORLD") . "<br>";

echo "str_replace(): " . str_replace("PHP", "Java", "I love PHP") . "<br>";

echo "strrev(): " . strrev("Hello") . "<br>";

echo "trim(): '" . trim("   Hello PHP   ") . "'<br>";

$fruits = "Apple,Banana,Mango";
echo "explode(): ";
print_r(explode(",", $fruits));
echo "<br>";

$colors = array("Red", "Green", "Blue");
echo "implode(): " . implode(", ", $colors) . "<br>";

echo "substr(): " . substr("Hello World", 0, 5) . "<br>";

$num = 25;
echo "is_int(): ";
echo is_int($num) ? "True<br>" : "False<br>";

$price = 25.50;
echo "is_float(): ";
echo is_float($price) ? "True<br>" : "False<br>";

$value = NAN;
echo "is_nan(): ";
echo is_nan($value) ? "True<br>" : "False<br>";

$value = "123";
echo "is_numeric(): ";
echo is_numeric($value) ? "True<br>" : "False<br>";

echo "round(): " . round(5.67) . "<br>";

define("COLLEGE", "My University");
echo "define(): " . COLLEGE . "<br>";

date_default_timezone_set("Asia/Dhaka");

echo "date(): " . date("Y-m-d") . "<br>";

$timestamp = strtotime("tomorrow");
echo "strtotime(): " . date("Y-m-d", $timestamp) . "<br>";

echo "time(): " . time() . "<br>";

echo "date_default_timezone_set(): " . date("Y-m-d H:i:s") . "<br>";

echo "date_default_timezone_get(): " . date_default_timezone_get() . "<br>";

include "include_file.php";
echo "<br>";

require "require_file.php";
echo "<br>";

$student = array(
    "name" => "Rakib",
    "age" => 22,
    "department" => "EEE"
);

$json = json_encode($student);
echo "json_encode(): " . $json . "<br>";

$data = json_decode($json);
echo "json_decode(): " . $data->name . "<br>";

$subjects = array("PHP", "HTML", "CSS");
echo "array(): ";
print_r($subjects);
echo "<br>";

$studentInfo = array(
    "name" => "Rakib",
    "age" => 22,
    "city" => "Dhaka"
);

echo "array_keys(): ";
print_r(array_keys($studentInfo));
echo "<br>";

$array1 = array("Apple", "Banana");
$array2 = array("Mango", "Orange");

echo "array_merge(): ";
print_r(array_merge($array1, $array2));
echo "<br>";

$animals = array("Cat", "Dog");
array_push($animals, "Cow");

echo "array_push(): ";
print_r($animals);
echo "<br>";

$numbers = array(1, 2, 3, 4, 5);

echo "array_reverse(): ";
print_r(array_reverse($numbers));
echo "<br>";

$items = array("Pen", "Book", "Bag");
echo "sizeof(): " . sizeof($items) . "<br>";

echo "count(): " . count($items) . "<br>";

$marks = array(70, 40, 90, 60, 80);
sort($marks);

echo "sort(): ";
print_r($marks);
echo "<br>";

?>