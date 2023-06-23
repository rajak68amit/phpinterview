






<!--

string question

array question

lougical question

laravel question

database quesry question

 -->
<?php

$count = 0;
$vowel = ["a", "e", "i", "o", "u"];

$char = array_unique(["a", "e", "i", "o", "u", "b", "c", "d", "f", "g", "h", "i", "o", "u"]);

for ($i = 0; $i < count($char); $i++) {

    for ($j = 0; $j < count($vowel); $j++) {
        if ($char[$i] == $vowel[$j]) {
            $count++;
        }
    }

}

echo $count;

exit();
$arr = [12, 3, 4, 6, 7, 8];
unset($arr[array_search(12, $arr)]);
print_r($arr);

exit();

//3  array sum
$arr = [12, 3, 4, 6, 7, 8];

echo array_sum($arr);

exit();
//2  Find the smallest number in an array of numbers.
$arr = [12, 3, 4, 6, 7, 8];

sort($arr);

print_r($arr[0]);

// 1 Find the largest number in an array of numbers.
$arr = [12, 3, 4, 6, 7, 8];

rsort($arr);

print_r($arr[0]);

$name = 'amit rajak';

for ($i = strlen($name) - 1; $i >= 0; $i--) {
    echo $name[$i];
}


exit();

$list = [10, 20, 30];

$results = array_map(function ($element) {

    return $element * 2;
    
}, $list);

print_r($results);

exit(0);

$multiply = function ($x, $y) {
    return $x * $y;
};

echo $multiply(10, 20);