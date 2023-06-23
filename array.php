<?php

$ar  = [0,1,12,7,2];



/* ulta sidha ek saman */

/* 

Table: Employee
    id name salary
    1  abc   5600
    2  abc   8000    3  abc   9000
    4  abc   9100
    5  abc   9100
    6  abc   9000
    7  abc   8800
    8  abc   9100
    9  abc   6000
    10 abc   7000
 
    -- Find second highest salary via Mysql Query (except the GROUP BY)

    select max(salary) from Employee where salary < select max(salary) from Employee

id, name,    email,        joinning_date,    created
1, Kavi, kjoshi@gmail.com, "2022-09-12", "2022-05-10"
2, Kavi, abcdet@gmail.com, "2022-08-10", "2022-05-10"
3, Kavi, grtyry@gmail.com, "2022-12-09", "2022-05-10"
4, Kavi, kjoshi@gmail.com, "2022-08-02", "2022-05-10"
5, Kavi, kjoshi@gmail.com, "2022-07-12", "2022-05-10"
6, Kavi, rtrttt@gmail.com, "2022-06-21", "2022-05-10"
7, Kavi, kjoshi@gmail.com, "2022-10-10", "2022-05-10"
8, Kavi, kjoshi@gmail.com, "2022-01-10", "2022-05-10"
9, Kavi, rtrgrr@gmail.com, "2022-02-10", "2022-05-10"
10,Kavi, kjoshi@gmai.com, "2022-11-10", "2022-05-10"

Q = Find the students who joined a given date to 30 days before and 30 days after. */

exit(0);
$x = 5;
echo $x;
echo "<br />";
echo $x+++$x++; 
//$x++;
echo "<br />";
echo $x;
echo "<br />";
echo $x---$x--;
echo "<br />";
echo $x;

/* a */

exit(0);
/* Array pop removes and returns the value of the last element of an array. */
$poparray = array("a","b","c","d","e","f");

array_pop($poparray); // it will return the last element

print_r($poparray); ///it will return the after remove last element


/* 1 write code in php for accending and unique */
$data = [10,1,2,3,4,5,4,3,10,4,5];

$unique = array_unique($data);

sort($unique);

print_r($unique);
// print_r($data);

// 14 Compare two strings

$rt = "amit";
$rt1 = "amit";
//echo strcmp($rt,$rt1);

if (strcmp($rt, $rt1) !== 0) {
    echo 'Both strings are not equal';
} else {
    echo 'Both strings are equal';
}

exit();
//13 Convert a number to a string
$ntos = 1234;

echo gettype(strval($ntos));

exit();
//12 Convert a string to a number
$str = "1234";

echo (int) $str;
echo gettype((int) $str); //integer

exit();
//11 Concatenate two strings

$s1 = 'amit';
$s2 = "rajak";

echo $s1. ' ' .$s2;

exit();
//10 Find the first occurrence of a substring in a string

//9 Remove all spaces from a string
$str = "tHe iPad hAS gONE ouT of STOCK PoWER uP YOur iPhone wHAT moDEL is YOUR aPPLE iPHOne";

echo ucwords(strtolower($str));

exit();
$rt = "amit rajak llkl";
//$string = str_replace(' ', '', $rt); //amitrajakllkl
$string = preg_replace('/\s+/', '', $rt); // amitrajakllkl

echo $string;

exit();
// 8 Find the longest word in a string

$string = "Where did the big Elephant go?";
$words = explode(' ', $string);
$longestWordLength = 0;
$longestWord = '';

foreach ($words as $word) {
    if (strlen($word) > $longestWordLength) {
        $longestWordLength = strlen($word);
        $longestWord = $word;
    }
}

echo $longestWord;

exit();
$string = "Where did the big Elephant go?";

usort($words, function ($a, $b) {
    return strlen($b) - strlen($a);
});

$longest = $words[0];

echo $longest;

exit();
// 7 Convert a string to title case
$str = "amit rajak";
//method 1
echo ucwords($str);
exit();
// 6 Remove all duplicate characters from a string
$str = "rajmakarmkitajak";
// "1AAABBCCCDDDDDDD"
echo count_chars($str, 3); // aijkmrt

//$uniqueStr = implode(',', array_unique(explode(',', $str)));

//echo $uniqueStr; // output: 'foo,bar,baz'
$size = str_split($str);

exit();

//5 Return the first non-repeated character in a string
$str = "studentduniya";
$strsize = str_split($str);
$string = [];

foreach ($strsize as $strsizeiteam) {

    $string[$strsizeiteam]++;
}

print_r($string);
exit();

// 4 Count the number of vowels in a string

$v = 'aeiou';
$string = "amitueoop";
$count = 0;

$strar = str_split($string);
$vs = str_split($v);

for ($i = 0; $i < sizeof($strar); $i++) {
    for ($k = 0; $k < sizeof($vs); $k++) {

        if ($strar[$i] === $vs[$k]) {
            $count++;
        }
    }
}
echo $count; // 6

exit();

// 3 Check if two strings are anagrams

$m = "madam";

if ($m == strrev($m)) {
    echo "palindrome";
} else {
    echo "not palindrome";
} //out put palindrome

// 2 Check if a string is a palindrome
$two = "indian";
$one = "ndiani";

if (count_chars($one) === count_chars($two)) {
    echo true;
} else {echo "false";} // out true =1

exit();
/// 1 Reverse a string in
$string = "rajak amit";

// method 1
echo strrev($string) . "\n"; //tima kajar

$string = "amit Rajak";

$arr = str_split($string);

$nam = '';
$length = sizeof($arr);
for ($arr1 = ($length - 1); $arr1 >= 0; $arr1--) {

    $nam .= $arr[$arr1];

}
echo $nam; // out put kajaR tima
// $arr  = array_reverse(str_split($string));

// print_r($arr);
//print_r(join(" ",$arr);
