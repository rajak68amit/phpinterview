<?php

//Check if a string contains only numbers.

$isnumber = 1234;
echo gettype($isnumber);

if (is_numeric($isnumber)) {
    echo "true";
} else {echo "false";}

exit();

// Convert a string to uppercase.

$upper = "amit";

echo strtoupper($upper);

exit();
// Convert a string to lowercase.
$lower = "AMIT";

echo strtolower($lower);

exit();
// Return the ASCII value of a character in a string.
$ask = "amitA";

$arr = str_split($ask);

$art = [];

foreach ($arr as $arritem) {
    array_push($art, ord($arritem));
}

print_r(implode(",", $art));

exit();

// Compare two strings.

$c1 = "raju";
$c2 = "raju";
// method 2
if ($c1 == $c2) {
    echo "string matched";
} else {echo "not matched";}
echo "\n";
//method 1
echo strcmp($c1, $c2);

// If this function returns 0, the two strings are equal.

exit();
// Convert a number to a string.
$num = 5;

echo gettype(strval($num));

exit();
// Convert a string to a number.

$num = "12345";

echo intval($num);

exit();
// Concatenate two strings.

$a = "amit";
$b = "rajak";

echo $a . " " . $b;

exit();
$str = "I love php, I love php too! php";

echo str_replace("php", "node", $str);
exit();
// Find the first occurrence of a substring in a string
echo strpos("I love php, I love php too!", "php");

// Convert a string to title case
exit();
$str = "amit rajak";

echo ucwords($str);

exit();
//  Remove all duplicate string from a string
$string = "raja amit raja amit";
$str = explode(" ", $string);
$result = [];

foreach ($str as $key => $v) {

    if (in_array($v, $result) == false) {

        array_push($result, $v);
    }
}

echo implode(" ", $result);

exit();
// Remove all duplicate characters from a string
$string = "raja amit raja amit";

$str = str_split($string);

$result = [];

foreach ($str as $key => $v) {

    if (in_array($v, $result) == false) {

        array_push($result, $v);
    }
}

echo implode("", $result); // raj mit
exit();
// Return the first non-repeated character in a string

$string = "teeter";
$str = str_split($string);
$arr = array_count_values($str);

/* Array
(
[t] => 2
[e] => 3
[r] => 2
)*/

foreach ($arr as $key => $v) {

    if ($v == 1) {

        echo "First non-repeated character is $key";
        break;

    }

}

//

exit();
// Check if a string is a palindrome
$india = "india";

$india1 = "india";

if (strlen($india) === strlen($india1)) {
    echo "true";
} else {echo "false";}

exit();

// find roman value and sum after convert roman to integer

// Reverse a string
$string = "rajak amit";

$arr = str_split($string);
echo strrev($string) . "\n"; // tima kajar

$rstring = "";
foreach (array_reverse($arr) as $arriteam) {
    $rstring .= $arriteam;
}

echo $rstring; // tima kajar

exit();
// Count the number of vowels in a string
$vowels = "aeiou";
$string = "amiteeamitrajakuuo";

$vol = str_split($vowels);
$arr = str_split($string);

$count = [];

foreach ($arr as $arriteam) {

    if (in_array($arriteam, $vol) == true) {
        @$count[$arriteam]++;
    }
}
print_r($count);
