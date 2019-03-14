<?php
echo "<h1>Hello World</h1>";
$arr = ["key"=>"value","key1"=>"value2"];
$arr2 = ["value","value1"];
var_dump($arr);
echo '<br>';
var_dump($arr2);
echo '<br>';
echo '<br>';
foreach($arr as $key=>$value){
    echo $key.'=======>'.$value.'<br>';
}
