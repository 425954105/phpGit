<?php
echo "<h1>Hello World</h1>"; //输出

$arr = ["key" => "value", "key1" => "value2"]; //键值对数组
$arr2 = ["value", "value1"]; //值对值数组

var_dump($arr);
echo '<br>';
var_dump($arr2);
echo '<br>';
echo '<br>';
foreach ($arr as $key => $value) {
    echo $key . '=======>' . $value . '<br>';
}
