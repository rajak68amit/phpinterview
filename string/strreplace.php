<?php

/* 
1. str_replace()
2. str_ireplace()
3. substr_replace()
4. strstr()
*/
$strtr = "Hello world. The world is nice";

$strtrarray = ["Hello" => "Hi", "world" => "earth"];

echo strtr($strtr, $strtrarray);


exit();

$a = "i love php, i love php too";

//echo str_replace("php","amit",$a); //(case in sensitive) // i love amit, i love amit too

//echo str_ireplace("PHP","amit",$a); //(case sensitive) // i love amit, i love amit too


$b = "Hello world. The world is nice";

$find = ["Hello","world"];
$replace = ["amit","rajak"];

//echo str_replace($find,$replace,$b); // amit rajak. The rajak is nice


$color = ["blue","red","green","yellow"];

print_r(str_replace("red","pink",$color)); // Array ( [0] => blue [1] => pink [2] => green [3] => yellow )

//substr_replace();

$strtr  = "Hello world. The world is nice";

$strtrarray = ["Hello"=>"Hi","World"=>"earth"];

echo strtr($strtr,$strtrarray);