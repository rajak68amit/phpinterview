<?php
// group iteam on basis of age

$func = function($value) {
    return $value * 2;
};

print_r(array_map($func, range(1, 5)));

$people  = [
    'name'=>'John', 'age'=> 12,
    'name'=>'rohit', 'age'=>19,
    'name'=>'mohit', 'age'=> 22,
    'name'=>'lohan', 'age'=>29,
    'name'=>'reha', 'age'=> 30,
    'name'=>'kill', 'age'=> 24,
];

print_r($people);
/// /// 4. Count the number of vowels in a string.
function count_Vowels($string)
{
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}
print_r(count_Vowels('sampleInpUtO'));

//find sum array from target values

function t($arr){
    $t =9;
    $narra=[];
 }
//1 find frequency of element in array 
$a1=array("first", "second", "third","fourth","fifth","second","third");
$new_array=array_count_values($a1);
$array = "1,2,3,4,joe,1,2,3,joe,joe,4,5,1,6,7,8,9,joe";
$result = array_count_values(explode(',', $array)); 
arsort($result);
print_r($new_array);

// 3. Check if two strings are palindrome.
$two = "indian";
$one = "ndiani";

if(count_chars($one) == count_chars($two)){
    echo "true";
}
// 2 a
$ana = "madam";

if(strrev($ana) == $ana){
    echo "true";
} else {
    echo "false";
}
exit(0);
// find largest array value
$d = [1,2,3,22,11,21,12];

echo max($d);


?>