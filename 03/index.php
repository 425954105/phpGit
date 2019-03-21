<?php

$sex = 0; //代表男

if ($sex) {
    echo 'male';
} else {
    echo 'female';
}


$height = 210;


switch ($height) {
    case 160:
        echo '太矮了';
        break; //跳出本次判断，继续下一个判断

    case 170:
        echo '还行一般般';
        break;

    case 180:
        echo '非常标准';
        break;

    default:
        echo '太高了';
        break;
}

